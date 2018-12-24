<?php
/**
 * Created by PhpStorm.
 * User: rogacs
 * Date: 2018.12.05.
 * Time: 21:22
 */

namespace App\Services;

use App\Product;

class ProductService implements DatabaseInterface
{

    public function list() {
        $productList = Product::all();
        return $productList;
    }
}