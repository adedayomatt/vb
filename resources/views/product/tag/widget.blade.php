<?php 
    $producttags = $_productTags::all();
?>
<div class="card widget">
    <div class="card-header">
        <h5>Product Tags</h5>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @if($producttags->count() > 0)
                @foreach($producttags as $producttag)
                    <li class="list-group-item">
                        <div>
                            <a class="product-tag" href="{{route('product.tag.show',[$producttag->slug])}}">{{ $producttag->name}}</a>
                            <small><span class="badge badge-secondary figure">{{$producttag->products->count()}}</span> products </small>
                        </div>
                       <small class="grey">{!!$producttag->description()!!}</small>
                    </li>
                @endforeach
                <div class="text-right">
                    <a href="{{route('product.tags')}}">see all tags</a>
                </div>
            @else
                <li class="list-group-item">
                    <small class="text-danger">No tag found</small>
                </li>
            @endif
        </ul> 
    </div>
</div>
