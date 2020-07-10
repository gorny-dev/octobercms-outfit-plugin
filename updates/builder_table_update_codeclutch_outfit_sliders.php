<?php namespace Codeclutch\Outfit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodeclutchOutfitSliders extends Migration
{
    public function up()
    {
        Schema::table('codeclutch_outfit_sliders', function($table)
        {
            $table->text('items')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('codeclutch_outfit_sliders', function($table)
        {
            $table->dropColumn('items');
        });
    }
}
