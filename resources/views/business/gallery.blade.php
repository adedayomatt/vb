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
        <h2>What Next ?</h2>
        <h3>Your business <strong>{{$business->name}}</strong> is about to take a quantum leap</h3>
    @else
        <h4>Update business avatar and cover photo</h4>
    @endif
    @include('business.forms.avatar')
    @include('business.forms.cover')
@endsection

@section('main')
        <h2>Gallery</h2>
        <p class="help-text">Give your customers' eyes something to feed on when visiting your page</p>
            <div class="text-center">
                @if($business->photos->count() > 0)
                    @foreach($business->photos as $gallery)
                        <img src="{{$gallery->gallery()['src']}}" alt="{{$gallery->gallery()['alt']}}" class="gallery" >
                    @endforeach
                @else
                    <p class="text-danger"><i class="fa fa-triangle-exclamation"></i>  No photo added yet</p>
                @endif
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    @include('business.forms.gallery')
                </div>
            </div>
@endsection

@section('b-scripts')
    <script src="{{asset('js/b/image-preview.js')}}"></script>
@endsection
