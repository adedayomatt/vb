<?php
    $title = isset($w_title) ? $w_title: 'Businesses';
    $collection = isset($w_collection) ? $w_collection: $_businesses::all();
?>
<div class="card widget">
       <div class="card-header">
            <h5>{{$title}}</h5>
            @include('business.widgets.search')
        </div>
       <div class="card-body p-0">
            @if($collection->count() >0 )
                <div class="list-group image-bullet">
                    @foreach($collection as $business)
                        @include('business.widgets.single')
                    @endforeach
                </div>
            @else
                <div class="text-center" style="padding: 10px">
                    <small class="text-danger"><i class="fa fa-exclamation-triangle"></i>  No business found</small>
                </div>
            @endif
       </div>
   </div>
  

