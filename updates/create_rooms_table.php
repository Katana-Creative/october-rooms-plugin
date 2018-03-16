<?php namespace Katana\Rooms\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('katana_rooms', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('name', 255);
            $table->char('slug', 50);
            $table->longText('description');
            $table->longText('features');
            $table->longText('amenities');
            $table->char('book_url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('katana_rooms');
    }
}
