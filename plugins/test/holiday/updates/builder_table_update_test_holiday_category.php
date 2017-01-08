<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestHolidayCategory extends Migration
{
    public function up()
    {
        Schema::table('test_holiday_category', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('test_holiday_category', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->integer('category_id');
        });
    }
}
