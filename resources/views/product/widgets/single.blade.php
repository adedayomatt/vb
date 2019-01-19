<div class="list-group-item list-group-item-action flex-column align-items-start" >
    <div class="d-flex w-100">
        <img src="{{$product->dp()['src']}}" alt="{{$product->dp()['alt']}}" class="dp dp-sm">
        <div>
            <a href="{{route('biz.product.show',[$product->business->slug,$product->slug])}}">{{$product->name}}</a>
            <br>
            <small><span class="grey">category: </span><a href="{{route('category.show',$product->category->slug)}}">{{$product->category->name}}</a></small>       
        </div>
    </div>
    <div class="mb-1">
        <div class="description-container">
            {!!$product->description()!!}
        </div>
    </div>
    @include('product.widgets.tags')
    <small class="grey"><i class="fa fa-user"></i>  {{$product->business->name}} <a href="{{route('business',$product->business->slug)}}">{{$product->business->slug()}}</a></small>
</div>