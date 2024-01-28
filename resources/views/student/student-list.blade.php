@extends('layouts.master')

@section('title','student')

@section('student','active')


@section('content')

 <!-- main
    ================================================== -->

  <div class="style-content">
    

  <h3>Student</h3>
  <div class="btn-sm">
  <a href="{{url('/student/add')}}">
  <button class="btn btn-sm btn-success"><span data-feather="plus"></span> Add</button>
  </a>
  </div>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      
      <thead>
        <tr >
          <th>#</th>
          <th>FullName</th>
          <th>Gender</th>
          <th>Date of Birth</th>
          <th>Phone</th>
          <th>Subject</th>
          <th width="140px"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>1</td>
          <td>Nisothy Choeun</td>
          <td>M</td>
          <td>2000/11/24</td>
          <td>016386430</td>
          <td>IT</td> 
          <td class="btn-action">
            
            <a class="text-primary" href="{{url('/student/edit/1')}}">Edit <span class="text-primary"data-feather="edit"></span></a>
           <a class="text-danger" href="{{url('/subject/delete/1')}}">Delete <span class="text-danger"data-feather="trash"></span></a>

          </td>
          
        </tr>
      </tbody>
    </table>
  </div>

    
@endsection