<?php

namespace League\OAuth2\Server\Entities\Interfaces;

interface ClientEntityInterface
{
    /**
     * Get the client's identifier.
     *
     * @return string
     */
    public function getIdentifier();

    /**
     * Get the client's name.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the registered redirect URI (as a string).
     *
     * Alternatively return an indexed array of redirect URIs.
     *
     * @return string|string[]
     */
    public function getRedirectUri();
}