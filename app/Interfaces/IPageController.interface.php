<?php
namespace App\Interfaces;

use CodeIgniter\HTTP\ResponseInterface;

interface PageController {
    public function new():ResponseInterface;
    public function edit(int $id):ResponseInterface;
}