<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTestHolidayType extends Migration
{
    public function up()
    {
        Schema::create('test_holiday_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('type');
            $table->integer('display_order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('test_holiday_type');
    }
}
