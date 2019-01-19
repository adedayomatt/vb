    <!--header top css here-->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-9">
                    <a href="{{route('home')}}">{{config('app.name')}}</a>
                </div>
                <div class="col-6 col-md-3">
                    <div class="header_top_menu text-right">
                    <div class="shipping_cart">
                                <a href="#">
                                <span>Shopping cart: 2 items £0.00</span>
                                    <span class="cart_icon"><i class="fa fa-shopping-bag"></i></span>
                                </a>
                                <!--mini cart-->
                                 <div class="mini_cart">
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="product-details.html"><img src="assets/img/s_product/product1.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="product-details.html">Etiam molestie</a>
                                            <span class="cart_price">£95.00</span>
                                            <div class="cart_remove">
                                                <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="product-details.html"><img src="assets/img/s_product/product2.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="product-details.html">Congue lectus</a>
                                            <span class="cart_price">£115.00</span>
                                            <div class="cart_remove">
                                                <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total_price">
                                        <span> Subtotal:  </span>
                                        <span class="prices">  $160.00  </span>
                                    </div>
                                    <div class="cart_button">
                                        <a class="button" href="checkout.html"> Check out</a>
                                    </div>
                                </div>
                                <!--mini cart end-->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top css end-->
