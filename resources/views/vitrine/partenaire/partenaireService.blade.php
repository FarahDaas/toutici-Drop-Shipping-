@extends('layouts.appVitrine')
@section('content')

<body>
    @include('vitrine.layout.navbar')
    @include('vitrine.layout.footer-mobile')
    <div id="homepage-5">
        {{-- <div class="ps-home-banner ps-home-banner--1"> --}}
            <div class="container">
                <div class="ps-section__header" style="text-align: center">
                    <h1>Créer un compte</h1>
                </div>
                <div class="ps-section__content" style="background-color:#fff ;     padding: 10px;">
                    <form class="ps-form--checkout" action="{{route('demande_partenaire')}}" method="POST">
                                    {{ csrf_field()}}
                        
                            <div class="col-lg-12">
                                <div class="ps-section__right">
                                    {{-- <form class="ps-form--account-setting" action="#" method="get"> --}}
                                        <div class="ps-form__header">
                                            {{-- <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informations sur Personnelle</font></font></h4> --}}
                                        </div>
                                        <div class="ps-form__content">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom</font></font></label>
                                                        <input class="form-control" name="nom" type="text" placeholder="Veuillez entrer votre nom...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adress</font></font></label>
                                                            <input class="form-control" type="text" name="adresse" placeholder="Veuillez entrer votre Adresse...">
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Numéro de téléphone</font></font></label>
                                                        <input class="form-control" type="text" name="tel" placeholder="Veuillez entrer le numéro de téléphone...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail</font></font></label>
                                                        <input class="form-control" type="email" name="email" placeholder="Veuillez saisir votre adresse e-mail...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date de naissence</font></font></label>
                                                        <input class="form-control" type="text" 
                                                        name="brith"
                                                        placeholder="Veuillez entrer votre date de naissance...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Genre</font></font></label>
                                                        <select name="gender"class="form-control">
                                                            <option value="Mâle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mâle</font></font></option>
                                                            <option value="Femelle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Femelle</font></font></option>
                                                            <option value="Autre"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autre</font></font></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                     <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Type</font></font></label>
                                                        <select name="type"class="form-control">
                                                            <option value="Service"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Service</font></font></option>
                                                            <option value="Produit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produit</font></font></option>
                                                        </select>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cin</font></font></label>
                                                        <input class="form-control" type="text" name="cin" placeholder="Veuillez entrer votre numero de cin...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group submit">
                                            <button class="ps-btn" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envoyer</font></font></button>
                                        </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        {{-- </div> --}}
                        
                    </form>
                </div>
                
            </div>
        {{-- </div> --}}
    </div>
    @include('vitrine.layout.footer')
    <div id="back2top"><i class="icon icon-arrow-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="#" method="post">
                <input class="form-control" type="text" placeholder="Recherch...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="icon-cross2"></i></span>
                <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                    <div class="ps-product__header">
                        <div class="ps-product__thumbnail" data-vertical="false">
                            <div class="ps-product__images" data-arrow="true">
                                <div class="item"><img src="img/products/detail/fullwidth/1.jpg')}}" alt=""></div>
                                <div class="item"><img src="img/products/detail/fullwidth/2.jpg')}}" alt=""></div>
                                <div class="item"><img src="img/products/detail/fullwidth/3.jpg')}}" alt=""></div>
                            </div>
                        </div>
                        <div class="ps-product__info">
                            <h1>Marshall Kilburn Portable Wireless Speaker</h1>
                            <div class="ps-product__meta">
                                <p>Brand:<a href="shop-default.html">Sony</a></p>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>(1 review)</span>
                                </div>
                            </div>
                            <h4 class="ps-product__price">$36.78 – $56.99</h4>
                            <div class="ps-product__desc">
                                <p>Sold By:<a href="shop-default.html"><strong> Go Pro</strong></a></p>
                                <ul class="ps-list--dot">
                                    <li> Unrestrained and portable active stereo speaker</li>
                                    <li> Free from the confines of wires and chords</li>
                                    <li> 20 hours of portable capabilities</li>
                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                </ul>
                            </div>
                            <div class="ps-product_shopping"><a class="ps-btn ps-btn--black" href="#">Ajouter au panier</a><a class="ps-btn" href="#">Buy Now</a>
                                <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('vitrine/plugins/jquery.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/popper.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/slick/slick/slick.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/slick-animation.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/sticky-sidebar/dist/sticky-sidebar.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('vitrine/plugins/gmap3.min.js')}}"></script>
    <!-- custom scripts-->
    <script src="{{asset('vitrine/js/main.js')}}"></script>
    {{-- @include('vitrine.layout.script') --}}
    {{-- @include('') --}}
</body>
@endsection
