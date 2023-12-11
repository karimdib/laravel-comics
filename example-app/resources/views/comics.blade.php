<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')
    @section('header')
    @endsection
    @include('partials.main')
    @section('main')
    @foreach ($thumbs as $key => $value)
    <p>{{$key}}</p>
    @endforeach
    @endsection
    @include('partials.footer')
    @section('footer')
    @endsection

</body>

</html>