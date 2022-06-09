

@extends('tournaments.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('tournaments/' .$tournaments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$tournaments->id}}" id="id" />
        <label>naziv</label></br>
        <input type="text" name="naziv" id="naziv" value="{{$tournaments->naziv}}" class="form-control"></br>
        <label>lokacija</label></br>
        <input type="text" name="lokacija" id="lokacija" value="{{$tournaments->lokacija}}" class="form-control"></br>
        <label>datum_odrzavanja</label></br>
        <input type="text" name="datum_odrzavanja" id="datum_odrzavanja" value="{{$tournaments->datum_odrzavanja}}" class="form-control"></br>
        <label>podloga</label></br>
        <input type="text" name="podloga" id="podloga" value="{{$tournaments->podloga}}" class="form-control"></br>
        <label>dob</label></br>
        <input type="text" name="dob" id="dob" value="{{$tournaments->dob}}" class="form-control"></br>
       <label>dogadaji</label></br>
        <input type="text" name="dogadaji" id="dogadaji" value="{{$tournaments->dogadaji}}" class="form-control"></br>
        <label>broj_mjesta</label></br>
        <input type="text" name="broj_mjesta" id="broj_mjesta" value="{{$tournaments->broj_mjesta}}" class="form-control"></br>
        <label>prijavljeni_natjecatelji</label></br>
        <input type="text" name="prijavljeni_natjecatelji" id="prijavljeni_natjecatelji" value="{{$tournaments->prijavljeni_natjecatelji}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop



