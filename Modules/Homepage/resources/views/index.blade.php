@extends('homepage::layouts.master')

@section('content')
    <!-- Start Masthead -->
    <section class="masthead js-masthead-height text-center pb-0">
        <div class="container">
            <div class="masthead__offset-bottom">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="masthead__content">
                            <h1 class="masthead__content-title">Affordable Web, Mobile and Ecommerce</h1>
                            <p class="masthead__content-subtitle">Quality solution at an affordable price and delivered faster than expected</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-lg-center">
                    <div class="col-lg-5">
                        <form class="form form__subscribe">
                            <input type="text" class="form__subscribe-input form__subscribe-input-orange form__subscribe-shadow form__subscribe-rounded" placeholder="Enter your email" />
                            <button type="button" class="form__subscribe-button form__subscribe-button-orange">Get started</button>
                        </form>
                    </div>
                </div>
            </div>
            <img src="{{asset('front_template/assets/images/masthead-img-work.png')}}" class="masthead__content-image" alt="Masthead Image" />
        </div>
    </section>
    <!-- End Masthead -->

    <!-- Start Section -->
    <section class="section pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="section__heading section__heading-center">We are build awesome marketing template</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center mb-40">
                    <p>
                        Et odio honestatis ius. Exerci numquam consequuntur no mei. Ut sed ornatus tibique, fabellas pertinax est cu. Te odio omittam mea, ea tractatos dissentiunt complectitur nec. Liber voluptatum ad vis.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="section__column text-center">
                        <span class="icon icon-download icon-lg"></span>
                        <h3>Download free</h3>
                        <p>
                            Unum liber commune in mel, ut pri tritani propriae menandri. Cum et magna porro intellegat ex his verear malorum, has repudiandae.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section__column text-center">
                        <span class="icon icon-cogs icon-lg"></span>
                        <h3>Install software</h3>
                        <p>
                            Unum liber commune in mel, ut pri tritani propriae menandri. Cum et magna porro intellegat ex his verear malorum, has repudiandae.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section__column text-center">
                        <span class="icon icon-wallet icon-lg"></span>
                        <h3>Buy licence</h3>
                        <p>
                            Unum liber commune in mel, ut pri tritani propriae menandri. Cum et magna porro intellegat ex his verear malorum, has repudiandae.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

