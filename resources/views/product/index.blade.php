<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TO-DO</title>
  </head>
  <body>
<section class="p-3">
    <div class="container">
      <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header d-flex justify-content-between align-items-center">
                          <h4 class="card-title">product List<span class="bg-blue-500 text-white rounded px-1 text-xs py-0.5"></span></h4>
                          <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary"></span>Create</a>
                      </div>
                      <div class="card-body">
                          <p class="text-center text-success">{{Session::has('message') ? Session::get('message') : ''}}</p>
                          <div class="table-responsive">
                              <table id="example3" class="display" style="min-width: 845px">
                                  <thead>
                                      <tr>
                                          <th>SL No</th>
                                          <th>Product name</th>
                                          <th>Product Price</th>
                                          <th>Description</th>
                                          <th>Image</th>
                                          <th class="text-right pr-4">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($product as $data)
                                      <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$data->product_name}}</td>
                                          <td>{{$data->product_price}}</td>
                                          <td>{{$data->description}}</td>
                                          <td><img src="{{$data->image}}" alt="image" height="70px" width="50px"></td>
                                          <td class="float-right" style="width:100px">
                                              <a href="{{route('product.edit',$data->id)}}" class="btn btn-success btn-sm btn-xm p-1">Edit</a>
                                              <a href="{{route('product.destroy',$data->id)}}" class="btn btn-danger btn-xm p-1" onclick="return confirm('Are You Sure to delete This Product?')">Delete</a>
                                          </td>
                                      </tr>
                                     @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

              </div>
          </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
