<?php

/*
 * NOTICE OF LICENSE
 *
 * Part of the Rinvex Fort Package.
 *
 * This source file is subject to The MIT License (MIT)
 * that is bundled with this package in the LICENSE file.
 *
 * Package: Rinvex Fort Package
 * License: The MIT License (MIT)
 * Link:    https://rinvex.com
 */

namespace Rinvex\Fort\Handlers;

use Rinvex\Fort\Models\Role;
use Rinvex\Fort\Models\User;
use Rinvex\Fort\Models\Ability;

class AbilityHandler
{
    /**
     * Listen to the Ability created event.
     *
     * @param \Rinvex\Fort\Models\Ability $ability
     * @param string                      $event
     *
     * @return void
     */
    public function created(Ability $ability, $event)
    {
        //
    }

    /**
     * Listen to the Ability updated event.
     *
     * @param \Rinvex\Fort\Models\Ability $ability
     * @param string                      $event
     *
     * @return void
     */
    public function updated(Ability $ability, $event)
    {
        Role::forgetCache();
        User::forgetCache();
    }

    /**
     * Listen to the Ability deleted event.
     *
     * @param \Rinvex\Fort\Models\Ability $ability
     * @param string                      $event
     *
     * @return void
     */
    public function deleted(Ability $ability, $event)
    {
        Role::forgetCache();
        User::forgetCache();
    }

    /**
     * Listen to the Ability attached event.
     *
     * @param \Rinvex\Fort\Models\Ability $ability
     * @param string                      $event
     *
     * @return void
     */
    public function attached(Ability $ability, $event)
    {
        Role::forgetCache();
        User::forgetCache();
    }

    /**
     * Listen to the Ability detached event.
     *
     * @param \Rinvex\Fort\Models\Ability $ability
     * @param string                      $event
     *
     * @return void
     */
    public function detached(Ability $ability, $event)
    {
        Role::forgetCache();
        User::forgetCache();
    }

    /**
     * Listen to the Ability validating event.
     *
     * @param \Rinvex\Fort\Models\Ability $ability
     * @param string                      $event
     *
     * @return void
     */
    public function validating(Ability $ability, $event)
    {
        //
    }

    /**
     * Listen to the Ability validated event.
     *
     * @param \Rinvex\Fort\Models\Ability $ability
     * @param string                      $event
     *
     * @return void
     */
    public function validated(Ability $ability, $event)
    {
        //
    }
}
