<div class="content-box mt-20 fadeInUp animated">
    <div class="row no-gutters p-20 align-items-center">
        <div class="col-12 col-sm-8 box-title">
            Products 
            <div class="badge badge-pill badge-danger">{{$business->products->count()}}</div>
        </div>
        <div class="col-12 col-sm-4">
            <select class="w-100 fw-sm-120 form-control ml-auto mt-20 mt-sm-0 outline rounded-half-circle">
                <option>Today</option>
                <option>7 Days</option>
                <option>14 Days</option>
                <option>Last Month</option>
            </select>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Images</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Stock</th>
                    <th class="text-right">Price</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            @if($business->products->count() > 0)
                @foreach($business->products as $product)
                    <tr>
                        <td class="font-weight-normal align-middle text-nowrap">
                            <a href="{{route('biz.product.show',[$business->slug,$product->slug])}}">{{$product->name}}</a>
                        </td>
                        <td class="align-middle py-12">
                            <div class="fw-55 fh-45 item-thumbnail">
                                <img class="rounded shadow" src="{{$product->dp()['src']}}" alt="{{$product->dp()['alt']}}">
                                <a class="fh-20 px-7 my-auto py-2 text-size-11 rounded-half-circle font-weight-normal" href="#">{{$product->photos->count()}} others</a> 
                            </div>
                        </td>
                        <td class="text-center align-middle text-nowrap">{{$product->category->name}}</td>
                        <td class="text-center align-middle">
                            <div class="fw-8 fh-8 d-inline-block mr-5 bg-success rounded-circle"></div>
                            Available 
                        </td>
                        <td class="text-right font-weight-normal align-middle">{{number_format($product->price)}}</td>
                        <td class="text-center align-middle text-nowrap">
                            <a href="{{route('biz.product.edit',[$business->slug,$product->slug])}}"><i class="mdi mdi-pencil" aria-hidden="true" data-toggle="tooltip" title="edit {{$product->name}}"></i></a>
                            <a href="#"><i class="mdi mdi-trash-can" aria-hidden="true" data-toggle="tooltip" title="discard {{$product->name}}"></i></a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr colspan="6"> No product <a href="{{route('biz.product.create')}}">Add new product</a></tr>
            @endif
                
            </tbody>
        </table>
    </div>
    <div class="row no-gutters p-20 align-items-center">
        <div class="col-12 col-md-2">
            <select class="w-100 fw-md-80 form-control outline rounded-half-circle">
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div class="col-12 col-md-5 mt-20 mt-md-0 text-center">Showing 5 of 21 list</div>
        <div class="col-12 col-md-5 mt-20 mt-md-0">
            <nav aria-label="Pagination">
                <ul class="pagination no-border justify-content-center justify-content-md-end mb-0">
                    <li class="page-item"><a class="page-link" href="#">First</a></li>
                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    <li class="page-item"><a class="page-link" href="#">Last</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>