<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Interfaces\IPageController;
use App\Interfaces\IReadCrontroller;
use App\Interfaces\IWriteController;
use CodeIgniter\HTTP\ResponseInterface;

class TiposEventosController extends BaseController implements
IPageController,
IReadCrontroller,
IWriteController
{
    public function create(): ResponseInterface
    {
        throw new \Exception('Not implemented');
    }
    public function update(int $id, array $datas): ResponseInterface
    {
        throw new \Exception('Not implemented');
    }
    public function delete(int $id): ResponseInterface
    {
        throw new \Exception('Not implemented');
    }
    public function new(): ResponseInterface
    {
        throw new \Exception('Not implemented');
    }
    public function edit(int $id): ResponseInterface
    {
        throw new \Exception('Not implemented');
    }
    public function index(): ResponseInterface
    {
        throw new \Exception('Not implemented');
    }
    public function show(int $id): ResponseInterface
    {
        throw new \Exception('Not implemented');
    }
}
