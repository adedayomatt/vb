<?php
    $title = isset($w_title) ? $w_title: 'Businesses';
    $collection = isset($w_collection) ? $w_collection: $_businesses::all();
?>
<div class="card widget-card border-0">
       <div class="card-header border-0">
            <h5>{{$title}}</h5>
        </div>
       <div class="card-body p-0">
            @if($collection->count() >0 )
                <div class="list-group">
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
  

