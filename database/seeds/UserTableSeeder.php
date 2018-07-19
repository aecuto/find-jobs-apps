<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_member = Role::where('name', 'member')->first();
      $role_businessman  = Role::where('name', 'businessman')->first();
      $role_admin  = Role::where('name', 'admin')->first();

      $member = new User();
      $member->name = 'member name';
      $member->email = 'member@scode.com';
      $member->password = bcrypt('password');
      $member->save();
      $member->roles()->attach($role_member);

      $businessman = new User();
      $businessman->name = 'businessman name';
      $businessman->email = 'businessman@scode.com';
      $businessman->password = bcrypt('password');
      $businessman->save();
      $businessman->roles()->attach($role_businessman);

      $admin = new User();
      $admin->name = 'admin name';
      $admin->email = 'admin@scode.com';
      $admin->password = bcrypt('password');
      $admin->save();
      $admin->roles()->attach($role_admin);
    }
}
