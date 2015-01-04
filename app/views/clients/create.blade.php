@extends('layouts.main')
@section('content')

<h2>Izveidot ierakstu</h2>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'clients', 'class' => 'form-group')) }}

<span id="helpBlock" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>

    <div class="row">

    <div class="col-xs-4">
        {{ Form::label('client_name', 'Klients') }}
        {{ Form::text('client_name', Input::old('client_name'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('fact_adress', 'Faktiska adrese') }}
        {{ Form::text('fact_adress', Input::old('fact_adress'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('reg_number', 'Klienta Registracijas Numurs') }}
        {{ Form::text('reg_number', Input::old('reg_number'), array('class' => 'form-control')) }}
    </div>

     <div class="col-xs-4">
        {{ Form::label('legal_adress', 'Adresse') }}
        {{ Form::text('legal_adress', Input::old('legal_adress'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('e_mail', 'E-pasts') }}
        {{ Form::email('e_mail', Input::old('e_mail'), array('class' => 'form-control')) }}
    </div>

    
    <div class="col-xs-4">
        {{ Form::label('telephone', 'Telefona Numurs') }}
        {{ Form::text('telephone', Input::old('telephone'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('zip_code', 'Pasta indekss') }}
        {{ Form::text('zip_code', Input::old('zip_code'), array('class' => 'form-control')) }}
    </div>

    </div>

    <span id="helpBlock" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>

    <div class="row">

    <div class="col-xs-4">
        {{ Form::label('payment_to_date', 'Apmaksas datums') }}
        {{ Form::text('payment_to_date', Input::old('payment_to_date'), array('class' => 'form-control')) }}
    </div>

     <div class="col-xs-4">
        {{ Form::label('cost', 'Maksa') }}
        {{ Form::text('cost', Input::old('cost'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('update_cost', 'Pagarinasanas maksa') }}
        {{ Form::text('update_cost', Input::old('update_cost'), array('class' => 'form-control')) }}
    </div>

     <div class="col-xs-4">
        {{ Form::label('curator', 'Kurators') }}
        {{ Form::text('curator', Input::old('curator'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('install_date', 'Instalacijas datums') }}
        {{ Form::text('install_date', Input::old('install_date'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('distr', 'Distributiva numurs') }}
        {{ Form::text('distr', Input::old('distr'), array('class' => 'form-control')) }}
    </div>
    
    </div>

   <span id="helpBlock" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>

    <div class="row">

    <div class="col-xs-4">
        {{ Form::label('group', 'Grupa') }}
        {{ Form::text('group', Input::old('group'), array('class' => 'form-control')) }}
    </div>

     <div class="col-xs-4">
        {{ Form::label('language', 'Valoda') }}
        {{ Form::select('language', array('rus' => 'russian', 'eng' => 'english', 'lat' => 'latvian'), Input::old('language'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('study_status', 'Apmacibas status') }}
        {{ Form::select('study_status', array('nav' => 'nav izieta', 'ir' => 'ir izieta'), Input::old('study_status'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('study_date', 'Apmacibas datums') }}
        {{ Form::text('study_date', Input::old('study_date'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('contact_person', 'Kontakt persona') }}
        {{ Form::text('contact_person', Input::old('contact_person'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('contact_person_post', 'Kontakt personas amats') }}
        {{ Form::text('contact_person_post', Input::old('contact_person_post'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('cp_boss', 'Kontakt personas prieksnieks') }}
        {{ Form::text('cp_boss', Input::old('cp_boss'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('work_area', 'Nodarbosanas') }}
        {{ Form::text('work_area', Input::old('work_area'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('size', 'Lielums') }}
        {{ Form::text('size', Input::old('size'), array('class' => 'form-control')) }}
    </div>

    <div class="col-xs-4">
        {{ Form::label('payment_type', 'Apmaksas veids') }}
        {{ Form::text('payment_type', Input::old('payment_type'), array('class' => 'form-control')) }}
    </div>
    
     <div class="col-xs-4">
        {{ Form::label('note', 'Komentari') }}
        {{ Form::text('note', Input::old('note'), array('class' => 'form-control')) }}
    </div>

    </div>

    <p>

    {{ Form::submit('Saglabat', array('class' => 'btn btn-primary btn-lg btn-block')) }}

    </p>

{{ Form::close() }}

</div>
</body>
</html>

@endsection('content')