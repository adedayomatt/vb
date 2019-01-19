<?php $business = $product->business ?>
@extends('themes.m4u.shell.layout')

@section('main')
    <!--product details start-->
     <div class="product_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                   <div class="product-details-tab">

                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{$product->dp['src']}}" data-zoom-image="{{$product->dp()['src']}}" alt="{{$product->dp()['alt']}}">
                            </a>
                        </div>

                        @if($product->photos->count() > 0)
                            <div class="single-zoom-thumb mt-20">                           
                                <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                    @foreach($product->photos as $photo)
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{$photo->gallery()['src']}}" data-zoom-image="{{$photo->gallery()['src']}}">
                                                <img src="{{$photo->gallery()['src']}}" alt="{{$photo->gallery()['alt']}}"/>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="product_d_right">
                        <h1>{{$product->name}}</h1>

                        <div class="product_price">
                            <span class="current_price">N {{$product->price}}</span>
                            <!-- <span class="old_price">£80.00</span> -->
                        </div>
                        <div class="product_desc">
                            {!!$product->description()!!}
                        </div>
                        

                        <div class="box_quantity">
                            <form action="#">
                                <label>quantity</label>
                                <input min="0" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>  
                            </form> 
                            
                        </div>
                        <div class="product_d_action">
                           <ul>
                               <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                               <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick View"><i class="fa fa-eye"></i></a></li>
                           </ul>
                        </div>

                        <div class="priduct_social">
                            <h3>Share on:</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                            </ul>      
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 offset-lg-0 col-md-6 offset-md-3">
                    <div class="best_seller_product">
                        <div class="best_seller_titile">
                            <h3>BEST SELLER</h3>
                        </div>
                        <div class="bestseller_slider bestseller_column3">
                            <div class="single_bestseller">
                                <div class="bestseller_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="assets/img/s_product/product4.jpg" alt="">
                                        <img class="secondary_img" src="assets/img/s_product/product5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="bestseller_content">
                                    <h3><a href="product-details.html">aliquam lobortis</a></h3>
                                    <div class="product_ratting">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_price">
                                        <span>£80.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_bestseller">
                                <div class="bestseller_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="assets/img/s_product/product1.jpg" alt="">
                                        <img class="secondary_img" src="assets/img/s_product/product3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="bestseller_content">
                                    <h3><a href="product-details.html">Aenean tristique</a></h3>
                                    <div class="product_ratting">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_price">
                                        <span>£70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_bestseller">
                                <div class="bestseller_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="assets/img/s_product/product6.jpg" alt="">
                                        <img class="secondary_img" src="assets/img/s_product/product7.jpg" alt="">
                                    </a>
                                </div>
                                <div class="bestseller_content">
                                    <h3><a href="product-details.html">Aenean sagittis</a></h3>
                                    <div class="product_ratting">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_price">
                                        <span>£65.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_bestseller">
                                <div class="bestseller_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="assets/img/s_product/product2.jpg" alt="">
                                        <img class="secondary_img" src="assets/img/s_product/product8.jpg" alt="">
                                    </a>
                                </div>
                                <div class="bestseller_content">
                                    <h3><a href="product-details.html">Fermentum eros</a></h3>
                                    <div class="product_ratting">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_price">
                                        <span>£80.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--product details end-->
    
    <!--product info start-->
    <div class="product_d_info">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">   
                        <div class="product_info_button">    
                            <ul class="nav" role="tablist">
                                <li >
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">More info</a>
                                </li>
                                <li>
                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_info_content">
                                    {!!$product->description('full')!!}
                                </div>    
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                <strong>No reviews yet</strong>
                                <div class="product_review_form">
                                    <form action="#">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="review_comment">Your review </label>
                                                <textarea name="comment" id="review_comment" ></textarea>
                                            </div> 
                                            <div class="col-lg-6 col-md-6">
                                                <label for="author">Name</label>
                                                <input id="author"  type="text">

                                            </div> 
                                            <div class="col-lg-6 col-md-6">
                                                <label for="email">Email </label>
                                                <input id="email"  type="text">
                                            </div>  
                                        </div>
                                        <button type="submit">Submit</button>
                                     </form>   
                                </div>     
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>    
    </div>  
    <!--product info end-->
    
     <!--Related Products section start-->
    <section class="product_section related_product"> 
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h3>Related Products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_area product_column4 owl-carousel">
                    @if($product->relatedProducts()->count)
                    <div class="col-lg-3">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
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
                                <h3><a href="product-details.html">Ornare sed consequat</a></h3>
                                <span class="current_price">£515.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                <div class="product_hover">
                                    <div class="product_ratting">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
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
                                <h3><a href="product-details.html">Etiam molestie</a></h3>
                                <span class="current_price">£95.00</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                <div class="product_hover">
                                    <div class="product_ratting">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
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
                                <h3><a href="product-details.html">Aenean sagittis</a></h3>
                                <span class="current_price">£510.00</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                <div class="product_hover">
                                    <div class="product_ratting">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
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
                                <h3><a href="product-details.html">Congue lectus</a></h3>
                                <span class="current_price">£75.00</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                <div class="product_hover">
                                    <div class="product_ratting">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
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
                                <h3><a href="product-details.html">Condimentum posuere</a></h3>
                                <span class="current_price">£80.00</span>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                <div class="product_hover">
                                    <div class="product_ratting">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
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
                                <h3><a href="product-details.html">Dignissim venenatis</a></h3>
                                <span class="current_price">£515.00</span>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>    
        </div>
    </section>
    <!--Related Products end-->
    
    
     <!--Upsell Productss area-->
    <section class="product_categorie upsell_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h3>Upsell Products</h3>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="row">
                        <div class="product_area product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                        <div class="product_hover">
                                            <div class="product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
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
                                        <h3><a href="product-details.html">Ornare sed consequat</a></h3>
                                        <span class="current_price">£515.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                        <div class="product_hover">
                                            <div class="product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
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
                                        <h3><a href="product-details.html">Etiam molestie</a></h3>
                                        <span class="current_price">£95.00</span>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                        <div class="product_hover">
                                            <div class="product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
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
                                        <h3><a href="product-details.html">Aenean sagittis</a></h3>
                                        <span class="current_price">£510.00</span>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                        <div class="product_hover">
                                            <div class="product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
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
                                        <h3><a href="product-details.html">Congue lectus</a></h3>
                                        <span class="current_price">£75.00</span>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
                                        <div class="product_hover">
                                            <div class="product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
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
                                        <h3><a href="product-details.html">Condimentum posuere</a></h3>
                                        <span class="current_price">£80.00</span>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
                                        <div class="product_hover">
                                            <div class="product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
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
                                        <h3><a href="product-details.html">Dignissim venenatis</a></h3>
                                        <span class="current_price">£515.00</span>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!--Upsell Products end-->
@endsection