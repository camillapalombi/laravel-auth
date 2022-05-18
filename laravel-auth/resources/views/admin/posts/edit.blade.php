@extends('layouts.admin')

@section('pageTitle', 'Edit posts listing')

@section('pageMain')
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('admin.posts.update', $post->id ) }}">

                    @csrf
                    @method('PUT')


                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" {{ old('title', $post->title) }}>
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}" {{ old('slug', $post->slug) }}>
                    </div>

                    <div class="mb-3">
                        <label for="created_at" class="form-label">Created:</label>
                        <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $post->created_at }}" {{ old('created_at', $post->created_at) }}>
                    </div>

                    <div class="mb-3">
                        <label for="updated_at" class="form-label">Updated:</label>
                        <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{ $post->updated_at }}" {{ old('updated_at', $post->updated_at) }}>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Submit</button>

                </form>

                <a class="btn btn-success mt-2" href="{{ url()->previous() }}" role="button">Back</a>

            </div>
        </div>
    </div>
@endsection