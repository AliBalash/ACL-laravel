<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permission' => json_encode([
                'create-post' => true,
                'update-post' => true,
                'delete-post' => true,
            ]),
        ]);

        Role::create([
            'name' => 'Editor',
            'slug' => 'editor',
            'permission' => json_encode([
                'create-post' => true,
                'update-post' => true,

            ])
        ]);

        Role::create([
            'name' => 'Author',
            'slug' => 'author',
            'permission' => json_encode([
                'create-post' => true,
            ]),
        ]);

    }
}
