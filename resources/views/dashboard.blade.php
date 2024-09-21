@extends('app')

@section('content')


<div class="container p-10" style="justify-content: center; text-align:center">
    <br>
    <h3 class="fw-bolder">This is DashBoard Page</h3>
    <br>
    <br>
    <p class="text-decoration-underline decoration-none">you can select option for this from this button</p>
</div>
<br>
    <div class="container p-10"  style="justify-content:space-between; max-width:1000px; display:flex">
            
            <a href="{{route('office.create')}}"><button class="btn btn-outline-success" type="submit">Create Office</button></a>
            <a href="{{route('office.index')}}"><button class="btn btn-outline-primary" type="submit">Show Office List</button></a>
            <a href="{{route('money.index')}}"><button class="btn btn-outline-info" type="submit">Show money_trans List</button></a>
            <a href="{{route('money.create')}}"><button class="btn btn-outline-warning" type="submit">Create money_trans</button></a>
           

    </div>
    
@endsection

@section('title' , 'DashBoard')
    
