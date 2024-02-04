<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=5, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Mahasiswa</title>
    </head>

    <body>
        <ul>
            <li><a href="{{ route('home') }}">home</a></li>
            <li><a href="{{ route('beranda') }}">beranda</a></li>
        </ul>
        @foreach ($dataMahasiswa as $data)
            <h1>{{ $data }}</h1>
        @endforeach
    </body>

</html>
