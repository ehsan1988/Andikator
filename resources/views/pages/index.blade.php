@extends('layouts.master')
@section('content')
    <table class="table table-striped">
        <tr>
            <th>number</th>
            <th>name</th>
            <th>type</th>
            <th>contact name</th>
            <th>date</th>
            <th>attachment</th>
        </tr>
        @foreach ($letters as $letter)
            <tr>
                <td>{{$letter->id}}</td>
                <td>{{$letter->title}}</td>
                @if($letter->type==0)
                    <td>send</td>
                @else
                    <td>recive</td>
                @endif
                <td>{{\App\Contact::find($letter->contact_id)->name}}</td>
                <td>{{$letter->created_at}}</td>
                <td>{{(($letter->created_at->year)%100).$letter->id }}</td>
            </tr>
        @endforeach
    </table>
@endsection
