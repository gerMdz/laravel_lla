<?php

namespace App\Policies;

use App\Models\Cursos;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CursosPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Cursos $cursos): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Cursos $cursos): bool
    {
    }

    public function delete(User $user, Cursos $cursos): bool
    {
    }

    public function restore(User $user, Cursos $cursos): bool
    {
    }

    public function forceDelete(User $user, Cursos $cursos): bool
    {
    }
}
