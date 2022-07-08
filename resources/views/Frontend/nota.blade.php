<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IU Laundry</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{url('text.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('assets/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('assets/AdminLTE/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body>
    
<section class="nota" id="nota">


    <form action="">

        <h1 class="heading">Nota</h1>

        

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fa fa-washer"></i> IU Laundry
                    <small class="float-right">Date: {{$data->date_drop_laundry}}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">User Name</th>
                        <td>{{$data->user_name}}</td>
                      </tr>
                      <tr>
                        <th>User Phone</th>
                        <td>{{$data->user_phone}}</td>
                      </tr>
                      <tr>
                        <th>User Address</th>
                        <td>{{$data->user_address}}</td>
                      </tr>
                      <tr>
                        <th>Code Order</th>
                        <td>{{$data->code_order}}</td>
                      </tr>
                      <tr>
                        <th>Pilihan Paket</th>
                        <td>{{$data->type}}, {{$data->name}}</td>
                      </tr>
                      <tr>
                        <th>Total Price</th>
                        <td>{{$data->total_price}}</td>
                      </tr>
                    </table>
                  </div>
                </div> 
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <a href="{{url('frontend')}}" type="submit" class="btn btn-primary float-left" style="margin-left: 5px;">Back</a>
              <div class="row no-print">
                <div class="col-12">
                  <a href="/frontend/printnota" target="_blank" class="btn btn-primary float-right" style="margin-right: 5px;"><i class="fas fa-print"></i> Print PDF</a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


    </form>

</section>

<!-- express section edns -->

</body>
</html>