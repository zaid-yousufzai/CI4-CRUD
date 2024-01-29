<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            "id"=>[
                "type"=>"INT",
                "constraint"=>5,
                "auto_increment"=>true
            ],
            
            "name"=>[
                "type"=>"VARCHAR",
                "constraint"=>20,
                "null"=>false
            ],

            "city"=>[
                "type"=>"VARCHAR",
                "constraint"=>20,
                "null"=>false
            ]
                    ]);
            
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("user");
    }

    public function down()
    {
        //
        $this->forge->dropTable('user');
    }
}
