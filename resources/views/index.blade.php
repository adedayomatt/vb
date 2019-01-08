@extends('layouts.app50-50RHSfixed')


@section('LHS')
    @include('business.widgets.list')
    @include('business.category.widget')
    @include('business.tag.widget')
@endsection

@section('RHS')
    <div class="row">
        <div class="col-md-6">
            @include('product.widgets.list')
            @include('product.category.widget')
            @include('product.tag.widget')
        </div>  
        <div class="col-md-6">
            @include('service.widgets.list')
            @include('service.category.widget')
            @include('service.tag.widget')
        </div>
    </div>


@endsection