{{--    <!-- Start Section -->--}}
{{--    <section class="section section__gray pb-0">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 mb-40">--}}
{{--                    <img src="assets/images/vector-younglady-with-laptop.png" class="img-fluid" alt="Young lady with laptop" />--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 mb-40">--}}
{{--                    <h3>#1 landing page with lot features</h3>--}}
{{--                    <p>--}}
{{--                        Et odio honestatis ius. Exerci numquam consequuntur no mei. Ut sed ornatus tibique, fabellas pertinax est cu. Te odio omittam mea, ea tractatos dissentiunt complectitur nec. Liber voluptatum ad vis, omnium perpetua at mel.--}}
{{--                    </p>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="column__icon column__icon-left">--}}
{{--                                <i class="fa fa-gift fa-2x"></i>--}}
{{--                                <h5 class="text-normal">One package</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 col-md-6">--}}
{{--                            <div class="column__icon column__icon-left">--}}
{{--                                <i class="fa fa-location-arrow fa-2x"></i>--}}
{{--                                <h5 class="text-normal">Easy to use</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="column__icon column__icon-left">--}}
{{--                                <i class="fa fa-paw fa-1x"></i>--}}
{{--                                <h5 class="text-normal">Vector included</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 col-md-6">--}}
{{--                            <div class="column__icon column__icon-left">--}}
{{--                                <i class="fa fa-support fa-1x"></i>--}}
{{--                                <h5 class="text-normal">Support & Update</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="#" class="btn btn-primary btn-rounded">Learn more </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Section -->--}}

{{--    <!-- Start Section -->--}}
{{--    <section class="section section__gray pt-30 pb-0">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 offset-lg-3">--}}
{{--                    <h2 class="section__heading section__heading-center">Product screenshot</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="owl-active-nav">--}}
{{--                        <div class="owl-carousel js-owl-screenshot">--}}
{{--                            <!-- Start screenhot 01 -->--}}
{{--                            <div class="item">--}}
{{--                                <img src="{{asset('front_template/assets/images/video-cover-app.png')}}" class="img-fluid" alt="App dashboard" />--}}
{{--                            </div>--}}
{{--                            <!-- End screenhot 01 -->--}}

{{--                            <!-- Start screenhot 02 -->--}}
{{--                            <div class="item">--}}
{{--                                <img src="{{asset('front_template/assets/images/thumbnail-cover-app.png')}}" class="img-fluid" alt="App dashboard" />--}}
{{--                            </div>--}}
{{--                            <!-- End screenhot 02 -->--}}

{{--                            <!-- Start screenhot 03 -->--}}
{{--                            <div class="item">--}}
{{--                                <img src="{{asset('front_template/assets/images/zoom-cover-app.png')}}" class="img-fluid" alt="App dashboard" />--}}
{{--                            </div>--}}
{{--                            <!-- End screenhot 03 -->--}}

{{--                            <!-- Start screenhot 04 -->--}}
{{--                            <div class="item">--}}
{{--                                <img src="{{asset('front_template/assets/images/video-cover-app.png')}}" class="img-fluid" alt="App dashboard" />--}}
{{--                            </div>--}}
{{--                            <!-- End screenhot 04 -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Section -->--}}

{{--    <!-- Start Section -->--}}
{{--    <section class="section pb-0">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 offset-lg-3">--}}
{{--                    <h2 class="section__heading section__heading-center">Choose our package & Acteved to premium</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8 offset-lg-2 text-center mb-40">--}}
{{--                    <p>--}}
{{--                        Unum liber commune in mel, ut pri tritani propriae menandri. Cum et magna porro intellegat. Homero sapientem per id, id sonet veniam commune vis, ei nam nonumy fuisset.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-10 offset-lg-1">--}}
{{--                    <div class="pricing">--}}
{{--                        <!-- Start pricing 1-->--}}
{{--                        <div class="pricing__column pricing__green pp-fist">--}}
{{--                            <div class="pricing__heading">--}}
{{--                                <i class="fa fa-paper-plane pricing__icon"></i>--}}
{{--                                <h3 class="text-normal">Besic</h3>--}}
{{--                            </div>--}}
{{--                            <div class="pricing__content">--}}
{{--                                <p>--}}
{{--                                    From--}}
{{--                                    <span class="pricing__content-price">--}}
{{--                                        <em class="pricing__content-currency">$</em>--}}
{{--                                        59--}}
{{--                                    </span>--}}
{{--                                    <small class="pricing__content-muted">/mo</small>--}}
{{--                                </p>--}}
{{--                                <a href="#" class="pricing__content-package" data-toggle="modal" data-target="#besicPackage">What’s included ?</a>--}}
{{--                            </div>--}}
{{--                            <div class="pricing__action">--}}
{{--                                <button type="button" class="btn btn-green btn-stroke btn-rounded pricing__button">Choose Plan</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End pricing 1-->--}}

{{--                        <!-- Start pricing 2-->--}}
{{--                        <div class="pricing__column pricing__popular">--}}
{{--                            <div class="pricing__heading">--}}
{{--                                <i class="fa fa-shield pricing__icon"></i>--}}
{{--                                <h3>Premium</h3>--}}
{{--                            </div>--}}
{{--                            <div class="pricing__content">--}}
{{--                                <p>--}}
{{--                                    From--}}
{{--                                    <span class="pricing__content-price">--}}
{{--                                        <em class="pricing__content-currency">$</em>--}}
{{--                                        120--}}
{{--                                    </span>--}}
{{--                                    <small class="pricing__content-muted">/mo</small>--}}
{{--                                </p>--}}
{{--                                <a href="#" class="pricing__content-package" data-toggle="modal" data-target="#premiumPackage">What’s included ?</a>--}}
{{--                            </div>--}}
{{--                            <div class="pricing__action">--}}
{{--                                <button type="button" class="btn btn-primary btn-stroke btn-rounded pricing__button">Choose Plan</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End pricing 2-->--}}

{{--                        <!-- Start pricing 3-->--}}
{{--                        <div class="pricing__column  pricing__red pp-last">--}}
{{--                            <div class="pricing__heading">--}}
{{--                                <i class="fa fa-rocket pricing__icon"></i>--}}
{{--                                <h3 class="text-normal">Business</h3>--}}
{{--                            </div>--}}
{{--                            <div class="pricing__content">--}}
{{--                                <p>--}}
{{--                                    From--}}
{{--                                    <span class="pricing__content-price">--}}
{{--                                        <em class="pricing__content-currency">$</em>--}}
{{--                                        299--}}
{{--                                    </span>--}}
{{--                                    <small class="pricing__content-muted">/mo</small>--}}
{{--                                </p>--}}
{{--                                <a href="#" class="pricing__content-package" data-toggle="modal" data-target="#businessPackage">What’s included ?</a>--}}
{{--                            </div>--}}
{{--                            <div class="pricing__action">--}}
{{--                                <button type="button" class="btn btn-red btn-stroke btn-rounded pricing__button">Choose Plan</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End pricing 3-->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Section -->--}}

{{--    <!-- Start Modal Pricing Package 1 -->--}}
{{--    <div class="modal fade" id="besicPackage" tabindex="-1" role="dialog"aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-body">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                    <div class="package">--}}
{{--                        <div class="package__heading package__heading-green">--}}
{{--                            <i class="fa fa-paper-plane"></i>--}}
{{--                        </div>--}}
{{--                        <h3 class="package__title">Besic</h3>--}}
{{--                        <div class="package__content">--}}
{{--                            <ul>--}}
{{--                                <li class="included"><i class="fa fa-check"></i> 5 HTML Template</li>--}}
{{--                                <li class="included"><i class="fa fa-check"></i> 2 Free Vector</li>--}}
{{--                                <li class="unincluded"><i class="fa fa-times"></i> PSD File</li>--}}
{{--                                <li class="unincluded"><i class="fa fa-times"></i> Support</li>--}}
{{--                                <li class="unincluded"><i class="fa fa-times"></i> Documentation</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="package__action">--}}
{{--                            <button type="button" class="btn btn-green btn-stroke btn-rounded">Choose Plan</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End Modal Pricing Package 1 -->--}}

{{--    <!-- Start Modal Pricing Package 2 -->--}}
{{--    <div class="modal fade" id="premiumPackage" tabindex="-1" role="dialog"aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-body">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                    <div class="package">--}}
{{--                        <div class="package__heading package__heading-primary">--}}
{{--                            <i class="fa fa-shield"></i>--}}
{{--                        </div>--}}
{{--                        <h3 class="package__title">Premium</h3>--}}
{{--                        <div class="package__content">--}}
{{--                            <ul>--}}
{{--                                <li class="included"><i class="fa fa-check"></i> 10 HTML Template</li>--}}
{{--                                <li class="included"><i class="fa fa-check"></i> 5 Free Vector</li>--}}
{{--                                <li class="included"><i class="fa fa-times"></i> PSD File</li>--}}
{{--                                <li class="unincluded"><i class="fa fa-times"></i> Support</li>--}}
{{--                                <li class="unincluded"><i class="fa fa-times"></i> Documentation</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="package__action">--}}
{{--                            <button type="button" class="btn btn-primary btn-stroke btn-rounded">Choose Plan</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End Modal Pricing Package 2 -->--}}

{{--    <!-- Start Modal Pricing Package 3 -->--}}
{{--    <div class="modal fade" id="businessPackage" tabindex="-1" role="dialog"aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-body">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                    <div class="package">--}}
{{--                        <div class="package__heading package__heading-red">--}}
{{--                            <i class="fa fa-rocket"></i>--}}
{{--                        </div>--}}
{{--                        <h3 class="package__title">Business</h3>--}}
{{--                        <div class="package__content">--}}
{{--                            <ul>--}}
{{--                                <li class="included"><i class="fa fa-check"></i> 20 HTML Template</li>--}}
{{--                                <li class="included"><i class="fa fa-check"></i> 10 Free Vector</li>--}}
{{--                                <li class="included"><i class="fa fa-times"></i> PSD File</li>--}}
{{--                                <li class="included"><i class="fa fa-times"></i> Support</li>--}}
{{--                                <li class="unincluded"><i class="fa fa-times"></i> Documentation</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="package__action">--}}
{{--                            <button type="button" class="btn btn-red btn-stroke btn-rounded">Choose Plan</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End Modal Pricing Package 3 -->--}}

{{--    <!-- Start Section -->--}}
{{--    <section class="section pt-40">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 offset-lg-3">--}}
{{--                    <h2 class="section__heading section__heading-center">User testimoni</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 offset-lg-3 text-center mb-20">--}}
{{--                    <div class="owl-carousel js-owl-testimoni">--}}
{{--                        <!-- Start testimoni 01 -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimoni">--}}
{{--                                <blockquote>Mei ne audire fabulas. Ea mea quas putent, sit an lucilius <strong>repudiandae</strong>, mei ut appetere electram maluisset.</blockquote>--}}
{{--                                <p class="testimoni__author"><a href="#">Alexandro Oddol</a></p>--}}
{{--                                <a href="#" class="testimoni__avatar"><img src="assets/images/testimoni-avatar01.png" class="testimoni__avatar-image" alt="Alexandro Oddol" /></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End testimoni 01 -->--}}

{{--                        <!-- Start testimoni 02 -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimoni">--}}
{{--                                <blockquote>Ea est molestie tincidunt, eam partem facete at. <strong>Mea in modo</strong> dolores concludaturque, euismod liberavisse</blockquote>--}}
{{--                                <p class="testimoni__author"><a href="#">Alexandro Oddol</a></p>--}}
{{--                                <a href="#" class="testimoni__avatar"><img src="assets/images/testimoni-avatar02.png" class="testimoni__avatar-image" alt="Alexandro Oddol" /></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End testimoni 02 -->--}}

{{--                        <!-- Start testimoni 03 -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimoni">--}}
{{--                                <blockquote>Homero sapientem per id, id sonet veniam commune vis, <strong>ei nam nonumy</strong> fuisset pro primis consequat.</blockquote>--}}
{{--                                <p class="testimoni__author"><a href="#">Alexandro Oddol</a></p>--}}
{{--                                <a href="#" class="testimoni__avatar"><img src="assets/images/testimoni-avatar03.png" class="testimoni__avatar-image" alt="Alexandro Oddol" /></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End testimoni 03 -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <div class="divider"></div>--}}
{{--                    <div class="owl-active-nav">--}}
{{--                        <div class="owl-carousel js-owl-clients">--}}
{{--                            <!-- Start client 01 -->--}}
{{--                            <div class="item">--}}
{{--                                <a href="#" class="client">--}}
{{--                                    <img src="assets/images/clients/client_01-hover.png" class="client_logo-hover" alt="Client name" />--}}
{{--                                    <img src="assets/images/clients/client_01.png" class="client_logo" alt="Client name" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- End client 01 -->--}}

{{--                            <!-- Start client 02 -->--}}
{{--                            <div class="item">--}}
{{--                                <a href="#" class="client">--}}
{{--                                    <img src="assets/images/clients/client_02-hover.png" class="client_logo-hover" alt="Client name" />--}}
{{--                                    <img src="assets/images/clients/client_02.png" class="client_logo" alt="Client name" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- End client 02 -->--}}

{{--                            <!-- Start client 03 -->--}}
{{--                            <div class="item">--}}
{{--                                <a href="#" class="client">--}}
{{--                                    <img src="assets/images/clients/client_03-hover.png" class="client_logo-hover" alt="Client name" />--}}
{{--                                    <img src="assets/images/clients/client_03.png" class="client_logo" alt="Client name" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- End client 03 -->--}}

{{--                            <!-- Start client 04 -->--}}
{{--                            <div class="item">--}}
{{--                                <a href="#" class="client">--}}
{{--                                    <img src="assets/images/clients/client_04-hover.png" class="client_logo-hover" alt="Client name" />--}}
{{--                                    <img src="assets/images/clients/client_04.png" class="client_logo" alt="Client name" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- End client 04 -->--}}

{{--                            <!-- Start client 05 -->--}}
{{--                            <div class="item">--}}
{{--                                <a href="#" class="client">--}}
{{--                                    <img src="assets/images/clients/client_06-hover.png" class="client_logo-hover" alt="Client name" />--}}
{{--                                    <img src="assets/images/clients/client_06.png" class="client_logo" alt="Client name" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- End client 05 -->--}}

{{--                            <!-- Start client 06 -->--}}
{{--                            <div class="item">--}}
{{--                                <a href="#" class="client">--}}
{{--                                    <img src="assets/images/clients/client_05-hover.png" class="client_logo-hover" alt="Client name" />--}}
{{--                                    <img src="assets/images/clients/client_05.png" class="client_logo" alt="Client name" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- End client 06 -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Section -->--}}

{{--    <!-- Start Section -->--}}
{{--    <section class="section section__gray">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 offset-lg-3">--}}
{{--                    <h2 class="section__heading section__heading-center">Recommended reading</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-10 offset-lg-1">--}}
{{--                    <div class="owl-carousel js-owl-article">--}}
{{--                        <!-- Start testimoni 01 -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="article__card">--}}
{{--                                <div class="article__card-heading">--}}
{{--                                    <a href="#" class="article__card-label">News & Article</a>--}}
{{--                                    <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 23</a>--}}
{{--                                    <h4 class="article__card-title"><a href="#">Sit in pertinax petentium est ne mucius</a></h4>--}}
{{--                                </div>--}}
{{--                                <div class="article__card-image">--}}
{{--                                    <img src="assets/images/blog/thumbnail/img-blog-thumbnail-01.jpg" class="img-fluid" alt="Image article" />--}}
{{--                                </div>--}}
{{--                                <div class="article__card-footer">--}}
{{--                                    <div class="article__card-author">--}}
{{--                                        <img src="assets/images/avatar-man.jpg" class="article__card-avatar" alt="Author Avatar" />--}}
{{--                                        <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Ence iif</a></p>--}}
{{--                                        <a href="#">29 Des 2018</a>--}}
{{--                                    </div>--}}
{{--                                    <a href="#" class="article__card-action btn-link">Read more</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End testimoni 01 -->--}}

{{--                        <!-- Start testimoni 02 -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="article__card">--}}
{{--                                <div class="article__card-heading">--}}
{{--                                    <a href="#" class="article__card-label">News & Article</a>--}}
{{--                                    <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 10</a>--}}
{{--                                    <h4 class="article__card-title"><a href="#">Mei ne audire fabulas ea mea quas putent</a></h4>--}}
{{--                                </div>--}}
{{--                                <div class="article__card-image">--}}
{{--                                    <img src="assets/images/blog/thumbnail/img-blog-thumbnail-02.jpg" class="img-fluid" alt="Image article" />--}}
{{--                                </div>--}}
{{--                                <div class="article__card-footer">--}}
{{--                                    <div class="article__card-author">--}}
{{--                                        <img src="assets/images/avatar-women.jpg" class="article__card-avatar" alt="Author Avatar" />--}}
{{--                                        <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Rinna noor</a></p>--}}
{{--                                        <a href="#">29 Des 2018</a>--}}
{{--                                    </div>--}}
{{--                                    <a href="#" class="article__card-action btn-link">Read more</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End testimoni 02 -->--}}

{{--                        <!-- Start testimoni 03 -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="article__card">--}}
{{--                                <div class="article__card-heading">--}}
{{--                                    <a href="#" class="article__card-label">News & Article</a>--}}
{{--                                    <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 23</a>--}}
{{--                                    <h4 class="article__card-title"><a href="#">Sit in pertinax petentium est ne mucius</a></h4>--}}
{{--                                </div>--}}
{{--                                <div class="article__card-image">--}}
{{--                                    <img src="assets/images/blog/thumbnail/img-blog-thumbnail-03.jpg" class="img-fluid" alt="Image article" />--}}
{{--                                </div>--}}
{{--                                <div class="article__card-footer">--}}
{{--                                    <div class="article__card-author">--}}
{{--                                        <img src="assets/images/avatar-man.jpg" class="article__card-avatar" alt="Author Avatar" />--}}
{{--                                        <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Ence iif</a></p>--}}
{{--                                        <a href="#">29 Des 2018</a>--}}
{{--                                    </div>--}}
{{--                                    <a href="#" class="article__card-action btn-link">Read more</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End testimoni 03 -->--}}

{{--                        <!-- Start testimoni 01 -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="article__card">--}}
{{--                                <div class="article__card-heading">--}}
{{--                                    <a href="#" class="article__card-label">News & Article</a>--}}
{{--                                    <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 23</a>--}}
{{--                                    <h4 class="article__card-title"><a href="#">Sit in pertinax petentium est ne mucius</a></h4>--}}
{{--                                </div>--}}
{{--                                <div class="article__card-image">--}}
{{--                                    <img src="assets/images/blog/thumbnail/img-blog-thumbnail-01.jpg" class="img-fluid" alt="Image article" />--}}
{{--                                </div>--}}
{{--                                <div class="article__card-footer">--}}
{{--                                    <div class="article__card-author">--}}
{{--                                        <img src="assets/images/avatar-man.jpg" class="article__card-avatar" alt="Author Avatar" />--}}
{{--                                        <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Ence iif</a></p>--}}
{{--                                        <a href="#">29 Des 2018</a>--}}
{{--                                    </div>--}}
{{--                                    <a href="#" class="article__card-action btn-link">Read more</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End testimoni 01 -->--}}

{{--                        <!-- Start testimoni 02 -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="article__card">--}}
{{--                                <div class="article__card-heading">--}}
{{--                                    <a href="#" class="article__card-label">News & Article</a>--}}
{{--                                    <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 10</a>--}}
{{--                                    <h4 class="article__card-title"><a href="#">Mei ne audire fabulas ea mea quas putent</a></h4>--}}
{{--                                </div>--}}
{{--                                <div class="article__card-image">--}}
{{--                                    <img src="assets/images/blog/thumbnail/img-blog-thumbnail-02.jpg" class="img-fluid" alt="Image article" />--}}
{{--                                </div>--}}
{{--                                <div class="article__card-footer">--}}
{{--                                    <div class="article__card-author">--}}
{{--                                        <img src="assets/images/avatar-women.jpg" class="article__card-avatar" alt="Author Avatar" />--}}
{{--                                        <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Rinna noor</a></p>--}}
{{--                                        <a href="#">29 Des 2018</a>--}}
{{--                                    </div>--}}
{{--                                    <a href="#" class="article__card-action btn-link">Read more</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End testimoni 02 -->--}}

{{--                        <!-- Start testimoni 03 -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="article__card">--}}
{{--                                <div class="article__card-heading">--}}
{{--                                    <a href="#" class="article__card-label">News & Article</a>--}}
{{--                                    <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 23</a>--}}
{{--                                    <h4 class="article__card-title"><a href="#">Sit in pertinax petentium est ne mucius</a></h4>--}}
{{--                                </div>--}}
{{--                                <div class="article__card-image">--}}
{{--                                    <img src="assets/images/blog/thumbnail/img-blog-thumbnail-03.jpg" class="img-fluid" alt="Image article" />--}}
{{--                                </div>--}}
{{--                                <div class="article__card-footer">--}}
{{--                                    <div class="article__card-author">--}}
{{--                                        <img src="assets/images/avatar-man.jpg" class="article__card-avatar" alt="Author Avatar" />--}}
{{--                                        <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Ence iif</a></p>--}}
{{--                                        <a href="#">29 Des 2018</a>--}}
{{--                                    </div>--}}
{{--                                    <a href="#" class="article__card-action btn-link">Read more</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End testimoni 03 -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Section -->--}}

{{--    <!-- Start Section -->--}}
{{--    <section class="section section__cta">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8 offset-lg-2">--}}
{{--                    <h2>Let's try it's free trail for 30 days</h2>--}}
{{--                    <a href="#" class="btn btn-white btn-rounded btn-lg btn-icon-right">Get started <i class="fa fa-long-arrow-right"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Section -->--}}
@endsection
