<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            ['memo' => 'Go to hospital', 'status' => 0],
            ['memo' => 'Stimurate her', 'status' => 0],
            ['memo' => 'Care for my Granma', 'status' => 0]
        ]);
    }
}
