<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestHolidayCategory2 extends Migration
{
    public function up()
    {
        Schema::table('test_holiday_category', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('test_holiday_category', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
}
