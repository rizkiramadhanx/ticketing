<?php

namespace Database\Seeders;

use App\Models\Ticket_Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ticket_types = [
            [
                'id' => 1,
                'name' => 'Kepengurusan izin',
            ],
            [
                'id' => 2,
                'name' => 'Pemberkasan Administrasi',
            ],
            [
                'id' => 3,
                'name' => 'Penawaran Prodak',
            ],
            [
                'id' => 4,
                'name' => 'Penghadapan',
            ],
            [
                'id' => 5,
                'name' => 'lain2',
            ]
        ];

        Ticket_Type::insert($ticket_types);
    }
}
