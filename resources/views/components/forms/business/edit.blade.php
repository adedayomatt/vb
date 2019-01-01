{!!Form::open(['route' => ['biz.business.update',$business->slug], 'method' => 'POST'])!!}
    @method('PUT')
    <fieldset>
        <legend>About Your Business</legend>

        <div class="form-group">
            {{form::label('business_name', 'Business Name')}}
            {{form::text('business_name',$business->name,['class'=>'form-control', 'placeholder'=>'Your business name','required'])}}
        </div>  

        <div class="form-group row">
            <div class="col-sm-4">
                {{form::label('category', 'Category')}}
            </div>
            <div class="col-sm-8">
                {{form::select('category',
                ['1' => 'Category A', '2' => 'Category B'],
                $business->business_category_id,
                ['class'=>'form-control','placeholder' => 'Update category','required'])}}
            </div>
        </div>

        <div class="form-group">
            {{form::label('description', 'Description')}}
            {{form::textarea('description',$business->name,['id'=>'ckeditor','class'=>'form-control', 'placeholder'=>'Let people know about your business'])}}
        </div>

    </fieldset>

    <fieldset>
        <legend>Contact</legend>

        <div class="form-group">
            {{form::label('business_address', 'Business Address')}}
            {{form::text('business_address',$business->address,['class'=>'form-control', 'placeholder'=>'Your business address','required'])}}
        </div> 

        <div class="form-group">
            {{form::label('email', 'Business E-mail')}}
            {{form::email('email',$business->email,['class'=>'form-control', 'placeholder'=>'Your business email'])}}
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                {{form::label('phone', 'Business Phone No')}}
                {{form::tel('phone',$business->phone1,['class'=>'form-control', 'placeholder'=>'Your business mobile number','required'])}}
            </div>
            <div class="col-md-6">
                {{form::label('alternative_phone_no', 'Alternative Phone')}}
                {{form::tel('alternative_phone_no',$business->phone2,['class'=>'form-control', 'placeholder'=>''])}}
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
            </div>

        </div> 
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {{Form::submit('Update',['class' => 'btn btn-success btn-block'])}}
        </div>
    </div>
{!! Form::close() !!}
