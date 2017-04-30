<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('rinvex.fort.tables.users'), function (Blueprint $table) {
            // Columns
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->rememberToken();
            $table->string('email');
            $table->boolean('email_verified')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('phone_verified')->default(false);
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('prefix')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('job_title')->nullable();
            $table->string('country_code', 2)->nullable();
            $table->string('language_code', 2)->nullable();
            $table->text('two_factor')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('gender', 6)->nullable();
            $table->boolean('active')->default(true);
            $table->timestamp('login_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->unique('email');
            $table->unique('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('rinvex.fort.tables.users'));
    }
}
