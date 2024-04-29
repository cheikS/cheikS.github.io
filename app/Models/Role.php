<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
     
    public $timestamps = false ;

    protected $fillable = [
        'role',
        
    ];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function role_user()
    {
        return $this->belongsTo(Role_user::class);
    }

}
