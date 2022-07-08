@extends('layouts.backend-dashboard.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tampilan Crud List Order</title>
  </head>

  <body>
    <h1 class="text-center mb-4">List Order Edit</h1>

    <div class="container">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                    <form action="{{url('/backend/listorder/updateformedit/'.$listorder->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Code Order</label>
                            <input type="text" name="code_order" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $listorder->code_order }}">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Package Id</label>
                            <input type="text" name="package_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $listorder->package_id }}">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Total Price</label>
                            <input type="text" name="total_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $listorder->total_price }}">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                            <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $listorder->user_name }}">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Phone</label>
                            <input type="text" name="user_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $listorder->user_phone }}">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Address</label>
                            <input type="text" name="user_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $listorder->user_address }}">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Status</label>
                            <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $listorder->status }}">
                        </div>
                        <a href="{{url('backend/listorder/index')}}" type="submit" class="btn btn-primary">Back</a>
                        <button type="submit" style="float: right" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

@endsection

