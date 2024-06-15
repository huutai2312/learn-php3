@extends('layouts.layout')

@section('content')
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Tin mới</h1>
        <p>PS27199</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            @foreach ($tinmoi as $tin)
                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-header">{{$tin->ngayDang}}</div>
                        <div class="card-body">{{$tin->tieuDe}}</div>
                        <div class="card-footer">Footer</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
