@extends('app')


@section('content')

        

<br>
    <br>

            <h3 style="font-weight: bold; color:blue; text-align:center">this money transfer from office : {{$moneys->office_send}}</h3>
          
              <table class="table table-success table-striped" style="width:80%; margin:20px auto; border-bottom:black;">
        <tr style="background-size: 90%">
                <td style="Font-weight:bold; text-align:center">ID</td>
                <td style="Font-weight:bold; text-align:center">Office_Receive</td>
                <td style="Font-weight:bold; text-align:center">Money_Transfer</td>
                <td style="Font-weight:bold; text-align:center;">Date_Trans</td>
                <td style="Font-weight:bold; text-align:center;">id_office</td>
        </tr>
        @forelse ($moneys as $money)
             <tr>
                    <td style="text-align: center">{{$money->id}}</td>
                    <td style="text-align: center">{{$money->office_receive}}</td>
                    <td style="text-align: center">{{$money->money_trans}}</td>
                    <td style="text-align: center">{{$money->data_trans}}</td>
                    <td style="text-align: center">{{$money->office_id}}</td>
                 
             </tr>
        @empty
            <p style="font-weight: bold; color:red; text-align:center">No Results</p>
        @endforelse
     
      </table>
    
    </div>


@endsection

@section('title' , 'Search Result')
    
