<?php

use Illuminate\Database\Seeder;

class ParammetersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('parameters')->delete();
        
        \DB::table('parameters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'operation' => 'finances',
                'attribute' => 'action',
                'value' => 'Dízimo'
            ),
            1 => 
            array (
                'id' => 2,
                'operation' => 'finances',
                'attribute' => 'action',
                'value' => 'Oferta'
            ),
            2 => 
            array (
                'id' => 3,
                'operation' => 'finances',
                'attribute' => 'action',
                'value' => 'Missões'
            ),
            3 => 
            array (
                'id' => 4,
                'operation' => 'finances',
                'attribute' => 'action',
                'value' => 'Outros'
            ),
            4 => 
            array (
                'id' => 5,
                'operation' => 'support',
                'attribute' => 'type',
                'value' => 'Erro no sistema'
            ),
            5 => 
            array (
                'id' => 6,
                'operation' => 'support',
                'attribute' => 'type',
                'value' => 'Dúvida'
            ),
            6 => 
            array (
                'id' => 7,
                'operation' => 'support',
                'attribute' => 'type',
                'value' => 'Sugestão'
            ),
            7 => 
            array (
                'id' => 8,
                'operation' => 'support',
                'attribute' => 'type',
                'value' => 'Pagamento'
            ),
            8 => 
            array (
                'id' => 9,
                'operation' => 'support',
                'attribute' => 'type',
                'value' => 'Outro'
            ),

        ));
    }
}
