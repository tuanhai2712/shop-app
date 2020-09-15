<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\CategoryServiceInterface;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function create(CategoryRequest $request) {
        $createCategory = $this->categoryService->create($request->all());
        return $createCategory;
    }
    public function get(Request $request) {
        $categoryList = $this->categoryService->get($request->all());
        return $categoryList;
    }

    public function getTemp() {
        $categoryTemp = $this->categoryService->getTemp();
        return $categoryTemp;
    }
}
