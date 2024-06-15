@extends('layouts.layout')

@section('content')
    <div class="content">
        <h1 class="page-title">Xem nhiều</h1>

        <div class="popular-articles">
            @foreach ($tinxemnhieu as $tin)
                <p class="article-title"><a href="/ct/{{ $tin->id }}">{{ $tin->tieuDe }}</a></p>
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

        .popular-articles {
            padding-left: 20px;
            /* Adjust as needed */
        }

        .article-title {
            font-size: 18px;
            margin-bottom: 10px;
            color: #444;
        }

        .article-title a {
            text-decoration: none;
            color: #0066cc;
            /* Link color */
        }

        .article-title a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('scripts')
    <!-- JavaScript files -->
@endsection
