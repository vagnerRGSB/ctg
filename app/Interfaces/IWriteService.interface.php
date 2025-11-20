<?php
namespace App\Interfaces;

interface IWriteService{
    public function create(array $datas = []):bool;
    public function update(int $id, array $datas):bool;
    public function delete(int $id):bool;
}