@extends('layouts.master')

@section('title')
    Blog Page
@endsection
@section('content')
    <article class="blog-post">
        <h3>Page  Title</h3>
        <span class="subtitle">Post Auther| Date</span>
        <p>Post Body</p>
        <a href="#">Read More</a>
    </article>
    <section class="pagination">
        Pagination
    </section>

@endsection