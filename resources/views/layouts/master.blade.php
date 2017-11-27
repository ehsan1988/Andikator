@include('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('layouts.nav')

        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            @yield('content')
        </div>
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
    </div>
</div>
@include('layouts.footer')