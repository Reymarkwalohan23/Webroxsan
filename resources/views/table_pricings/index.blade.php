@extends('layouts.app')

@section('content')
   <div class="container">
    <table>
    <tr>
        <th>Oxygen</th>
        <th>Penshoppe</th>
        <th>Grandsler</th>
    </tr>
    <tr>
    <td>Oxygen<img src="/oxygen.jfif" alt="">
    </td>
    <td>Penshoppe<img src="/penshoppe.jfif" alt="">
    </td>
    <td>Grandsler<img src="/grandsler.jfif" alt="">
    </td>
    </tr>
    <tr>
        <th> $35 to $225</th>
        <th>₱ 599.00 to ₱ 1199.00.</th>
        <th> ₱100-₱200</th>
    </tr>
   
</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:50px solid black;
    padding:10px;
    background-color: pink;
    width: 900px;
    height: 150px;
    text-align: center;
    }
   img{
       width: 150px;
       height: 100px;
   }
</style>