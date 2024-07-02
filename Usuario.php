<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {   
        $usuario = "admin";
        $type ="admin";
        $passwor = password_hash("123", PASSWORD_DEFAULT);
        $data = [
            'usuario' => $usuario,
            'password'    => $passwor,
            'type' => $type
        ];

        // Using Query Builder
        $this->db->table('t_usuario')->insert($data);
    }
}
