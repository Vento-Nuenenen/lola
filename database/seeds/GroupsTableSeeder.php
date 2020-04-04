<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
           ['id' => '1', 'group_name' => 'Hauptlagerleiter', 'esc_name' => 'hl'],
           ['id' => '2', 'group_name' => 'Finanzen', 'esc_name' => 'fin'],
           ['id' => '3', 'group_name' => 'Kommunikation', 'esc_name' => 'kom'],
           ['id' => '4', 'group_name' => 'Roter Faden', 'esc_name' => 'rf'],
           ['id' => '5', 'group_name' => 'Lagerplatz', 'esc_name' => 'lp'],
           ['id' => '6', 'group_name' => 'Transport', 'esc_name' => 'trp'],
           ['id' => '7', 'group_name' => 'Material', 'esc_name' => 'mat'],
           ['id' => '8', 'group_name' => 'Lagerbauten', 'esc_name' => 'lb'],
           ['id' => '9', 'group_name' => 'Sicherheit', 'esc_name' => 'si'],
           ['id' => '10', 'group_name' => 'Küche', 'esc_name' => 'ku'],
           ['id' => '11', 'group_name' => 'Rover', 'esc_name' => 'rov'],
        ]);
    }
}
