<?php

namespace Processton\ProcesstonOrg;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Processton\ProcesstonOrg\Skeleton\SkeletonClass
 */
class ProcesstonOrgFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'processton-org';
    }
}
