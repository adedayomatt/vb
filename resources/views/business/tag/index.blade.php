@extends('layouts.appRHSfixed')

@section('styles')
    <style>
        .business-tag-samples{
            display: flex;
            max-width: 100%;
            overflow-x:auto;
        }
        .business-tag-sample{
            width: 150px;
            height: 200px;
            margin: 0 5px;
        }
        .business-tag-sample img{
            width: 150px;
            height: 150px;
        }

    </style>
@endsection
@section('main')
    <h4>Business Tags</h4>
    <?php
        // $businesstags = $_businessTags::all();
    ?>
    @if($businesstags->count() > 0)
        @foreach($businesstags as $businesstag)
            <a class="business-tag" href="{{route('biz.tag.show',[$businesstag->slug])}}">{{$businesstag->name}}</a>
                <div class="card-body business-tag-samples">
                    @if($businesstag->businesses->count() > 0)
                        <?php $tagbusinesses = $businesstag->businesses->take(5) ?>
                        @foreach($tagbusinesses as $tagbusiness)
                        <div class="business-tag-sample border-1 ">
                                <img src="{{$tagbusiness->avatar()['src']}}" alt="{{$tagbusiness->avatar()['alt']}}">
                                <div class="p-2">
                                    {{str_limit($tagbusiness->name, 20)}}
                                    <a class="business" href="{{route('business',$tagbusiness->slug)}}">{{$tagbusiness->slug()}}</a>
                                </div>
                            </div> 
                        @endforeach
                    @else
                        <p class="text-center grey"><i class="fa fa-exclamtion-triangle"></i> No business in {{$businesstag->name}}</p>
                    @endif
                </div>
        @endforeach
    @else
        <p class="text-danger"><i class="fa fa-exclamation-triangle"></i> No business tag found</p>
    @endif

@endsection

@section('RHS')
 @include('business.category.widget')
@endsection

