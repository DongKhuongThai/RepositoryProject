<?php
namespace App\Repository\Category;
interface CategoryRepositoryInterface 
{
    public function show($category_id);
    public function all();
}