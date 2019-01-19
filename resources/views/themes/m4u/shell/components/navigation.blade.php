        <!--header bottom css here-->
        <div class="header_bottom">
            <div class="container">
                <div class="bottom_inner3">   
                    <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="bottom_left">
                            <div class="home_icone">
                                <a href="{{route('business',[$business->slug])}}"><i class="fa fa-home"></i></a>
                            </div>
                            <div class="menu_inner">
                                <div class="main_menu d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="{{route('biz.product.index',[$business->slug])}}">Products <sup><span class="badge badge-secondary">{{$business->products->count()}}</span></sup> </a>     
                                        </li>
                                        <li>
                                            <a href="#about">About </a>     
                                        </li>

                                        <li>
                                            <a href="#contact">Contact </a>     
                                        </li>

                                        <li>
                                            <a href="#contact">Posts <sup><span class="badge badge-secondary">0</span></sup> </a>     
                                        </li>

                                    </ul>
                                </div>
                                <div class="mobile-menu mobail_menu_inner d-lg-none">
                                    <nav>  
                                        <ul>
                                            <li>
                                                <a href="{{route('biz.product.index',[$business->slug])}}">Products <sup><span class="badge badge-secondary">{{$business->products->count()}}</span></sup> </a>     
                                            </li>
                                            <li>
                                                <a href="#about">About </a>     
                                            </li>

                                            <li>
                                                <a href="#contact">Contact </a>     
                                            </li>

                                            <li>
                                                <a href="#contact">Gallery </a>     
                                            </li>

                                            <li>
                                                <a href="#contact">Posts <sup><span class="badge badge-secondary">0</span></sup> </a>     
                                            </li>

                                        </ul>
                                    </nav>      
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="contact_link text-right">
                            <ul>
                                <li><i class="fa  fa-phone"></i><strong>Phone:</strong> <a href="tel: {{$business->phone1}}">{{$business->phone1}}</a></li>
                                <li>/</li>
                                <li><strong><i class="fa fa-envelope"></i> Email:</strong><a href="mailto: {{$business->email}}">{{$business->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--header bottom css here-->     
