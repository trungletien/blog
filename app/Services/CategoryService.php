<?php

namespace App\Services;

use App\Http\Requests\AdminCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryService
{
    /**
     * @var Category Model
     */
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function insertOrUpdate(AdminCategoryRequest $request, $id = null)
    {
        $category = new Category();
        if (!empty($id)) {
            $category = Category::find($id);
        }
        $category->name = $request->name;
        if ($request->hasFile('image')) {
            $request->image->storeAs('category/', $request->image->getClientOriginalName());
            if (!empty($id)) {
                Storage::delete('/category' . $category->image);
            }
            $category->image = $request->image->getClientOriginalName();
        }
        $category->slug = Str::slug($request->name);
        $category->created_by = 1;
        $category->is_public = true;
        $category->save();
    }

    public function destroyCategory($id)
    {
        $category = Category::find($id);
        Storage::delete('category/' . $category->image);
        $category->delete();
    }
}
