@extends('layouts.appLHSfixed')
@section('LHS')
    @include('user.banners.register')
@endsection
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('Register') }}</h2>
                </div>
                <div class="card-body">
                    @include('user.forms.register')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
