<!DOCTYPE html>
<html lang="en">
@include('includes.patient_includes.header')

<body >
<section id="container" class="">
    @include('includes.patient_includes.topMenu')
    @include('includes.patient_includes.sideBar')
    <section id="main-content">
        <section class="wrapper site-min-height">
            @yield('content')
        </section>
    </section>
    {{--include rightSideBar--}}

    @include('includes.patient_includes.footer')

</body>
</html>