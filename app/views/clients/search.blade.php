@extends('layouts.main')
@section('content')

<h2>Meklet ierakstu</h2>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'search')) }}
    <h3>Kadus laukus meklet?</h3>
   <div class="col-xs-6">
                       <label class="checkbox-inline">
                         <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                        </label>
                          <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                        </label>
                         <label class="checkbox-inline">
                           <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                         </label>
                         <label class="checkbox-inline">
                         <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                        </label>
                          <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                        </label>
                         <label class="checkbox-inline">
                           <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                         </label>

    </div>


{{ Form::close() }}

</div>
</body>
</html>

@endsection('content')