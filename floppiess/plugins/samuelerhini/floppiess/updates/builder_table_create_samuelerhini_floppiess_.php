<?php namespace Samuelerhini\Floppiess\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSamuelerhiniFloppiess extends Migration
{
    public function up()
    {
        Schema::create('samuelerhini_floppiess_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('samuelerhini_floppiess_');
    }
}
