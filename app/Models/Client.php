<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{


    // protected $table = 'clients';

    // protected $primaryKey = 'id';

    use HasFactory;
    protected $guarded = [];

    /**
     * Get the user associated with the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function skirt()
    {
        return $this->hasOne(Skirt::class);
    }

    public function bodice()
    {
        return $this->hasOne(Bodice::class);
    }
}
