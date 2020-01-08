<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // SETUP User-Role Relations for existing users
      $this->call([
        UserRolesTable::class
      ]);

      // CREATE users from development
      DB::table('users')->insert([
          'id' => 3,
          'role_id' => 1,
          'name' => 'peter ritsen',
          'password' => bcrypt('frog12'),
          'email' => 'clarkfrog@gmail.com',
          'avatar' => 'users/default.png',
          'remember_token' => NULL,
          'settings' => NULL,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);

      DB::table('users')->insert([
          'id' => 5,
          'role_id' => 1,
          'name' => 'michelle devlaeminck',
          'password' => bcrypt('b@r3f33t'),
          'email' => 'madevlaeminck@gmail.com',
          'avatar' => 'users/default.png',
          'remember_token' => NULL,
          'settings' => NULL,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);

      // SETUP User-Role Relations for existing users
      $this->call([
        UserRolesTable::class
      ]);
    }
}
