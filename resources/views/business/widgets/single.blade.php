<div class="list-group-item list-group-item-action flex-column align-items-start" >
    <div class="d-flex w-100 justify-content-between">
        <div class="row align-items-center" style="width: 80%">
            <div class="col-3">
                <img src="{{$business->avatar()['src']}}" alt="{{$business->avatar()['alt']}}" class="avatar avatar-sm">
            </div>
            <div class="col-9">
                <div class="">
                    <h5>{{$business->name}}</h5>
                    <a href="{{route('business',[$business->slug])}}">{{$business->slug()}}</a>
                </div>
            </div>
        </div> 
        <small><a href="#">{{$business->category->name}}</a></small>       
    </div>
    <div class="mb-1">
        <div class="description-container">
                {!! $business->description() !!}
    </div>
</div>
    <small class="grey"><i class="fa fa-user"></i> owned by {{$business->vendor->fullname()}}</small>
</div>