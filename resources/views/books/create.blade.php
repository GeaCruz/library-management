<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    
</head>
<body>
    <div>
        <form action="{{url('books')}}" method="post">

            @csrf
            <div>
                <div class="container my-5">
                    <div class="d-flex justify-content-end">
                        <a href="{{url('books')}}" class="btn btn-primary">Book List</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto d-grid gap-2">
                            <div class="form-group mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control">
                                @error('title')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Author</label>
                                <input type="text" name="author" class="form-control">
                                @error('author')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" name="description" class="form-control">
                                @error('description')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">ISBN</label>
                                <input type="text" name="isbn" class="form-control">
                                @error('isbn')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Published Year</label>
                                <input type="date" name="published_year" class="form-control">
                                @error('published_year')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                            @if(session('success'))
                                <div>{{ session('success') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>