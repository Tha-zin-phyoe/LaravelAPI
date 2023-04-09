<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container bg-dark text-light vh-100 p-5">
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered text-light">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>HTML</td>
                                <td>HyperText Markup Language</td>
                                <td>
                                    <a href="" class="btn btn-secondary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <form action="">
                        <div class="mb-3 form-group">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="mb-3 form-group">
                            <label  class="form-label">Description</label>
                            <textarea type="text" class="form-control"  rows="6"></textarea>
                          </div>
                          <button class="btn btn-primary px-3" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>


    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>
