@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Oxygen<img src="/oxygen.jfif" alt="">
    </th>
        <th>Penshoppe<img src="/penshoppe.jfif" alt=""></th>
        <th>Grandsler<img src="/grandsler.jfif" alt=""></th>
    </tr>
    <tr>
    <td>SALES</td>
    <td>SALES</td>
    <td>SALES</td>
    </tr>
    <tr>
        <th>124 Pieces</th>
        <th>200 Pieces</th>
        <th> 150 Pieces</th>
    </tr>
   
</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:100zpx solid black;
    padding:1px;
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

