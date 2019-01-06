<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-2 col-sm-3 text-center">
                <img src="{{$product->dp()['src']}}" alt="{{$product->dp()['alt']}}" width="100%">
            </div>
            <div class="col-10 col-sm-9">
                <h4>{{$product->name}}</h4>
                @include('widgets.product.operations.edit')
            </div>
        </div>        
    </div>
    <div class="card-body">
        <p class="text-center">
            {!!$product->description()!!}
        </p>
    </div>
</div>
