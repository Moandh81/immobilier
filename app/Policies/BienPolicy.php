<?php

namespace App\Policies;

use App\User;
use App\Bien;
use Illuminate\Auth\Access\HandlesAuthorization;

class BienPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the bien.
     *
     * @param  \App\User  $user
     * @param  \App\Bien  $bien
     * @return mixed
     */
    public function view(User $user, Bien $bien)
    {
      //  return $user->id = $bien->user_id ;

    }

    /**
     * Determine whether the user can create biens.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the bien.
     *
     * @param  \App\User  $user
     * @param  \App\Bien  $bien
     * @return mixed
     */
    public function update(User $user, Bien $bien)
    {

    }

    /**
     * Determine whether the user can delete the bien.
     *
     * @param  \App\User  $user
     * @param  \App\Bien  $bien
     * @return mixed
     */
    public function delete(User $user, Bien $bien)
    {
        //
    }

    /**
     * Determine whether the user can restore the bien.
     *
     * @param  \App\User  $user
     * @param  \App\Bien  $bien
     * @return mixed
     */
    public function restore(User $user, Bien $bien)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the bien.
     *
     * @param  \App\User  $user
     * @param  \App\Bien  $bien
     * @return mixed
     */
    public function forceDelete(User $user, Bien $bien)
    {
        //
    }
}
