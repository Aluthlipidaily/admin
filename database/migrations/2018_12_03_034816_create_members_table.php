<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigInteger('mem_id')->nullable();
            $table->string('mem_number', 255)->default();
            $table->string('mem_temp_number',  255)->nullable();
            $table->string('mem_service_number', 255)->nullable();
            $table->bigInteger('mem_title_id')->nullable();
            $table->string('mem_name_with_initials', 255)->nullable();
            $table->string('mem_name_in_full', 255)->nullable();
            $table->string('mem_pers_address', 255)->nullable();
            $table->dateTime('mem_dob')->nullable();
            $table->string('mem_telephone', 255)->default();
            $table->string('mem_nic_number', 255)->nullable();
            $table->bigInteger('mem_gender_id')->nullable();
            $table->bigInteger('mem_marital_status_id')->nullable();
            $table->bigInteger('res_marital_status_id')->default();
            $table->string('mem_nominee_name', 255)->nullable();
            $table->string('mem_nominee_address', 255)->nullable();
            $table->dateTime('mem_join_date')->nullable();
            $table->dateTime('mem_resig_date')->nullable();
            $table->bigInteger('mem_resig_reason')->default();
            $table->char('mem_active', 255)->default();
            $table->dateTime('mem_created_date')->nullable();
            $table->dateTime('mem_approved_date')->nullable();
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
        Schema::dropIfExists('members');
    }
}
