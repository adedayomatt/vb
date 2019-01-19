<?php 
    $categories = $_categories::all();
?>
<div class="card widget">
    <div class="card-header">
        <h5>Categories</h5>
    </div>
    <div class="card-body">
        <ul class="list-group ball-bullet">
            @if($categories->count() > 0)
                @foreach($categories as $category)
                    <li class="list-group-item">
                        <div class="d-flex">
                            <span class="bullet"></span>
                            <a class="mr-2 " href="{{route('category.show',[$category->slug])}}">{{ $category->name}}</a>
                            <small><span class="badge badge-secondary figure">{{$category->businesses->count()}}</span> Businesses</small>
                        </div>
                       <small class="grey">{!!$category->description()!!}</small>
                    </li>
                @endforeach
                <div class="text-right">
                    <a href="{{route('categories')}}">see all categories</a>
                </div>
            @else
                <li class="list-group-item">
                    <small class="text-danger">No category found</small>
                </li>
            @endif
        </ul> 
    </div>
</div>
