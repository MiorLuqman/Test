<?php namespace Test\Holiday\Models;

use Model;
use Test\Holiday\Models\Type;

/**
 * Model
 */
class Details extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    public $belongsTo = [
        'type' => 'Test\Holiday\Models\Type'
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'test_holiday_details';

    public function getTyIdOptions()
    {
        $types = Type::all(['type_id', 'type']);
        $typesOptions = [];

        $types->each(function($type) use (&$typesOptions)
        {
            $typesOptions[$type->type_id] = $type->type;
        });

        return $typesOptions;
    }

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

    /*public function getCatIdOptions()
    {
        $cate = Category::all(['category_id', 'category_name']);
        $cateOptions = [];

        $cate->each(function($category_name) use (&$cateOptions)
        {
            $cateOptions[$category_name->category_id] = $category_name->category_name;
        });

        return $cateOptions;
    }*/
}