<div class="report-box-1 mmt-lg-70 pt-70 pb-50" style="background-image: url({{$business->cover()['src']}})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <select class="fw-100 fw-lg-120 mb-40 mt-lg-95 mb-lg-55 mx-auto mx-sm-0 form-control outline light rounded-half-circle">
                        <option>Today</option>
                        <option>7 Days</option>
                        <option>14 Days</option>
                        <option>Last Month</option>
                    </select>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 font-weight-normal fadeInDown animated">
                    <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-center pr-md-50 pr-lg-0">
                        <i class="icon mdi mdi-cart d-none d-sm-block text-size-55 mr-16 lh-83 text-white" aria-hidden="true"></i> 
                        <div class="text-center text-sm-right">
                            <div class="text-white text-size-32 text-size-sm-38 text-size-lg-42">{{$business->products->count()}}</div>
                            <div class="text-warning text-size-13 lh-14 ml-12 ml-sm-0">PRODUCTS</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-20 mt-sm-0 font-weight-normal fadeInDown animated">
                    <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-center pr-md-50 pr-lg-0">
                        <i class="icon mdi mdi-forum d-none d-sm-block text-size-55 mr-16 lh-83 text-white" aria-hidden="true"></i> 
                        <div class="text-center text-sm-right">
                            <div class="text-white text-size-32 text-size-sm-38 text-size-lg-42">0</div>
                            <div class="text-warning text-size-13 lh-14 ml-12 ml-sm-0">ORDERS</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-20 mt-lg-0 font-weight-normal fadeInDown animated">
                    <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-center pr-md-50 pr-lg-0">
                        <i class="icon mdi mdi-map-marker d-none d-sm-block text-size-55 mr-16 lh-83 text-white" aria-hidden="true"></i> 
                        <div class="text-center text-sm-right">
                            <div class="text-white text-size-32 text-size-sm-38 text-size-lg-42">0</div>
                            <div class="text-warning text-size-13 lh-14 ml-12 ml-sm-0">DEALS</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-20 mt-lg-0 font-weight-normal fadeInDown animated">
                    <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-center pr-md-50 pr-lg-0">
                        <i class="icon mdi mdi-arrange-send-backward d-none d-sm-block text-size-55 mr-16 lh-83 text-white" aria-hidden="true"></i> 
                        <div class="text-center text-sm-right">
                            <div class="text-white text-size-32 text-size-sm-38 text-size-lg-42">0</div>
                            <div class="text-warning text-size-13 lh-14 ml-12 ml-sm-0">INBOX</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>