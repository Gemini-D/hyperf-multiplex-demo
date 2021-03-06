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
namespace App\Controller;

use App\JsonRpc\Calculator2ServiceInterface;
use App\JsonRpc\CalculatorServiceInterface;

class IndexController extends Controller
{
    public function index()
    {
        // $res = di()->get(CalculatorServiceInterface::class)->incr('test');
        $res = di()->get(Calculator2ServiceInterface::class)->incr('test2');

        return $this->response->success($res);
    }
}
