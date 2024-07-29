<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div>
        <div class="container">
            <div class=""row>
                <div class="col-12">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Description</th>
                                <th>ISBN</th>
                                <th>Published Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $books)
                            <tr>
                                <td>{{ $books->title }}</td>
                                <td>{{ $books->author }}</td>
                                <td>{{ $books->description }}</td>
                                <td>{{ $books->isbn }}</td>
                                <td>{{ $books->published }}</td>
                                <td>
                                    <a href="{{ url ('books', $books->id)}}/edit" class="btn btn-outline-success btn-sm">Edit</a>
                                <form action="{{ url('books', $books->id)}}" method="POST"> 
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onlick="return confirm('Are you sure you want to delete')">delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>