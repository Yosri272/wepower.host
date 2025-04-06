<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Category;
=======
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class CategoryController extends Controller
{
    /**
<<<<<<< HEAD
     * Category status toggle
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function statusToggle(Category $category)
    {
        // Update the user status
        $category->update([
            'status' => ! $category->status,
        ]);
=======
     * Display a category listing.
     */
    public function index(Request $request)
    {
        $search = $request->search ?? null;

        $shop = generaleSetting('rootShop');

        // Get categories with search and pagination
        $categories = $shop->categories()->when($search, function ($query) use ($search) {
            return $query->where('name', 'like', '%'.$search.'%');
        })->paginate(20);

        return view('admin.category.index', compact('categories'));
    }

    /**
     * create a new category
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * store a new category
     */
    public function store(CategoryRequest $request)
    {
        $category = CategoryRepository::storeByRequest($request);

        $shop = generaleSetting('rootShop');

        $shop->categories()->attach($category);

        return to_route('admin.category.index')->withSuccess(__('Category created successfully'));
    }

    /**
     * edit a category
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * update a category
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category = CategoryRepository::updateByRequest($request, $category);

        return to_route('admin.category.index')->withSuccess(__('Category updated successfully'));
    }

    /**
     * category status toggle
     */
    public function statusToggle(Category $category)
    {
        $category->update(['status' => ! $category->status]);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return back()->withSuccess(__('Status updated successfully'));
    }
}
