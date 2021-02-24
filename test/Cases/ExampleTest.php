<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace HyperfTest\Cases;

use App\Kernel\Context\Coroutine;
use App\Kernel\Log\AppendRequestIdProcessor;
use Hyperf\Engine\Channel;
use Hyperf\HttpMessage\Server\Request;
use Hyperf\Utils\Context;
use HyperfTest\HttpTestCase;
use Psr\Http\Message\ServerRequestInterface;

/**
 * @internal
 * @coversNothing
 */
class ExampleTest extends HttpTestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
