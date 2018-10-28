<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table("users")->insert([
        	"name"=>"biao",
        	"email"=>"aaa@126.com",
        	"password"=>"123456",
        	"remember_token"=>"kjdsfhlnsl;kerjoaihspd';"
        ],[
        	"name"=>"uncle",
        	"email"=>"bbbbbb@126.com",
        	"password"=>"123456",
        	"remember_token"=>"dfgtrrrrrrrrrrrrr;dsf';"
        ]);*/

        /*DB::table("users")->insert([
        	"name"=>"uncle",
        	"email"=>"bbbbbb@126.com",
        	"password"=>"123456",
        	"remember_token"=>"dfgtrrrrrrrrrrrrr;dsf';"
        ]);*/

        /*DB::table("role")->insert([
        	"name"=>"dsf",
        	"value"=>"user_del"
        ]);

        DB::table("role")->insert([
        	"name"=>"gh",
        	"value"=>"role_add"
        ]);*/


        DB::table("user_role")->insert([
        	"user_id"=>1,
        	"role_id"=>1,
        ]);
        DB::table("user_role")->insert([
        	"user_id"=>1,
        	"role_id"=>2,
        ]);
    }
}
