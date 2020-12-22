<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kuisioner extends Model
{
    protected $table = 'kuisioner';
    protected $fillable = ['responden', 'pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'pertanyaan6'];
    protected $primaryKey = 'id';
    public $incrementing = false;
}