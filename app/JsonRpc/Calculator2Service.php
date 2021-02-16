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
namespace App\JsonRpc;

use Hyperf\Redis\Redis;
use Hyperf\RpcMultiplex\Constant;
use Hyperf\RpcServer\Annotation\RpcService;

/**
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性.
 * @RpcService(name="Calculator2Service", protocol=Constant::PROTOCOL_DEFAULT, server="rpc")
 */
class Calculator2Service implements CalculatorServiceInterface
{
    public function incr($key)
    {
        return di()->get(Redis::class)->incr($key);
    }
}
