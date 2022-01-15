<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BioData extends Model
{
    protected $table = 'personal_info';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'father_name', 'father_occupation', 'mother_name', 'mother_occupation', 'permanent_address', 'present_address'];
}
