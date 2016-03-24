<!DOCTYPE html>
<html lang="en">
@include('includes.nurses_includes.header')

<body >
<section id="container" class="">
    @include('includes.nurses_includes.topMenu')
    @include('includes.nurses_includes.sideBar')
    <section id="main-content">
        <section class="wrapper site-min-height">
            @yield('content')
        </section>
    </section>
    {{--include rightSideBar--}}

    @include('includes.nurses_includes.footer')


</body>
</html>