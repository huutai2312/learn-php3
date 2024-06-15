{{-- @extends ('layout')
@section('tieudetrang')
Chi tiết tin {{ $id }}
@endsection
@section('noidung')
<h1>Thông tin chi tiết tin {{$id}}</h1>
@endsection --}}
@extends('layout')
@section('tieudetrang')
{{$tin->tieuDe}}
@endsection
@section('noidung')
<h2 style="color: red">{{$tin->tieuDe}}</h2>
<h3 style="color: blue">{{$tin->tomTat}}</h3>
<div id="noiDung">
{!! $tin->noiDung !!}
</div>
@endsection