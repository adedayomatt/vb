{!!Form::open(['route' => ['update.service.gallery',$service->business->slug,$service->slug,'dp'], 'method' => 'POST','class'=>'has-image-upload', 'files' => true])!!}
    @method('PUT')
    <fieldset>
        <legend>Display photo</legend>
        <p class="help-text">Photo clients will see at the first look of your service. Remember, first impression matters</p>
       
        <div class="row justify-content-center">
            <div class="col-8 ">
                <div class="text-center">
                    <img class="image-responsive" id="dp" src="{{$service->dp()}}" alt="{{$service->name}} - {{$service->business->name}}"  width="100%">
                    <div class="image-preview-container" replace="#dp"></div>
                </div>
                <div class="form-group">
                    {{form::file('display_photo',['class' => 'form-control', 'accept' =>'image/*'])}}
                    @if ($errors->has('display_photo'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('display_photo') }}</strong>
                        </span>
                    @endif
                </div>
                
            </div>
        </div>

        <div class="form-group text-right">
            {{form::submit('Update DP',['class' => 'btn btn-success'])}}
        </div>
    </fieldset>
{!! Form::close() !!}
