@extends('layouts.admin')

@section('pageTitle', $pageTitle)

@section('pageMain')
    <div class="container">
        <div class="row g-4">
            <div class="col-8">

                <h3> <a class="title-link" href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a> </h3>
                <div> <h5>Slug:</h5> {{ $post->slug }}$ </div>
                <div><h5>Created At:</h5> {{ $post->created_at }}</div>
                <div><h5>Updated At:</h5> {{ $post->updated_at }}</div>

                <a class="btn btn-primary mt-5" href="{{ route('admin.posts.edit', $post->id) }}" role="button">Edit</a>
                
            </div>
        </div>
    </div>
@endsection