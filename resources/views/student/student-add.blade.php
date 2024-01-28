@extends('layouts.master')

@section('title','subject')

@section('student','active')

@section('content')
  
<div class="style-content">
    

      <div class="col-md-8 order-md-1">
        <h3>Add</h3>

        <div class="mb-3">
          <label for="code">Code</label>
          <input type="text" class="form-control" id="code" placeholder="Code">
          <div class="invalid-feedback">
              Code is required.
          </div>
        </div>

          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="email" placeholder="Name ">
            <div class="invalid-feedback">
              Name is required.
            </div>
          </div>

          <div class="mb-3">
            <label for="note">Note</label>
            <textarea class="form-control" id="note" rows="3"></textarea>
            <div class="invalid-feedback">
              Note is required.
            </div>
          </div>

          

          
          <hr class="mb-4">
          <button class="btn btn-primary btn-sm btn-lg btn-block" type="submit">Submit</button>
        </form>
      </div>
@endsection

