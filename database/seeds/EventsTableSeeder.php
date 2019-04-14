<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            // 0 => 
            // array (
            //     'id' => 1,
            //     'idChurch_fk' => 1,
            //     'haveInscription' => false,
            //     'isActive' => true,
            //     'isDeleted' => false,
            //     'startDate' => '2018-02-09',
            //     'endDate' => '2018-02-12',
            //     'title' => 'Retiro de carnaval',
            //     'description' => 'teste teste teste',
            //     'color' => '#fff000',
            //     'location' => 'Igreja Batista',
            //     'nameResponsable' => 'João Filipi',
            //     'phoneResponsable' => '(28) 999383738',
            //     'value' => '160.00',
            // ),
            // 1 => 
            // array (
            //     'id' => 2,
            //     'idChurch_fk' => 2,
            //     'haveInscription' => false,
            //     'isActive' => true,
            //     'isDeleted' => false,
            //     'startDate' => '2018-03-03',
            //     'endDate' => '2018-03-05',
            //     'title' => 'Retiro de finados',
            //     'description' => 'teste teste teste',
            //     'color' => '#00FF00',
            //     'location' => 'Igreja Batista',
            //     'nameResponsable' => 'João Filipi',
            //     'phoneResponsable' => '(28) 999383738',
            //     'value' => '160.00',
            // ),
            // 2 => 
            // array (
            //     'id' => 3,
            //     'idChurch_fk' => 1,
            //     'haveInscription' => false,
            //     'isActive' => true,
            //     'isDeleted' => false,
            //     'startDate' => '2019-01-25',
            //     'endDate' => '2019-01-29',
            //     'title' => 'Retiro de verão',
            //     'description' => 'teste teste teste',
            //     'color' => '#FB4B4E',
            //     'location' => 'Igreja Batista',
            //     'nameResponsable' => 'João Filipi',
            //     'phoneResponsable' => '(28) 999383738',
            //     'value' => '160.00',
            // ),
            // 3 => 
            // array (
            //     'id' => 4,
            //     'idChurch_fk' => 1,
            //     'haveInscription' => false,
            //     'isActive' => true,
            //     'isDeleted' => false,
            //     'startDate' => '2019-01-25',
            //     'endDate' => '2019-01-29',
            //     'title' => 'Retiro de verão',
            //     'description' => 'teste teste teste',
            //     'color' => '#00FF00',
            //     'location' => 'Igreja Batista',
            //     'nameResponsable' => 'João Filipi',
            //     'phoneResponsable' => '(28) 999383738',
            //     'value' => '160.00',
            // )
        ));
    }
}


