<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        // Con este metodo eliminamos primero todos los datos
/*      $this->truncateTables([
            'users',
            'posts',
            'comment'
        ]); */
        // $this->call(ExamnsTableSeeder::class);

    }

    // La funcion se encarga de eliminar los datos y sus llaves foraneas
 /*    public function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    } */
}
