        <div class="top-bar-box pl-0" style="background-color: #fff">
            <div class="container">
                @include('layouts.stackbox.components.top-bar')
                <div class="top-nav-box">
                    <ul class="top-nav">
                        <li>
                            <a href="{{route('home')}}"><i class="icon mdi mdi-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li>
                            <a href="{{route('products')}}"><i class="icon mdi mdi-box-shadow" aria-hidden="true"></i> Businesses</a>
                            <div class="sub-menu">
                                <ul>
                                    @foreach($_categories::all() as $category)
                                    <li>
                                        <a href="{{route('category.businesses',$category->slug)}}">{{$category->name}} <span class="badge badge-primary">{{$category->businesses->count()}} businesses</span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="{{route('products')}}"><i class="icon mdi mdi-box-shadow" aria-hidden="true"></i> Products</a>
                            <div class="sub-menu">
                                <ul>
                                    @foreach($_categories::all() as $category)
                                    <li>
                                        <a href="{{route('category.products',$category->slug)}}">{{$category->name}} <span class="badge badge-primary">{{$category->products->count()}} products</span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#"><i class="icon mdi mdi-box-shadow" aria-hidden="true"></i> Deals</a>
                        </li>

                        <li>
                            <a href="#"><i class="icon mdi mdi-box-shadow" aria-hidden="true"></i> Posts</a>
                        </li>

                        <li>
                            <a href="#"><i class="icon mdi mdi-box-shadow" aria-hidden="true"></i> Discussions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>