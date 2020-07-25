<?php

namespace Processton\AuthClient;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Processton\AuthClient\Skeleton\SkeletonClass
 */
class AuthClientFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth-client';
    }
}
