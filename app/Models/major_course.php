<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class major_course extends Model
{
    use HasFactory;
    protected $fillable = [
        'major_id',
        'course_id',];
}
