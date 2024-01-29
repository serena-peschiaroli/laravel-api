<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            ['name' => 'Laravel', 'color' => '#FF2D20'],
            ['name' => 'Vue.js', 'color' => '#4FC08D'],
            ['name' => 'PHP', 'color' => '#777BB4'],
            ['name' => 'JavaScript', 'color' => '#F7DF1E'],
            ['name' => 'Java', 'color' => '#007396'],
            ['name' => 'Node.js', 'color' => '#339933'],
            ['name' => 'GitHub', 'color' => '#181717'],
            ['name' => 'MySQL', 'color' => '#4479A1'],
        ];

        foreach ($technologies as $tech) {
            Technology::create([
                'name' => $tech['name'],
                'slug' => Str::slug($tech['name']),
                'color'=> $tech['color']
            ]);
        }
    }
}
