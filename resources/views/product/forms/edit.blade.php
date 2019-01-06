{!!Form::open(['route' => ['biz.product.update',auth('vendor')->user()->business->slug,$product->slug], 'method' => 'POST'])!!}
    <fieldset>
        <legend>Update Product</legend>
        <h5>{{$product->name}}</h5>
        <div class="form-group">
            {{form::label('product_name', 'Product Name')}}
            {{form::text('product_name',$product->name,['class'=>'form-control', 'placeholder'=>'product name','required', 'autofocus'])}}
            @if ($errors->has('product_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('product_name') }}</strong>
                </span>
            @endif
        </div>  

        <div class="form-group row">
            <div class="col-sm-4">
                {{form::label('category', 'Product category')}}
            </div>
            <div class="col-sm-8">
            <?php
                    $categories = array();
                    foreach($_productCategories::all() as $c){
                        $categories["$c->id"] = $c->name; 
                    }
                ?>
                {{form::select('category',$categories,$product->category->id,
                ['class'=>'form-control','placeholder' => 'Select category','required'])}}

                @if ($errors->has('category'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
                 @endif
            </div>
        </div>

        <div class="form-group">
            {{form::label('description', 'Description')}}
            {{form::textarea('description',$product->description,['id'=>'ckeditor','class'=>'form-control', 'placeholder'=>'All there is to know about the product...'])}}
            @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{form::label('price', 'Price')}}
            {{form::number('price',$product->price,['class'=>'form-control', 'placeholder'=>'price','required','autofocus'])}}
            @if ($errors->has('price'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div> 

    </fieldset>

    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {{Form::submit('Update',['class' => 'btn btn-success btn-block'])}}
        </div>
    </div>
{!! Form::close() !!}