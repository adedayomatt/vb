@extends('layouts.appRHSfixed')

@section('styles')
    <style>
        .service-tag-samples{
            display: flex;
            max-width: 100%;
            overflow-x:auto;
        }
        .service-tag-sample{
            width: 150px;
            height: 200px;
            margin: 0 5px;
        }
        .service-tag-sample img{
            width: 150px;
            height: 150px;
        }

    </style>
@endsection
@section('main')
    <h4>Service Tags</h4>
    <?php
        // $servicetags = $_serviceTags::all();
    ?>
    @if($servicetags->count() > 0)
        @foreach($servicetags as $servicetag)
            <a class="service-tag" href="{{route('service.tag.show',[$servicetag->slug])}}">{{$servicetag->name}}</a>
                <div class="card-body service-tag-samples">
                    @if($servicetag->services->count() > 0)
                        <?php $tagservices = $servicetag->services->take(5) ?>
                        @foreach($tagservices as $tagservice)
                        <div class="service-tag-sample border-1 ">
                                <img src="{{$tagservice->dp()['src']}}" alt="{{$tagservice->dp()['alt']}}">
                                <div class="p-2">
                                    <a class="service" href="{{route('biz.service.show',$tagservice->slug)}}">{{str_limit($tagservice->name, 20)}}</a>
                                </div>
                            </div> 
                        @endforeach
                    @else
                        <p class="text-center grey"><i class="fa fa-exclamtion-triangle"></i> No service in {{$servicetag->name}}</p>
                    @endif
                </div>
        @endforeach
    @else
        <p class="text-danger"><i class="fa fa-exclamation-triangle"></i> No service tag found</p>
    @endif

@endsection

@section('RHS')
 @include('service.category.widget')
@endsection

