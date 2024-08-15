@extends('home.innerBase')
@section('content')
    @push('css')
        <style>
            .single-price {
                text-align: center;
                background: #262626;
                transition: .7s;
                margin-top: 20px;
            }
            .single-price h3 {
                font-size: 30px;
                color: #000;
                font-weight: 600;
                text-align: center;
                margin: 0;
                margin-top: -80px;
                margin-bottom: 1rem;
                font-family: poppins;
                color: #fff;
            }
            .single-price h4 {
                font-size: 20px;
                font-weight: 500;
                color: #fff;
            }
            .single-price h4 span.sup {
                vertical-align: text-top;
                font-size: 15px;
            }
            .deal-top {
                position: relative;
                background: #406AFF;
                font-size: 16px;
                text-transform: uppercase;
                padding: 136px 24px 0;
            }
            .deal-top::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -50px;
                width: 0;
                height: 0;
                border-top: 50px solid #406AFF;
                border-left: 175px solid transparent;
                border-right: 183px solid transparent;
            }
            .deal-bottom {
                padding: 56px 16px 0;
            }
            .deal-bottom ul {
                margin: 0;
                padding: 0;
            }
            .deal-bottom  ul li {
                font-size: 16px;
                color: #fff;
                font-weight: 300;
                margin-top: 16px;
                border-top: 1px solid #E4E4E4;
                padding-top: 16px;
                list-style: none;
            }
            .btn-area a {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #406AFF;
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: #406AFF;
            }
            .single-price:hover .deal-top {
                background: #262626;
            }
            .single-price:hover .deal-top:after {
                border-top: 50px solid #262626;
            }
            .single-price:hover .btn-area a {
                background: #262626;
            }
            /* ignore the code below */


            .link-area
            {
                position:fixed;
                bottom:20px;
                left:20px;
                padding:15px;
                border-radius:40px;
                background:#406AFF;
            }
            .link-area a
            {
                text-decoration:none;
                color:#fff;
                font-size:25px;
            }
            small {
                font-size: 12px;
                text-transform: initial;
            }
        </style>
    @endpush
    @push('body')

        <body class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-294 elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-294">
        @endpush
        <div data-elementor-type="wp-post" data-elementor-id="294" class="elementor elementor-294" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
                <style>
                    .fullscreen-bg {
                        position: absolute;
                        top: 0;
                        right: 0;
                        bottom: 0;
                        left: 0;
                        overflow: hidden;
                    }
                    .fullscreen-bg__video {
                        position: absolute;
                        top: 0;
                        right: 0;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        height: auto;
                    }
                    @media (min-aspect-ratio: 16/9) {
                        .fullscreen-bg__video {
                            width: 100%;
                            height: auto;
                        }
                    }
                    @media (max-width: 767px) {
                        .fullscreen-bg__video {
                            width: auto;
                            height: auto;
                        }
                        .fullscreen-bg{
                            width: 1000px;
                        }
                    }
                    #overlay {
                        position: absolute;
                        display: block;
                        width: 100%;
                        height: 100%;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        background-color: rgba(0,0,0,0.3);
                        z-index: 1;
                        cursor: pointer;
                    }
                </style>
                <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-f1ac91d elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="f1ac91d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                    <div class="elementor-background-overlay">
                    </div>
                    <div id="overlay"></div>
                    <div class="fullscreen-bg">
                        <video autoplay muted loop playsinline class="fullscreen-bg__video">
                            <source src="{{asset('home/static/temp/video/video3.mp4')}}" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <div class="elementor-container elementor-column-gap-default" style="z-index: 2">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b36272c elementor-invisible" data-id="b36272c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-467b2a0 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="467b2a0" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h1 class="elementor-heading-title elementor-size-default">{{$pageName}}
                                        </h1>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-293bf1b ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="293bf1b" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h5 class="elementor-heading-title elementor-size-default">
                                            Our awesome investment plans
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-9e55886 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9e55886" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3dc3f31 elementor-invisible" data-id="3dc3f31" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-80935ab ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="80935ab" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h6 class="elementor-heading-title elementor-size-default">The best, and flexible investment plan.
                                        </h6>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9193c26 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="9193c26" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Create Passive Income Through {{$siteName}}
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-ca77d0c ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="ca77d0c" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>{{$siteName}} investment plans offers flexibility, and fair profit investment plans.</p>

                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2e76fa3 elementor-widget elementor-widget-button" data-id="2e76fa3" data-element_type="widget" data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a href="{{route('register')}}" class="elementor-button-link elementor-button elementor-size-md elementor-animation-wobble-horizontal" role="button">
                        <span class="elementor-button-content-wrapper">
                          <span class="elementor-button-text">Start Membership <i class="fa fa-arrow-circle-right"></i>
                          </span>
                        </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3dc3f31 elementor-invisible" data-id="3dc3f31" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-80935ab ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="80935ab" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <img width="1600" height="1024" src="{{asset('home/static/quantumfinancetrades.jpg')}}" class="attachment-full size-full" alt="" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="pricing-area" style="margin-bottom: 5rem;margin-top: 3rem;">
                    <div class="container">
                        <div class="section-title">
                            <span class="sub-title">Our Packages</span>
                            <h2>Specialized Investment Packages</h2>
                        </div>
                        <div class="row justify-content-center">
                            @foreach($packages as $package)
                                @inject('option','App\Defaults\Custom')
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-price">
                                        <div class="deal-top">
                                            <h3>{{$package->name}}</h3>
                                            <h4> {{$package->roi}}%/ <span class="sup">{{$option->getReturnType($package->returnType)}}</span> </h4>
                                        </div>
                                        <div class="deal-bottom">
                                            <ul class="deal-item">
                                                <li>
                                                    Minimum: ${{number_format($package->minAmount,2)}}
                                                </li>
                                                <li>
                                                    Maximum: @if($package->isUnlimited !=1)
                                                        ${{number_format($package->maxAmount,2)}}
                                                    @else
                                                        Unlimited
                                                    @endif
                                                </li>
                                                <li>{{$package->note}}</li>
                                                <li>Duration: {{$package->Duration}}</li>
                                                <li>Investment Security</li>
                                                <li>Referral Bonus: {{$package->referral}}% </li>
                                                <li>24/7 Customer Support</li>
                                            </ul>
                                            <div class="btn-area">
                                                <a href="{{route('register')}}">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                <div class="mt-2">
                                    <p style="font-weight: bold; font-size: 16px;">
                                        Note: Investors are able to withdraw both capital and profit after every 7 business days invested with
                                        {{$siteName}} (NB: This is for all the investment packages)
                                        <br></p>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
