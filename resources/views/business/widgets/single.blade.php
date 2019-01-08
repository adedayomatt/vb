<div class="list-group-item list-group-item-action flex-column align-items-start" >
    <div class="d-flex w-100">
        <img src="{{$business->avatar()['src']}}" alt="{{$business->avatar()['alt']}}" class="avatar avatar-sm">
        <div>
            <h5>{{$business->name}}</h5>
            <a href="{{route('business',[$business->slug])}}">{{$business->slug()}}</a>
        </div>
    </div>
    <div class="mb-1">
        <div class="description-container">
                {!! $business->description() !!}
        </div>
    </div>
    <small class="ml-3"><a href="{{route('biz.category.show',$business->category->slug)}}">{{$business->category->name}}</a></small>
    <small class="grey"><i class="fa fa-user"></i> owned by {{$business->vendor->fullname()}}</small>
</div>