<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{
    protected $table = 'tournaments';
    protected $primaryKey = 'id';
    protected $fillable = ['naziv', 'lokacija', 'datum_odrzavanja','podloga','dob','dogadaji','broj_mjesta','prijavljeni_natjecatelji'];
}