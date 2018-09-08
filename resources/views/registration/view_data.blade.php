@extends('layouts.master')
@section('content')
<h2>View</h2>
<div class="links">
    <a href="{{url('/register')}}">register</a>
    <a href="{{url('/view-data')}}">users</a>
</div>
<table class="table table-responsive transaction-table" id="table1">
    <thead class="transaction_head"> 
        <tr>
            <th>Name</th>
            <th>Email</th>
             <th>Image</th> 
        </tr>
    </thead>
    <tbody class="transaction_body transhistory_body transactionHistoryBody"> 
        <?php
        foreach ($users as $value) {
            ?>
            <tr>
                <td><?= $value->name ?></td>
                <td><?= $value->email ?></td>
                <td> <img width="100" src="<?php echo URL::to('/').'/images/'.$value->image ?>"></td> 
                <td><a href="destroy/{{$value->id}}" class="btn btn-default" onclick="myFunction()">Delete</a><a href="edit/{{$value->id}}" class="btn btn-default">Edit</a></</td>
            </tr>
        <?php }  ?>
    </tbody>
</table>
@endsection
