@extends('layouts.backend-dashboard.app')
@section('Tampilan Crud')

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
    <div class="container">
    <a href="/listtoday/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
    <form action="{{url('/listtoday')}}" method="POST" enctype="multipart/form-data">
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
              </tr>
            </thead>
          <tbody>
            <?php $id = 1; ?>
          @foreach ($errors as $data)
              <tr>
                <th scope="row">{{ $id++ }}</th>
                <td>{{ $data->code_order }}</td>
                <td>{{ $data->package_id }}</td>
                <td>{{ $data->total_price}}</td>
                <td>{{ $data->user_name}}</td>
                <td>{{ $data->user_phone}}</td>
                <td>{{ $data->user_address}}</td>
                <td>{{ $data->status}}</td>
              </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
		

@endsection