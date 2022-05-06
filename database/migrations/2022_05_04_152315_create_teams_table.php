<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('reg_id');
            $table->string('event_name');
            $table->string('team_lead');
            $table->string('team_lead_email');
            $table->string('team_lead_phone');
            $table->string('team_lead_year');
            $table->string('team_lead_department');
            $table->string('team_lead_college');
            $table->string('member_1')->nullable();
            $table->string('member_1_phone')->nullable();
            $table->string('member_1_year')->nullable();
            $table->string('member_1_department')->nullable();
            $table->string('member_1_college')->nullable();
            $table->string('member_2')->nullable();
            $table->string('member_2_phone')->nullable();
            $table->string('member_2_year')->nullable();
            $table->string('member_2_department')->nullable();
            $table->string('member_2_college')->nullable();
            $table->boolean('attendance')->default(0);
            $table->string('image');
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
        Schema::dropIfExists('teams');
    }
};
