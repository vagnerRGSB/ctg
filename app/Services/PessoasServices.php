<?php
namespace App\Services;

use App\Interfaces\IReadService;
use App\Interfaces\IWriteService;
use App\Models\PessoasModel;

class PessoasService 
implements
IWriteService,
IReadService{

    private $pessoasModel;

    public function __construct()
    {
        $this->pessoasModel=new PessoasModel();
    }
    public function getAll(array $filtro = []): array
    {
        throw new \Exception('Not implemented');
    }
    public function getById(int $id): bool
    {
        throw new \Exception('Not implemented');
    }
    public function create(array $datas = []): bool
    {
        throw new \Exception('Not implemented');
    }
    public function update(int $id, array $datas): bool
    {
        throw new \Exception('Not implemented');
    }
    public function delete(int $id): bool
    {
        throw new \Exception('Not implemented');
    }
}