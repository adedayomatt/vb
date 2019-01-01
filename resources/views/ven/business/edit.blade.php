@extends('layouts.appRHSfixed')

@section('header')
    Create your business
@endsection
@section('main')
<div class="row justify-content-center">
    <div class="col-md-8">
        @include('components.forms.business.edit')
    </div>
</div>
@endsection

@section('RHS')
    @include('components.forms.business.avatar-cover')
    @include('components.forms.business.gallery')
@endsection


@section('b-scripts')
    @include('layouts.components.ckeditor')
    <script src="{{asset('js/b/image-preview.js')}}"></script>
@endsection