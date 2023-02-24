<?php

namespace App\Policies;

use App\Models\Libros;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LibrosPolicy
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
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Libros $libros)
    {
        if($user->isAdmin() || $user->isEditor()) return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if($user->isAdmin() || $user->isEditor()) return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Libros $libros)
    {
        if($user->isAdmin() || $user->isEditor()) return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Libros $libros)
    {
        if($user->isAdmin()) return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Libros $libros)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Libros $libros)
    {
        //
    }
}
