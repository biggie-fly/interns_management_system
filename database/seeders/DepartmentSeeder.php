<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            ['code' => 'HOS', 'name' => 'Hospitality'],
            ['code' => 'SCM', 'name' => 'Supply Chain Management'],
            ['code' => 'PRM', 'name' => 'Public Relations & Media'],
            ['code' => 'HAN', 'name' => 'Hansard & Audio Services'],
            ['code' => 'AUD', 'name' => 'Audit, Appropriations & General Purpose Committees'],
            ['code' => 'DEP', 'name' => 'Departmental Committees'],
            ['code' => 'ICT', 'name' => 'ICT & Library Services'],
            ['code' => 'ENG', 'name' => 'Engineering & Maintenance'],
            ['code' => 'PBO', 'name' => 'Parliamentary Budget Office'],
            ['code' => 'LEG', 'name' => 'Legal Services'],
            ['code' => 'CLO', 'name' => 'Constituency Liaison Office'],
            ['code' => 'HRM', 'name' => 'Human Resource Management'],
            ['code' => 'LIT', 'name' => 'Litigation & Compliance'],
            ['code' => 'PBU', 'name' => 'Parliamentary Broadcasting Unit'],
            ['code' => 'TRV', 'name' => 'Supply Chain – Travel Office'],
            ['code' => 'FIN', 'name' => 'Finance & Accounting'],
            ['code' => 'LPS', 'name' => 'Legislative & Procedural Services'],
        ];

        DB::table('departments')->upsert($departments, ['code'], ['name']);
    }
}
