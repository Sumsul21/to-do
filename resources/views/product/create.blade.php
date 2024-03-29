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
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- card header -->
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Add Product</h4>
                            <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary"><i class="fa fa-reply"></i><span class="btn-icon-add"></span>Back</a>
                        </div>

                        <!-- card body -->
                        <div class="card-body">
                            <div class="form-validation">
                                <!-- this is for validation checking message -->
                                @if (session()->has('success'))
                                    <strong class="text-success">{{session()->get('success')}}</strong>
                                @endif

                                <!-- this is from -->
                                <form class="form-valide" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <label for="" class="col-md-4 col-form-label">Product Number
                                                        <span class="text-danger">*</span>
                                                    </label>

                                                    <div class="col-md-6">
                                                        <input type="text" id="product_name" class="form-control @error('group_name') is-invalid @enderror" name="product_name" value="{{old('product_name')}}">
                                                        @error('product_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <label for="" class="col-md-4 col-form-label">Product Price
                                                        <span class="text-danger">*</span>
                                                    </label>

                                                    <div class="col-md-6">
                                                        <input type="text" id="product_price" class="form-control @error('product_price') is-invalid @enderror" name="product_price" value="{{old('product_price')}}">
                                                        @error('product_price')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <label for="" class="col-md-4 col-form-label">Description
                                                        <span class="text-danger">*</span>
                                                    </label>

                                                    <div class="col-md-6">
                                                        <input type="text" id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}">
                                                        @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <label for="" class="col-md-4 col-form-label">Image
                                                        <span class="text-danger">*</span>
                                                    </label>

                                                    <div class="col-md-6">
                                                        <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{old('image')}}">
                                                        @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 offset-md-10">
                                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
