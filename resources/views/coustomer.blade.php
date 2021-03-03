
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
        <form name="form1" method="POST" action="{{ route('home1')}}" >
            @csrf


        <div class="form-row">

            <div class="form-group col-md-3">

              <label for="inputEmail4">Name</label>
              <input type="name" name="name" class="form-control" id="Name"  placeholder="Name"autofocus required="" >

            </div>

            <div class="form-group col-md-3">
              <label for="inputEmail4">Gmail</label>
              <input type="Gmail" name="email" class="form-control" id="Email4" placeholder=" Gmail" required="">

            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4">phone</label>
              <input type="number" class="form-control" name="phone" id="price"  placeholder="phone" required="">

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

      <form action="scearch">
       <div class="form-group col-md-3" style="float:right">

       <input type="text" class="form-control" name="scearch" id=""  placeholder="Scearch" >

      </div>
    </form>
    <div class="table">

        <table class="table table-bordered table-striped table-hover table-white">
            <tr>


                <th>ID</th>
                <th>Name</th>
                <th>Prodect Name</th>
                <th>Prodact price</th>

                <th>Action</th>

            </tr>
            @foreach ($mem as $pro)
            <td>{{ $pro->id }}</td>
            <td>{{ $pro->name }}</td>
            <td>{{ $pro->email }}</td>
            <td>{{ $pro->phone }}</td>

            <td><a href="{{ URL::TO ('Delete/coustomer/'.$pro->id) }}"class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete</a></td>

            <tr>

                @endforeach



            </tr>

        </table>
@endsection

