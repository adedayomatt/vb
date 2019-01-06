{!!Form::open(['route' => ['update.business.gallery',$business->slug,'avatar'], 'method' => 'POST','class'=>'has-image-upload', 'files' => true])!!}
    @method('PUT')
    <fieldset>
        <legend>Avatar</legend>
        <p class="help-text">This could be your logo if have any. It going to represent your brand</p>
       
        <div class="row justify-content-center">
            <div class="col-8 ">
                <div class="text-center">
                    <img class="image-responsive" id="avatar" src="{{$business->avatar()['src']}}" alt="{{$business->avatar()['alt']}}"  width="100%">
                    <div class="image-preview-container" replace="#avatar"></div>
                </div>
                <div class="form-group">
                    {{form::file('avatar',['class' => 'form-control', 'accept' =>'image/*'])}}
                    @if ($errors->has('avatar'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('avatar') }}</strong>
                        </span>
                    @endif
                </div>
                
            </div>
        </div>

        <div class="form-group text-right">
            {{form::submit('Update Avatar',['class' => 'btn btn-success'])}}
        </div>
    </fieldset>
{!! Form::close() !!}
