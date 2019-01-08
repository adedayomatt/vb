<?php 
    $businesscategories = $_businessCategories::all();
?>
<div class="card widget">
    <div class="card-header">
        <h5>Business Categories</h5>
        <form action="">
            <input class="form-control" type="text" placeholder="search for business category...">
        </form>
    </div>
    <div class="card-body">
        <ul class="list-group ball-bullet">
            @if($businesscategories->count() > 0)
                @foreach($businesscategories as $businesscategory)
                    <li class="list-group-item">
                        <div class="d-flex">
                            <span class="bullet"></span>
                            <a class="business-category mr-2 " href="{{route('biz.category.show',[$businesscategory->slug])}}">{{ $businesscategory->name}}</a>
                            <small><span class="badge badge-secondary figure">{{$businesscategory->businesses->count()}}</span> Businesses</small>
                        </div>
                       <small class="grey">{!!$businesscategory->description()!!}</small>
                    </li>
                @endforeach
                <div class="text-right">
                    <a href="{{route('business.categories')}}">see all categories</a>
                </div>
            @else
                <li class="list-group-item">
                    <small class="text-danger">No category found</small>
                </li>
            @endif
        </ul> 
    </div>
</div>
