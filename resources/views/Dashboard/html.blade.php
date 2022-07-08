<section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{ $jumlah_user }}</h3>

                    <p>Total User</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-users"></i>
                  </div>
                  <a href="/backend/user/index" class="small-box-footer"
                    >More info <i class="fas fa-arrow-circle-right"></i
                  ></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>{{ $jumlah_paket }}</h3>

                    <p>Total Package</p>
                  </div>
                  <div class="icon">
                  <i class="fa fa-box"></i>
                  </div>
                  <a href="/backend/package/index" class="small-box-footer"
                    >More info <i class="fas fa-arrow-circle-right"></i
                  ></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>{{ $jumlah_order}}</h3>

                    <p>Total Order</p>
                  </div>
                  <div class="icon">
                  <i class="fa fa-list"></i>
                  </div>
                  <a href="/backend/listorder/index" class="small-box-footer"
                    >More info <i class="fas fa-arrow-circle-right"></i
                  ></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
                        <!-- Main row -->
                        <div class="row">
                  <!-- /.card-header -->
                  <div class="card border-bottom-success mt-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-success">List Order Hari Ini</h6>
        </div>
        <div class="card-body">
            @if ($errors->count() >= 1)
                <table class="table table-hover table-bordered">
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
                        @foreach ($errors as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->code_order }}</td>
                                <td>{{ $row->package_id }}</td>
                                <td>{{ $row->total_price }}</td>
                                <td>{{ $row->user_name }}</td>
                                <td>{{ $row->user_phone }}</td>
                                <td>{{ $row->user_address }}</td>
                                <td>{{ $row->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-info" role="alert">
                    Anda tidak memiliki kategori terbaru hari ini
                </div>
            @endif
        </div>
    </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                    </div>
                    <!-- /. tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body pt-0">
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </section>
              <!-- right col -->
            </div>
            <!-- /.row (main row) -->
          </div>
          <!-- /.container-fluid -->
</section>