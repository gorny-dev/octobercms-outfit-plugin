<?php namespace Codeclutch\Outfit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodeclutchOutfitNews extends Migration
{
    public function up()
    {
        Schema::create('codeclutch_outfit_news', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('short_description')->nullable();
            $table->text('content')->nullable();
            $table->text('author')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codeclutch_outfit_news');
    }
}
