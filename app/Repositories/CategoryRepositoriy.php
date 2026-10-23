<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepositoriy
{
    // Get All Category
    public function getAll(array $fields)
    {
        return Category::select($fields)->latest()->get();
    }

    // Get By Category
    public function getById(int $id, array $fields)
    {
        return Category::select($fields)->findOrFail($id);
    }

    // // Create Category
    public function create(array $data)
    {
        return Category::create($data);
    }

    // // Update Category
    public function update(int $id, array $data)
    {
        $category = Category::findOrFail($id);

        $category->update($data);

        return $category;
    }

    // // Delete Category
    public function delete(int $id)
    {
        $category = Category::findOrFail($id);

        $category->delete($id);
    }
}
