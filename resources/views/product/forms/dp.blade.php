{!!Form::open(['route' => ['update.product.gallery',$product->business->slug,$product->slug,'dp'], 'method' => 'POST','class'=>'has-image-upload','required', 'files' => true])!!}
    @method('PUT')
    <fieldset>
        <legend>Display photo</legend>
        <p class="help-text">Photo customers will see at the first look of {{$product->name}}. Remember, first impression matters</p>
       
        <div class="row justify-content-center">
            <div class="col-8 ">
                <div class="text-center">
                    <img class="image-responsive" id="dp" src="{{$product->dp()['src']}}" alt="{{$product->dp()['alt']}} - {{$product->business->name}}"  width="100%">
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
