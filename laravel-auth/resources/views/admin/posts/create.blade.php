@extends('layouts.admin')

@section('pageTitle', 'Create new post')

@section('pageMain')
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('admin.posts.store') }}">

                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" {{ old('title', $post->title) }}>
                      </div>
                    @error('title')
                        <div class="alert alert-warning">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}" {{ old('slug', $post->slug) }}>
                    </div>
                    @error('slug')
                        <div class="alert alert-warning">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="created_at" class="form-label">Created:</label>
                        <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $post->created_at }}" {{ old('created_at', $post->created_at) }}>
                    </div>
                    @error('created_at')
                        <div class="alert alert-warning">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="updated_at" class="form-label">Updated:</label>
                        <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{ $post->updated_at }}" {{ old('updated_at', $post->updated_at) }}>
                    </div>
                    @error('updated_at')
                        <div class="alert alert-warning">{{ $message }}</div>
                    @enderror
                

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection