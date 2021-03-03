
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
        <form name="form1" method="POST" action="{{ route('admin')}}" enctype="multipart/form-data" class="was-validated" >
            @csrf

        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="inputEmail4">photo</label>
                <input type="file" name="photo" class="file-input" id=""  required="">
            </div>

            <div class="form-group col-md-3">
              <label for="inputEmail4">Item_name</label>
              <input type="text" name="name" class="form-control" id="Email4" placeholder=" name" required="">

            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4">Price</label>
              <input type="number" class="form-control" name="price" id="price"  placeholder="Price" required="">

            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example detelse</label>
                <textarea class="form-control" name="detelse" id="exampleFormControlTextarea1" rows="0" required=""></textarea>
              </div>

    </form>

    <br>
    <div class="modal-footer">


    <button type="submit" class="btn btn-primary"onclick="myFunction()" value="Reset form">Save changes</button>
    </div>
      </div>

      <br>
      <br>
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
            <td> <img src="{!! 'image/'.$pro->photo !!}" height="100px;" width="60px;"></td>
            <td>{{ $pro->name }}</td>
            <td>{{ $pro->Price }}</td>
            <td>{{ $pro->detelse }}</td>

            <td><a href="{{ URL::TO ('admin/delete'.$pro->id) }}"class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete</a></td>

            <tr>

                @endforeach



            </tr>

        </table>

</table>
@endsection

