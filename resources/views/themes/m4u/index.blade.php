@extends('themes.m4u.shell.layout')

@section('main')
      <!--slider section start-->
      <section class="slider_section slider_section_three">
        <div class="container">
             @include('themes.m4u.widgets.slider')
        </div>
    </section>
    <!--slider section end-->


        <!--deals section area start-->
        <section class="deals_section deals_section_three">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    @include('themes.m4u.widgets.best-seller')
                </div>
                <div class="col-lg-6 col-md-8">
                    @include('themes.m4u.widgets.deals')
                </div>
                <div class="col-lg-3 col-md-12">
                    @include('themes.m4u.widgets.socials')
                </div>
            </div>
        </div>
    </section>
    <!--deals section area end-->
    @include('themes.m4u.widgets.banners')
    @include('themes.m4u.widgets.products')
    @include('themes.m4u.widgets.banner2')
    @include('themes.m4u.widgets.blog')
    @include('themes.m4u.widgets.reviews')

@endsection
