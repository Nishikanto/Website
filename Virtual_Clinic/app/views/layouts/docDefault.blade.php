<!DOCTYPE html>
<html lang="en">
@include('includes.doctors_includes.header')

<body >
<section id="container" class="">
    @include('includes.doctors_includes.topMenu')
    @include('includes.doctors_includes.sideBar')
    <section id="main-content">
        <section class="wrapper site-min-height">
            @yield('content')
        </section>
    </section>
    {{--include rightSideBar--}}

    @include('includes.doctors_includes.footer')
</body>
</html>