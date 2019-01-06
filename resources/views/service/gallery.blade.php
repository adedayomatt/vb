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
        <h3>Start attracting your clients to <strong>{{$service->name}}</strong></h3>
    @else
        <h4>Update display photo</h4>
    @endif
    @include('service.forms.dp')
@endsection

@section('main')

    <div class="row">
        <div class="col-12">
                @if(session('new'))
                    <h2>Let's create an amazing gallery for <strong>{{$service->name}}</strong>!</h2>
                    <p class="help-text">You can add photos of your pass work or experiences, it build trust</p>
                @else
                    <h4>Update <strong>{{$service->name}} gallery</strong>!</h4>
                @endif
                <div class="text-center">
                    @if($service->photos->count() > 0)
                        @foreach($service->photos as $gallery)
                            <img src="{{$gallery->url()}}" alt="{{$service->name}} - {{$service->business->name}}" class="gallery" >
                        @endforeach
                    @else
                        <p class="text-danger"><i class="fa fa-triangle-exclamation"></i>  No photo added yet</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        @include('service.forms.gallery')
                    </div>
                </div>
            
        </div>
    </div>
@endsection

@section('b-scripts')
    <script src="{{asset('js/b/image-preview.js')}}"></script>
@endsection
