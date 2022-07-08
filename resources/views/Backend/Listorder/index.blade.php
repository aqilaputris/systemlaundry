@extends('layouts.backend-dashboard.app')
@section('Tampilan Crud')

@section('breadcrumbs')
  List Order
@endsection 

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
    <h1 class="text-center mb-4">List Order</h1>

    <div class="container">
            <div class="container">
                <a href="{{ url('backend/listorder/formadd') }}" ttype="button" class="btn btn-success">Add+</a><br>
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto"></div>
                </div>
                <form method="GET" action="{{ url('backend/listorder/index') }}">
                    <input type="text" name="keyword" />
                    <button class="btn-xs-flat btn-success" type="submit">Search</button>
                    <button class="btn-xs-flat btn-success" type="submit">Filter</button>
                </form>
                <br />
                <div class="row">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Code Order</th>
                <th scope="col">Package Id</th>
                <th scope="col">Total Price</th>
                <th scope="col">User Name</th>
                <th scope="col">User Phone</th>
                <th scope="col">User Address</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
          <tbody>
            <?php $id = 1; ?>
            @foreach ($errors as $index => $data)
              <tr>
                <th scope="row">{{ $index + $errors->firstItem() }}</th>
                <td>{{ $data->code_order }}</td>
                <td>{{ $data->package_id }}</td>
                <td>{{ $data->total_price}}</td>
                <td>{{ $data->user_name}}</td>
                <td>{{ $data->user_phone}}</td>
                <td>{{ $data->user_address}}</td>
                <td>{{ $data->status}}</td>
                <td>
                  <a href="{{url('/backend/listorder/detaillistorder/'.$data->id)}}" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                  <a href="{{url('/backend/listorder/formedit/'.$data->id)}}" class="btn btn-warning"><i class="fa fa-light fa-pen"></i></a>
                  <a href="{{url('/backend/listorder/delete/'.$data->id)}}"  class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
          @endforeach
          </tbody>
        </table>
        {{ $errors->links() }}
      </div>
    </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

@endsection 




   