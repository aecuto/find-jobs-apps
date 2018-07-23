<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Models\MemberProfile;

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
      $role_manager  = Role::where('name', 'manager')->first();
      $role_admin  = Role::where('name', 'admin')->first();

      $member = new User();
      $member->name = 'member name';
      $member->email = 'member@scode.com';
      $member->password = bcrypt('password');
      $member->save();
      $member->roles()->attach($role_member);
      $member_profile = new MemberProfile;
      $member_profile->user_id = $member->id;
      $member_profile->save();

      $manager = new User();
      $manager->name = 'manager name';
      $manager->email = 'manager@scode.com';
      $manager->password = bcrypt('password');
      $manager->save();
      $manager->roles()->attach($role_manager);

      $admin = new User();
      $admin->name = 'admin name';
      $admin->email = 'admin@scode.com';
      $admin->password = bcrypt('password');
      $admin->save();
      $admin->roles()->attach($role_admin);
    }
}
