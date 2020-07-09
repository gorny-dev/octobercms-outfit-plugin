<?php namespace Codeclutch\Outfit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodeclutchOutfitGalleries extends Migration
{
    public function up()
    {
        Schema::create('codeclutch_outfit_galleries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->text('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codeclutch_outfit_galleries');
    }
}
