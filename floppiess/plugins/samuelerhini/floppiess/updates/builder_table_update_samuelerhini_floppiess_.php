<?php namespace Samuelerhini\Floppiess\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSamuelerhiniFloppiess extends Migration
{
    public function up()
    {
        Schema::table('samuelerhini_floppiess_', function($table)
        {
            $table->renameColumn('name', 'title');
        });
    }
    
    public function down()
    {
        Schema::table('samuelerhini_floppiess_', function($table)
        {
            $table->renameColumn('title', 'name');
        });
    }
}
