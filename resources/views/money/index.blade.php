@extends('app')

@section('content')

    <div class="container" style="text-align: center; color:blue">
        <h4 class="text">Money Transfer</h4>
    </div>
    @if (session('success'))
    <div class="container alert alert-success">
      {{ session('success') }}
    </div>
  @endif
       <table class="table table-success table-striped" style="width:80%; margin:20px auto; border-bottom:black;">
        <tr style="background-size: 90%">
                <td style="Font-weight:bold; text-align:center">ID</td>
                <td style="Font-weight:bold; text-align:center">Office_Send</td>
                <td style="Font-weight:bold; text-align:center">Office_Receive</td>
                <td style="Font-weight:bold; text-align:center">Money_Transfer</td>
                <td style="Font-weight:bold; text-align:center;">Date_Trans</td>
                <td style="Font-weight:bold; text-align:center;">id_office</td>
        </tr>
       @forelse ($moneys as $money)
       <tr>
            <td style="text-align: center">{{$money->id}}</td>
            <td style="text-align: center">{{$money->office_send}}</td>
            <td style="text-align: center">{{$money->office_receive}}</td>
            <td style="text-align: center">{{$money->money_trans}}</td>
            <td style="text-align: center">{{$money->data_trans}}</td>
            <td style="text-align: center">{{$money->office_id}}</td>
            <td style="max-width:auto">
                <form action="{{route('money.destroy' , $money->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                    <button style="" type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
          </td>
            
           
    </tr>
        @empty
       <h3>No Money</h3>
   @endforelse
      </table>
      <div class="container" style="justify-content:space-between; display:flex;  margin-top:20px">
        <a href="/"><button class="btn btn-success">Dashboard</button></a>
        <a href="{{route('search.index')}}"><button class="btn btn-primary">Search</button></a>
      </div>
 

@endsection
@section('title' , 'Home Page Money')
