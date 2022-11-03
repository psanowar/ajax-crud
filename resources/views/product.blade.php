 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/11ae0a0a87.js" crossorigin="anonymous"></script>

    <title>Ajax Crud</title>
  </head>
  <body>
        
        <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <h2 class="my-5">Ajax Crud L-9</h2>
              <a href="" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Product</a>
              <div class="table-data">
                  <table class="table table-dark table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Price</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($products as $key=>$product)
                        <tr>
                          <th>{{ $key+1 }}</th>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->price }}</td>
                          <td>
                              <a href="" class="btn btn-primary"><i class="fa-light fa-user-pen"></i></a>
                              <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
                {!! $products->links() !!}
              </div>
            </div>
          </div>
        </div>

    @include('add_modal')
    @include('p_script')

  </body>
</html>