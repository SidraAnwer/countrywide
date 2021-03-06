<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('roles')->insert([
            [
               'name'=>'Admin'
            ],
            [
                'name'=>'Employee'
            ]]
        );
    }
}
