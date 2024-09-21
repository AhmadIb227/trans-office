@extends('app')

@section('content')
    
<div class="card text-center">
    <div class="card-header">
      <p> ID_Money:{{$moneys->id}}</p>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$moneys->office_send}}</h5>
      <table class="table table-success table-striped" style="width:80%; margin:20px auto; border-bottom:black;">
        <tr style="background-size: 90%">
                <td style="Font-weight:bold; text-align:center">ID</td>
                <td style="Font-weight:bold; text-align:center">Office_Receive</td>
                <td style="Font-weight:bold; text-align:center">Money_Transfer</td>
                <td style="Font-weight:bold; text-align:center;">Date_Trans</td>
                <td style="Font-weight:bold; text-align:center;">id_office</td>
        </tr>
        <tr>
             <td style="text-align: center">{{$moneys->id}}</td>
             <td style="text-align: center">{{$moneys->office_receive}}</td>
             <td style="text-align: center">{{$moneys->money_trans}}</td>
             <td style="text-align: center">{{$moneys->data_trans}}</td>
             <td style="text-align: center">{{$moneys->office_id}}</td>
           </td>
            
        </tr>
      </table>
      <a href="{{route('money.index')}}" class="btn btn-primary">Go Back</a>
    </div>
    <div class="card-footer text-body-secondary">
        {{$moneys->data_trans}}
    </div>
  </div>

@endsection