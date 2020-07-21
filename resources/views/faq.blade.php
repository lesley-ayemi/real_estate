@extends('layouts.master')

@section('content-agents')


<div class="inner-head overlap">
    <div style="background: url(img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
    <div class="container">
        <div class="inner-content">
            <span><i class="fa fa-bolt"></i></span>
            <h2>FAQ</h2>
            <ul>
                <li><a href="#" title="">HOME</a></li>
                <li><a href="#" title="">FAQ</a></li>
            </ul>
        </div>
    </div>
</div><!-- inner Head -->

<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="faq-sec">
                    <form class="faq-form">
                        <div class="row">
                            <div class="col-md-9">
                                <input type="text" placeholder="Have a Question? Search here..." />
                                <br>
                            </div>
                            <div class="col-md-2">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="service-circle-sec">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="service-circle">
                                    <img alt="" src="images/resource/service-cirlce1.jpg">
                                    <div class="service-simple">
                                        <i class="fa  fa-code-fork"></i>
                                        <h3>WEB DESIGNING</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the jority have suffered </p>
                                    </div>
                                </div><!-- Service Circle -->
                            </div>
                            <div class="col-md-4">
                                <div class="service-circle">
                                    <img alt="" src="images/resource/service-cirlce2.jpg">
                                    <div class="service-simple">
                                        <i class="fa  fa-android"></i>
                                        <h3>Android Support</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the jority have suffered </p>
                                    </div>
                                </div><!-- Service Circle -->
                            </div>
                            <div class="col-md-4">
                                <div class="service-circle">
                                    <img alt="" src="images/resource/service-cirlce3.jpg">
                                    <div class="service-simple">
                                        <i class="fa  fa-html5"></i>
                                        <h3>Validated Code</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the jority have suffered </p>
                                    </div>
                                </div><!-- Service Circle -->
                            </div>
                        </div>
                    </div><!-- Service Circles  -->
                </div><!-- FAQ Sec -->
            </div>
        </div>
    </div>
</section>

<section class="block remove-top" style="clear: both; margin-top: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading4">
                    <h2>SOME FAQ'S</h2>
                    <span>Lorem ipsum dolor sit amet</span>
                </div>
                <div class="faqs-accordian-sec">
                    <div class="col-md-8 column">
                        <div id="toggle-widget" class="experties">
                            <h2>Kwitara is Pixel Perfect PSD Template</h2>
                            <div class="content">
                                <p>Asunt in anim uis aute irure dolor in repreh enderit in voluptate velit esse cilludolore eu fugiat nulla pariatur </p>
                            </div>
                            <h2>How to Buy Kwitara PSD Template?</h2>
                            <div class="content">
                                <p>Asunt in anim uis aute irure dolor in repreh enderit in voluptate velit esse cilludolore eu fugiat nulla pariatur </p>
                            </div>
                            <h2>Kwitara is Ready for your next Project</h2>
                            <div class="content">
                                <p>Asunt in anim uis aute irure dolor in reprehe nderit in voluptate velit esse cilludolore eu fugiat nulla pariatur </p>
                            </div>
                            <h2>Boo yeah Kwitara is available now</h2>
                            <div class="content">
                                <p>Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cilludolore eu fugiat nulla pariatur </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 column">
                        <div class="contact-details">
                            <div class="contact-infos">
                                <ul>
                                    <li>
                                        <span><i class="fa fa-phone"></i> Address</span>
                                        <p>765 Shuttle Swift Area <br>at New Born Road </p>
                                    </li>
                                    <li>
                                        <span><i class="fa fa-fax"></i> Fax/Email</span>
                                        <p>674-46-7-0,   234-8-987 <br>hello@email.com</p>
                                    </li>
                                </ul>
                            </div>
                            <ul class="social-btns">
                                <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.72810658868!2d-0.24168151926400253!3d51.5287718408995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2s!4v1452621215004"></iframe>
                        </div>
                    </div>
                </div><!-- Accordian Sec -->
            </div>
        </div>
    </div>
</section>

@endsection
