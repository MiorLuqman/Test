<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestHolidayType4 extends Migration
{
    public function up()
    {
        Schema::table('test_holiday_type', function($table)
        {
            $table->renameColumn('display_order', 'type_id');
        });
    }
    
    public function down()
    {
        Schema::table('test_holiday_type', function($table)
        {
            $table->renameColumn('type_id', 'display_order');
        });
    }
}
