
    <header class="header header--1" data-sticky="true">
        <div class="header__top">
            <div class="ps-container">
                <div class="header__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><span>Toute les categories</span><i class="icon-menu"></i></div>
                        <div class="menu__content">
                                            <ul class="menu--dropdown">
                                            @foreach ($cat as $item)
                                                <li class="menu-item-has-children has-mega-menu">
                                                    <a href="#"><i class="icon-laundry"></i>
                                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->nom}} ( {{count($item->subcategory)}} )</font></font>
                                                    </a>
                                                @if(count($item->subcategory)>0)
                                                    <div class="mega-menu">
                                                        @foreach($item->subcategory as $child)

                                                        <div class="mega-menu__column">
                                                            <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$child->nom}}</font></font><span class="sub-toggle"></span></h4>
                                                        @foreach($child->subcategory as $childA)

                                                            <ul class="mega-menu__list">
                                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font>{{$childA->nom}}</font></font></a>
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
                                    </div><a class="ps-logo" href="/"><img src="{{asset('img/logott.png')}}" alt=""></a>
                                </div>
                                <div class="header__center">
                                    <form class="ps-form--quick-search" action="#" method="get">
                                        <div class="form-group--icon">
                                            
                                            <i class="icon-chevron-down"></i>
                                                
                                            <select class="form-control">
                                                <option value="0" selected="selected">Categories</option>
                                                @foreach($cat as $category)
                                                <option class="level-0" value="{{$category->id}}">{{$category->nom}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input class="form-control" type="text" placeholder="Chercher..." id="input-search" style="border: 1px solid rgba(0, 0, 0, 0.15);">
                                        <button>Chercher</button>
                                        <div class="ps-panel--search-result">
                                            <div class="ps-panel__content">
                                                <div class="ps-product ps-product--wide ps-product--search-result">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt=""></a></div>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 32GB</a>
                                                        <div class="ps-product__rating">
                                                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
                                                                <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
                                                            </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="2" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="5"></a><div class="br-current-rating">1</div></div></div><span></span>
                                                        </div>
                                                        <p class="ps-product__price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$990.50</font></font></p>
                                                    </div>
                                                </div>
                                                <div class="ps-product ps-product--wide ps-product--search-result">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt=""></a></div>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                                        <div class="ps-product__rating">
                                                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
                                                                <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
                                                            </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="2" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="5"></a><div class="br-current-rating">1</div></div></div><span></span>
                                                        </div>
                                                        <p class="ps-product__price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$1120.50</font></font></p>
                                                    </div>
                                                </div>
                                                <div class="ps-product ps-product--wide ps-product--search-result">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt=""></a></div>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 128GB</a>
                                                        <div class="ps-product__rating">
                                                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
                                                                <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
                                                            </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="2" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="5"></a><div class="br-current-rating">1</div></div></div><span></span>
                                                        </div>
                                                        <p class="ps-product__price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$1220.50</font></font></p>
                                                    </div>
                                                </div>
                                                <div class="ps-product ps-product--wide ps-product--search-result">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/2.jpg" alt=""></a></div>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                                        <div class="ps-product__rating">
                                                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
                                                                <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
                                                            </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="2" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="5"></a><div class="br-current-rating">1</div></div></div><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></span>
                                                        </div>
                                                        <p class="ps-product__price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$36.78 – $56.99</font></font></p>
                                                    </div>
                                                </div>
                                                <div class="ps-product ps-product--wide ps-product--search-result">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/3.jpg" alt=""></a></div>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                                        <div class="ps-product__rating">
                                                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
                                                                <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
                                                            </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="2" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="5"></a><div class="br-current-rating">1</div></div></div><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">02</font></font></span>
                                                        </div>
                                                        <p class="ps-product__price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$125.30</font></font></p>
                                                    </div>
                                                </div>
                                                <div class="ps-product ps-product--wide ps-product--search-result">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/4.jpg" alt=""></a></div>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                                        <div class="ps-product__rating">
                                                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
                                                                <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
                                                            </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="2" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="5"></a><div class="br-current-rating">1</div></div></div><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">02</font></font></span>
                                                        </div>
                                                        <p class="ps-product__price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$55.30</font></font></p>
                                                    </div>
                                                </div>
                                                <div class="ps-product ps-product--wide ps-product--search-result">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/5.jpg" alt=""></a></div>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                                        <div class="ps-product__rating">
                                                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
                                                                <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
                                                            </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="2" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="5"></a><div class="br-current-rating">1</div></div></div><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">02</font></font></span>
                                                        </div>
                                                        <p class="ps-product__price sale"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$41.27</font></font><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$52.99</font></font></del></p>
                                                    </div>
                                                </div>
                                                <div class="ps-product ps-product--wide ps-product--search-result">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/6.jpg" alt=""></a></div>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                        <div class="ps-product__rating">
                                                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>
                                                                <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
                                                                <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
                                                            </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="2" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="1" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="5"></a><div class="br-current-rating">1</div></div></div><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></span>
                                                        </div>
                                                        <p class="ps-product__price sale"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$41.27</font></font><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$62.39</font></font></del></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ps-panel__footer text-center"><a href="shop-default.html">See all results</a></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="header__right">
                                    <div class="header__actions"><a class="header__extra" href="#"><i class="icon-chart-bars"></i><span><i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></i></span></a><a class="header__extra" href="#"><i class="icon-heart"></i><span><i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></i></span></a>
                                        <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo sizeof($cart_icon); ?></font></font></i></span></a>
                            <div class="ps-cart__content">
                                <div class="ps-cart__items">
                              
                                @foreach($cart_icon as $cart)

                                    <div class="ps-product--cart-mobile">
                                        @foreach($product_cart as $prod)
                                            @if($prod->id == $cart->prod_id)

                                        <div class="ps-product__thumbnail"><a href="#"><img src="{{URL::asset("img/produit/s/$prod->image")}}" alt=""></a></div>
                                        @endif
                                        @endforeach
                                        <div class="ps-product__content"><a class="ps-product__remove" href="{{ url('/Panier/Effacer-Produit/'.$cart->id)}}"><i class="icon-cross"></i></a><a href="product-default.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $cart['prod_nom']; ?></font></font></a>
                                            <p><strong><font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;"></font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></p><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $cart['quantity']; ?> x <?php echo $cart['prix']; ?> TND</font></font></small>
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
                                    <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total:</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $total_prix ; ?> TND</font></font></strong></h3>
                                    <figure><a class="ps-btn" href="/Panier"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voir Panier</font></font></a><a class="ps-btn" href="/commande"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Payement</font></font></a></figure>
                                </div>
                            </div>
                                        </div>
                                        <div class="ps-block--user-account"><i class="icon-user"></i>
                                            <div class="ps-block__content">
                                                {{-- <ul class="ps-list--arrow">
                                                    <li><a href="user-information.html">Account Information</a></li>
                                                    <li><a href="notifications.html">Notifications</a></li>
                                                    <li><a href="invoices.html">Invoices</a></li>
                                                    <li><a href="addresses.html">Address</a></li>
                                                    <li><a href="recent-viewed-product.html">Recent Viewed Product</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="#">Logout</a></li>
                                                    <li class="ps-block__footer"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Logout</font></font></a></li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
        <nav class="navigation">
            <div class="ps-container">
                <div class="navigation__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span>Toute les categories</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                            @foreach ($cat as $item)
                                <li class="menu-item-has-children has-mega-menu">
                                    <a href="#"><i class="icon-laundry"></i>
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->nom}} ( {{count($item->subcategory)}} )</font></font>
                                    </a>
                                @if(count($item->subcategory)>0)
                                    <div class="mega-menu">
                                        @foreach($item->subcategory as $child)

                                        <div class="mega-menu__column">
                                            <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$child->nom}}</font></font><span class="sub-toggle"></span></h4>
                                        @foreach($child->subcategory as $childA)

                                            <ul class="mega-menu__list">
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font>{{$childA->nom}}</font></font></a>
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
                </div>
                <div class="navigation__right">
                    <ul class="menu">
                        <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                            {{-- <ul class="sub-menu">
                                <li><a href="index.html">Marketplace Full Width</a>
                                </li>
                                <li><a href="homepage-2.html">Home Auto Parts</a>
                                </li>
                                <li><a href="homepage-10.html">Home Technology</a>
                                </li>
                                <li><a href="homepage-9.html">Home Organic</a>
                                </li>
                                <li><a href="homepage-3.html">Home Marketplace V1</a>
                                </li>
                                <li><a href="home-electronic.html">Home Marketplace V2</a>
                                </li>
                                <li><a href="homepage-5.html">Home Marketplace V3</a>
                                </li>
                                <li><a href="homepage-6.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Home Marketplace V4</font></font></a>
                                </li>
                                <li><a href="homepage-7.html">Home Electronic</a>
                                </li>
                                <li><a href="homepage-8.html">Home Furniture</a>
                                </li>
                                <li><a href="homepage-kids.html">Home Kids</a>
                                </li>
                                <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                                </li>
                                <li><a href="home-medical.html">Home Medical</a>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                            {{-- <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="shop-default.html">Shop Default</a>
                                        </li>
                                        <li><a href="shop-default.html">Shop Fullwidth</a>
                                        </li>
                                        <li><a href="shop-categories.html">Shop Categories</a>
                                        </li>
                                        <li><a href="shop-sidebar.html">Shop Sidebar</a>
                                        </li>
                                        <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                        </li>
                                        <li><a href="shop-carousel.html">Shop Carousel</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Product Layout<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="product-default.html">Default</a>
                                        </li>
                                        <li><a href="product-extend.html">Extended</a>
                                        </li>
                                        <li><a href="product-full-content.html">Full Content</a>
                                        </li>
                                        <li><a href="product-box.html">Boxed</a>
                                        </li>
                                        <li><a href="product-sidebar.html">Sidebar</a>
                                        </li>
                                        <li><a href="product-default.html">Fullwidth</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Product Types<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="product-default.html">Simple</a>
                                        </li>
                                        <li><a href="product-default.html">Color Swatches</a>
                                        </li>
                                        <li><a href="product-image-swatches.html">Images Swatches</a>
                                        </li>
                                        <li><a href="product-countdown.html">Countdown</a>
                                        </li>
                                        <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                                        </li>
                                        <li><a href="product-instagram.html">Instagram</a>
                                        </li>
                                        <li><a href="product-affiliate.html">Affiliate</a>
                                        </li>
                                        <li><a href="product-on-sale.html">On sale</a>
                                        </li>
                                        <li><a href="product-video.html">Video Featured</a>
                                        </li>
                                        <li><a href="product-groupped.html">Grouped</a>
                                        </li>
                                        <li><a href="product-out-stock.html">Out Of Stock</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Woo Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="shopping-cart.html">Shopping Cart</a>
                                        </li>
                                        <li><a href="checkout.html">Checkout</a>
                                        </li>
                                        <li><a href="whishlist.html">Whishlist</a>
                                        </li>
                                        <li><a href="compare.html">Compare</a>
                                        </li>
                                        <li><a href="order-tracking.html">Order Tracking</a>
                                        </li>
                                        <li><a href="#">My Account</a>
                                        </li>
                                        <li><a href="checkout-2.html">Checkout 2</a>
                                        </li>
                                        <li><a href="shipping.html">Shipping</a>
                                        </li>
                                        <li><a href="payment.html">Payment</a>
                                        </li>
                                        <li><a href="payment-success.html">Payment Success</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                            {{-- <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Basic Page<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="about-us.html">About Us</a>
                                        </li>
                                        <li><a href="contact-us.html">Contact</a>
                                        </li>
                                        <li><a href="faqs.html">Faqs</a>
                                        </li>
                                        <li><a href="comming-soon.html">Comming Soon</a>
                                        </li>
                                        <li><a href="404-page.html">404 Page</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="become-a-vendor.html">Become a Vendor</a>
                                        </li>
                                        <li><a href="vendor-store.html">Vendor Store</a>
                                        </li>
                                        <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                        </li>
                                        <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                        </li>
                                        <li><a href="store-list.html">Store List</a>
                                        </li>
                                        <li><a href="store-list.html">Store List 2</a>
                                        </li>
                                        <li><a href="store-detail.html">Store Detail</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Account Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="user-information.html">User Information</a>
                                        </li>
                                        <li><a href="addresses.html">Addresses</a>
                                        </li>
                                        <li><a href="invoices.html">Invoices</a>
                                        </li>
                                        <li><a href="invoice-detail.html">Invoice Detail</a>
                                        </li>
                                        <li><a href="notifications.html">Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                            {{-- <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Blog Layout<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="blog-grid.html">Grid</a>
                                        </li>
                                        <li><a href="blog-list.html">Listing</a>
                                        </li>
                                        <li><a href="blog-small-thumb.html">Small Thumb</a>
                                        </li>
                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Single Blog<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="blog-detail.html">Single 1</a>
                                        </li>
                                        <li><a href="blog-detail-2.html">Single 2</a>
                                        </li>
                                        <li><a href="blog-detail-3.html">Single 3</a>
                                        </li>
                                        <li><a href="blog-detail-4.html">Single 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </li>
                    </ul>
                    <ul class="navigation__extra">
                        
                        <li><a href="/shop"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Boutique en ligne</font></font></a></li>
                        <li>
                            <div class=""><a href="/partenaire_servic"><img src="img/flag/en.png" alt=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Devenir un partenaire</font></font></a>

                            </div>
                        </li>
                        <li><a href="/service"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Services</font></font></a></li>
                        <li>
                            <div ><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bons plans</font></font></a>
                                
                            </div>
                        </li>
                        <li>
                            <div class=""><a href="#"><img src="img/flag/en.png" alt=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Annonces</font></font></a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <header class="header header--mobile" data-sticky="true">
        <div class="header__top">
            <div class="header__left">
                <p>Welcome to Martfury Online Shopping Store !</p>
            </div>
            <div class="header__right">
                <ul class="navigation__extra">
                    <li><a href="#">Sell on Martfury</a></li>
                    <li><a href="#">Tract your order</a></li>
                    <li>
                        <div class="ps-dropdown"><a href="#">US Dollar</a>
                            <ul class="ps-dropdown-menu">
                                <li><a href="#">Us Dollar</a></li>
                                <li><a href="#">Euro</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="ps-dropdown language"><a href="#"><img src="img/flag/en.png" alt="">English</a>
                            <ul class="ps-dropdown-menu">
                                <li><a href="#"><img src="img/flag/germany.png" alt=""> Germany</a></li>
                                <li><a href="#"><img src="img/flag/fr.png" alt=""> France</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navigation--mobile">
            <div class="navigation__left"><a class="ps-logo" href="/"><img  style="width: 90px;" src="{{asset('img/logott.png')}}" alt=""></a></div>
            <div class="navigation__right">
                <div class="header__actions">
                    <div class="ps-cart--mini">
                        <a class="header__extra" href="#"><i class="icon-bag2"></i><span><i><?php echo sizeof($cart_icon); ?></i></span></a>
                            <div class="ps-cart__content">
                                <div class="ps-cart__items">
                              
                                @foreach($cart_icon as $cart)

                                    <div class="ps-product--cart-mobile">
                                        @foreach($product_cart as $prod)
                                            @if($prod->id == $cart->prod_id)

                                        <div class="ps-product__thumbnail"><a href="#"><img src="{{URL::asset("img/produit/s/$prod->image")}}" alt=""></a></div>
                                        @endif
                                        @endforeach
                                        <div class="ps-product__content"><a class="ps-product__remove" href="{{ url('/Panier/Effacer-Produit/'.$cart->id)}}"><i class="icon-cross"></i></a><a href="product-default.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $cart['prod_nom']; ?></font></font></a>
                                            <small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $cart['quantity']; ?> x <?php echo $cart['prix']; ?> TND</font></font></small>
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
                                    <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total:</font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $total_prix ; ?> TND</font></font></strong></h3>
                                    <figure><a class="ps-btn" href="/Panier"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voir Panier</font></font></a><a class="ps-btn" href="/commande"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Payement</font></font></a></figure>
                                </div>
                            </div>
                    </div>
                    <div class="ps-block--user-header">
                        <div class="ps-block__left"><a href="#"><i class="icon-user"></i></a></div>
                        <div class="ps-block__right"><a href="#">Login</a><a href="/partenaire_servic">Devenir partenaire</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="#" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Rechercher...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
    </header>