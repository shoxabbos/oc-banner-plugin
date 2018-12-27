<?php namespace Shohabbos\Banner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosBannerBanners extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_banner_banners', function($table)
        {
            $table->integer('views')->default(0);
            $table->integer('transitions')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_banner_banners', function($table)
        {
            $table->dropColumn('views');
            $table->dropColumn('transitions');
        });
    }
}
