<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerivesCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serives_courses', function (Blueprint $table) {
            $table->id();
            $table->longText('name')->nullable();
            $table->longText('url')->nullable();
            $table->longText('time')->nullable();
            $table->longText('notes')->nullable();
            $table->boolean('status')->default(false);
            $table->foreignId('course_id')->nullable()->constrained('courses')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serives_courses');
    }
}
