@extends('layouts.main')
@section('content')

<h2>Meklet ierakstu</h2>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'search')) }}

    <div class="form-group">
    <h4>Kadus laukus paradit?</h4>
 
                       <label class="checkbox-inline">
                         <input type="checkbox" id="inlineCheckbox1" value="123"> 1
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

    <div class="form-group">
        <h4>Kura lauka meklet?<h4>
            
               <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            
  </div>

  <div class="form-group">
        <h4>Vertiba<h4>
            <div class="col-xs-1">
               <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
        
            </div>
             <div class="col-xs-3">
             <input type="text" class="form-control">
             </div>
  </div>


 {{ Form::submit('Meklet', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>

@endsection('content')