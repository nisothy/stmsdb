@extends('layouts.master')

@section('title','subject')

@section('subject','active')

@section('content')
  
<div class="style-content">
    
      
      <div class="col-md-8 order-md-1">
        <h3>Delete {{$subject->name}}</h3>
        <form class="needs-validation" method="POST" action="{{route('subject.delete',$subject->id)}}">
          {{method_field('PUT')}}
          {{csrf_field()}}
        <div class="mb-3">
          <label for="code">Code</label>
          <input type="text" value="{{$subject->code}}" class="form-control" id="code" placeholder="Code">
        </div>

          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" value="{{$subject->name}}" class="form-control" id="name" placeholder="Name">
          </div>

          <div class="mb-3">
            <label for="note">Note</label>
            <textarea class="form-control" id="note" rows="3">{{$subject->note}}</textarea>
          </div>

          

          
          <hr class="mb-4">
          <button class="btn btn-danger btn-sm btn-lg btn-block" type="submit">Delete</button>
        </form>
      </div>
@endsection

