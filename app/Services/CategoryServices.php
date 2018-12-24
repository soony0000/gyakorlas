<?php
/**
 * Created by PhpStorm.
 * User: rogacs
 * Date: 2018.12.06.
 * Time: 19:51
 */

namespace App\Services;


use App\Category;

class CategoryServices implements DatabaseInterface
{

    public function list() {
        $list = Category::all();
        return $list;
    }
}