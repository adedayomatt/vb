@extends('layouts.appRHSfixed')

@section('styles')
    <style>
        .business-category-samples{
            display: flex;
            max-width: 100%;
            overflow-x:auto;
        }
        .business-category-sample{
            width: 150px;
            height: 200px;
            margin: 0 5px;
        }
        .business-category-sample img{
            width: 150px;
            height: 150px;
        }

    </style>
@endsection
@section('main')
    <h4>Business Categories</h4>
    <?php
        // $businesscategories = $_businessCategories::all();
    ?>
    @if($businesscategories->count() > 0)
        @foreach($businesscategories as $businesscategory)
            <a class="business-category" href="{{route('biz.category.show',[$businesscategory->slug])}}">{{$businesscategory->name}}</a>
                <div class="card-body business-category-samples">
                    @if($businesscategory->businesses->count() > 0)
                        <?php $categorybusinesses = $businesscategory->businesses->take(5) ?>
                        @foreach($categorybusinesses as $categorybusiness)
                        <div class="business-category-sample border-1 ">
                                <img src="{{$categorybusiness->avatar()['src']}}" alt="{{$categorybusiness->avatar()['alt']}}">
                                <div class="p-2">
                                    {{str_limit($categorybusiness->name, 20)}}
                                    <a class="business" href="{{route('business',$categorybusiness->slug)}}">{{$categorybusiness->slug()}}</a>
                                </div>
                            </div> 
                        @endforeach
                    @else
                        <p class="text-center grey"><i class="fa fa-exclamtion-triangle"></i> No business in {{$businesscategory->name}}</p>
                    @endif
                </div>
        @endforeach
    @else
        <p class="text-danger"><i class="fa fa-exclamation-triangle"></i> No business category found</p>
    @endif

@endsection

@section('RHS')
 @include('business.tag.widget')
@endsection

