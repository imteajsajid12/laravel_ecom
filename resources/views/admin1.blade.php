
@extends('layouts.app')


@section('content')


<!--MESSEGE-->


@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<!--END MESSEGE-->

      <div class="modal-body">
        <form name="form1" method="POST" action="{{ route('admin3')}}" enctype="multipart/form-data" >
            @csrf

        <div class="form-row">

            <div class="form-group col-md-3">

              <label for="inputEmail4">Name</label>
              <input type="file" name="photo">

            </div>

            <div class="form-group col-md-3">
              <label for="inputEmail4">Gmail</label>
              <input type="Gmail" name="name" class="form-control" id="Email4" placeholder=" Gmail" required="">

            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4">phone</label>
              <input type="number" class="form-control" name="price" id="price"  placeholder="phone" required="">

            </div>

    </form>

    <br>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="myFunction()" value="Reset form">Close</button>

    <button type="submit" class="btn btn-primary"onclick="myFunction()" value="Reset form">Save changes</button>
    </div>
      </div>

      <br>
      <br>


@endsection

