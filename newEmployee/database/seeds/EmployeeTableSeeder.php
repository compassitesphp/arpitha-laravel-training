<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        	'employee_name'=>'First',
        	'employee_email'=>'first@test.com',
        	'employee_department'=>'Test'
        ]);
    }
}
