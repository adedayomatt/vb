@if($business->tags->count() > 0)
    <div>
        @foreach($business->tags as $t)
            <a href="{{route('tag.show',[$t->slug])}}" class="tag" data-toggle="tooltip" title="{{$t->description}}">{{$t->name}}</a>
        @endforeach
    </div>
@endif
