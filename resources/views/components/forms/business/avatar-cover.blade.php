{!!Form::open(['route' => ['update.business.gallery',$business->slug,'avatar'], 'method' => 'POST','class'=>'has-image-upload', 'files' => true])!!}
    @method('PUT')
    <fieldset>
        <legend>Avatar</legend>
        <p class="help-text">This could be your logo if have any. It going to represent your brand</p>
       
        <div class="row">
            <div class="col-sm-6">
                <img class="image-responsive" id="avatar" src="{{$business->avatar()}}" alt="Business Avatar"  width="100%">
                <div class="image-preview-container" replace="#avatar"></div>
                {{form::file('avatar',['class' => 'form-control', 'accept' =>'image/*'])}}
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{form::submit('Update Avatar',['class' => 'btn btn-success'])}}
                </div>
            </div>
        </div>
       
    </fieldset>
{!! Form::close() !!}

{!!Form::open(['route' => ['update.business.gallery',$business->slug,'cover'], 'method' => 'POST','class' =>'has-image-upload' ,'files' => true])!!}
    @method('PUT')
    <fieldset>
        <legend>Cover </legend>
        <p class="help-text">Add a cover photo to your business page</p>
        <div class="row">
            <div class="col-12">
                <img class="image-responsive" id="cover" src="{{$business->cover()}}" alt="Business Cover" width="100%">
                <div class="image-preview-container" replace="#cover"></div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    {{form::file('cover',['class' => 'form-control','accept' =>'image/*'])}}
                </div>
            </div>
        </div>
        <div class="text-right">
            {{form::submit('Update Cover',['class' => 'btn btn-success'])}}
        </div>        
    </fieldset>
{!! Form::close() !!}
