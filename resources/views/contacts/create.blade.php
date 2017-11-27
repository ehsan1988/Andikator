@extends('layouts.master')

@section('content')
    <form action="/contacts/create" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input name="address" type="text" class="form-control" id="address" placeholder="Address">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">store contact</button>
        </div>


    </form>
@endsection