<?php
namespace App\Interfaces;

interface IReadService{
    public function getAll(array $filtro = []) : array;
    public function getById(int $id):bool;
}