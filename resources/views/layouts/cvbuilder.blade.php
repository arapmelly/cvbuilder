<!DOCTYPE html>
<html lang="en">

@include('includes.cvbuilder.head')

<body>
   
   @include('includes.cvbuilder.header')

    <main>
    <div id="vue-app">
        @yield('content')
    </div>
    </main>


    @include('includes.cvbuilder.footer')
</body>

</html>