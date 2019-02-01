    <div class="content-box position-relative fadeInUp animated">
        <div class="row no-gutters p-20 align-items-center">
            <div class="col-6 col-md-7 col-lg-8 box-title text-size-18">Sales Report</div>
            <div class="col-6 col-md-5 col-lg-4">
                <ul class="nav nav-pills nav-justified nav-dark d-none d-sm-flex">
                    <li class="nav-item"> <a class="nav-link rounded-half-circle active" href="#">Daily</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Weekly</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Monthly</a> </li>
                </ul>
                <div class="dropdown text-right d-sm-none">
                    <i class="mdi mdi-dots-vertical text-size-22" role="button" aria-hidden="true" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i> 
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Daily</a> <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a> </div>
                </div>
            </div>
        </div>
        <canvas class="px-20 pb-20" id="line-chart"></canvas>
        <div class="d-none d-md-block position-absolute post-120 posl-100">
            <div class="text-size-14">Total revenue</div>
            <div class="font-weight-normal text-size-30 lh-30 mt-7">$1,521</div>
        </div>
        <div class="row no-gutters bg-color-19 py-20">
            <div class="col-6 col-md text-center border-md-right border-color-21">
                <div class="text-color-18 text-size-18"> <i class="mdi mdi-cart" aria-hidden="true"></i> <span class="font-weight-normal">1.700</span> </div>
                <div class="text-size-12 text-color-20 mt-5">Sales</div>
            </div>
            <div class="col-6 col-md text-center border-md-right border-color-21">
                <div class="text-color-18 text-size-18"> <i class="mdi mdi-chart-bar" aria-hidden="true"></i> <span class="font-weight-normal">1.000.000</span> </div>
                <div class="text-size-12 text-color-20 mt-5">Sellings</div>
            </div>
            <div class="col-6 col-md mt-20 mt-md-0 text-center border-md-right border-color-21">
                <div class="text-color-18 text-size-18"> <i class="mdi mdi-comment-check-outline" aria-hidden="true"></i> <span class="font-weight-normal">102</span> </div>
                <div class="text-size-12 text-color-20 mt-5">Comments</div>
            </div>
            <div class="col-6 col-md mt-20 mt-md-0 text-center border-md-right border-color-21">
                <div class="text-color-18 text-size-18"> <i class="mdi mdi-buffer" aria-hidden="true"></i> <span class="font-weight-normal">1.201</span> </div>
                <div class="text-size-12 text-color-20 mt-5">Views</div>
            </div>
            <div class="col-6 col-md mt-20 mt-md-0 text-center">
                <div class="text-color-18 text-size-18"> <i class="mdi mdi-human-greeting" aria-hidden="true"></i> <span class="font-weight-normal">100</span> </div>
                <div class="text-size-12 text-color-20 mt-5">Users</div>
            </div>
        </div>
    </div>