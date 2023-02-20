<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Exam;
use App\Models\SerivesCourses;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SerivesCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Schema::disableForeignKeyConstraints();
        DB::table('serives_courses')->truncate();
        DB::table('exams')->truncate();

        for ($i = 0, $ii = 20; $i < $ii; $i++) {
            $new = new SerivesCourses();
            $new->name = ['ar' => $faker->name, 'en' => $faker->name];
            $new->notes = ['ar' => $faker->paragraph(), 'en' => $faker->paragraph()];
            // $new->course_id = $faker->randomElement(Course::whereStatus(true)->pluck('id'));
            $new->status = $faker->randomElement([true,false]);
            $new->url = $faker->url();
            $new->time = $faker->randomElement([10,60]);
            $new->course_id = Course::all()->random()->id;
            $new->save();
        }


        for ($i = 0, $ii = 500; $i < $ii; $i++) {
            $new = new Exam();
            $new->name = ['ar' => $faker->name, 'en' => $faker->name];
            $new->answer_one = ['ar' => $faker->name, 'en' => $faker->name];
            $new->answer_two = ['ar' => $faker->name, 'en' => $faker->name];
            $new->answer_there = ['ar' => $faker->name, 'en' => $faker->name];
            $new->answer_four = ['ar' => $faker->name, 'en' => $faker->name];
            $new->answer = ['ar' => $faker->name, 'en' => $faker->name];
            $new->course_id = $faker->randomElement(Course::whereStatus(true)->pluck('id'));
            $new->status = $faker->randomElement([true,false]);
            $new->time = $faker->numberBetween(1,30);
            $new->save();
        }


        Schema::enableForeignKeyConstraints();
    }
}
