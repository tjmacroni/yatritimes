@include('partials._header')

    <div id="app">
        @include('partials._navigation')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
@include('partials._footer')