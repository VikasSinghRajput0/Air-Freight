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
            ['id'=>1,'role' => 'SUPERADMIN', 'created_at' => date('Y-m-d H:i:s')],
        	['id'=>2,'role' => 'ADMIN', 'created_at' => date('Y-m-d H:i:s')],
        	['id'=>3,'role' => 'USER', 'created_at' => date('Y-m-d H:i:s')],
            
        ]);
    }
}
