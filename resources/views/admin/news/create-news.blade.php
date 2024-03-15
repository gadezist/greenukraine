@extends('admin.layouts.main')
@section('css_admin')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
@endsection
@section('content')
        <div class="col-md-6">
            <form method="POST" action="{{ route('admin.store-news') }}" enctype="multipart/form-data">
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
                                <input value="{{ old('title') }}" type="text" id="inputName" name="title" class="form-control @error('title') is-invalid @enderror">
                                @error('title') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="editor">Content</label>
                                <textarea id="editor" name="content">{{ old('content') }}</textarea>
                                @error('content') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="inputAuthor">Author</label>
                                <input value="{{ old('author') }}" name="author" type="text" id="inputAuthor" class="form-control @error('author') is-invalid @enderror">
                                @error('author') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group border-bottom border-top p-2">
                                <label for="inputAuthor">Main picture</label>
                                <div class="custom-file">
                                    <input value="{{ old('image') }}" type="file" accept="image/*, text/*" name="image"/>
                                </div>
                                @error('image') <small class="text-danger">{{ $message }}</small>@enderror
                                <div>
                                    <label for="descr">Description</label>
                                    <input value="{{ old('descr_image') }}" type="text" id="descr" name="descr_image" class="form-control @error('descr_image') is-invalid @enderror">
                                    @error('descr_image') <small class="text-danger">{{ $message }}</small>@enderror
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="datepicker">Custom date</label>
                                <input type="text" id="datepicker" name="custom_date">
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input name="status" type="checkbox" class="custom-control-input" id="customCheck1" value="1">
                                <label class="custom-control-label" for="customCheck1">Activate news</label>
                            </div>
                        </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="row">
                    <div class="col-12">
                        <a href="#" onclick="window.history.back()" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Create news</button>
                    </div>
                </div>
            </form>
        </div>
@endsection

@section('scripts')
    @vite(['resources/js/admin/news.js'])
@endsection
