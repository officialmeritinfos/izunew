@extends('home.innerBase')
@section('content')

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
                                            How we secure your data
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-9e55886 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9e55886" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="" data-id="3dc3f31" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-80935ab ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="80935ab" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h6 class="elementor-heading-title elementor-size-default">{{$siteName}}
                                        </h6>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9193c26 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="9193c26" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Privacy Policy
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-ca77d0c ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="ca77d0c" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <h4>1. Introduction</h4>
                                        <p>Hi! We've created this privacy policy to explain how we collect, use, disclose and protect your information; including any nonpublic personal information.</p>

                                        <p>This policy applies to information we collect when you use our website (collectively, "Services") or otherwise interact with us as described below. We may change this privacy policy from time to time. If we make changes, we will notify you by revising the date at the top of this policy, and in some cases, we may provide you with additional notice (such as by adding a statement to the homepages of our website or by sending you an email notification).</p>

                                        <p>We encourage you to review the privacy policy whenever you interact with us to stay informed about our information practices and the ways you can help protect your privacy. This privacy policy applies to the Services provided by {{$siteName}} (“we” or “us”).</p>

                                        <h4>2. Collection of Information</h4>
                                        <p>When you create an {{$siteName}} account, we may collect information, including non-public personal information about you from non-affiliated third party service providers in order to verify your identity and for fraud prevention, including your prior addresses and names.</p>
                                        <p>We may collect information you provide to us, such as your name, email address and any other information you choose to provide. For example, we may collect such information if you request an invite to join Quantum Finance or if you enter into any contest or promotion.</p>

                                        <h4>3. Cookies</h4>
                                        <p>Most web browsers are set to accept cookies by default. If you prefer, you can usually choose to set your browser to remove or reject browser cookies. Please note that if you choose to remove or reject cookies, this could affect the availability and functionality of our Services.</p>

                                        <h4>4. Security</h4>
                                        <p>{{$siteName}} takes reasonable measures to help protect all information about you from loss, theft, misuse and unauthorized access, disclosure, alteration and destruction. Additionally, Quantum Finance implements policies designed to protect the confidentiality and security of your nonpublic personal information, including a privacy protection policy. Quantum Finance limits access to your nonpublic personal information to employees that have a business reason to know such information, and implement security practices and procedures designed to protect the confidentiality and security of such information and prohibit unlawful disclosure of such information in accordance with its policies.</p>

                                        <p>Where you have chosen a password that allows you to access certain parts of the website, you are responsible for keeping this password confidential. We advise you not to share your password with anyone. We have also taken measures to comply with provision of security facilities for the protection of your nonpublic personal information through the set up of firewalls, limited access to specified authorized individuals, encryption and continuous capacity building for relevant personnel. We therefore have digital and physical security measures to limit and eliminate possibilities of data privacy breach incidents.</p>

                                        <p>Although we use appropriate security measures once we have received your personal information, the transmission of data over the internet (including by email) is never completely secure. We endeavour to protect personal information, but we cannot guarantee the security of data transmitted to us or by us. We will notify you and any applicable regulator of a breach where we are legally required to do so.</p>

                                        <h4>5. Where we store your Data</h4>
                                        <p>The data that we collect from you will be transferred to and stored at a destination outside the United States of America. By submitting your personal data, you agree to this transfer, storing or processing. We will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this privacy policy.All information you provide to us is stored on our secure cloud storage solution.</p>

                                        <p>Your personal information will not be retained for longer than is necessary for the purposes for which it was processed.</p>

                                        <h4>6. How long we keep your personal information</h4>
                                        <p>We will hold your personal information on Quantum Finance’s systems for as long as is necessary to fulfil the purpose for which it was collected or to comply with legal, regulatory or internal policy requirements.</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2e76fa3 elementor-widget elementor-widget-button" data-id="2e76fa3" data-element_type="widget" data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="button.default">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

@endsection
