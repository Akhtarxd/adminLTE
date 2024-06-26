<?php

namespace App\Models;
                            

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
 
    protected $fillable = ['fname','lname','company_id','email','phone','password'];

    public function company()
    {
        return $this->belongsTo('App\Models\Companies', 'company_id');
    }
}
