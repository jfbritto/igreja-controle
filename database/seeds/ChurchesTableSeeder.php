<?php

use Illuminate\Database\Seeder;

class ChurchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('churches')->delete();
        
        \DB::table('churches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'isActive' => true,
                'isDeleted' => false,
                'name' => 'Batista renovada',
                'email' => 'renovadajm@hotmail.com',
                'cnpj' => '95.184.039/0001-12',
                'phone' => '(28) 999377384',
            ),
            1 => 
            array (
                'id' => 2,
                'isActive' => true,
                'isDeleted' => false,
                'name' => 'Filadélfia',
                'email' => 'filadelfia@hotmail.com',
                'cnpj' => '92.484.069/0001-12',
                'phone' => '(28) 993394859',
            )
        ));
    }
}
