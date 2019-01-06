<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-2 text-center">
                <img src="{{$business->avatar()['src']}}" alt="{{$business->avatar()['alt']}}" class="avatar avatar-sm">
            </div>
            <div class="col-10">
                <h4>{{$business->name}}</h4>
                @include('business.widgets.operations.edit')
            </div>
        </div>        
    </div>
    <div class="card-body">
        <p class="text-center">
            {!!$business->description()!!}
        </p>
    </div>
</div>
