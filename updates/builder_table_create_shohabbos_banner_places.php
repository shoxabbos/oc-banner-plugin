<?php namespace Shohabbos\Banner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosBannerPlaces extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_banner_places', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('desc');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_banner_places');
    }
}
