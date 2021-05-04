@extends('layouts.app')

@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row" style="margin:20px">
    
          <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $criminalCount }}</h3>

                    <p>TOTAL MOVIES</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
               
            </div>
          </div>
          <!-- ./col -->
         
        </div>
    <!-- /.content -->





    <section class="content">
      <div class="row">

        <div class="col-12">
          <div class="card">
            <div class="card-header " style="display:flex">
              <h3 class="card-title">Criminal Database</h3>
              <a href="{{ route('criminal.add')}}" role="button" class="btn btn-block btn-primary float-right" style="margin-left:20px" >Add Criminals</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6"></div>
                  <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Criminal Name </th>
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Criminal Address </th>
                          <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Criminal Gender </th>
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Criminal Age </th>
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Created </th>
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($criminals as $criminal)
                        <tr role="row" class="odd">
                          <td class="sorting_1">{{ $criminal->criminal_name }}</td>
                          <td>{{ $criminal->criminal_address }}</td>
                          <td>{{ $criminal->criminal_gender }}</td>
                          <td>{{ $criminal->criminal_age }}</td>
                          <td>{{ $criminal->created_at }}</td>
                    
                          <td>
                            <div class="row">
                              <div class="col-md-6"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></div>
                              <div class="col-md-6"><a href="{{ route('criminal.delete',$criminal->id) }}"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    
                    </table>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection