@extends('layouts.appRHSfixed')

@section('main')
<div class="row justify-content-center">
    <div class="col-md-8">
        @include('product.forms.edit')
    </div>
</div>
@endsection

@section('RHS')
    @include('product.forms.dp')
    @include('product.forms.gallery')
@endsection


@section('b-scripts')
    @include('layouts.components.ckeditor')
    <script src="{{asset('js/b/image-preview.js')}}"></script>
@endsection