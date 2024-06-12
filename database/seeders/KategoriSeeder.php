<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Kategori::truncate();
        Schema::enableForeignKeyConstraints();

        $data = ['komik', 'novel','fantasi','fiksi','fantasi','horror','misteri','romansa'];

        foreach ($data as $value) {
            Kategori::create(['nama' => $value]);
        }
    }
}