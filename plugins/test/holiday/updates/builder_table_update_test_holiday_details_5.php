<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestHolidayDetails5 extends Migration
{
    public function up()
    {
        Schema::table('test_holiday_details', function($table)
        {
            $table->renameColumn('hol_id', 'ty_id');
        });
    }
    
    public function down()
    {
        Schema::table('test_holiday_details', function($table)
        {
            $table->renameColumn('ty_id', 'hol_id');
        });
    }
}
