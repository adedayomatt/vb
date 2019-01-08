<?php 
    $servicetags = $_serviceTags::all();
?>
<div class="card widget">
    <div class="card-header">
        <h5>Service Tags</h5>
        <form action="">
            <input class="form-control" type="text" placeholder="search for service tag...">
        </form>
    </div>
    <div class="card-body">
        <ul class="list-group ball-bullet">
            @if($servicetags->count() > 0)
                @foreach($servicetags as $servicetag)
                    <li class="list-group-item">
                        <div class="d-flex" >
                            <span class="bullet"></span>
                            <a class="service-tag mr-2" href="{{route('service.tag.show',[$servicetag->slug])}}">{{ $servicetag->name}}</a>
                            <small><span class="badge badge-secondary figure">{{$servicetag->services->count()}}</span> services </small>
                        </div>
                       <small class="grey">{!!$servicetag->description()!!}</small>
                    </li>
                @endforeach
                <div class="text-right">
                    <a href="{{route('service.tags')}}">see all tags</a>
                </div>
            @else
                <li class="list-group-item">
                    <small class="text-danger">No tag found</small>
                </li>
            @endif
        </ul> 
    </div>
</div>
