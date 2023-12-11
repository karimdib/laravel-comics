@vite('resources/js/app.js')

<body>
    <main>
        <section>
            <div class="container">
                @include('partials.comics')
                @section('foreach')

                @endsection
            </div>
        </section>
    </main>
</body>
@yield('main')