<?php

// namespace App;
namespace RoyceLtd\LaravelBulkSMS\Models;

use Illuminate\Database\Eloquent\Model;

class ContactGroup extends Model
{
    //
    public function contacts()
    {
        return $this->hasMany(Contact::class,'group_id');
    }
}
