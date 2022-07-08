<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>IU LAUNDRY PRINT NOTE PDF</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap 4 -->

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="{{url('assets/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}"
    />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- Theme style -->
    <link
      rel="stylesheet"
      href="{{url('assets/AdminLTE/dist/css/adminlte.min.css')}}"
    />

    <!-- Google Font: Source Sans Pro -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
      <!-- Main content -->
        <div class="invoice p-3 mb-3">
          <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fa-fas fa-washer"></i> IU Laundry
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

    <script type="text/javascript">
      window.addEventListener("load", window.print());
    </script>
  </body>
</html>
