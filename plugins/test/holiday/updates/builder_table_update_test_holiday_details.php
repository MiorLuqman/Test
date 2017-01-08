<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestHolidayDetails extends Migration
{
    public function up()
    {
        Schema::table('test_holiday_details', function($table)
        {
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('test_holiday_details', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
