{!!Form::open(['route' => ['update.business',$business->slug], 'method' => 'POST'])!!}
    @method('PUT')
    <fieldset>
        <legend>About Your Business</legend>

        <div class="form-group">
            {{form::label('business_name', 'Business Name')}}
            {{form::text('business_name',$business->name,['class'=>'form-control', 'placeholder'=>'Your business name','required'])}}
            @if ($errors->has('business_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('business_name') }}</strong>
                </span>
            @endif
        </div>  

        <div class="form-group row">
            <div class="col-sm-4">
                {{form::label('category', 'Category')}}
            </div>
            <div class="col-sm-8">
                <?php
                    $categories = array();
                    foreach($_businessCategories::all() as $c){
                        $categories["$c->id"] = $c->name; 
                    }
                ?>
                {{form::select('category',$categories,$business->category->id,
                ['class'=>'form-control','placeholder' => 'update category','required'])}}
                @if ($errors->has('category'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('category') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            {{form::label('description', 'Description')}}
            {{form::textarea('description',$business->description,['id'=>'ckeditor','class'=>'form-control', 'placeholder'=>'Let people know about your business'])}}
            @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>

    </fieldset>

    <fieldset>
        <legend>Contact</legend>

        <div class="form-group">
            {{form::label('business_address', 'Business Address')}}
            {{form::text('business_address',$business->address,['class'=>'form-control', 'placeholder'=>'Your business address','required'])}}
            @if ($errors->has('business_address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('business_address') }}</strong>
                </span>
            @endif
        </div> 

        <div class="form-group">
            {{form::label('email', 'Business E-mail')}}
            {{form::email('email',$business->email,['class'=>'form-control', 'placeholder'=>'Your business email'])}}
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                {{form::label('phone', 'Business Phone No')}}
                {{form::tel('phone',$business->phone1,['class'=>'form-control', 'placeholder'=>'Your business mobile number','required'])}}
                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                 @endif
            </div>
            <div class="col-md-6">
                {{form::label('alternative_phone_no', 'Alternative Phone')}}
                {{form::tel('alternative_phone_no',$business->phone2,['class'=>'form-control', 'placeholder'=>''])}}
                @if ($errors->has('alternative_phone_no'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('alternative_phone_no') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
    </fieldset>

    <div class="form-group">
            {{form::label('slug', 'Slug')}}
            <p class="help-text">URL user can access your business page with</p>
            <div class="input-group">
                <div class="input-group-append ">
                    <span class="input-group-text " id="basic-addon1">
                        {{config('app.url')}}/@
                    </span>
                </div>
                {{form::text('slug',$business->slug,['class'=>'form-control', 'placeholder'=>'','required'])}}
                @if ($errors->has('slug'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('slug') }}</strong>
                    </span>
                 @endif
            </div>

        </div> 
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {{Form::submit('Update',['class' => 'btn btn-success btn-block'])}}
        </div>
    </div>
{!! Form::close() !!}
