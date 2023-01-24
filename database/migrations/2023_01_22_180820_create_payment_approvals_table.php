<?php

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
        Schema::create('payment_approvals', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->integer('payment_id');
            $table->string('payment_type');
            $table->enum('type', ['APPROVED', 'DISAPPROVED']);
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_approvals');
    }
};
