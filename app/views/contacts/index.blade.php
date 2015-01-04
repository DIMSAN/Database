@extends('layouts.main')

@section('content')

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif



<table  id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>

          <th>Klients</th>
            <th>Tips</th>
            <th>Apmaksas veids</th>
            <th>Maksa</th>
            
            <th></th>
 
    
        </tr>
    <tfoot>
    	 <tr>
    		
            <th>Klients</th>
            <th>Tips</th>
            <th>Apmaksas veids</th>
            <th>Maksa</th>
           
			<th></th>
            
        </tr>
    </tfoot>
    </thead>
    <tbody>
    @foreach($contacts as $key => $value)
        <tr>

            <td>{{ $value->client_name }}</td>
            <td>{{ $value->veids }}</td>
            <td>{{ $value->contact_p}}</td>
            <td>{{ $value->comment }}</td>
            
            <td> <a href="{{ URL::to('contacts/' . $value->id . '/edit') }}">{{ HTML::image('img/search2.svg', 'click', array('width' => 35 , 'height' => 35)) }}</a></td>

            
        </tr>
    @endforeach
    </tbody>
</table>



</div>
</body>
</html>

@endsection('content')