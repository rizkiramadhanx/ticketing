<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            [
                'id' => 1,
                'name' => 'Sekertariat',
            ],
            [
                'id' => 2,
                'name' => 'Bidang P2P',
            ],
            [
                'id' => 3,
                'name' => 'Bidang SDK',
            ],
            [
                'id' => 4,
                'name' => 'Bidang Yankes',
            ],
            [
                'id' => 5,
                'name' => 'Bidang Kesmas',
            ],
        ];

        Division::insert($divisions);
    }
}
