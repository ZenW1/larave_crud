@extends('layouts.app')

@section('content')

   <div class="container form">
    <form class="row g-3" action="/task" method="POST">
        @csrf
        <div class="col-md-6">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title">
         <div></div>
        <div class="col-md-6">
          <label for="description" class="form-label" >Description</label>
          <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="col-md-6">
            <label for="priority" class="form-label">Priority</label>
            <select id="priority" class="form-select" name="priority">
              <option selected>Choose...</option>
              <option>Important</option>
              <option>Not important</option>
              <option>Urgent</option>
              <option>Not urgent</option>
            </select>
            </div>
        <div>
            <label for="status" class="form-label">Status</label>
            <select id="status" class="form-select" name="status">
                <option selected>Choose...</option>
                <option>Done</option>
                <option>Not done</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>

          <br>
        <div class="col-auto">
            // input submit
        </div>
      </form>
   </div>

@endsection
