<?php
namespace App\Interfaces;

use CodeIgniter\HTTP\ResponseInterface;

interface IPageController {
    public function new():ResponseInterface;
    public function edit(int $id):ResponseInterface;
}