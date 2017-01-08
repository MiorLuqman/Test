<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTestHolidayType2 extends Migration
{
    public function up()
    {
        Schema::create('test_holiday_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('type');
            $table->integer('type_id');
            $table->integer('cat_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('test_holiday_type');
    }
}
