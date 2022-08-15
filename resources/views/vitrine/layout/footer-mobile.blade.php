<div id="back2top"><i class="icon icon-arrow-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Panier</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                @foreach($cart_icon as $cart)

                    <div class="ps-product--cart-mobile">
                        @foreach($product_cart as $prod)
                        <div class="ps-product__thumbnail">
                            @if($prod->id == $cart->prod_id)
                            <a href="#"><img src="{{URL::asset("img/produit/s/$prod->image")}}" alt="">
                            </a>
                            @endif
                        </div>
                        @endforeach
                        <div class="ps-product__content"><a class="ps-product__remove" href="{{ url('/Panier/Effacer-Produit/'.$cart->id)}}"><i class="icon-cross"></i></a><a href="#"><?php echo $cart['prod_nom']; ?></a>
                            <br>
                            {{-- <p><strong>Categorie:</strong> {{$categorie->nom}}</p> --}}
                            <small><?php echo $cart['quantity']; ?> x <?php echo $cart['prix']; ?> TND</small>
                        </div>
                    </div>
                @endforeach

                </div>
                 <?php
                                $total_prix=0;
                                foreach ($cart_icon as $key) {
                                    $total_prix=$total_prix + ($key->prix*$key->quantity);
                                }
                            ?>
                <div class="ps-cart__footer">
                    <h3> Total:<strong><?php echo $total_prix ; ?> TND</font></font></stron</strong></h3>
                    <figure><a class="ps-btn" href="/Panier">Voir Panier</a><a class="ps-btn" href="/Commande">Checkout</a></figure>
                </div>
            </div>
        </div>
    </div>
<div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
            <h3>Categories</h3>
        </div>
        <div class="ps-panel__content">
            <div class="menu--product-categories">
                <div class="menu__toggle"><i class="icon-menu"></i><span> Toutes les catégories</span></div>
                <div class="menu__content">
                    <ul class="menu--mobile">
                            @foreach ($cat as $item)
                        
                        <li class="menu-item-has-children has-mega-menu"><a href="#">{{$item->nom}} ( {{count($item->subcategory)}} )</a><span class="sub-toggle"></span>
                                @if(count($item->subcategory)>0)

                            <div class="mega-menu">
                                        @foreach($item->subcategory as $child)

                                <div class="mega-menu__column">
                                    <h4>{{$child->nom}}<span class="sub-toggle"></span></h4>
                                        @foreach($child->subcategory as $childA)

                                    <ul class="mega-menu__list">
                                        <li><a href="#">{{$childA->nom}}</a>
                                        </li>
                                       
                                    </ul>
                                    @endforeach
                                </div>
                                        @endforeach
                                
                            </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--+createMenu(product_categories, 'menu--mobile')-->
        </div>
    </div>
    <div class="navigation--list">
        <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Recherche</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"><i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo sizeof($cart_icon); ?></font></font></i></i><span> Cart</span></a></div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
        <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="index.html" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile">
        <div class="ps-panel__header">
            <h3>Menu</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children"><a href="/shop">Boutique en ligne</a>
                    
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="/partenaire_servic"> Devenir un partenaire</a>
                    
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Bons plans</a>
                   
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="/annonce">Annonces</a>
                    
                </li>
            </ul>
        </div>
    </div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
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
                                <div class="item"><img src="{{asset('vitrine/img/products/detail/fullwidth/1.jpg')}}" alt=""></div>
                                <div class="item"><img src="{{asset('vitrine/img/products/detail/fullwidth/2.jpg')}}" alt=""></div>
                                <div class="item"><img src="{{asset('vitrine/img/products/detail/fullwidth/3.jpg')}}" alt=""></div>
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
                            <div class="ps-product__shopping"><a class="ps-btn ps-btn--black" href="#">Add to cart</a><a class="ps-btn" href="#">Buy Now</a>
                                <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>