@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Student List</h3>
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <a class="btn btn-primary" href="{{ route('student.add') }}" role="button">Create New </a>

          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" id="product-table">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Student Name</th>
                  <th>Address</th>
                  <th>Phone Number</th>
                  <th>Photo</th>
                  <th>Action</th>
                  <th>Status</th>
                </tr>
              </thead>
              @foreach ($student as $item)
              <tbody>
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->address }}</td>
                  <td>{{ $item->number }}</td>
                  <td>
                      <img src="{{ url('images/'.$item->image ) }}" height="45px" width="45px"  alt="">
                  </td>
                  <td>
                    <span>
                      <a href="{{ route('student.edit',['id' => $item->id]) }}"><i class="fas fa-edit"></i></a>
                      {{-- <a href="{{ url('edit-student/'.$item->id) }}"><i class="fas fa-edit"></i></a> --}}
                      <a href="{{ route('student.delete',['id' => $item->id]) }}"><i class="fas fa-trash"></i></a>
                      {{-- <a href="{{ url('delete-student/'.$item->id) }}"><i class="fas fa-trash"></i></a> --}}
                    </span>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">Action</button>
                      <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" role="menu" style="">
                        <a class="dropdown-item" href="#">Active</a>
                        <a class="dropdown-item" href="#">inActive</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
</div>
<!-- /.content-wrapper -->

@endsection