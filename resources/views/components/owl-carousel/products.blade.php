@if($products->count() > 0)
 <div class="owl-carousel products-carousel">

     @foreach($products as $product)
            <div class="item">
                <div class="content-box text-center py-10">
                    <img src="{{$product->dp()['src']}}" alt="{{$product->dp()['alt']}}" class="carousel-image">
                    <div class="mt-5">
                        <strong><a href="{{route('biz.product.show',[$product->business->slug,$product->slug])}}">{{$product->name}}</a></strong>
                        <div class="mt-3">
                            <p> {{$product->business->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
     

            <div class="item">
                <div class="content-box text-center py-10">
                    <img src="{{$product->dp()['src']}}" alt="{{$product->dp()['alt']}}" class="carousel-image">
                    <div class="mt-5">
                        <strong><a href="{{route('biz.product.show',[$product->business->slug,$product->slug])}}">{{$product->name}}</a></strong>
                        <div class="mt-3">
                            <p> {{$product->business->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
     


     @endforeach
</div>
@else
    <div class="text-center">
        <p class="grey">No product found</p>
    </div>
@endif