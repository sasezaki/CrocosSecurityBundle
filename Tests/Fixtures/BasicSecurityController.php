<?php

namespace Crocos\SecurityBundle\Tests\Fixtures;

use Crocos\SecurityBundle\Annotation\Secure;
use Crocos\SecurityBundle\Annotation\SecureConfig;

/**
 * @SecureConfig(basic="foo:foopass")
 */
class BasicSecurityController
{
    public function securedAction()
    {
    }
}
