<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Log;

class UserObserver
{

    public function creating (User $user){
        $user->last_login=now();
    }

    public function created(User $user){
        Log::create([
            'module' => 'register',
            'action' => 'registrasi akun',
            'useraccess' => $user->role
        ]);
    }
    /**
     * Handle the UserObserver "created" event.
     *
     * @param  \App\Models\UserObserver  $userObserver
     * @return void
     */
    // public function created(UserObserver $userObserver)
    // {
    //     //
    // }

    /**
     * Handle the UserObserver "updated" event.
     *
     * @param  \App\Models\UserObserver  $userObserver
     * @return void
     */
    public function updated(UserObserver $userObserver)
    {
        //
    }

    /**
     * Handle the UserObserver "deleted" event.
     *
     * @param  \App\Models\UserObserver  $userObserver
     * @return void
     */
    public function deleted(UserObserver $userObserver)
    {
        //
    }

    /**
     * Handle the UserObserver "restored" event.
     *
     * @param  \App\Models\UserObserver  $userObserver
     * @return void
     */
    public function restored(UserObserver $userObserver)
    {
        //
    }

    /**
     * Handle the UserObserver "force deleted" event.
     *
     * @param  \App\Models\UserObserver  $userObserver
     * @return void
     */
    public function forceDeleted(UserObserver $userObserver)
    {
        //
    }
}
