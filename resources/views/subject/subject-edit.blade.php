@extends('layouts.master')

@section('title','subject')

@section('subject','active')

@section('content')
  
<div class="style-content">
    
    
      <div class="col-md-8 order-md-1">
      <h3 class="mb-3">Edit {{$subject->code}}</h3>

              @if ($errors->any())
              <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
              @endif

        <form class="needs-validation" method="POST" action="{{route("subject.update",$subject->id)}}">
          {{method_field('PUT')}}
          {{ csrf_field() }}
        <div class="mb-3">
          <label for="code">Code</label>
          <input type="text" name="code" value="{{$subject->code}}" class="form-control" id="code" placeholder="Code">
        </div>

          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$subject->name}}" class="form-control" id="email" placeholder="Name">
          </div>

          <div class="mb-3">
            <label for="note">Note</label>
            <textarea class="form-control" name="note" id="note" rows="3">{{$subject->note}}</textarea>
          </div>

          <hr class="mb-4">
          <button class="btn btn-primary btn-sm btn-lg btn-block" type="submit">Submit</button>
        </form>
      </div>
</div>
@endsection


