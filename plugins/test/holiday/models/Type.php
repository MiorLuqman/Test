<?php namespace Test\Holiday\Models;

use Model;
use Test\Holiday\Models\Category;

/**
 * Model
 */
class Type extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    public $belongsTo = [
        'category' => 'Test\Holiday\Models\Category'
    ];


    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'test_holiday_type';

    public function getCatIdOptions()
    {
        $cate = Category::all(['category_id', 'category_name']);
        $cateOptions = [];

        $cate->each(function($category_name) use (&$cateOptions)
        {
            $cateOptions[$category_name->category_id] = $category_name->category_name;
        });

        return $cateOptions;
    }

    /*public function getCatNameOptions()
    {
        $cate = Category::all(['cat_name', 'category_name']);
        $cateOptions = [];

        $cate->each(function($category_name) use (&$cateOptions)
        {
            $cateOptions[$category_name->cat_name] = $category_name->category_name;
        });

        return $cateOptions;
    }*/

    /*public function getCategoryIdOptions()
    {
        $cat = Type::all(['cat_id', 'cat_name']);
        $catOptions = [];

        $cat->each(function($cat_name) use (&$catOptions)
        {
            $catOptions[$cat_name->cat_id] = $cat_name->cat_name;
        });

        return $catOptions;
    }*/
}