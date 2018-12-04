<?php

use Illuminate\Database\Seeder;

class MemberTitles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert(
        
        [
            'mem_title_id' => '1',
            'mem_title_name' =>'Mr'
         
        ],
        [
                     
            'mem_title_id' => '2',
            'mem_title_name' =>'Mrs',
           
        ],
        [
            'mem_title_id' => '3',
            'mem_title_name' =>'Dr',

        ]
    
    );
    }
}
