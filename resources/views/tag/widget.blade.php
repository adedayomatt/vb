<?php 
    $tags = $_tags::all();
?>
<div class="card widget">
    <div class="card-header">
        <h5>Tags</h5>
        @include('tag.components.search')
    </div>
    <div class="card-body">
        <ul class="list-group ball-bullet">
            @if($tags->count() > 0)
                @foreach($tags as $tag)
                    <li class="list-group-item">
                        <div class="d-flex">
                            <span class="bullet"></span>
                            <a class="tag" href="{{route('tag.show',[$tag->slug])}}">{{ $tag->name}}</a>
                        </div>
                        <small class="grey">{!!$tag->description()!!}</small>
                        <div>
                        </div>  

                    </li>
                @endforeach
                <div class="text-right">
                    <a href="{{route('tags')}}">see all tags</a>
                </div>
            @else
                <li class="list-group-item">
                    <small class="text-danger">No tag found</small>
                </li>
            @endif
        </ul> 
    </div>
</div>
