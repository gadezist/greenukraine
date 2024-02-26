@extends('admin.layouts.main')

@section('content')
        <div class="col-md-6">
            <form method="POST" action="{{ route('admin.update-news', ['news' => $news->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Title</label>
                                <input value="{{ $news->title }}" type="text" id="inputName" name="title" class="form-control @error('title') is-invalid @enderror">
                                @error('title') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="editor">Content</label>
                                <textarea id="editor" name="content">{{ $news->content }}</textarea>
                                @error('content') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="inputAuthor">Author</label>
                                <input value="{{ $news->author }}" name="author" type="text" id="inputAuthor" class="form-control @error('author') is-invalid @enderror">
                                @error('author') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" accept="image/*, text/*" name="image"/>
                                </div>
                                @error('image') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input name="status" type="checkbox" class="custom-control-input" id="customCheck1" @if($news->status) checked @endif value="1">
                                <label class="custom-control-label" for="customCheck1">Activate news</label>
                            </div>
                        </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="row">
                    <div class="col-12">
                        <a href="#" onclick="window.history.back()" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Update news</button>
                    </div>
                </div>
            </form>
        </div>
@endsection

@section('scripts')
    @vite(['resources/js/admin/news.js'])
@endsection
