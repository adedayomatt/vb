@extends('layouts.appRHSfixed')

@section('main')
    <div class="row justify-content-center ">
        <div class="col-md-8 shadow-lg">
            {!!Form::open(['route' => ['biz.tag.update',$businesstag->slug], 'method' => 'POST'])!!}
                @method('PUT')
                <h4>Update Business Tag</h4>
               <h5 class="float-right"><a href="{{route('biz.tag.show',$businesstag->slug)}}">{{$businesstag->name}}</a></h5> 
                <div class="form-group">
                    {{form::label('tag_name', 'Tag Name')}}
                    {{form::text('tag_name',$businesstag->name,['class'=>'form-control', 'placeholder'=>'tag name','required','autofocus'])}}
                    @if($errors->has('tag_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tag_name') }}</strong>
                        </span>
                    @endif
                </div>  

                <div class="form-group">
                    {{form::label('description', 'Description')}}
                    {{form::textarea('description',$businesstag->description,['id'=>'ckeditor','class'=>'form-control','placeholder'=>'about this tag...'])}}
                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 offset-sm-3">
                        {{Form::submit('Update',['class' => 'btn btn-success btn-block'])}}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('RHS')
    <?php
        $w_title = "Businesses";
        $w_collection = $businesstag->businesses;
    ?>
    @include('business.widgets.list')
@endsection

@section('b-scripts')
    @include('layouts.components.ckeditor')
@endsection