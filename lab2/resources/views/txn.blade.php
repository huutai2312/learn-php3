@extends('layouts.layout')

@section('content')
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Tin xem nhiều</h1>
        <p>PS27199</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            @foreach ($tinxemnhieu as $tin)
                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-header">Header</div>
                        <div class="card-body"><a href="/ct/{{ $tin->id }}">{{ $tin->tieuDe }}</a></div>
                        <div class="card-footer">Footer</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
