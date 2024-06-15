{{-- @extends ('layout')
@section('tieudetrang')
Các tin trong loại {{ $idLT }}
@endsection
@section('noidung')
<h1>Các tin trong loại {{$idLT}}</h1>
@endsection --}}
@extends('layout')
@section('tieudetrang')
    Tin trong loại {{ $idLT }}
@endsection
@section('noidung')
    <h1>Các tin trong loại {{ $idLT }}</h1>
    <hr>
    @foreach ($listtin as $t)
        <div class="row">
            <h3><a href="{{ url('/tin', [$t->id]) }}">
                    {{ $t->tieuDe }}
                </a></h3>
            <p>{{ $t->tomTat }}</p>
        </div>
    @endforeach
@endsection