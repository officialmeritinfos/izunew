<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendInvestmentNotification;
use App\Models\GeneralSetting;
use App\Models\Investment;
use App\Models\InvestmentReturn;
use App\Models\ReturnType;
use App\Models\User;
use App\Notifications\InvestmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Investments extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'investments'=>Investment::get(),
            'pageName'=>'Investment Lists',
            'siteName'=>$web->name
        ];

        return view('admin.investments',$dataView);
    }
    public function investmentDetails($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::find(1);

        $investment = Investment::findOrFail($id);
        $dataView = [
            'user'=>$user,
            'web'=>$web,
            'pageName'=>'Investment Detail',
            'siteName'=>$web->name,
            'investment'=>$investment,
        ];
        return view('admin.investment_detail',$dataView);
    }

    public function startInvestment($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::find(1);

        $investment = Investment::where('id',$id)->first();

        $investor = User::where('id',$investment->user)->first();

        $currentReturn = $investment->currentReturn;
        $numberOfReturn = $investment->numberOfReturns;

        $currentProfit = $investment->currentProfit;
        $profitToAdd = $investment->profitPerReturn;

        $returnTypes = ReturnType::where('id',$investment->returnType)->first();
        $returnType = $returnTypes->duration;

        $dataReturns = [
            'amount'=>$profitToAdd,
            'investment'=>$investment->id,
            'user'=>$investment->user
        ];

        $instantCurrentReturn = $currentReturn+1;
        $newProfit = $currentProfit+$profitToAdd;

        $dataInvestment = [
            'currentProfit'=> $newProfit,
            'currentReturn'=>$instantCurrentReturn,
            'nextReturn'=>strtotime($returnType,time()),
        ];

        $update = Investment::where('id',$investment->id)->update($dataInvestment);
        if ($update){

            InvestmentReturn::create($dataReturns);
            $dataUser = [
                'profit'=>$investor->profit+$profitToAdd
            ];

            User::where('id',$investor->id)->update($dataUser);

            $userMessage = "
                                Your Investment with reference Id is <b>".$investment->reference."</b> has returned
                                <b>$".$profitToAdd."</b> to your account.
                            ";
            $user->notify(new InvestmentMail($user,$userMessage,'Investment Return'));
        }

        return back()->with('success','Today Profit Added.');
    }

    public function cancel($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::find(1);

        $investment = Investment::where('id',$id)->first();

        $investment->status = 3;

        $investment->save();

        return back()->with('warning','Investment Cancelled');
    }

    public function completeInvestment($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::find(1);

        $investment = Investment::where('id',$id)->first();

        $investor = User::where('id',$investment->user)->first();

        $profit = $investment->amount+($investment->profitPerReturn*$investment->numberOfReturns);

        $dateInvestment = [
            'status'=>1,
        ];



        $update = Investment::where('id',$id)->update($dateInvestment);
        if ($update) {

            //send a mail to investor
            $userMessage = "
                Your Investment with reference Id is <b>" . $investment->reference . "</b> has completed
                and the earned returns added to your profit account.
            ";
            //send mail to user
            //SendInvestmentNotification::dispatch($investor, $userMessage, 'Investment Completion');

            $investor->notify(new InvestmentMail($investor, $userMessage, 'Investment Completion'));

            $admin = User::where('is_admin', 1)->first();
            //send mail to Admin
            if (!empty($admin)) {
                $adminMessage = "
                  An investment started by the investor <b>" . $investor->name . "</b> with reference
                  <b>" . $investment->reference . "</b> has completed and returns credited to profit balance.
                ";
                //SendInvestmentNotification::dispatch($admin, $adminMessage, 'Investment completion');

                $admin->notify(new InvestmentMail($admin, $userMessage, 'Investment Completion'));
            }
            return back()->with('success', 'Investment completed');
        }
        return back()->with('success', 'Investment completed');
    }
}
