@extends('layouts.app50-50RHSfixed')


@section('LHS')
    @include('business.widgets.list')
    @include('category.widget')
    @include('tag.widget')
@endsection

@section('RHS')
    <div class="row">
        <div class="col-md-6">
            @include('product.widgets.list')
        </div>  
        <div class="col-md-6">
            @include('service.widgets.list')
        </div>
    </div>


@endsection



