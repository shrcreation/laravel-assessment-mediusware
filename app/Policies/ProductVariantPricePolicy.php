<?php

namespace App\Policies;

use App\Models\ProductVariantPrice;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductVariantPricePolicy
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
     * @param  \App\Models\ProductVariantPrice  $productVariantPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ProductVariantPrice $productVariantPrice)
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
     * @param  \App\Models\ProductVariantPrice  $productVariantPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ProductVariantPrice $productVariantPrice)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductVariantPrice  $productVariantPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ProductVariantPrice $productVariantPrice)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductVariantPrice  $productVariantPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ProductVariantPrice $productVariantPrice)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductVariantPrice  $productVariantPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ProductVariantPrice $productVariantPrice)
    {
        //
    }
}
