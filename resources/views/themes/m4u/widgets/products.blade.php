         <!--product section start-->
    <section class="product_section"> 
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h3>FEATURED PRODUCTS</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="product_area product_column4 owl-carousel">
                    @if($business->products->count() > 0)
                        @foreach($business->products as $product)
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{route('biz.product.show',[$business->slug,$product->slug])}}">
                                            <img src="{{$product->dp()['src']}}" alt="{{$product->dp()['alt']}}">
                                        </a>
                                        <div class="product_hover">
                                            <div class="product_action">
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a class="add_links Wishlist" href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a class="add_to_cart" href="#">add to cart</a></li>
                                                        <li><a class="add_links Compare" href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <h3><a href="{{route('biz.product.show',[$business->slug,$product->slug])}}">{{$product->name}}</a></h3>
                                        <span class="current_price">N {{number_format($product->price)}}</span>
                                        <div class="mt-2">
                                                {!!$product->description()!!}
                                        </div>
                                        @include('product.widgets.tags')
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>No product yet</h1>
                    @endif

                </div>
            </div> <!--End of row-->   
        </div>
    </section>
    <!--product section end-->
    