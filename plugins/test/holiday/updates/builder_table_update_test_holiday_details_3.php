<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestHolidayDetails3 extends Migration
{
    public function up()
    {
        Schema::table('test_holiday_details', function($table)
        {
            $table->renameColumn('category_id', 'cat_id');
        });
    }
    
    public function down()
    {
        Schema::table('test_holiday_details', function($table)
        {
            $table->renameColumn('cat_id', 'category_id');
        });
    }
}
