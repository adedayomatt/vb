@extends('layouts.appRHSfixed')

@section('styles')
    <style>
        .product-tag-samples{
            display: flex;
            max-width: 100%;
            overflow-x:auto;
        }
        .product-tag-sample{
            width: 150px;
            height: 200px;
            margin: 0 5px;
        }
        .product-tag-sample img{
            width: 150px;
            height: 150px;
        }

    </style>
@endsection
@section('main')
    <h4>Product Tags</h4>
    <?php
        // $producttags = $_productTags::all();
    ?>
    @if($producttags->count() > 0)
        @foreach($producttags as $producttag)
            <a class="product-tag" href="{{route('biz.tag.show',[$producttag->slug])}}">{{$producttag->name}}</a>
                <div class="card-body product-tag-samples">
                    @if($producttag->products->count() > 0)
                        <?php $tagproducts = $producttag->products->take(5) ?>
                        @foreach($tagproducts as $tagproduct)
                        <div class="product-tag-sample border-1 ">
                                <img src="{{$tagproduct->dp()['src']}}" alt="{{$tagproduct->dp()['alt']}}">
                                <div class="p-2">
                                    <a class="product" href="{{route('biz.product.show',$tagproduct->slug)}}">{{str_limit($tagproduct->name, 20)}}</a>
                                </div>
                            </div> 
                        @endforeach
                    @else
                        <p class="text-center grey"><i class="fa fa-exclamtion-triangle"></i> No product in {{$producttag->name}}</p>
                    @endif
                </div>
        @endforeach
    @else
        <p class="text-danger"><i class="fa fa-exclamation-triangle"></i> No product tag found</p>
    @endif

@endsection

@section('RHS')
 @include('product.category.widget')
@endsection

