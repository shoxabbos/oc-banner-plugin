<?php namespace Shohabbos\Banner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosBannerPlaceBanner extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_banner_place_banner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('banner_id')->unsigned();
            $table->integer('place_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_banner_place_banner');
    }
}
