@extends('layouts.appLHSfixed')
@section('LHS')
    @include('user.banners.login')
@endsection
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('Login') }}</h2>
                </div>
                <div class="card-body">
                    @include('user.forms.login')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
