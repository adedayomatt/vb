<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}">VB</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-auto">
    <li class="nav-item  dropdown">
            <a href="{{route('businesses')}}" class="nav-link dropdown-toggle" id="nav-business-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Businesses
            </a>
            <div class="dropdown-menu" aria-labelledby="nav-business-dropdown">
            <a class="dropdown-item" href="{{route('businesses')}}">See businesses</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('business.categories')}}">Business Categories</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item"  href="{{route('business.tags')}}">Business Tags</a>
            </div>
      </li>
      <li class="nav-item  dropdown">
            <a href="{{route('products')}}" class="nav-link dropdown-toggle" id="nav-product-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
            </a>
            <div class="dropdown-menu" aria-labelledby="nav-product-dropdown">
            <a class="dropdown-item" href="{{route('products')}}">See products</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('product.categories')}}">Product Categories</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item"  href="{{route('product.tags')}}">Product Tags</a>
            </div>
      </li>
      <li class="nav-item  dropdown">
            <a href="{{route('services')}}" class="nav-link dropdown-toggle" id="nav-service-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
            </a>
            <div class="dropdown-menu" aria-labelledby="nav-service-dropdown">
            <a class="dropdown-item" href="{{route('services')}}">See services</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('service.categories')}}">Service Categories</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item"  href="{{route('service.tags')}}">Service Tags</a>
            </div>
      </li>

      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>

<!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @if(Auth::guard('user')->guest() && Auth::guard('vendor')->guest())

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="user-authentication" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User
                    </a>
                    <div class="dropdown-menu" aria-labelledby="user-authentication">
                        <a class="dropdown-item" href="{{route('user.login.form')}}">{{ __('Login') }}</a>
                        <a class="dropdown-item" href="{{route('user.register.form')}}">{{ __('Register') }}</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="vendor-authentication" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Vendor
                    </a>
                    <div class="dropdown-menu" aria-labelledby="vendor-authentication">
                        <a class="dropdown-item" href="{{route('vendor.login.form')}}">{{ __('Login') }}</a>
                        <a class="dropdown-item" href="{{route('vendor.register.form')}}">{{ __('Register') }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Learn More about vendor packages</a>
                    </div>
                </li>
                
            @else

                @auth('user')
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ auth('user')->user()->username() }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""> Switch to vendor account</a>
                            
                            <a class="dropdown-item" href="{{ route('user.logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth

                @auth('vendor')
                    @if(auth('vendor')->user()->hasBusiness())
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('business',[auth('vendor')->user()->business->slug])}}">My Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('biz.product.create',[auth('vendor')->user()->business->slug])}}">New Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('biz.service.create',[auth('vendor')->user()->business->slug])}}">New Service</a>
                        </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('create.business')}}">Create your Business</a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ auth('vendor')->user()->username() }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('vendor.logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth

            @endif            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

  </div>
</nav>