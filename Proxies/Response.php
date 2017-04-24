<?php
declare(strict_types=1);
namespace Viserio\Component\Http\Proxies;

use Viserio\Component\StaticalProxy\StaticalProxy;

class Response extends StaticalProxy
{
    /**
     * {@inheritdoc}
     *
     * @codeCoverageIgnore
     */
    public static function getInstanceIdentifier()
    {
        return 'response';
    }
}