<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\User;
use App\Repositories\CustomerRepository;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRootUser();
        $this->createAdminUser();
<<<<<<< HEAD
        $this->createVisitorUser();
        $this->createUser();
=======

        // Create a user only on local
        if (app()->isLocal()) {
            $this->createVisitorUser();
            $this->demoCustomer();
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    private function createRootUser()
    {
        $rootUser = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'root@readyecommerce.com',
            'phone' => '01000000001',
            'is_active' => true,
        ]);

        $rootUser->assignRole(Roles::ROOT->value);
    }

    private function createAdminUser()
    {
        $adminUser = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@readyecommerce.com',
            'phone' => '01000000002',
            'is_active' => true,
        ]);

        $adminUser->assignRole(Roles::ADMIN->value);
    }

    private function createVisitorUser()
    {
        $visitorUser = User::factory()->create([
            'name' => 'Visitor',
            'email' => 'visitor@readyecommerce.com',
            'phone' => '01000000003',
<<<<<<< HEAD
=======
            'is_active' => true,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ]);

        $visitorUser->assignRole(Roles::VISITOR->value);
    }

<<<<<<< HEAD
    private function createUser()
    {
        $user = User::factory()->create([
            'name' => 'Demo User',
=======
    private function demoCustomer()
    {
        $user = User::factory()->create([
            'name' => 'Demo Customer',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'email' => 'user@readyecommerce.com',
            'phone' => '01000000405',
            'is_active' => true,
        ]);

        $user->assignRole(Roles::CUSTOMER->value);

        CustomerRepository::storeByRequest($user);
    }
}
