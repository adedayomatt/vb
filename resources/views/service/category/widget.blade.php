<?php 
    $servicecategories = $_serviceCategories::all();
?>
<div class="card widget">
    <div class="card-header">
        <h5>Service Categories</h5>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @if($servicecategories->count() > 0)
                @foreach($servicecategories as $servicecategory)
                    <li class="list-group-item">
                        <div>
                            <a class="business-category" href="{{route('service.category.show',[$servicecategory->slug])}}">{{ $servicecategory->name}}</a>
                            <small><span class="badge badge-secondary figure">{{$servicecategory->services->count()}}</span> services</small>
                        </div>
                       <small class="grey">{!!$servicecategory->description()!!}</small>
                    </li>
                @endforeach
                <div class="text-right">
                    <a href="{{route('service.categories')}}">see all categories</a>
                </div>
            @else
                <li class="list-group-item">
                    <small class="text-danger">No category found</small>
                </li>
            @endif
        </ul> 
    </div>
</div>
