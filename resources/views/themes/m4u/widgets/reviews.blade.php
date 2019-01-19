    <!--testimonial section area  start-->
    <section class="testimonial_section testimonial_three">
        <div class="testimonial_inner">   
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="about_widget">
                            <img src="{{$business->avatar()['src']}}" alt="{{$business->avatar()['alt']}}">
                            <h4>{{$business->name}}</h4>
                            <p>
                                {{$business->about()}}
                                <a href="#">Read more</a>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="testimonial_area">
                            <h3>Client testimonials</h3>
                            <div class="testimonial_active owl-carousel">
                                <?php for($i=0;$i<=4; $i++){?>
                                    <div class="single_testimonial">  
                                        <div class="testimonial_img">
                                            <img src="assets/img/about/testimonial.jpg" alt="">
                                        </div>
                                        <div class="testimonial_content">
                                            <p>Curabitur rutrum aliquet purus, eu dapibus massa consequat ut. Ut quis turpis turpis. Quisque hendrerit mollis diam in fermentum. Nunc gravida, mi ut porta laoreet, justo nunc bibendum lorem, sed laoreet elit odio vel leo. Nunc in sapien magna. Nulla facilisi. Etiam eget ullamcorper dolor.</p>
                                            <span>Elizabeth Taylor</span>
                                        </div>
                                    </div> 
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="facebook_like_box">
                            <div class="fb-page" data-href="https://www.facebook.com/devitems" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/devitems" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/devitems">DevItems</a></blockquote></div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <!--testimonial section area  end-->