<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a category listing.
     */
    public function index(Request $request)
    {
        $search = $request->search ?? null;

<<<<<<< HEAD
        // Get categories with search and pagination
        $categories = auth()->user()->shop->categories()->when($search, function ($query) use ($search) {
=======
        $shop = generaleSetting('rootShop');

        // Get categories with search and pagination
        $categories = $shop->categories()->when($search, function ($query) use ($search) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return $query->where('name', 'like', '%'.$search.'%');
        })->paginate(20);

        return view('shop.category.index', compact('categories'));
    }
<<<<<<< HEAD

    /**
     * create a new category
     */
    public function create()
    {
        return view('shop.category.create');
    }

    /**
     * store a new category
     */
    public function store(CategoryRequest $request)
    {
        $category = CategoryRepository::storeByRequest($request);

        $shop = auth()->user()->shop;
        $shop->categories()->attach($category);

        return to_route('shop.category.index')->withSuccess(__('Category created successfully'));
    }

    /**
     * edit a category
     */
    public function edit(Category $category)
    {
        return view('shop.category.edit', compact('category'));
    }

    /**
     * update a category
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category = CategoryRepository::updateByRequest($request, $category);

        return to_route('shop.category.index')->withSuccess(__('Category updated successfully'));
    }

    /**
     * category status toggle
     */
    public function statusToggle(Category $category)
    {
        $category->update(['status' => ! $category->status]);

        return back()->withSuccess(__('Status updated successfully'));
    }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
