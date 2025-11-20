<?php
namespace App\Interfaces;

use CodeIgniter\HTTP\ResponseInterface;

interface ReadCrontroller{
        public function index():ResponseInterface;
    public function show(int $id):ResponseInterface;
}