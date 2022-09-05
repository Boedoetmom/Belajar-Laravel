<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

use function PHPSTORM_META\type;

class AddForeignKeysToDetailUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_user', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_detail_user to user') ->
            Reference('id') -> on('user') ->onDelete('CASADE') -> onUpdate('CASADE');

            $table->foreign('type_user', 'fk_detail_user to type_user') ->
            references('id')->on('type_user') ->onDelete('CASADE') -> onUpdate('CASADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_user', function (Blueprint $table) {
            $table->dropForeign('fk_detail_user to user');
            $table->dropForeign('fk_detail_user to type_user');
        });
    }
}
