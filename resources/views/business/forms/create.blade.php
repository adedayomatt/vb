{!!Form::open(['route' => 'store.business', 'method' => 'POST'])!!}
    <fieldset>
        <legend>About Your Business</legend>

        <div class="form-group">
            {{form::label('business_name', 'Business Name')}}
            {{form::text('business_name',old('business_name'),['class'=>'form-control', 'placeholder'=>'Your business name','required'])}}
            @if ($errors->has('business_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('business_name') }}</strong>
                </span>
            @endif
        </div>  

        <div class="form-group row justify-content-center">
            <div class="col-sm-8">
               @include('category.attach')
            </div>
        </div>


        <div class="form-group">
            {{form::label('about', 'About')}}
            {{form::textarea('about',old('about'),['class'=>'ckeditor form-control', 'placeholder'=>'Let people know about your business'])}}
            @if ($errors->has('about'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('about') }}</strong>
                </span>
            @endif
        </div>

    </fieldset>

    <fieldset>
        <legend>Contact</legend>

        <div class="form-group">
            {{form::label('business_address', 'Business Address')}}
            {{form::text('business_address',old('business_address'),['class'=>'form-control', 'placeholder'=>'Your business address','required'])}}
            @if ($errors->has('business_address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('business_address') }}</strong>
                </span>
            @endif
        </div> 

        <div class="form-group">
            {{form::label('email', 'Business E-mail')}}
            {{form::email('email',old('email'),['class'=>'form-control', 'placeholder'=>'Your business email'])}}
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                {{form::label('phone', 'Business Phone No')}}
                {{form::tel('phone',old('phone'),['class'=>'form-control', 'placeholder'=>'Your business mobile number','required'])}}
                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                 @endif
            </div>

            <div class="col-md-6">
                {{form::label('alternative_phone_no', 'Alternative Phone')}}
                {{form::tel('alternative_phone_no',old('alternative_phone_no'),['class'=>'form-control', 'placeholder'=>''])}}
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
                {{form::text('slug',old('slug'),['class'=>'form-control', 'placeholder'=>'','required'])}}
                @if ($errors->has('slug'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('slug') }}</strong>
                    </span>
                 @endif
            </div>

        </div> 

        <div class="form-group row justify-content-center">
            <div class="col-sm-8">
                @include('tag.components.attach')
            </div>
        </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {{Form::submit('Create',['class' => 'btn btn-success btn-block'])}}
        </div>
    </div>
{!! Form::close() !!}
