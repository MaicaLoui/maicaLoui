<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skirt extends Model
{

    // protected $table = 'skirts';

    // protected $primaryKey = 'id';

    use HasFactory;
    // public $timestamps = true;
    protected $guarded = [];
    // protected $fillable = [
    //     'waist',
    //     'hip',
    //     'hip_height',
    //     'length'

    // ];

    public function client()
    {
        return $this->belongsTo(Client::class);
        // return $this->hasOne(Client::class);
    }
}
