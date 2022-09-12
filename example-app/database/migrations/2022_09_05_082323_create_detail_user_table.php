<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

class CreateDetailUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') -> Nullabel() ->index('fk_detail_user_to_users');
            $table->foreignId('type_user_id')-> Nullabel()->index('fk_detail_user_to_type_user');
            $table->string('contac') -> Nullabel();
            $table->longText('address') -> Nullabel();
            $table->longText('photo') -> Nullabel();
            $table->enum('gender', [1, 2]) -> Nullabel();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_user');
    }
}
