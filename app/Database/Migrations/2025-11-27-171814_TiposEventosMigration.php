<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TiposEventosMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "int",
                "unsigned" => true,
                "auto_increment" => true
            ],
            "nome" => [
                "type" => "varchar",
                "constraint" => 60
            ],
            "habilita_salao" =>[
                "type"=>"tinyint",
                "default"=> 0
            ],
            "habilita_copa" => [
                "type"=>"tinyint",
                "default"=> 0
            ],
            "habilita_cozinha" => [
                "type"=>"tinyint",
                "default"=> 0
            ],
            "descricao"=>[
                "type"=>"text",
                "null"=>true
            ]
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("tipos_eventos",true,["engine"=>"InnoDB"]);
    }

    public function down()
    {
        $this->forge->dropTable("tipos_eventos");
    }
}
