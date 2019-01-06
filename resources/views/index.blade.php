@extends('layouts.appLHSfixedRHSfixed')

@section('LHS')
    @include('product.widgets.list')
    @include('product.category.widget')
    @include('product.tag.widget')
@endsection

@section('main')
    @include('business.widgets.list')
    @include('business.category.widget')
    @include('business.tag.widget')
@endsection

@section('RHS')
    @include('service.widgets.list')
    @include('service.category.widget')
    @include('service.tag.widget')

@endsection



