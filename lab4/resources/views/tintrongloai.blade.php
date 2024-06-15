@extends('layouts.layout')

@section('content')
    <div class="content">
        <h1 class="page-title">Tin Tức trong loại:
            {{ $tinTheoIdLT->isEmpty() ? 'Không có tin tức' : $tinTheoIdLT[0]->ten }}</h1>
        <div class="articles">
            @foreach ($tinTheoIdLT as $tin)
                <div class="article">
                    <h2 class="article-title">{{ $tin->tieuDe }}</h2>
                    <p class="article-date">{{ date('d/m/Y', strtotime($tin->ngayDang)) }}</p>
                    <p class="article-summary">{{ $tin->tomTat }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .page-title {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        .article {
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }

        .article-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #444;
        }

        .article-date {
            font-style: italic;
            color: #666;
            margin-bottom: 5px;
        }

        .article-summary {
            color: #777;
            line-height: 1.6;
        }
    </style>
@endsection

@section('scripts')
    <!-- JavaScript files -->
@endsection
