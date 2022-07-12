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
    <h1 class="text-center mb-4">List Order</h1>

    <div class="container">
            <div class="container">
            <a href="/listtoday/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto"></div>
                </div>
                <form method="GET" action="{{url('/listtoday')}}">
                    <input type="text" name="keyword" />
                    <button class="btn-xs-flat btn-success" type="submit">Search</button>
                    <button class="btn-xs-flat btn-success" type="submit" id="#filter">Filter</button>
                    <!-- <a class="btn btn-md btn-warning" href="{{url('backend/listorder/index')}}" style="float: right; margin-right: 15px;">Reset</a> -->
                    <div id="filter">
                      <div class="modal-header">
                        <h4 class="modal-title">Filter</h4>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <form autocomplete="off" method="get" action="{{ url('backend/dashboard') }}" enctype="multipart/form-data">
                                  <div class="col-md-3">
                                      <p style="font-size: 14px">Isi Filter</p>
                                      <select class="form-control" name="type">
                                          <option value=""></option>
                                          <option value="Express" <?php echo (g('type') ==  'EX') ? ' selected="selected"' : '';?>>EX</option>
                                          <option value="Laundry" <?php echo (g('type') ==  'LD') ? ' selected="selected"' : '';?>>LD</option>
                                      </select>
                                      <br>
                                      <p style="font-size: 14px">Isi Filter</p>
                                      <select class="form-control" name="status">
                                          <option value=""></option>
                                          <option value="Drop" <?php echo (g('status') ==  'Drop') ? ' selected="selected"' : '';?>>Drop</option>
                                          <option value="Take" <?php echo (g('status') ==  'Take') ? ' selected="selected"' : '';?>>Take</option>
                                          <option value="Finish" <?php echo (g('status') ==  'Finish') ? ' selected="selected"' : '';?>>Finish</option>
                                      </select>
                                  </div>
                                  <div class="col-md-3">
                                      
                                      <button type="submit" class="btn btn-primary" style="float: right;">Filter</button>
                                      
                                      <a class="btn btn-warning" href="{{url('backend/listorder/index')}}" style="float: right; margin-right: 4px;">Reset</a>
                                  </div>
                                    </div>
                            </form>
                        </div>
                    </div>
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
                <td>
                  <a href="{{url('/backend/listorder/detaillistorder/'.$data->id)}}" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                  <a href="{{url('/backend/listorder/formedit/'.$data->id)}}" class="btn btn-warning"><i class="fa fa-light fa-pen"></i></a>
                  <a href="{{url('/backend/listorder/delete/'.$data->id)}}"  class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

@endsection 




   
