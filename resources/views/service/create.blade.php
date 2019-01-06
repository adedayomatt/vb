@extends('layouts.appLHSfixed')

@section('LHS')
        @include('ven.banners.add-product')
@endsection

@section('main')
<div class="row justify-content-center">
    <div class="col-md-8">
        @include('service.forms.create')
    </div>
</div>
@endsection

@section('b-scripts')
    @include('layouts.components.ckeditor')
@endsection