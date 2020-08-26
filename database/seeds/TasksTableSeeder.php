<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Task::class)->create([
        	'name' 		=> 'Realizar Tarefa 7',
        	'complete' 	=> false
        ]);

        factory(App\Task::class)->create([
        	'name' 		=> 'Realizar Tarefa 8',
        	'complete' 	=> false
        ]);

        factory(App\Task::class)->create([
        	'name' 		=> 'Realizar Tarefa 9',
        	'complete' 	=> false
        ]);
    }
}
