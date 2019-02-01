@if($businesses->count() > 0)
<div class="owl-carousel businesses-carousel">
     @foreach($businesses as $business)
     <div class="item">
            <div class="content-box text-center py-10">
                <img src="{{$business->avatar()['src']}}" alt="{{$business->avatar()['alt']}}" class="carousel-image">
                <div class="mt-5">
                    <strong>{{$business->name}}</strong>
                    <div class="mt-3">
                        <a href="{{route('business',$business->slug)}}">{{$business->slug()}}</a>
                    </div>
                    <div class="mt-3">
                        <strong> {{$business->products->count()}} products</strong>
                    </div>
                </div>
            </div>
        </div>

     @endforeach
</div>
@else
    <div class="text-center">
        <p class="grey">No business found</p>
    </div>
@endif