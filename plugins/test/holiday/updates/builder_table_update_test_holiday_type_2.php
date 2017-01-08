<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestHolidayType2 extends Migration
{
    public function up()
    {
        Schema::table('test_holiday_type', function($table)
        {
            $table->renameColumn('cat_id', 'category_id');
            $table->renameColumn('cat_name', 'category_name');
        });
    }
    
    public function down()
    {
        Schema::table('test_holiday_type', function($table)
        {
            $table->renameColumn('category_id', 'cat_id');
            $table->renameColumn('category_name', 'cat_name');
        });
    }
}
