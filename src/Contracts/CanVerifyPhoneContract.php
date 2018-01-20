<?php

declare(strict_types=1);

namespace Rinvex\Fort\Contracts;

interface CanVerifyPhoneContract
{
    /**
     * Get the phone for verification.
     *
     * @return string
     */
    public function getPhoneForVerification(): string;

    /**
     * Get the country for verification.
     *
     * @return string
     */
    public function getCountryForVerification(): string;

    /**
     * Determine if phone is verified or not.
     *
     * @return bool
     */
    public function isPhoneVerified(): bool;

    /**
     * Send the phone verification notification.
     *
     * @param string $method
     * @param bool   $force
     *
     * @return void
     */
    public function sendPhoneVerificationNotification($method, $force): void;
}
