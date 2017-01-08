<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestHolidayDetails4 extends Migration
{
    public function up()
    {
        Schema::table('test_holiday_details', function($table)
        {
            $table->renameColumn('category_name', 'cat_name');
        });
    }
    
    public function down()
    {
        Schema::table('test_holiday_details', function($table)
        {
            $table->renameColumn('cat_name', 'category_name');
        });
    }
}
