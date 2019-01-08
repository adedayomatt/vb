<?php 
    $productcategories = $_productCategories::all();
?>
<div class="card widget">
    <div class="card-header">
        <h5>Product Categories</h5>
        <form action="">
            <input class="form-control" type="text" placeholder="search for product category...">
        </form>

    </div>
    <div class="card-body">
        <ul class="list-group ball-bullet">
            @if($productcategories->count() > 0)
                @foreach($productcategories as $productcategory)
                    <li class="list-group-item">
                        <div class="d-flex">
                            <span class="bullet"></span>
                            <a class="business-category mr-2" href="{{route('product.category.show',[$productcategory->slug])}}">{{ $productcategory->name}}</a>
                            <small><span class="badge badge-secondary figure">{{$productcategory->products->count()}}</span> products</small>
                        </div>
                       <small class="grey">{!!$productcategory->description()!!}</small>
                    </li>
                @endforeach
                <div class="text-right">
                    <a href="{{route('product.categories')}}">see all categories</a>
                </div>
            @else
                <li class="list-group-item">
                    <small class="text-danger">No category found</small>
                </li>
            @endif
        </ul> 
    </div>
</div>
