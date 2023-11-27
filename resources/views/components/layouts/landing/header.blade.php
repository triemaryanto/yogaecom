<div class="menu-right pull-right">
    <div>
        <nav id="main-nav">
            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
            <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                <li>
                    <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li><a href="{{ url('') }}">Home</a></li>
                <li><a href="index.html">product</a></li>
                <li>
                    <a href="#">product</a>
                    <ul>
                        <li><a href="product-page(4-image).html">four image</a></li>
                        <li><a href="product-page(sticky).html">sticky</a></li>
                        <li><a href="product-page(accordian).html">accordian</a></li>
                        <li><a href="product-page(bundle).html">bundle</a></li>
                        <li><a href="product-page(image-swatch).html">image swatch </a></li>
                        <li><a href="product-page(vertical-tab).html">vertical tab</a></li>
                    </ul>
                </li>
                <li><a href="#">pages</a>
                    <ul>
                        <li>
                            <a href="#">vendor</a>
                            <ul>
                                <li><a href="vendor-dashboard.html">vendor dashboard</a>
                                </li>
                                <li><a href="vendor-profile.html">vendor profile</a></li>
                                <li><a href="become-vendor.html">become vendor</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">account</a>
                            <ul>
                                <li><a href="wishlist.html">wishlist</a></li>
                                <li><a href="cart.html">cart</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="login.html">login</a></li>
                                <li><a href="register.html">register</a></li>
                                <li><a href="contact.html">contact</a></li>
                                <li><a href="forget_pwd.html">forget password</a></li>
                                <li><a href="profile.html">profile</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                                <li><a href="order-success.html">order success</a></li>
                                <li><a href="order-tracking.html">order tracking<span class="new-tag">new</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">portfolio</a>
                            <ul>
                                <li><a href="">grid</a>
                                    <ul>
                                        <li><a href="grid-2-col.html">grid
                                                2</a></li>
                                        <li><a href="grid-3-col.html">grid
                                                3</a></li>
                                        <li><a href="grid-4-col.html">grid
                                                4</a></li>
                                    </ul>
                                </li>
                                <li><a href="">masonry</a>
                                    <ul>
                                        <li><a href="masonary-2-grid.html">grid 2</a></li>
                                        <li><a href="masonary-3-grid.html">grid 3</a></li>
                                        <li><a href="masonary-4-grid.html">grid 4</a></li>
                                        <li><a href="masonary-fullwidth.html">full width</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="about-page.html">about us</a></li>
                        <li><a href="search.html">search</a></li>
                        <li><a href="review.html">review</a>
                        </li>
                        <li>
                            <a href="#">compare</a>
                            <ul>
                                <li><a href="compare.html">compare</a></li>
                                <li><a href="compare-2.html">compare-2</a></li>
                            </ul>
                        </li>
                        <li><a href="collection.html">collection</a></li>
                        <li><a href="lookbook.html">lookbook</a></li>
                        <li><a href="sitemap.html">site map</a>
                        </li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="coming-soon.html">coming soon</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">blog</a>
                    <ul>
                        <li><a href="blog-page.html">left sidebar</a></li>
                        <li><a href="blog(right-sidebar).html">right sidebar</a></li>
                        <li><a href="blog(no-sidebar).html">no sidebar</a></li>
                        <li><a href="blog-details.html">blog details</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div>
        <div class="icon-nav">
            <ul>
                <li class="onhover-div mobile-search">
                    <div><img src="{{ asset('multikart_all_in_one/') }}/assets/images/icon/search.png"
                            onclick="openSearch()" class="img-fluid blur-up lazyload" alt="">
                        <i class="ti-search" onclick="openSearch()"></i>
                    </div>
                    <div id="search-overlay" class="search-overlay">
                        <div> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                            <div class="overlay-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Search a Product">
                                                </div>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="onhover-div mobile-setting">
                    <div><img src="{{ asset('multikart_all_in_one/') }}/assets/images/icon/setting.png"
                            class="img-fluid blur-up lazyload" alt=""> <i class="ti-settings"></i></div>
                    <div class="show-div setting">
                        <h6>language</h6>
                        <ul>
                            <li><a href="#">english</a></li>
                            <li><a href="#">french</a></li>
                        </ul>
                        <h6>currency</h6>
                        <ul class="list-inline">
                            <li><a href="#">euro</a></li>
                            <li><a href="#">rupees</a></li>
                            <li><a href="#">pound</a></li>
                            <li><a href="#">doller</a></li>
                        </ul>
                    </div>
                </li>
                <li class="onhover-div mobile-cart">
                    <div><img src="{{ asset('multikart_all_in_one/') }}/assets/images/icon/cart.png"
                            class="img-fluid blur-up lazyload" alt=""> <i class="ti-shopping-cart"></i></div>
                    <span class="cart_qty_cls">2</span>
                    <ul class="show-div shopping-cart">
                        <li>
                            <div class="media">
                                <a href="#"><img alt="" class="me-3"
                                        src="{{ asset('multikart_all_in_one/') }}/assets/images/fashion/product/1.jpg"></a>
                                <div class="media-body">
                                    <a href="#">
                                        <h4>item name</h4>
                                    </a>
                                    <h4><span>1 x $ 299.00</span></h4>
                                </div>
                            </div>
                            <div class="close-circle"><a href="#"><i class="fa fa-times"
                                        aria-hidden="true"></i></a></div>
                        </li>
                        <li>
                            <div class="media">
                                <a href="#"><img alt="" class="me-3"
                                        src="{{ asset('multikart_all_in_one/') }}/assets/images/fashion/product/2.jpg"></a>
                                <div class="media-body">
                                    <a href="#">
                                        <h4>item name</h4>
                                    </a>
                                    <h4><span>1 x $ 299.00</span></h4>
                                </div>
                            </div>
                            <div class="close-circle"><a href="#"><i class="fa fa-times"
                                        aria-hidden="true"></i></a></div>
                        </li>
                        <li>
                            <div class="total">
                                <h5>subtotal : <span>$299.00</span></h5>
                            </div>
                        </li>
                        <li>
                            <div class="buttons"><a href="cart.html" class="view-cart">view
                                    cart</a> <a href="#" class="checkout">checkout</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
