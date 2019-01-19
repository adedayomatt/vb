            <!--header middel css here-->
            <div class="header_middel">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="logo">
                                <a href="{{route('business',$business->slug)}}"><img src="{{$business->avatar()['src']}}" alt="{{$business->avatar()['alt']}}" width="70px"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-9">
                            <div class="header_search">
                                <form action="#">
                                    <div class="select_categorie">
                                        <span class="categorie_toggle">All Categories <i class="fa fa-caret-down"></i></span>

                                        <div class="dropdown_categorie">
                                            <ul>
                                                <li><a href="#">All Categories</a></li>
                                                @foreach($_categories::all() as $category)
                                                    <li><a href="{{route('category.show',$category->slug).'?in='.$business->slug}}">{{$category->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <input placeholder="Search product..." type="text" class="product-search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel css here-->
