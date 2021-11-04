<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         *php artisan migration create_the table name_table
         * php artisan migrate
         * php artisan migrate:reset
         * php artisan migrate:rollback
         * php artisan migrate:fresh
         **/

        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('title')->nullable();
            $table->string('image')->defualt('no-image.png');
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
        Schema::dropIfExists('admins');
    }
}
