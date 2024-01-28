@extends('layouts.master')

@section('title','subject')

@section('subject','active')


@section('content')

 <!-- main
    ================================================== -->
    <div class="style-content">
    

      <h3>subject</h3>
      <div class="btn-sm">
        <a href="{{url('/subject/add')}}">
      <button class="btn btn-sm btn-success"><span data-feather="plus"></span> Add</button>
        </a>
      </div>
      </div>
      <div class="table-responsive">

  
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>ID</th>
          <th>Code</th>
          <th>Name</th>
          <th>Note</th>
          <th>Active</th>
          <th width="140px"></th>
        </tr>
      </thead>
      @foreach($subjects as $subject)
      <tr>
        <td>{{$subject->id}}</td>
        <td>{{$subject->code}}</td>
        <td> {{$subject->name}}</td>
        <td>{{$subject->note}}</td> 
        <td>{{$subject->active}}</td>
        
        <td class="btn-action">
          <a class="text-primary" href="{{url('/subject/edit',$subject->id)}}">Edit <span class="text-primary"data-feather="edit"></span></a>
          <a class="text-danger" href="{{url('/subject/delete',$subject->id)}}">Delete <span class="text-danger"data-feather="trash"></span></a> 
        </td>
        
      </tr>

      @endforeach
      <tbody>
        
      </tbody>
    </table>
  </div>

    
@endsection