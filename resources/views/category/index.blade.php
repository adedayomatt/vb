@extends('layouts.appRHSfixed')

@section('main')
    @if($categories->count() > 0)
        @foreach($categories as $category)
           <div class="content-box fadeInUp animated">
               <div class="p-20 mt-5">
                    <h4>{{$category->name}}</h4>
                    <div>
                        {{$category->description()}}
                    </div>
                    <strong>Businesses <span class="badge badge-primary">{{$category->businesses->count()}}</span></strong>
                    <?php $businesses = $category->businesses ?>    
                    @include('components.owl-carousel.businesses')
                    
                    <strong>Products <span class="badge badge-primary">{{$category->products->count()}}</span></strong>
                    <?php $products = $category->products ?>    
                    @include('components.owl-carousel.products')
                </div>
           </div>
        @endforeach
    @else
        <div class="alert alert-primary">No category found</div>
    @endif
@endsection

@section('RHS')
    @include('tag.widget')
@endsection