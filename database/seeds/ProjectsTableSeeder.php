<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Project::class, 10)->create()->each(function ($project) {
        $project->posts()->save(factory(App\Project::class)->make());
    	});

    	// DB::table('projects')->insert([
     //        'title' => Str::random(10),
     //        'description' => Str::random(100),
     //        'author_id' => 1,
     //        'bids' => 0,
     //        'executor' => '',
     //    ]);

    }
}
