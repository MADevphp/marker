<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OrderPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }


    public function view(User $user, Order $order): bool
    {
        return $user->id === $order->user_id;
    }

    public function create(User $user): bool
    {
        return $user->hasRole('customer') || $user->hasPermissionTo('order:create');
    }

    public function update(User $user, Order $order): bool
    {
        return $user->id === $order->user_id || $user->hasPermissionTo('order:update');
    }

    public function delete(User $user, Order $order): bool
    {
        if ($user->hasRole('customer') && $order->user_id === $user->id) {
            return $user->hasRole('customer') || $user->hasPermissionTo('order:delete');
        } else {
            return $user->hasPermissionTo('order:delete');
        }
    }

    public function restore(User $user, Order $order): bool
    {
        return $user->hasPermissionTo('order:restore');
    }

    public function forceDelete(User $user, Order $order): bool
    {
        //
    }
}
