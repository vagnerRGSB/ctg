<?php 

namespace App\Interfaces;

use CodeIgniter\HTTP\ResponseInterface;

interface WriteController{
    public function create():ResponseInterface;
    public function update(int $id, array $datas):ResponseInterface;
    public function delete(int $id):ResponseInterface;
}