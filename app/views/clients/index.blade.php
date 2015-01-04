@extends('layouts.main')

@section('content')

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif



<table  id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
          
            <th>Nosaukums</th>
            <th>Apmaksat lidz</th>
            <th>Papildin. cena</th>
            <th>Distributiva Nr</th>
            <th>Kontakt Persona</th>
           
            <th>Telefons</th>
            <th>Epasts</th>
            <th></th>
 
    
        </tr>
    <tfoot>
    	 <tr>
    		
            <th>Nosaukums</th>
            <th>Apmaksat lidz</th>
            <th>Papildin. cena</th>
            <th>Distributiva Nr</th>
            <th>Kontakt Persona</th>
            <th>Telefons</th>
            <th>Epasts</th>
			<th></th>
            
        </tr>
    </tfoot>
    </thead>
    <tbody>
    @foreach($clients as $key => $value)
        <tr>

            <td>{{ $value->client_name }}</td>
            <td>{{ $value->payment_to_date }}</td>
            <td>{{ $value->update_cost }}</td>
            <td>{{ $value->distr }}</td>
            <td>{{ $value->contact_person }}</td>
        
            <td>{{ $value->telephone }}</td>
            <td>{{ $value->e_mail }}</td>
            <td> <a href="{{ URL::to('clients/' . $value->id) }}">{{ HTML::image('img/search2.svg', 'click', array('width' => 35 , 'height' => 35)) }}</a></td>

            <!-- we will also add show, edit, and delete buttons -->
       <!--      <td> -->

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
               <!-- <a class="btn btn-small btn-success" href="{{ URL::to('clients/' . $value->id) }}">Show this Nerd</a> -->

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
           <!--     <a class="btn btn-small btn-info" href="{{ URL::to('clients/' . $value->id . '/edit') }}">Edit this Nerd</a>
			
            </td>
			-->
        </tr>
    @endforeach
    </tbody>
</table>



</div>
</body>
</html>

@endsection('content')