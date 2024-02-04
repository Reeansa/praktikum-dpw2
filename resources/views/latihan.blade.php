<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>latihan</title>
    </head>

    <body>
        <h1>dibuat dengan cara mendeklarasikan variabel langsung</h1>
        @php
            // dibuat dengan cara mendeklarasikan variabel langsung
            // variabel $nilai diubah-ubah untuk melihat kondisi if else
            $nilai_langsung = 100;
        @endphp
        @switch($nilai_langsung)
            @case(0)
                Sangat Buruk
            @break

            @case(75)
                Baik
            @break

            @case(100)
                Sempurna
            @break

            @default
                Nilai tidak valid
        @endswitch
        
        
        <br>
        <br>


        <h1>dibuat dengan cara menggunakan form</h1>
        {{-- menggunakan cara submit form yang akan di kirim ke routes dengan method post dengan menyimpan request dari input --}}
        <form action="/latihan/hasil" method="post">
            @csrf
            <input type="text" name="nilai" placeholder="masukkan nilai">
            <button type="submit">kirim ke route</button>
        </form>
        @if ($nilai)
            @switch($nilai)
                @case(0)
                    Sangat Buruk
                @break

                @case(75)
                    Baik
                @break

                @case(100)
                    Sempurna
                @break

                @default
                    Nilai tidak valid
            @endswitch
            
        @else
            <h1>nilai tidak ada</h1>
        @endif
    </body>

</html>
