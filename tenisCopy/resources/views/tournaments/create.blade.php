@extends('tournaments.layout')
@section('content')

<div class="card">
  <div class="card-header">Dodaj novi turnir</div>
  <div class="card-body">

      <form action="{{ url('tournaments') }}" method="post">
        {!! csrf_field() !!}
        <label>naziv</label></br>
        <input type="text" name="naziv" id="naziv" class="form-control"></br>
        <label>lokacija</label></br>
        <input type="text" name="lokacija" id="lokacija" class="form-control"></br>
        <label>datum_odrzavanja</label></br>
        <input type="text" name="datum_odrzavanja" id="datum_odrzavanja" class="form-control"></br>

        <label>podloga</label></br>
        <input type="text" name="podloga" id="podloga" class="form-control"></br>
        <label>dob</label></br>
        <input type="text" name="dob" id="dob" class="form-control"></br>
        <label>dogadaji</label></br>
        <input type="text" name="dogadaji" id="dogadaji" class="form-control"></br>

        <label>broj_mjesta</label></br>
        <input type="text" name="broj_mjesta" id="broj_mjesta" class="form-control"></br>
        <label>prijavljeni_natjecatelji	</label></br>
        <input type="text" name="prijavljeni_natjecatelji" id="prijavljeni_natjecatelji" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
