<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'courses';

    // /**
    //  * Indicates if the model should be timestamped.
    //  *
    //  * @var bool
    //  */
    // public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cshortname', 'cfullname', 'currentdate'];


    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
