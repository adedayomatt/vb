<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-2 col-sm-3 text-center">
                <img src="{{$service->dp()}}" alt="{{$service->name}}" width="100%">
            </div>
            <div class="col-10 col-sm-9">
                <h4>{{$service->name}}</h4>
                @include('widgets.service.operations.edit')
            </div>
        </div>        
    </div>
    <div class="card-body">
        <p class="text-center">
            {!!$service->description()!!}
        </p>
    </div>
</div>
