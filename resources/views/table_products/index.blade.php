@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Brand</th>
        <th>Sizes</th>
        <th>Product Type</th>
    </tr>
    <tr>
        <td>Oxygen
        <img src="/oxygen.jfif" alt="">
        </td>
        <td>Small, Medium, and Large</td>
        <td>Aparrel</td>
    </tr>
    <tr>
        <td>Penshoppe
        <img src="/penshoppe.jfif" alt="">
        </td>
        <td>Free Size</td>
        <td>Apparel</td>
    </tr>
    <tr>
         <td>Grandsler
        <img src="/grandsler.jfif" alt="">
        </td>
        <td>Small, Medium and Large</td>
        <td>Apparel</td>
</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:20px solid black;
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

