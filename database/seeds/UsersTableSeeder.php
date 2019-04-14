<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idChurch_fk' => NULL,
                'isAdmin' => true,
                'isMember' => false,
                'isActive' => true,
                'isDeleted' => false,
                'name' => 'João Filipi Britto',
                'birth' => NULL,
                'sex' => 'masculino',
                'email' => 'jf.britto@hotmail.com',
                'password' => '$2y$10$1OYGSQJWOw9ORQUVQL0ZGu/JML3G/f6wLVad6NC0ylG7B3OsP4YkO',
                'cpf' => '160.943.007-77',
                'phone' => NULL,
            )
            // 1 => 
            // array (
            //     'id' => 2,
            //     'idChurch_fk' => 1,
            //     'isAdmin' => false,
            //     'isMember' => false,
            //     'isActive' => true,
            //     'isDeleted' => false,
            //     'name' => 'Cintia Closs',
            //     'birth' => NULL,
            //     'sex' => 'feminino',
            //     'email' => 'cintia@hotmail.com',
            //     'password' => '$2y$10$1OYGSQJWOw9ORQUVQL0ZGu/JML3G/f6wLVad6NC0ylG7B3OsP4YkO',
            //     'cpf' => '123.321.007-77',
            //     'phone' => NULL,
            // ),
            // 2 => 
            // array (
            //     'id' => 3,
            //     'idChurch_fk' => 1,
            //     'isAdmin' => false,
            //     'isMember' => true,
            //     'isActive' => true,
            //     'isDeleted' => false,
            //     'name' => 'Leonardo',
            //     'birth' => NULL,
            //     'sex' => 'masculino',
            //     'email' => 'leo@hotmail.com',
            //     'password' => '$2y$10$1OYGSQJWOw9ORQUVQL0ZGu/JML3G/f6wLVad6NC0ylG7B3OsP4YkO',
            //     'cpf' => '123.321.007-77',
            //     'phone' => NULL,
            // )
        ));
    }
}
