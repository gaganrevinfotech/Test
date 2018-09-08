@extends('layouts.master')
@section('content')
<h2>View</h2>
<div class="links">
    <a  class="btn btn-info"  href="{{url('/register')}}">register</a>
    <a   class="btn btn-info"  href="{{url('/view-data')}}">users</a>
</div>
<br>
<table id="example" class="table table-striped table-bordered transaction-table" style="width:100%">
    <thead class="transaction_head"> 
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Image</th> 
            <th>Action</th> 
        </tr>
    </thead>
    <tbody class="transaction_body transhistory_body transactionHistoryBody"> 
        <?php
        foreach ($users as $value) {
            ?>
            <tr>
                <td><?= $value->name ?></td>
                <td><?= $value->email ?></td>
                <td> <img width="100" src="<?php echo URL::to('/').'/public/images/'.$value->image ?>"></td> 
                <td><button class="btn btn-default" onclick="myFunction(<?= $value->id ?>)">Delete</button><a href="edit/{{$value->id}}" class="btn btn-default">Edit</a></</td>
            </tr>
        <?php }  ?>
    </tbody>
</table>
@endsection
