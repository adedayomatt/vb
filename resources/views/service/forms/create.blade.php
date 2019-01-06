{!!Form::open(['route' => ['biz.service.store',auth('vendor')->user()->business->slug], 'method' => 'POST'])!!}
    <fieldset>
        <legend>New Service</legend>
        <div class="form-group">
            {{form::label('service_name', 'Service Name')}}
            {{form::text('service_name',old('service_name'),['class'=>'form-control', 'placeholder'=>'service name','required', 'autofocus'])}}
            @if ($errors->has('service_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('service_name') }}</strong>
                </span>
            @endif
        </div>  

        <div class="form-group row">
            <div class="col-sm-4">
                {{form::label('category', 'Service category')}}
            </div>
            <div class="col-sm-8">
            <?php
                    $categories = array();
                    foreach($_serviceCategories::all() as $c){
                        $categories["$c->id"] = $c->name; 
                    }
                ?>
                {{form::select('category',$categories,null,
                ['class'=>'form-control','placeholder' => 'Select category','required'])}}

                @if ($errors->has('category'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
                 @endif
            </div>
        </div>

        <div class="form-group">
            {{form::label('description', 'Description')}}
            <p class="help-text">You can mention your pricing system here also</p>
            {{form::textarea('description',old('description'),['id'=>'ckeditor','class'=>'form-control', 'placeholder'=>'All there is to know about the product...'])}}
            @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>

    </fieldset>

    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {{Form::submit('Create',['class' => 'btn btn-success btn-block'])}}
        </div>
    </div>
{!! Form::close() !!}
