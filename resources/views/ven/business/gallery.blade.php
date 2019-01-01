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
        <h2>Just a moment...</h2>
        <h3>Your business <strong>{{$business->name}}</strong> is about to take a quantum leap</h3>
        @include('components.forms.business.avatar-cover')
    @endif
    @include('components.forms.business.avatar-cover')
@endsection

@section('main')
    @if(session('new'))
        <h2>Just a moment...</h2>
        <h3>Your business <strong>{{$business->name}}</strong> is about to take a quantum leap</h3>
        @include('components.forms.business.avatar-cover')
    @endif

<div class="row">
    <div class="col-12">
        <h2>Gallery</h2>
        <p class="help-text">Give your customers' eyes something to feed on when visiting your page</p>
            <div class="text-center">
                @if($business->photos->count() > 0)
                    @foreach($business->photos as $gallery)
                        <img src="{{$gallery->url()}}" alt="{{$business->name}}" class="gallery" >
                    @endforeach
                @else
                    <p class="text-danger"><i class="fa fa-triangle-exclamation"></i>  No photo added yet</p>
                @endif
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @include('components.forms.business.gallery')
                </div>
            </div>
        
    </div>
</div>
@endsection

@section('b-scripts')
    <script src="{{asset('js/b/image-preview.js')}}"></script>
@endsection
