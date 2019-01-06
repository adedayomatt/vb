{!!Form::open(['route' => ['update.business.gallery',$business->slug,'cover'], 'method' => 'POST','class' =>'has-image-upload' ,'files' => true])!!}
    @method('PUT')
    <fieldset>
        <legend>Cover </legend>
        <p class="help-text">Add a cover photo to your business page</p>
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <img class="image-responsive" id="cover" src="{{$business->cover()['src']}}" alt="{{$business->cover()['alt']}}" width="100%">
                    <div class="image-preview-container" replace="#cover"></div>
                </div>
            </div>
            
            <div class="col-12">
                <div class="form-group">
                    {{form::file('cover',['class' => 'form-control','accept' =>'image/*'])}}
                    @if ($errors->has('cover'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cover') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="form-group text-right">
            {{form::submit('Update Cover',['class' => 'btn btn-success'])}}
        </div>        
    </fieldset>
{!! Form::close() !!}
