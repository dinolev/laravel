@extends('tournaments.layout')
@section('content')


<div class="card">
  <div class="card-header">Detalji o turniru</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">naziv : {{ $tournaments->naziv }}</h5>
        <p class="card-text">lokacija : {{ $tournaments->lokacija }}</p>
        <p class="card-text">datum_odrzavanja : {{ $tournaments->datum_odrzavanja }}</p>
        <p class="card-text">podloga : {{ $tournaments->podloga }}</p>
        <p class="card-text">dob : {{ $tournaments->dob }}</p>
        <p class="card-text">dogadaji : {{ $tournaments->dogadaji }}</p>
        <p class="card-text">broj_mjesta : {{ $tournaments->broj_mjesta }}</p>
        <p class="card-text">prijavljeni_natjecatelji : {{ $tournaments->prijavljeni_natjecatelji }}</p>

  </div>

    </hr>

  </div>
</div>
