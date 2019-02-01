@extends('layouts.appLHSfixedRHSfixed')


@section('LHS')
@include('category.widget')
@endsection

@section('main')
    @include('business.widgets.list')
    @include('product.widgets.list')
@endsection

@section('RHS')
    @include('tag.widget')
@endsection



