@extends('layouts.layout')

@section('content')

    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>{{ $tinChiTiet->tieuDe }} - {{ $tinChiTiet->id }}</h1>
        <p>{{ $tinChiTiet->ngayDang }}</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <p>{{ $tinChiTiet->tomTat }}</p>
                <div>
                    {!! $tinChiTiet->noiDung !!}
                </div>
            </div>
        </div>
    </div>
@endsection
