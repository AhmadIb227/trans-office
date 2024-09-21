@extends('app')

@section('content')

{{-- <h3>this is index Office</h3> --}}
{{-- <div class="container"> --}}
    <div class="container" style="text-align: center; color:blue">
        <h4 class="text">Remittances Offices</h4>
    </div>
    @if (session('success'))
    <div class="container alert alert-success">
      {{ session('success') }}
    </div>
    @endif
 
       <table class="table table-striped" style="width:80%; margin:20px auto; border-bottom:black;">
        <tr style="background-size: 90%">
                <td style="Font-weight:bold; text-align:center">ID</td>
                <td style="Font-weight:bold; text-align:center">Name_Office</td>
                <td style="Font-weight:bold; text-align:center">Address</td>
                <td style="Font-weight:bold; text-align:center">Country</td>
                <td style="Font-weight:bold; text-align:center;">Amount</td>
                <td style="Font-weight:bold; text-align:center;">Option</td>
        </tr>
        @forelse ($officecol as $office)
       <tr>
            <td style="text-align: center">{{$office->id}}</td>
            <td style="text-align: center">{{$office->name_office}}</td>
            <td style="text-align: center">{{$office->address}}</td>
            <td style="text-align: center">{{$office->country}}</td>
            <td style="text-align: center">{{$office->amount}}</td>
            <td style=""><a href="{{route('office.edit' , $office->id)}}"><button class="btn btn-sm btn-outline-primary" style="">Update</button></a></td>
            <td style="max-width:auto">
                <form action="{{route('office.destroy' , $office->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                      <button style="" type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                  </form>
            </td>
            
           
       </tr>
       @empty
            <br>
            <h3 style="text-align: center; color:red;">No Office</h3>
            <br>
   @endforelse
      </table> 
      <div class="container" style="justify-content:space-between; display:flex;  margin-top:20px">
        <a href="{{route('office.create')}}"><button class="btn btn-success">Create Office</button></a>
        <a href="{{route('money.create')}}"><button class="btn btn-primary">Add Money_Transfer</button></a>
       <a href="{{route('money.index')}}"><button class="btn btn-warning">Show Money_Transfer</button></a>
      </div>
    
        
    

@endsection
@section('title' , 'Home Page Office')

