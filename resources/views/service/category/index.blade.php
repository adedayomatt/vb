@extends('layouts.appRHSfixed')

@section('styles')
    <style>
        .service-category-samples{
            display: flex;
            max-width: 100%;
            overflow-x:auto;
        }
        .service-category-sample{
            width: 150px;
            height: 200px;
            margin: 0 5px;
        }
        .service-category-sample img{
            width: 150px;
            height: 150px;
        }

    </style>
@endsection
@section('main')
    <h4>Service Categories</h4>
    <?php
        // $servicecategories = $_servicecategories::all();
    ?>
    @if($servicecategories->count() > 0)
        @foreach($servicecategories as $servicecategory)
            <a class="service-category" href="{{route('service.category.show',[$servicecategory->slug])}}">{{$servicecategory->name}}</a>
                <div class="card-body service-category-samples">
                    @if($servicecategory->services->count() > 0)
                        <?php $categoryservices = $servicecategory->services->take(5) ?>
                        @foreach($categoryservices as $categoryservice)
                        <div class="service-category-sample border-1 ">
                                <img src="{{$categoryservice->dp()['src']}}" alt="{{$categoryservice->dp()['alt']}}">
                                <div class="p-2">
                                    <a class="service" href="{{route('biz.service.show',$categoryservice->slug)}}">{{str_limit($categoryservice->name, 20)}}</a>
                                </div>
                            </div> 
                        @endforeach
                    @else
                        <p class="text-center grey"><i class="fa fa-exclamtion-triangle"></i> No service in {{$servicecategory->name}}</p>
                    @endif
                </div>
        @endforeach
    @else
        <p class="text-danger"><i class="fa fa-exclamation-triangle"></i> No service category found</p>
    @endif

@endsection

@section('RHS')
 @include('service.tag.widget')
@endsection

