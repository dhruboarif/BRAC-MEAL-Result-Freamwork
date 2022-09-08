<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyArchiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_archive', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('program_id')->unsigned()->index()->nullable();
            $table->bigInteger('support_id')->unsigned()->index()->nullable();
            $table->bigInteger('document_type_id')->unsigned()->index()->nullable();
            $table->string('name')->nullable();
            $table->string('study_period', 100)->nullable();
            $table->string('summary')->nullable();
            $table->string('remarks')->nullable();
            $table->string('version_status')->default('NEW');
            $table->integer('version')->default(1);
            $table->bigInteger('version_ref_id')->unsigned()->nullable();
            $table->string('status', 50)->default('P');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->dateTime('seen_at')->nullable();
            $table->bigInteger('approved_user_id')->unsigned()->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('approved_user_id')->references('id')->on('users');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('support_id')->references('id')->on('supports');
            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->foreign('version_ref_id')->references('id')->on('study_archive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_archive');
    }
}
