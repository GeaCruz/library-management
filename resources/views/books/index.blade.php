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
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Description</th>
                                <th>ISBN</th>
                                <th>Published Year</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->title}}</td>
                                <td>{{ $book->author}}</td>
                                <td>{{ $book->description}}</td>
                                <td>{{ $book->isbn}}</td>
                                <td>{{ $book->published_year}}</td>
                                <td>
                                    <a href="{{ url('books', $book->id) }}/edit" class="btn btn-outline-success btn-sm">edit</a>
                                    <form action="{{ url('books', $book->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">delete</button>
                                    </form>
                                </td>
                                @endforeach
                            </tr>
                            
                        </tbody>
                    </table>
                    <div>
                        <div class="d-flex justify-content-end">
                            <a href="{{url('books/create')}}" class="btn btn-primary">create book</a>
                        </div>
                    </div>
                <div>
            </div>
        </div>
    </div>
</body>
</html>