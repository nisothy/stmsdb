@extends('layouts.master')

@section('title','subject')

@section('subject','active')

@section('content')

  
<div class="style-content">
    

      <div class="col-md-8 order-md-1">
        <h3>Add</h3>
        @if ($errors->any())
        <ul class="alert alert-danger">
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif
        <form class="need-validation" method="POST" action="{{route("subject.create")}}">
          {{ csrf_field() }}
        <div class="mb-3">
          <label for="code">Code</label>
          <input type="text" name="code" class="form-control" id="code" placeholder="Code">
          <div class="invalid-feedback">
              Code is required.
          </div>
        </div>

          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="email" placeholder="Name ">
            <div class="invalid-feedback">
              Name is required.
            </div>
          </div>

          <div class="mb-3">
            <label for="note">Note</label>
            <textarea class="form-control" name="note" id="note" rows="3"></textarea>
            <div class="invalid-feedback">
              Note is required.
            </div>
          </div>

          

          
          <hr class="mb-4">
          <input type="number" name="active" value="1" hidden>
          <button class="btn btn-primary btn-sm btn-lg btn-block" type="submit">Submit</button>
        </form>
      </div>
@endsection

