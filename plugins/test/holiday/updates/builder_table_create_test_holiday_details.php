<?php namespace Test\Holiday\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTestHolidayDetails extends Migration
{
    public function up()
    {
        Schema::create('test_holiday_details', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('hol_id');
            $table->text('hol_desc');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('start_day');
            $table->text('end_day');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('test_holiday_details');
    }
}
