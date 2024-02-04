@extends('master')
@section('title', 'Halaman Produk')
@section('content')
    <ol>
        <li>Produk 1 = {{ $produk1 }}</li>
        <li>Produk 2 = {{ $produk2 }}</li>
        <li>Produk 3 = {{ $produk3 }}</li>
    </ol>
    <div>
        <h1>kondisi if else dengan php biasa</h1>
        <?php
        // variabel nilai diubah-ubah untuk melihat kondisi if else
        $nilai = 90;
        if ($nilai >= 0 and $nilai < 50) {
            echo '<h3>Tidak lulus</h3>';
        } elseif ($nilai >= 50 and $nilai <= 100) {
            echo '<h3>Lulus</h3>';
        } else {
            echo '<h3>Tidak Teridentifikasi</h3>';
        }
        ?>
        <h4>dengan nilai = <?php echo $nilai; ?></h4>
    </div>
    <div>
        <h1>kondisi if else dengan blade laravel</h1>
        @php
            // variabel nilai diubah-ubah untuk melihat kondisi if else
            $nilai_blade = 40;
        @endphp
        @if ($nilai_blade >= 0 and $nilai_blade < 50)
            Tidak lulus
        @elseif ($nilai_blade >= 50 and $nilai_blade <= 100)
            Lulus
        @else
            Tidak Teridentifikasi
        @endif
        <h4>dengan nilai_blade = {{ $nilai_blade }}</h4>

        {{-- <h4>ini adalah cara menggunakan komentar menggunakan blade</h4> --}}


    </div>
@endsection
