<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['id' => '1', 'role_name' => 'Administrator', 'role_level' => '1'],
            ['id' => '2', 'role_name' => 'Ressortleiter', 'role_level' => '2'],
            ['id' => '3', 'role_name' => 'Leiter', 'role_level' => '3'],
        ]);
    }
}
