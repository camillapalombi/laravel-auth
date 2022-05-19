@extends('layouts.admin')

@section('pageTitle', 'Create new posts')

@section('pageMain')
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('admin.posts.store') }}">

                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                      </div>
                    @error('title')
                        <div class="alert alert-warning">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
                    </div>
                    @error('slug')
                        <div class="alert alert-warning">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <input type="text" class="form-control" id="content" name="content" value="{{ old('content') }}">
                    </div>
                    @error('content')
                        <div class="alert alert-warning">{{ $message }}</div>
                    @enderror
                

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection