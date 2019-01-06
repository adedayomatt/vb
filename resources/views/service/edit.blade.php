@extends('layouts.appRHSfixed')

@section('main')
<div class="row justify-content-center">
    <div class="col-md-8">
        @include('sevice.forms.edit')
    </div>
</div>
@endsection

@section('RHS')
    @include('service.forms.dp')
    @include('service.forms.gallery')
@endsection


@section('b-scripts')
    @include('layouts.components.ckeditor')
    <script src="{{asset('js/b/image-preview.js')}}"></script>
@endsection