<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }
    hgfcujfyufuykfiuykfguyfjyhvhjftuyrfuofjuyfgiutfgukyfyhugffuiyfuy
    htdgjyhfjkfhyufiufyifgvmhjfguitgukkh
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notices');
    }
}
