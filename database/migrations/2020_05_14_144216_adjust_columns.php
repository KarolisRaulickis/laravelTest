<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdjustColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   //$table->dropUnique('users_email_unique'); // TABLE USERS COLUMN EMAIL_{unique}
        Schema::table('my_data_models', function ($table) {
            $table->dropUnique('my_data_models_Message_unique');
        });
         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('my_data_models', function ($table) { 
            $table->unique('Message'); 
        }); 
    }
}
