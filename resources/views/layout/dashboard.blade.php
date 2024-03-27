@extends('welcome')

@section('content')
    <h2 style="width: 800px" class="mx-auto">CHART TOTAL KARYAWAN BERDASARKAN PERIODE</h2>

    @include('components.filter')

    @include('components.chart-pie')

    <p style="width: 600px" class="mx-auto" id="totalEmployees">Jumlah Total Karyawan:</p>
@endsection
