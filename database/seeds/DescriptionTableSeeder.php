<?php

use Illuminate\Database\Seeder;

class DescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $data = new \App\Model\Description;
         $data->description = 'lorem ipsum';
         $data->id = 1;
         $data->save();
         $this->command->info("Description succesfully added");
    }
}
