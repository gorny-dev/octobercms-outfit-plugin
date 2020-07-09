<?php namespace Codeclutch\Outfit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodeclutchOutfitPages extends Migration
{
    public function up()
    {
        Schema::create('codeclutch_outfit_pages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codeclutch_outfit_pages');
    }
}
