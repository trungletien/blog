<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Show all category
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();

        $data = [
            'categories' => $categories
        ];

        return view('admin.category.index', $data);
    }

    /**
     * Show form create category
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Save category to category storage
     */
    public function store(AdminCategoryRequest $request)
    {
        $this->categoryService->insertOrUpdate($request);

        return redirect()->route('admin.category.index');
    }

    /**
     * Show form edit category
     *
     * @param Request $request
     * @param $id
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $data = [
            'category' => $category
        ];

        return view('admin.category.edit', $data);
    }

    /**
     * Save info category modified to category storage
     */
    public function update(AdminCategoryRequest $request, $id)
    {
        $validated = $request->validated();
        $validated = $request->safe()->except(['image']);
        $this->categoryService->insertOrUpdate($request, $id);

        return redirect()->route('admin.category.index');
    }

    /**
     *
     * Delete category from category storage
     * @param $id
     */
    public function destroy($id)
    {
        $this->categoryService->destroyCategory($id);

        return redirect()->route('admin.category.index');
    }
}
