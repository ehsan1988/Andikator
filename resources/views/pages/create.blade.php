@extends('layouts.master')
@section('content')
    <div class="col-sm-8">
        <form action="/create" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="contact_id">Contact</label>
                <select name="contact_id" id="contact_id" class="form-control">
                    @foreach (\App\Contact::all() as $contact)
                        <option value="{{$contact->id}}">{{ $contact->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type">
                    <option value="1">recive</option>
                    <option value="0">send</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title" class="control-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" class="form-control" name="body"></textarea>
            </div>


            <div class="form-group">
                <button class="btn btn-primary">send</button>
            </div>
        </form>
    </div>
@endsection