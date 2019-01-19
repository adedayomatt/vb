<?php
    $categories = array();
    foreach($_categories::all() as $c){
        $categories["$c->id"] = $c->name; 
    }
    
?>
{{form::select('category',$categories,(isset($category) && $category !== null ? $category->id : null),
['class'=>'form-control','placeholder' => 'Select category','required'])}}
@if ($errors->has('category'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('category') }}</strong>
    </span>
@endif