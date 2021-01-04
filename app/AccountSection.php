<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class AccountSection extends Model
{
    protected $table = 'account_sec';

    public function relationWithUser()
    {
        return $this->belongsTo(User::class,'user_id','user_id');
    }

}
