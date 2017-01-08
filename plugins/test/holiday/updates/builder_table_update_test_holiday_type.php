<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestHolidayType extends Migration
{
    public function up()
    {
        Schema::table('test_holiday_type', function($table)
        {
            $table->integer('cat_id');
            $table->text('cat_name');
        });
    }
    
    public function down()
    {
        Schema::table('test_holiday_type', function($table)
        {
            $table->dropColumn('cat_id');
            $table->dropColumn('cat_name');
        });
    }
}
