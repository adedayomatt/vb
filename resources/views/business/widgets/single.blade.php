<div class="list-group-item flex-column align-items-start" >
    <div class="d-flex w-100">
        <img src="{{$business->avatar()['src']}}" alt="{{$business->avatar()['alt']}}" class="business-logo">
        <div>
            <strong>{{$business->name}}</strong>
            <br>
            <a href="{{route('business',[$business->slug])}}">{{$business->slug()}}</a>
        </div>
    </div>
    <div>
    <small class="mr-2"><a href="{{route('business',$business->slug)}}#products"><span class="badge badge-secondary figure">{{$business->products->count()}}</span> products </a></small>
    <small class="mr-2"><a href="{{route('business',$business->slug)}}#services"><span class="badge badge-secondary figure">{{$business->services->count()}}</span> services </a></small>
    </div>
    <div class="mb-1">
        <div class="description-container">
                {!! $business->about() !!}
        </div>
    </div>
    <small class="ml-3"><a href="{{route('category.show',$business->category->slug)}}">{{$business->category->name}}</a></small>
    <small class="grey"><i class="fa fa-user"></i> owned by {{$business->vendor->fullname()}}</small>
    <div>
        @include('business.widgets.tags')
    </div>
</div>