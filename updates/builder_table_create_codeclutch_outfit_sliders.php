<?php namespace Codeclutch\Outfit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodeclutchOutfitSliders extends Migration
{
    public function up()
    {
        Schema::create('codeclutch_outfit_sliders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codeclutch_outfit_sliders');
    }
}
