<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Web Development',
            'Mobile Development',
            'Data Science',
            'Frontend Development',
            'Backend Development',
            'Full-Stack Development',
            'Open Source Contributions'
        ];

        foreach ($types as $type) {
            Type::create(['name' => $type, 'slug' => Str::slug($type)]);
        }
    }

}
