@extends('layouts.appLHSfixed')

@section('LHS')
    @if(!auth('vendor')->user()->hasBusiness())
        @include('ven.banners.create-business')
    @else
        <h2>Hey Champ, You already own a business here</h2>
    @endif
@endsection

@section('main')
<div class="row justify-content-center">
    <div class="col-md-8">
    @if(!auth('vendor')->user()->hasBusiness())
        @include('business.forms.create')
    @else
        <?php $business = auth('vendor')->user()->business ?>
        @include('business.widgets.snippet')
    @endif
    </div>
</div>
@endsection

@section('b-scripts')
    @include('layouts.components.ckeditor')
@endsection