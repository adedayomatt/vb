@extends('layouts.appLHSfixed')

@section('styles')
    <style>
        .gallery{
            width: 300px;
            margin: 5px;
        }
    </style>
@endsection

@section('LHS')
    @if(session('new'))
        <h3>It's time to start attracting your customers to <strong>{{$product->name}}</strong></h3>
    @else
        <h4>Update display photo</h4>
    @endif
    @include('product.forms.dp')
@endsection

@section('main')

    <div class="row">
        <div class="col-12">
                @if(session('new'))
                    <h2>Let's create an amazing gallery for <strong>{{$product->name}}</strong>!</h2>
                @else
                    <h4>Update <strong>{{$product->name}} gallery</strong>!</h4>
                @endif
                <div class="text-center">
                    @if($product->photos->count() > 0)
                        @foreach($product->photos as $gallery)
                            <img src="{{$gallery->url()}}" alt="{{$product->name}} - {{$product->business->name}}" class="gallery" >
                        @endforeach
                    @else
                        <p class="text-danger"><i class="fa fa-triangle-exclamation"></i>  No photo added yet</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        @include('product.forms.gallery')
                    </div>
                </div>
            
        </div>
    </div>
@endsection

@section('b-scripts')
    <script src="{{asset('js/b/image-preview.js')}}"></script>
@endsection
