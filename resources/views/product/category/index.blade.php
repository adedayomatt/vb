@extends('layouts.appRHSfixed')

@section('styles')
    <style>
        .product-category-samples{
            display: flex;
            max-width: 100%;
            overflow-x:auto;
        }
        .product-category-sample{
            width: 150px;
            height: 200px;
            margin: 0 5px;
        }
        .product-category-sample img{
            width: 150px;
            height: 150px;
        }

    </style>
@endsection
@section('main')
    <h4>Product Categories</h4>
    <?php
        // $productcategories = $_productcategories::all();
    ?>
    @if($productcategories->count() > 0)
        @foreach($productcategories as $productcategory)
            <a class="product-category" href="{{route('product.category.show',[$productcategory->slug])}}">{{$productcategory->name}}</a>
                <div class="card-body product-category-samples">
                    @if($productcategory->products->count() > 0)
                        <?php $categoryproducts = $productcategory->products->take(5) ?>
                        @foreach($categoryproducts as $categoryproduct)
                        <div class="product-category-sample border-1 ">
                                <img src="{{$categoryproduct->dp()['src']}}" alt="{{$categoryproduct->dp()['alt']}}">
                                <div class="p-2">
                                    <a class="product" href="{{route('biz.product.show',[$categoryproduct->business->slug,$categoryproduct->slug])}}">{{str_limit($categoryproduct->name, 20)}}</a>
                                </div>
                            </div> 
                        @endforeach
                    @else
                        <p class="text-center grey"><i class="fa fa-exclamtion-triangle"></i> No product in {{$categoryproduct->name}}</p>
                    @endif
                </div>
        @endforeach
    @else
        <p class="text-danger"><i class="fa fa-exclamation-triangle"></i> No product category found</p>
    @endif

@endsection

@section('RHS')
 @include('product.tag.widget')
@endsection

