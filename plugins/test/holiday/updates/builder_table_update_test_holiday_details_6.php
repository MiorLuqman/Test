<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestHolidayDetails6 extends Migration
{
    public function up()
    {
        Schema::table('test_holiday_details', function($table)
        {
            $table->text('hol_name');
        });
    }
    
    public function down()
    {
        Schema::table('test_holiday_details', function($table)
        {
            $table->dropColumn('hol_name');
        });
    }
}
