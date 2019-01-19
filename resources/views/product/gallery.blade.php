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
                    <h4>Let's create an amazing gallery for <strong>{{$product->name}}</strong>!</h4>
                @else
                    <h4>Update <strong>{{$product->name}} gallery</strong>!</h4>
                @endif
                <div class="text-center">
                    @if($product->photos->count() > 0)
                        @foreach($product->photos as $photo)
                            <img src="{{$photo->gallery()['src']}}" alt="{{$photo->gallery()['alt']}}" class="gallery" >
                        @endforeach
                    @else
                        <p class="text-danger"><i class="fa fa-triangle-exclamation"></i>  No photo added yet</p>
                    @endif
                </div>
                <div class="row justify-contents-center">
                    <div class="col-md-10">
                        @include('product.forms.gallery')
                    </div>
                </div>
            
        </div>
    </div>
@endsection

@section('b-scripts')
    <script src="{{asset('js/b/image-preview.js')}}"></script>
@endsection
