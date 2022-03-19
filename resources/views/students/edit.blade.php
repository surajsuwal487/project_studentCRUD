@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="wrapper">
  <div class="content-wrapper">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Student</h3>
      </div>

      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('student.update',['id' => $student->id]) }}" method="POST" enctype="multipart/form-data">
        
        {{-- {{ url('update-student/'.$student->id) }} --}}
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="productName">Student Name</label>
            <input type="text" class="form-control" value="{{ $student->name }}" name="name">
          </div>
          <div class="form-group">
            <label for="price">Address</label>
            <input type="text" class="form-control" value="{{ $student->address }}" name="address">
          </div>
          <div class="form-group">
            <label for="productDescription">Phone Number</label>
            <input type="text" class="form-control" value="{{ $student->number }}" name="number">
          </div>
          <label for="image">Your Image Here</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            <img src="{{ asset('images/'.$student->image) }}" width="40px" height="40px" alt="">
          </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      @if ($errors->any())
      <div>
        @foreach ($errors->all() as $error )
          <li class="alet alert-danger">
            {{ $error }}
          </li>
        @endforeach
      </div>
    @endif
    
      @if (session('status'))
      <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif
    </div>
  </div>
</div>
<!-- /.content-wrapper -->

@endsection