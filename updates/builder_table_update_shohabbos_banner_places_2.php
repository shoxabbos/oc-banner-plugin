<?php namespace Shohabbos\Banner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosBannerPlaces2 extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_banner_places', function($table)
        {
            $table->text('desc')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_banner_places', function($table)
        {
            $table->text('desc')->nullable(false)->change();
        });
    }
}
