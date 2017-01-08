<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTestHolidayCategory extends Migration
{
    public function up()
    {
        Schema::create('test_holiday_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('category_id');
            $table->text('category_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('test_holiday_category');
    }
}
