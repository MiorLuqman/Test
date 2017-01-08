<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTestHolidayType extends Migration
{
    public function up()
    {
        Schema::dropIfExists('test_holiday_type');
    }
    
    public function down()
    {
        Schema::create('test_holiday_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('type');
            $table->integer('type_id');
            $table->integer('cat_id');
            $table->text('cat_name');
        });
    }
}
