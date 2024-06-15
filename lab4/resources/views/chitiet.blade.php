@extends('layouts.layout')

@section('content')
    <div class="content">
        <h1>{{ $tinChiTiet->tieuDe }}</h1>
        <p>{{ $tinChiTiet->ngayDang }}</p>
        <p>{{ $tinChiTiet->tomTat }}</p>
        <div>
            {!! $tinChiTiet->noiDung !!} <!-- Assuming 'noiDung' contains HTML content -->
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Các tệp script JavaScript -->
@endsection
