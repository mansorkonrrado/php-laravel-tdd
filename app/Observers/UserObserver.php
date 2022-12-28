<?php

namespace App\Observers;

use App\Models\user;
use Illuminate\Support\Str;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function creating(user $user)
    {
        $user->id = Str::uuid();
    }
}
