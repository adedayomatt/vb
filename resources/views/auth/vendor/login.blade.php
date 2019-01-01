@extends('layouts.appLHSfixed')
@section('LHS')
    @include('widgets.displays.vendor-login')
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
                    @include('components.forms.auth.vendor.login')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
