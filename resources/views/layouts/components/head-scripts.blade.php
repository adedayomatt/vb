<script src="{{asset('js/stackbox/main.js')}}"></script>    <!--This include JQuery, Popper.js, Bootstrap.js and select2.js-->
<script src="{{ asset('js/vendors/typeahead.min.js') }}"></script>
<script src="{{ asset('js/vendors/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/b/scripts.js') }}"></script>
@include('layouts.components.typeahead.tag')
@include('layouts.components.typeahead.business')
@include('layouts.components.typeahead.product')
<!-- Extra script that should live in the head -->
@yield('h-scripts')