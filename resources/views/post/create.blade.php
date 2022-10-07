@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Posts</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('posts.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows=5></textarea>
                </div>
                <button type="submit" class="btn btn-primary my-2">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
