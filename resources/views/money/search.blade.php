@extends('app')


@section('content')
    
    <div class="container">
        <form action="{{route('search.store')}}" method="post" , enctype="multipart/form-data" style="justify-content: center; display:flex;">
        @csrf
        <select class="form-select" name="name" aria-label="select example" style="font-weight: bold">
            <option selected>Open this select menu to search</option>
            @forelse ($offices as $office)
            <option>
                    {{$office->name_office}}
            </option>

            @empty

            <p>NO Offices</p>
                
            @endforelse
          </select>
          <br>
          <button type="submit" class="btn btn-outline-primary p-10">Search</button>
        </form>
          <br>
        

<br>
    <br>
          
              {{-- <table class="table table-success table-striped" style="width:80%; margin:20px auto; border-bottom:black;">
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
      </table> --}}
    
    </div>


@endsection

@section('title' , 'search money')
    
