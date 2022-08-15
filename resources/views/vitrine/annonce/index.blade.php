@extends('layouts.appVitrine')
@section('content')

<body>
   @include('vitrine.layout.navbar')
    <div class="ps-page--simple">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="">Annonce</a></li>
                    {{-- <li>Checkout</li> --}}
                </ul>
            </div>
        </div>
        
        <div class="ps-checkout ps-section--shopping">
            <div class="container">
                <div class="ps-section__header">
                    <h1>Créer un annonce</h1>
                </div>
                <div class="ps-section__content">
                    <form class="ps-form--checkout" action="{{route('demande_partenaire')}}" method="POST">
                                    {{ csrf_field()}}
                        
                            <div class="col-lg-12">
                                <div class="ps-section__right">
                                    {{-- <form class="ps-form--account-setting" action="#" method="get"> --}}
                                        <div class="ps-form__header">
                                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informations sur Personnelle</font></font></h3>
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
                                                {{-- <div class="col-sm-6">
                                                    <div class="form-group">
                                                     <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Type</font></font></label>
                                                        <select name="type"class="form-control">
                                                            <option value="Service"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Service</font></font></option>
                                                            <option value="Produit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produit</font></font></option>
                                                        </select>
                                                    </div>    
                                                </div> --}}
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cin</font></font></label>
                                                        <textarea class="form-control" type="text" name="discription" placeholder="Veuillez entrer votre discription...">
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
        </div>
    </div>
    <!--include ../../partials/sections/newsletter-->
    <!--include ../../shared/footers/footer-->
    <div id="back2top"><i class="icon icon-arrow-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                    </div>
                </div>
                <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                </div>
            </div>
        </div>
    </div>
    <!--include ../../data/menu/menu-product-categories-->
    <footer class="ps-footer ps-footer--3">
        <div class="container">
            <div class="ps-block--site-features ps-block--site-features-2">
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-rocket"></i></div>
                    <div class="ps-block__right">
                        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Free Delivery</font></font></h4>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">For all oders over $99</font></font></p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-sync"></i></div>
                    <div class="ps-block__right">
                        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">90 Days Return</font></font></h4>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">If goods have problems</font></font></p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                    <div class="ps-block__right">
                        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Secure Payment</font></font></h4>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100% secure payment</font></font></p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                    <div class="ps-block__right">
                        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24/7 Support</font></font></h4>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dedicated support</font></font></p>
                    </div>
                </div>
            </div>
            <div class="ps-footer__widgets">
                <aside class="widget widget_footer widget_contact-us">
                    <h4 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact us</font></font></h4>
                    <div class="widget_content">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Call us 24/7</font></font></p>
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1800 97 97 69</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">502 New Design Str, Melbourne, Australia </font></font><br><a href="http://nouthemes.net/cdn-cgi/l/email-protection#92f1fdfce6f3f1e6d2fff3e0e6f4e7e0ebbcf1fd"><span class="__cf_email__" data-cfemail="6b0804051f0a081f2b060a191f0d1e1912450804"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">[email&nbsp;protected]</font></font></span></a></p>
                        <ul class="ps-list--social">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quick links</font></font></h4>
                    <ul class="ps-list--link">
                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Policy</font></font></a></li>
                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Term &amp; Condition</font></font></a></li>
                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Shipping</font></font></a></li>
                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Return</font></font></a></li>
                        <li><a href="faqs.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">FAQs</font></font></a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Company</font></font></h4>
                    <ul class="ps-list--link">
                        <li><a href="about-us.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">About Us</font></font></a></li>
                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sharp</font></font></a></li>
                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Career</font></font></a></li>
                        <li><a href="contact-us.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact</font></font></a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bussiness</font></font></h4>
                    <ul class="ps-list--link">
                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Our Press</font></font></a></li>
                        <li><a href="checkout.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Checkout</font></font></a></li>
                        <li><a href="my-account.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">My account</font></font></a></li>
                        <li><a href="shop-default.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Shop</font></font></a></li>
                    </ul>
                </aside>
            </div>
            <div class="ps-footer__links">
                <p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Consumer Electric:</font></font></strong><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Air Conditioners</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Audios &amp; Theaters</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Car Electronics</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Office Electronics</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TV Televisions</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Washing Machines</font></font></a>
                </p>
                <p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clothing &amp; Apparel:</font></font></strong><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Printers</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Projectors</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Scanners</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Store &amp; Business</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4K Ultra HD TVs</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">LED TVs</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">OLED TVs</font></font></a>
                </p>
                <p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Home, Garden &amp; Kitchen:</font></font></strong><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookware</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Decoration</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Furniture</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Garden Tools</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Garden Equipments</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Powers And Hand Tools</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Utensil &amp; Gadget</font></font></a>
                </p>
                <p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Health &amp; Beauty:</font></font></strong><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hair Care</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Decoration</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hair Care</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Makeup</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Body Shower</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Skin Care</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cologine</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfume</font></font></a>
                </p>
                <p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jewelry &amp; Watches:</font></font></strong><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Necklace</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">During</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Diamond Ring</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sliver Earing</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Leather Watcher</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gucci</font></font></a>
                </p>
                <p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Computer &amp; Technologies:</font></font></strong><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desktop PC</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Laptop</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Smartphones</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tablet</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Game Controller</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Audio &amp; Video</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wireless Speaker</font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Done</font></font></a>
                </p>
            </div>
            <div class="ps-footer__copyright">
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2018 Martfury. All Rights Reserved</font></font></p>
                <p><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">We Using Safe Payment For:</font></font></span><a href="#"><img src="http://127.0.0.1:8000/vitrine/img/payment-method/1.jpg" alt=""></a><a href="#"><img src="http://127.0.0.1:8000/vitrine/img/payment-method/2.jpg" alt=""></a><a href="#"><img src="http://127.0.0.1:8000/vitrine/img/payment-method/3.jpg" alt=""></a><a href="#"><img src="http://127.0.0.1:8000/vitrine/img/payment-method/4.jpg" alt=""></a><a href="#"><img src="http://127.0.0.1:8000/vitrine/img/payment-method/5.jpg" alt=""></a></p>
            </div>
        </div>
    </footer>
    @include('vitrine.layout.script')
</body>
@endsection