<?php

namespace App\Policies;

use App\Models\Semester1;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Semester1Policy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Semester1  $semester1
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Semester1 $semester1)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Semester1  $semester1
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Semester1 $semester1)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Semester1  $semester1
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Semester1 $semester1)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Semester1  $semester1
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Semester1 $semester1)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Semester1  $semester1
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Semester1 $semester1)
    {
        //
    }
}
