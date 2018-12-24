<?php

namespace App\Http\Controllers;

use App\Product;
use App\Services\CategoryServices;
use App\Services\ProductService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $productService , $categoryServices;


    public function __construct(ProductService $productService, CategoryServices $categoryServices)
    {
        $this->productService = $productService;
        $this->categoryServices = $categoryServices;
    }


    public function index()
    {
        $prodList = $this->productService->list();
        return $prodList;
    }


    public function cat() {
       $list = $this->categoryServices->list();
       return $list;
    }

}
