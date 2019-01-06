<div class="list-group-item list-group-item-action flex-column align-items-start" >
    <div class="d-flex w-100 justify-content-between">
        <div class="row align-items-center" style="width: 80%">
            <div class="col-3">
                <img src="{{$service->dp()['src']}}" alt="{{$service->dp()['alt']}}" class="dp dp-sm">
            </div>
            <div class="col-9">
                <div>
                    <strong>
                        <a href="{{route('biz.service.show',[$service->business->slug,$product->slug])}}">{{$service->name}}</a>
                    </strong>
                </div>
            </div>
        </div> 
        <small><a href="#">{{$service->category->name}}</a></small>       
    </div>
    <div class="mb-1">
        <div class="description-container">
            {!!$service->description()!!}
        </div>
</div>
    <small class="grey"><i class="fa fa-user"></i>  {{$service->business->name}} <a href="{{route('business',$product->business->slug)}}"></a>{{$service->business->slug()}}</small>
</div>