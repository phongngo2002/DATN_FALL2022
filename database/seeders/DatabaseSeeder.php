<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Motel;
use App\Models\PlanHistory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = File::get(public_path('json/deposits.json'));
        $data = json_decode($data, true);

        foreach (array_shift($data) as $item) {
            DB::table('deposits')->insert(
                [
                    "user_id" => $item["user_id"],
                    "value" => $item["value"],
                    "motel_id" => $item['motel_id'],
                    'created_at' => Carbon::now()
                ]
            );
        }
        $data = File::get(public_path('json/areas.json'));
        $data = json_decode($data, true);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Motel::factory(10)->create();

        // PlanHistory::factory(10)->create();
        foreach (array_shift($data) as $item) {
            DB::table('areas')->insert(
                [
                    "name" => $item["name"],
                    "address" => $item["address"],
                    'user_id' => $item['user_id'],
                    'created_at' => Carbon::now()
                ]
            );
        }
        $data = File::get(public_path('json/users.json'));
        $data = json_decode($data, true);

        foreach (array_shift($data) as $item) {
            DB::table('users')->insert(
                [
                    "name" => $item["name"],
                    "email" => $item["email"],
                    "password" => Hash::make('123456'),
                    "role_id" => $item['role_id'],
                    'created_at' => Carbon::now()
                ]
            );
        }
        $data = File::get(public_path('json/motels.json'));
        $data = json_decode($data, true);

        foreach (array_shift($data) as $item) {
            DB::table('motels')->insert(
                [
                    "room_number" => $item["room_number"],
                    "area_id" => $item["area_id"]
                ]
            );
        }

        $data = File::get(public_path('json/roles.json'));
        $data = json_decode($data, true);

        foreach (array_shift($data) as $item) {
            DB::table('roles')->insert(
                [
                    "name" => $item["name"],
                    "desc" => $item["desc"],
                    "status" => $item["status"],
                    'created_at' => Carbon::now(),
                ]
            );
        }

        $data = File::get(public_path('json/permissions.json'));
        $data = json_decode($data, true);

        foreach (array_shift($data) as $item) {
            DB::table('permissions')->insert(
                [
                    "name" => $item["name"],
                    "desc" => $item["desc"],
                    "parent_id" => $item["parent_id"],
                    "status" => $item["status"],
                    'created_at' => Carbon::now(),
                ]
            );
        }

        $data = File::get(public_path('json/permission_role.json'));
        $data = json_decode($data, true);

        foreach (array_shift($data) as $item) {
            DB::table('permission_role')->insert(
                [
                    "role_id" => $item["role_id"],
                    "permission_id" => $item["permission_id"],
                    'created_at' => Carbon::now(),
                ]
            );
        }

        $data = File::get(public_path('json/categories.json'));
        $data = json_decode($data, true);

        foreach (array_shift($data) as $item) {
            DB::table('categories')->insert(
                [
                    "name" => $item["name"],
                    "status" => $item["status"],
                    "desc" => $item["desc"],
                    'created_at' => Carbon::now(),
                ]
            );
        }

    }
}
