<?php

namespace Database\Seeders;

use App\Models\Group;
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
        Group::create([
            'group_name' => 'Finanzen',
            'admin_group' => true
        ]);

        $groups = [
            'RF',
            'Kommunikation',
            'Transport',
            'Material',
            'Sicherheit',
            'Küche',
            'Pio',
            'Rover',
        ];

        foreach ($groups as $group) {
            Group::create([
                'group_name' => $group,
                'admin_group' => false
            ]);
        }
    }
}
