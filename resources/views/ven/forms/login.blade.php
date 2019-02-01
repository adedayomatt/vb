{!!Form::open(['route' => 'vendor.login'])!!}
    <div class="form-input">
        {{form::text('username',old('username'),['class' =>'form-control','placeholder'=>'username','required', 'autofocus'])}}
        @if ($errors->has('username'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('username') }}</strong>
        </span>
        @endif

        {{form::password('password',['class' =>'form-control','placeholder'=>'password','required', 'autofocus'])}}
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>

    <div class="d-flex mt-10 justify-content-between">
        <div class="form-check">
            {{form::checkbox('remember','',old('remember') ? true : ''),['class'=>'form-check-input']}}
            {{form::label('remember',__('Remember Me'),['class'=>'form-check-label'])}}    
        </div>
        @if (Route::has('vendor.password.request'))
            <a href="{{ route('vendor.password.request') }}"> {{ __('Forgot Your Password?') }}</a> 
        @endif
        
    </div>

    {{form::submit('Sign in',['class'=>'btn btn-primary btn-block mt-25 py-11'])}}
   
{!!Form::close()!!}