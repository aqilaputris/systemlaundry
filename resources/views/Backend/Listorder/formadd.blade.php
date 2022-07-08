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
    <h1 class="text-center mb-4">List Order Add</h1>

    <div class="container">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                    <form action="{{url('/backend/listorder/insertformadd')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Type</label>
                            <select type="text" name="type" class="form-select" id="type" aria-describedby="emailHelp" onclick="package();">
                            <option>Pilih Package</option>
                            <option value="express">Express</option>
                            <option value="laundry">Laundry</option>
                            </select>
                        </div>
                        <div class="mb-3" id="code">
                            <label for="exampleInputEmail1" class="form-label">Code Order</label>
                            <input type="text" name="code_order"  value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3" id="code1" style="display: none;">
                            <label for="exampleInputEmail1" class="form-label">Code Order</label>
                            <input type="text" name="code_order"  value="{{ $code }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3" id="code2" style="display: none;">
                            <label for="exampleInputEmail1" class="form-label">Code Order</label>
                            <input type="text" name="code_order"  value="{{ $codes }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3" id="express">
                            <label for="exampleInputEmail1" class="form-label">Package</label>
                                <select name="package_id" class="form-select" aria-label="Default select example">
                                    <option disabled selected hidden>Pilih Package</option>
                                    @foreach ($express as $data)
                                    <option value="{{ $data->id }}">{{ $data->type }} {{ $data->name }}</option>
                                    @endforeach
                                </select> 
                        </div>
                        <div class="mb-3" id="laundry" style="display: none;">
                            <label for="exampleInputEmail1" class="form-label">Package</label>
                                <select name="package_id" class="form-select" aria-label="Default select example">
                                    <option disabled selected hidden>Pilih Package</option>
                                    @foreach ($laundry as $data)
                                    <option value="{{ $data->id }}">{{ $data->type }} {{ $data->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Total Price</label>
                            <input type="text" name="total_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                            <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Phone</label>
                            <input type="text" name="user_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Address</label>
                            <input type="text" name="user_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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

    <script type="text/javascript">
        
        function package()
        {
            var type = document.getElementById('type').value;
            if(type == 'express')
            {
                document.getElementById('code').style.display = 'none';
                document.getElementById('code1').style.display = 'none';
                document.getElementById('code2').style.display = '';
                document.getElementById('express').style.display = '';
                document.getElementById('laundry').style.display = 'none';
            }
            else if(type == 'laundry')
            {
                document.getElementById('code').style.display = 'none';
                document.getElementById('code1').style.display = '';
                document.getElementById('code2').style.display = 'none';
                document.getElementById('express').style.display = 'none';
                document.getElementById('laundry').style.display = '';
            }else{
                document.getElementById('code').style.display = '';
                document.getElementById('code1').style.display = 'none';
                document.getElementById('code2').style.display = 'none';
                document.getElementById('express').style.display = 'none';
                document.getElementById('laundry').style.display = 'none'; 
            }
            
        }
    </script>
  </body>
</html>

@endsection 
