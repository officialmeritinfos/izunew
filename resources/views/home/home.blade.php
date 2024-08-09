@extends('home.base')
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
    <body class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-656 elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-656">
@endpush
    <div data-elementor-type="wp-post" data-elementor-id="656" class="elementor elementor-656" data-elementor-settings="[]">
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
                    #lo{
                        height: 400px;
                    }
                }
                @media (max-width: 767px) {
                    .fullscreen-bg__video {
                        width: 100%;
                        height: 100%;
                    }
                    .fullscreen-bg{
                        width: 1000px;
                    }
                    #loo{
                        height: 565px;
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
            <section id="loo" class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-1247697 elementor-section-height-min-height elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="1247697" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-background-overlay">
                    <div id="overlay"></div>
                    <div class="fullscreen-bg">
                        <video autoplay muted loop playsinline class="fullscreen-bg__video">
                            <source src="https://assets.mixkit.co/videos/preview/mixkit-business-meeting-of-company-workers-21232-large.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
                <div class="elementor-container elementor-column-gap-default" id="lo">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6da5c22 elementor-invisible" data-id="6da5c22" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated" style="z-index: 3;">
                            <div class="elementor-element elementor-element-aed773a ob-harakiri-inherit elementor-invisible elementor-widget elementor-widget-heading" data-id="aed773a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">{{config('app.name')}}
                                    </h1>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-aa3102d ob-harakiri-inherit elementor-invisible elementor-widget elementor-widget-heading" data-id="aa3102d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h5 class="elementor-heading-title elementor-size-default">
                                    </h5>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-24befb0 elementor-invisible elementor-widget elementor-widget-button" data-id="24befb0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{route('login')}}" class="elementor-button-link elementor-button elementor-size-lg elementor-animation-wobble-horizontal" role="button">
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
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a0e8be6" data-id="a0e8be6" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated" style="z-index: 3;">
                            <div class="elementor-element elementor-element-b50c114 elementor-widget elementor-widget-elementskit-video" data-id="b50c114" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-video.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con" >
                                        <div class="video-content">
                                            <a href="https://www.youtube.com/watch?v=wUpe03gwncE?autoplay=yes&amp;loop=no&amp;controls=no&amp;mute=no&amp;start=0&amp;end=&amp;version=3" class="ekit-video-popup ekit-video-popup-btn ekit_icon_button ">
                                                <i class="fa fa-play">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-79106ed ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="79106ed" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h6 class="elementor-heading-title elementor-size-default">Play Intro
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-0ef619c
            elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                     data-id="0ef619c" data-element_type="section"
                     data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9200aa7 elementor-invisible" data-id="9200aa7" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;bounceInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-fb0cf6d ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="fb0cf6d" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con" >
                                        <!-- link opening -->
                                        <!-- end link opening -->
                                        <div class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
                                            <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  text-center">
                                                    <i aria-hidden="true" class="elementkit-infobox-icon fa fa-user">
                                                    </i>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <h3 class="elementskit-info-box-title">
                                                    Enrollment for Membership
                                                </h3>
                                                <p>First you need to become a member of {{$siteName}} by registering.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-03d6a41 elementor-invisible" data-id="03d6a41" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;bounceInUp&quot;,&quot;animation_delay&quot;:120,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-19d34d5 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="19d34d5" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con" >
                                        <!-- link opening -->
                                        <!-- end link opening -->
                                        <div class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
                                            <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  text-center">
                                                    <i aria-hidden="true" class="elementkit-infobox-icon fa fa-chart-pie">
                                                    </i>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <h3 class="elementskit-info-box-title">
                                                    Select a Plan
                                                </h3>
                                                <p>Select any of our unique financial earning plans that best works for you.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9ea7612 elementor-invisible" data-id="9ea7612" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;bounceInUp&quot;,&quot;animation_delay&quot;:240,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8b2bf52 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="8b2bf52" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con" >
                                        <!-- link opening -->
                                        <!-- end link opening -->
                                        <div class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
                                            <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  text-center">
                                                    <i aria-hidden="true" class="elementkit-infobox-icon fa fa-money-bill">
                                                    </i>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <h3 class="elementskit-info-box-title">
                                                    Earnings on Autopilot
                                                </h3>
                                                <p>
                                                    Commence passive earnings and receive immediate payments upon requesting a withdrawal.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-9347601 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9347601" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f31dc5b" data-id="f31dc5b" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-1f30aef elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1f30aef" data-element_type="section" data-settings="{&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_offset&quot;:125,&quot;sticky_parent&quot;:&quot;yes&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_effects_offset&quot;:0}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-36fa657 elementor-invisible" data-id="36fa657" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;bounceInLeft&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-69c20da ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="69c20da" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">Our Purpose
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d056df1 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="d056df1" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        Creating opportunities to rise is our shared objective
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d4fadcd elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="d4fadcd" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                              <span class="elementor-divider-separator">
                              </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-901f392" data-id="901f392" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-a11363c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a11363c" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c66821e elementor-invisible" data-id="c66821e" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-6bb4d81 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-image-box" data-id="6bb4d81" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-image-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con" >
                                                        <div class="elementskit-info-image-box ekit-image-box text-center simple-card" >
                                                            <div class="elementskit-box-header image-box-img-center">
                                                                <img width="1080" height="721" src="{{asset('home/static/temp/wp-content/uploads/sites/56/2021/07/at-the-meeting-with-finance-advisor.jpg')}}" class="attachment-full size-full" alt="At the meeting with finance advisor." loading="lazy" />
                                                            </div>
                                                            <div class="elementskit-box-body ekit-image-box-body">
                                                                <div class="elementskit-box-content ekit-image-box-body-inner">
                                                                    <h3 class="elementskit-info-box-title">
                                                                        <a >Join us on an exploration.
                                                                        </a>
                                                                    </h3>
                                                                    <div class="elementskit-box-style-content">

                                                                        Capture the chance to enhance your capital in the stock market by mirroring the trades of top-performing traders in our investment program.Investment Management
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d948bee ekit-equal-height-disable elementor-widget elementor-widget-elementskit-image-box" data-id="d948bee" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-image-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con" >
                                                        <div class="elementskit-info-image-box ekit-image-box text-center simple-card" >
                                                            <div class="elementskit-box-header image-box-img-center">
                                                                <img width="1080" height="608" src="{{asset('home/static/temp/wp-content/uploads/sites/56/2021/07/finance-e1627827550977.jpg')}}" class="attachment-full size-full" alt="finance" loading="lazy" />
                                                            </div>
                                                            <div class="elementskit-box-body ekit-image-box-body">
                                                                <div class="elementskit-box-content ekit-image-box-body-inner">
                                                                    <h3 class="elementskit-info-box-title">
                                                                        <a >Trading at High Frequencies
                                                                        </a>
                                                                    </h3>
                                                                    <div class="elementskit-box-style-content">
                                                                        Prominent hedge funds, global institutions, and industry trailblazers rely on Century21 company for trading guidance and market-making services.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b26d3e0 elementor-invisible" data-id="b26d3e0" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c0e4175 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-image-box" data-id="c0e4175" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-image-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con" >
                                                        <div class="elementskit-info-image-box ekit-image-box text-center simple-card" >
                                                            <div class="elementskit-box-header image-box-img-center">
                                                                <img width="1080" height="720" src="{{asset('home/static/temp/wp-content/uploads/sites/56/2021/07/two-busines-partners-men-in-the-office-e1627827569195.jpg')}}" class="attachment-full size-full" alt="Two busines partners men in the office" loading="lazy" />
                                                            </div>
                                                            <div class="elementskit-box-body ekit-image-box-body">
                                                                <div class="elementskit-box-content ekit-image-box-body-inner">
                                                                    <h3 class="elementskit-info-box-title">
                                                                        <a >Managing Investments
                                                                        </a>
                                                                    </h3>
                                                                    <div class="elementskit-box-style-content">
                                                                        We provide dynamic stock investment strategies spanning public and private markets, along with tailored solutions for both institutional and individual investors.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-88fb79f ekit-equal-height-disable elementor-widget elementor-widget-elementskit-image-box" data-id="88fb79f" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-image-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con" >
                                                        <div class="elementskit-info-image-box ekit-image-box text-center simple-card" >
                                                            <div class="elementskit-box-header image-box-img-center">
                                                                <img width="1080" height="721" src="{{asset('home/static/temp/wp-content/uploads/sites/56/2021/07/business-e1627827590309.jpg')}}" class="attachment-full size-full" alt="Business" loading="lazy" />
                                                            </div>
                                                            <div class="elementskit-box-body ekit-image-box-body">
                                                                <div class="elementskit-box-content ekit-image-box-body-inner">
                                                                    <h3 class="elementskit-info-box-title">
                                                                        <a >Managing Wealth
                                                                        </a>
                                                                    </h3>
                                                                    <div class="elementskit-box-style-content">
                                                                        We assist individuals, businesses, and institutions in constructing, safeguarding, and overseeing wealth, enabling them to pursue their financial aspirations.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-fc804ab elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fc804ab" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-75eb816" data-id="75eb816" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1823532 ob-harakiri-inherit elementor-invisible elementor-widget elementor-widget-heading" data-id="1823532" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h6 class="elementor-heading-title elementor-size-default">Why Choose Us
                                    </h6>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-49b3204 ob-harakiri-inherit elementor-invisible elementor-widget elementor-widget-heading" data-id="49b3204" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Investing Smartly with Intelligent Concepts
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d4268b0 elementor-widget__width-initial ob-harakiri-inherit elementor-invisible elementor-widget elementor-widget-text-editor" data-id="d4268b0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>{{$siteName}} have a unique approach to income generation. We build innovative wealth creation products.
                                    </p>
                                </div>
                            </div>
                            <section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-531fcf9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="531fcf9" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7b5843f elementor-invisible" data-id="7b5843f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;bounceInDown&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-41f4e8d ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="41f4e8d" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con" >
                                                        <!-- link opening -->
                                                        <!-- end link opening -->
                                                        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                                            <div class="elementskit-box-header elementor-animation-">
                                                                <div class="elementskit-info-box-icon  ">
                                                                    <i aria-hidden="true" class="elementkit-infobox-icon fa fa-shield">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title">
                                                                    Security & Privacy
                                                                </h3>
                                                                <p>We use the latest technology to protect your information and financial transactions.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-07bdc47 elementor-invisible" data-id="07bdc47" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;bounceInDown&quot;,&quot;animation_delay&quot;:120,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-0c6e569 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="0c6e569" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con" >
                                                        <!-- link opening -->
                                                        <!-- end link opening -->
                                                        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                                            <div class="elementskit-box-header elementor-animation-">
                                                                <div class="elementskit-info-box-icon  ">
                                                                    <i aria-hidden="true" class="elementkit-infobox-icon fa fa-pen-square">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title">
                                                                    Investing Tools
                                                                </h3>
                                                                <p>From strategy to analysis, our tools help you keep track of your finances with ease.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f0a037f elementor-invisible" data-id="f0a037f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;bounceInDown&quot;,&quot;animation_delay&quot;:240,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dbb7ae4 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="dbb7ae4" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con" >
                                                        <!-- link opening -->
                                                        <!-- end link opening -->
                                                        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                                            <div class="elementskit-box-header elementor-animation-">
                                                                <div class="elementskit-info-box-icon  ">
                                                                    <i aria-hidden="true" class="elementkit-infobox-icon fa fa-lock">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title">
                                                                    Asset Protection
                                                                </h3>
                                                                <p>We also participate in asset protection programs to further secure your funds.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a80d290 elementor-invisible" data-id="a80d290" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;bounceInDown&quot;,&quot;animation_delay&quot;:360,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7568a00 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="7568a00" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con" >
                                                        <!-- link opening -->
                                                        <!-- end link opening -->
                                                        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                                            <div class="elementskit-box-header elementor-animation-">
                                                                <div class="elementskit-info-box-icon  ">
                                                                    <i aria-hidden="true" class="elementkit-infobox-icon fa fa-chart-bar">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title">
                                                                    Investment Access
                                                                </h3>
                                                                <p>We are providing investors access to investments previously available to the top 1%.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-16d48e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16d48e7" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-67056c2 elementor-invisible" data-id="67056c2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b8b01f9 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="b8b01f9" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h6 class="elementor-heading-title elementor-size-default">Overview
                                    </h6>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4b8e612 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="4b8e612" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Initiate a Solid Plan
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-be19fe9 ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="be19fe9" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>
                                        Consider your desires, and embark on the journey to maximize them by choosing to start with us today. We are consistently available to guide you in making the optimal decisions.
                                    </p>
                                    <p>
                                        Our experts excel in every aspect. They undergo thorough training in forex, cryptocurrency trading, and providing investment advice.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section style="margin-top: 4rem;" class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-16d48e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16d48e7" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-67056c2 elementor-invisible" data-id="67056c2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b8b01f9 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="b8b01f9" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h6 class="elementor-heading-title elementor-size-default">Overview
                                    </h6>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4b8e612 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="4b8e612" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Buying digital Assets
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-be19fe9 ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="be19fe9" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tuUO-Q4_b5c" title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section style="margin-top: 4rem;" class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-16d48e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16d48e7" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-67056c2 elementor-invisible" data-id="67056c2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b8b01f9 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="b8b01f9" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h6 class="elementor-heading-title elementor-size-default">Overview
                                    </h6>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4b8e612 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="4b8e612" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Market Rates
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-be19fe9 ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="be19fe9" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <script src="https://widgets.coingecko.com/gecko-coin-list-widget.js"></script>
                                    <gecko-coin-list-widget locale="en" outlined="true" coin-ids="" initial-currency="usd"></gecko-coin-list-widget>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="pricing-area" style="margin-bottom: 5rem;margin-top: 5rem;">
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
                                        <small class="text-white">{{$package->note}}</small>
                                    </div>
                                    <div class="deal-bottom">
                                        <ul class="deal-item">
                                            <li>
                                                Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                                    ${{number_format($package->maxAmount,2)}}
                                                @else
                                                    Unlimited
                                                @endif
                                            </li>
                                            <li>Profit return: {{$package->roi}}% {{$option->getReturnType($package->returnType)}}</li>
                                            <li>Contract Duration: {{$package->Duration}}</li>
                                            <li>Referral Bonus: {{$package->referral}}% </li>
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


            <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-9347601 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9347601" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f31dc5b" data-id="f31dc5b" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-1f30aef elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1f30aef" data-element_type="section" data-settings="{&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_offset&quot;:125,&quot;sticky_parent&quot;:&quot;yes&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_effects_offset&quot;:0}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-36fa657 elementor-invisible" data-id="36fa657" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;bounceInLeft&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-69c20da ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="69c20da" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">Top Investors
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d056df1 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="d056df1" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        Our Top Investors
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d4fadcd elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="d4fadcd" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                              <span class="elementor-divider-separator">
                              </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-901f392" data-id="901f392" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-a11363c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a11363c" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c66821e elementor-invisible" data-id="c66821e" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-6bb4d81 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-image-box" data-id="6bb4d81" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-image-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con" >
                                                        <div class="elementskit-info-image-box ekit-image-box text-center simple-card" >
                                                            <div class="elementskit-box-header image-box-img-center">
                                                                <img width="1080" height="721" src="{{asset('home/investors/3.jpeg')}}" class="attachment-full size-full" alt="At the meeting with finance advisor." loading="lazy" />
                                                            </div>
                                                            <div class="elementskit-box-body ekit-image-box-body">
                                                                <div class="elementskit-box-content ekit-image-box-body-inner">
                                                                    <h3 class="elementskit-info-box-title">
                                                                        <a >
                                                                            John Fredrick
                                                                        </a>
                                                                    </h3>
                                                                    <div class="elementskit-box-style-content">
                                                                        $136,000 invested
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d948bee ekit-equal-height-disable elementor-widget elementor-widget-elementskit-image-box" data-id="d948bee" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-image-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con" >
                                                        <div class="elementskit-info-image-box ekit-image-box text-center simple-card" >
                                                            <div class="elementskit-box-header image-box-img-center">
                                                                <img width="1080" height="608" src="{{asset('home/investors/2.jpeg')}}" class="attachment-full size-full" alt="finance" loading="lazy" />
                                                            </div>
                                                            <div class="elementskit-box-body ekit-image-box-body">
                                                                <div class="elementskit-box-content ekit-image-box-body-inner">
                                                                    <h3 class="elementskit-info-box-title">
                                                                        <a >
                                                                            Adam Welsh
                                                                        </a>
                                                                    </h3>
                                                                    <div class="elementskit-box-style-content">
                                                                        $86,000 Invested
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b26d3e0 elementor-invisible" data-id="b26d3e0" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c0e4175 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-image-box" data-id="c0e4175" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="elementskit-image-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con" >
                                                        <div class="elementskit-info-image-box ekit-image-box text-center simple-card" >
                                                            <div class="elementskit-box-header image-box-img-center">
                                                                <img width="1080" height="720" src="{{asset('home/investors/1.jpeg')}}" class="attachment-full size-full" alt="Two busines partners men in the office" loading="lazy" />
                                                            </div>
                                                            <div class="elementskit-box-body ekit-image-box-body">
                                                                <div class="elementskit-box-content ekit-image-box-body-inner">
                                                                    <h3 class="elementskit-info-box-title">
                                                                        <a >
                                                                            Angela
                                                                        </a>
                                                                    </h3>
                                                                    <div class="elementskit-box-style-content">
                                                                       $56,000 Invested
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>


            <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-ff47f35 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="ff47f35" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-acdc160" data-id="acdc160" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-e996477 ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading" data-id="e996477" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h6 class="elementor-heading-title elementor-size-default">Testimonial</h6>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-50c08e2 ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading" data-id="50c08e2" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">What Clients Say</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a4fcca3 elementor-testimonial--skin-bubble elementor-testimonial--align-left elementor-testimonial--layout-image_inline elementor-arrows-yes ob-has-background-overlay elementor-widget elementor-widget-testimonial-carousel" data-id="a4fcca3" data-element_type="widget" data-settings="{&quot;slides_per_view&quot;:&quot;3&quot;,&quot;slides_to_scroll&quot;:&quot;3&quot;,&quot;slides_per_view_tablet&quot;:&quot;2&quot;,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="testimonial-carousel.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-swiper">
                                        <div class="elementor-main-swiper swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="elementor-testimonial">
                                                        <div class="elementor-testimonial__content">
                                                            <div class="elementor-testimonial__text">
                                                                Be sure to invest with the right company always. There is no doubt about the credibility of this company. A very big Thank You to the Management.
                                                            </div>
                                                        </div>
                                                        <div class="elementor-testimonial__footer">
                                                            <div class="elementor-testimonial__image">
                                                                <img src="{{asset('home/static/temp/wp-content/uploads/sites/56/2021/07/1.jpg')}}" alt="Fresco">
                                                            </div>
                                                            <cite class="elementor-testimonial__cite"><span class="elementor-testimonial__name">Fresco</span><span class="elementor-testimonial__title">Manager</span></cite>			</div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="elementor-testimonial">
                                                        <div class="elementor-testimonial__content">
                                                            <div class="elementor-testimonial__text">
                                                                Amazing work! This guys also very fast for support. No matter Sunday or Monday. I get my answers and they were really patiently with my sometimes stupid questions!
                                                            </div>
                                                        </div>
                                                        <div class="elementor-testimonial__footer">
                                                            <div class="elementor-testimonial__image">
                                                                <img src="{{asset('home/static/temp/wp-content/uploads/sites/56/2021/07/2.jpg')}}" alt="Williams">
                                                            </div>
                                                            <cite class="elementor-testimonial__cite"><span class="elementor-testimonial__name">Williams</span><span class="elementor-testimonial__title">Entrepreneur</span></cite>			</div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="elementor-testimonial">
                                                        <div class="elementor-testimonial__content">
                                                            <div class="elementor-testimonial__text">
                                                                The ability to diversify your portfolio is a great feature. Investing into various services offered including NFTs is really awesome. I love the management.
                                                            </div>
                                                        </div>
                                                        <div class="elementor-testimonial__footer">
                                                            <div class="elementor-testimonial__image">
                                                                <img src="{{asset('home/static/temp/wp-content/uploads/sites/56/2021/07/3.jpg')}}" alt="Samantha">
                                                            </div>
                                                            <cite class="elementor-testimonial__cite"><span class="elementor-testimonial__name">Samantha</span><span class="elementor-testimonial__title">Business woman</span></cite>			</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-swiper-button elementor-swiper-button-prev">
                                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                <span class="elementor-screen-only">Previous</span>
                                            </div>
                                            <div class="elementor-swiper-button elementor-swiper-button-next">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                <span class="elementor-screen-only">Next</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-8dfcbe5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8dfcbe5" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ec4556f elementor-invisible" data-id="ec4556f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-9a3d93f ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="9a3d93f" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h6 class="elementor-heading-title elementor-size-default">
                                    </h6>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9c5569d ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="9c5569d" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Allow Us to Serve You.
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-39d5047 ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="39d5047" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>We assist individuals, businesses, and institutions in constructing, safeguarding, and overseeing wealth, empowering them to pursue their financial goals.
                                    </p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b9baec3 elementor-widget elementor-widget-button" data-id="b9baec3" data-element_type="widget" data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{route('register')}}" class="elementor-button-link elementor-button elementor-size-md" role="button">
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
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b3148c6" data-id="b3148c6" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-424e4a9 elementor-invisible elementor-widget elementor-widget-image" data-id="424e4a9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img width="1600" height="1024" src="{{asset('home/static/temp/wp-content/uploads/sites/56/2021/08/investment.jpg')}}" class="attachment-full size-full" alt="" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
