<?php namespace Shohabbos\Banner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosBannerBanners extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_banner_banners', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('link');
            $table->string('name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_banner_banners');
    }
}
