<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        while (Job::count() < 21) {
//
//        }
        $tags = Tag::factory(3)->create();
        Job::factory(10)->hasAttached($tags)->create(
            new Sequence(
                [
                    'featured' => true,
                    'schedule' => 'Full Time',
                ],
                [
                    'featured' => false,
                    'schedule' => 'Part Time',
                ],
            )
        );
        $tags = Tag::factory(3)->create();
        Job::factory(10)->hasAttached($tags)->create(
            new Sequence(
                [
                    'featured' => true,
                    'schedule' => 'Full Time',
                ],
                [
                    'featured' => false,
                    'schedule' => 'Part Time',
                ],
            )
        );
    }
}
