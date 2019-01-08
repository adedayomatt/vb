<div class="list-group-item list-group-item-action flex-column align-items-start" >
    <div class="d-flex w-100">
        <img src="{{$service->dp()['src']}}" alt="{{$service->dp()['alt']}}" class="dp dp-sm">
        <div>
            <a href="{{route('biz.service.show',[$service->business->slug,$product->slug])}}">{{$service->name}}</a>
             <br><small><a href="#">{{$service->category->name}}</a></small>   
        </div>
           
    </div>
    <div class="mb-1">
        <div class="description-container">
            {!!$service->description()!!}
        </div>
    </div>
    <small class="grey"><i class="fa fa-user"></i>  {{$service->business->name}} <a href="{{route('business',$product->business->slug)}}"></a>{{$service->business->slug()}}</small>
</div>