<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('layouts.components.meta-data')
        <script src="{{asset('js/stackbox/main.js')}}"></script>
        @include('layouts.stackbox.components.styles')
    </head>
    <body>
        <div class="auth-wrapper d-flex align-items-center justify-content-center">
            <div class="auth-box bg-white shadow-sm p-30 pt-50 rounded text-center fadeInDown animated">
                <!-- <img class="fw-65" src="images/logo.png" alt="Generic placeholder image"> -->
                <div class="text-size-22 font-weight-normal mt-20">Sign in</div>
                <div class="mt-5">Sign in by entering the information below.</div>
                <div class="mt-30">
                    @include('ven.forms.login')
                </div>
            </div>
        </div>
    </body>

</html>