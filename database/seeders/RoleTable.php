<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $roles=[
        ['role_name'=>'Superadmin',
         'role_slug'=>'SM446618800sm',
         'role_status'=>'1',
       ],
       ['role_name'=>'Admin',
         'role_slug'=>'SM446628810sm',
         'role_status'=>'1',
       ],
       ['role_name'=>'Author',
         'role_slug'=>'SM446638820sm',
         'role_status'=>'1',
       ],
       ['role_name'=>'Editor',
         'role_slug'=>'SM446648830sm',
         'role_status'=>'1',
       ],
       ['role_name'=>'Subscriber',
         'role_slug'=>'SM446658840sm',
         'role_status'=>'1',
       ],
        
        
    ];
    DB::table('roles')->insert($roles);
    }
}
