<?php

use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create((new Driver())->getTable(), function (Blueprint $table) {
=======
        Schema::create((new Driver)->getTable(), function (Blueprint $table) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
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
<<<<<<< HEAD
        Schema::dropIfExists((new Driver())->getTable());
=======
        Schema::dropIfExists((new Driver)->getTable());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
};
