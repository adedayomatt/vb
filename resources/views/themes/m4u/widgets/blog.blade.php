    <!--blog area start-->
    <section class="blog_area blog_three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h3>FROM THE BLOG</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_active blog_column2 owl-carousel">
                <?php for($i=0;$i<9;$i++){ ?>
                    <div class="col-lg-6">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{$business->cover()['src']}}" alt=""></a>
                                <div class="post_icone">
                                    <a href="blog-details.html"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="blog_content">
                                <div class="post_date">
                                    <span class="day">10</span>
                                    <span class="month">/ Dec</span>
                                </div>
                                <h3 class="post_title"><a href="blog-details.html">{{$business->name}}</a></h3>
                                <p class="post_desc">{{$business->about()}}</p>
                                <a class="read_more" href="blog-details.html">read more</a>
                                <div class="post_meta">
                                    <span><a href="#">admin</a></span>
                                    <span><a href="#">/ 0  comments</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                </div>    
            </div>
        </div>
    </section>
    <!--blog area end-->
