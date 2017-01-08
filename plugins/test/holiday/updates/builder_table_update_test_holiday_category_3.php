<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestHolidayCategory3 extends Migration
{
    public function up()
    {
        Schema::table('test_holiday_category', function($table)
        {
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('test_holiday_category', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
