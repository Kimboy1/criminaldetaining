@extends('layouts.app')

@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Criminal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Criminal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->





    <section class="content">
      <div class="row">

        <div class="col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Criminal</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('criminal.add') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="CriminalName">Criminal Name </label>
                    <input type="text" class="form-control" id="criminalName" placeholder="Enter Criminal Name" name="criminal_name">
                  </div>
                  <div class="form-group">
                    <label for="CriminalDescription">Address</label>
                    <textarea class="form-control" rows="3" placeholder="Enter Criminal Address " name="criminal_address"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="CriminalAge">Criminal Age </label>
                    <input type="text" class="form-control" id="criminalAge" placeholder="Enter Criminal Age" name="criminal_age">
                  </div>
                  <div class="form-group">
                    <label for="CriminalGender">Criminal Gender </label>
                    <input type="text" class="form-control" id="criminalGender" placeholder="Enter Criminal Gender" name="criminal_gender">
                  </div>
                  <div class="form-group">
                    <label for="CriminalImage">Upload Images</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="criminal_image" placeholder="Upload an image" >
                            <label class="custom-file-label" for="customFile"></label>
                        </div>
                     
                    </div>
                  </div>
                  
     
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection

