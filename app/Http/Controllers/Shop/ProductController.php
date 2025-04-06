<?php

namespace App\Http\Controllers\Shop;

use App\Events\AdminProductRequestEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Media;
use App\Models\Product;
use App\Models\SubCategory;
<<<<<<< HEAD
=======
use App\Models\User;
use App\Repositories\FlashSaleRepository;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Repositories\NotificationRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display the product list.
     */
    public function index(Request $request)
    {
        // get category, brand, color and search from request
        $category = $request->category;
        $brand = $request->brand;
        $color = $request->color;
        $search = $request->search;

<<<<<<< HEAD
        // filter products based on category, brand, color and search
        $products = auth()->user()->shop?->products()->when($brand, function ($query) use ($brand) {
=======
        $rootShop = generaleSetting('rootShop');
        $shop = generaleSetting('shop');

        // filter products based on category, brand, color and search
        $products = $shop?->products()->when($brand, function ($query) use ($brand) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return $query->where('brand_id', $brand);
        })->when($category, function ($query) use ($category) {
            return $query->whereHas('categories', function ($query) use ($category) {
                return $query->where('category_id', $category);
            });
        })->when($color, function ($query) use ($color) {
            return $query->whereHas('colors', function ($query) use ($color) {
                return $query->where('color_id', $color);
            });
        })->when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%$search%");
        })->paginate(20)->withQueryString();

        // get brands, colors and categories
<<<<<<< HEAD
        $brands = auth()->user()->shop?->brands()->get();
        $colors = auth()->user()->shop?->colors()->get();
        $categories = auth()->user()->shop?->categories()->get();

        return view('shop.product.index', compact('products', 'brands', 'colors', 'categories'));
=======
        $brands = $rootShop?->brands()->get();
        $colors = $rootShop?->colors()->get();
        $categories = $rootShop?->categories()->get();

        $flashSale = FlashSaleRepository::getIncoming();

        return view('shop.product.index', compact('products', 'brands', 'colors', 'categories', 'flashSale'));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Display the product details.
     */
    public function show(Product $product)
    {
        return view('shop.product.show', compact('product'));
    }

    /**
     * crete new product.
     */
    public function create()
    {
<<<<<<< HEAD
        // get brands, colors and categories
        $brands = auth()->user()->shop?->brands()->isActive()->get();
        $colors = auth()->user()->shop?->colors()->isActive()->get();
        $categories = auth()->user()->shop?->categories()->active()->get();
        $units = auth()->user()->shop?->units()->isActive()->get();
        $sizes = auth()->user()->shop?->sizes()->isActive()->get();
=======
        $shop = generaleSetting('rootShop');

        // get brands, colors and categories
        $brands = $shop?->brands()->isActive()->get();
        $colors = $shop?->colors()->isActive()->get();
        $categories = $shop?->categories()->active()->get();
        $units = $shop?->units()->isActive()->get();
        $sizes = $shop?->sizes()->isActive()->get();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return view('shop.product.create', compact('brands', 'colors', 'categories', 'units', 'sizes'));
    }

    /**
     * store new product.
     */
    public function store(ProductRequest $request)
    {
<<<<<<< HEAD
        ProductRepository::storeByRequest($request);

        $isRootUser = auth()->user()->hasRole('root');

        // admin notification message
        if (! $isRootUser) {
=======
        $shop = generaleSetting('shop');

        $skuCode = $shop?->products()->where('code', $request->code)->exists();

        if ($skuCode) {
            return back()->withInput()->withErrors(['code' => __('Product code already exists!')])->with('error', __('Product code already exists!'));
        }

        ProductRepository::storeByRequest($request);

        /** @var User $user */
        $user = auth()->user();
        $isRootUser = $user?->hasRole('root');

        // admin notification message
        if (! $isRootUser && generaleSetting('setting')->shop_type != 'single') {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $message = 'New product Created Request';
            try {
                AdminProductRequestEvent::dispatch($message);
            } catch (\Throwable $th) {
            }

            $data = (object) [
                'title' => $message,
<<<<<<< HEAD
                'content' => 'New product Created Request from '.auth()->user()->shop->name,
=======
                'content' => 'New product Created Request from '.$shop->name,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'url' => '/admin/products?status=0',
                'icon' => 'bi-shop',
                'type' => 'success',
            ];
            // store notification
            NotificationRepository::storeByRequest($data);
        }

        return to_route('shop.product.index')->withSuccess(__('Product created successfully!'));
    }

    /**
     * Display the product edit form.
     */
    public function edit(Product $product)
    {
<<<<<<< HEAD
        // get brands, colors, units, sizes and categories
        $brands = auth()->user()->shop?->brands()->isActive()->get();
        $colors = auth()->user()->shop?->colors()->isActive()->get();
        $categories = auth()->user()->shop?->categories()->active()->get();
        $units = auth()->user()->shop?->units()->isActive()->get();
        $sizes = auth()->user()->shop?->sizes()->isActive()->get();

        $categoryId = $product->categories()->latest('id')->first()->id;
=======
        $shop = generaleSetting('shop');
        $rootShop = generaleSetting('rootShop');

        // get brands, colors, units, sizes and categories
        $brands = $rootShop?->brands()->isActive()->get();
        $colors = $rootShop?->colors()->isActive()->get();
        $categories = $rootShop?->categories()->active()->get();
        $units = $rootShop?->units()->isActive()->get();
        $sizes = $rootShop?->sizes()->isActive()->get();

        $categoryId = $product->categories()?->latest('id')->first()?->id;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $subCategories = SubCategory::whereHas('categories', function ($query) use ($categoryId) {
            return $query->where('category_id', $categoryId);
        })->isActive()->get();

<<<<<<< HEAD
        return view('shop.product.edit', compact('product', 'brands', 'colors', 'categories', 'units', 'sizes', 'subCategories'));
=======
        $metaKeywords = explode(',', $product->meta_keywords) ?: [];

        return view('shop.product.edit', compact('product', 'brands', 'colors', 'categories', 'units', 'sizes', 'subCategories', 'metaKeywords'));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Update the product.
     */
    public function update(ProductRequest $request, Product $product)
    {
<<<<<<< HEAD
        ProductRepository::updateByRequest($request, $product);

        $isRootUser = auth()->user()->hasRole('root');

        // admin notification message
        if (! $isRootUser) {
=======
        $shop = generaleSetting('shop');

        $skuCode = $shop?->products()->where('code', $request->code)->where('id', '!=', $product->id)->exists();

        if ($skuCode) {
            return back()->withInput()->withErrors(['code' => __('Product code already exists!')])->with('error', __('Product code already exists!'));
        }

        ProductRepository::updateByRequest($request, $product);

        /** @var User $user */
        $user = auth()->user();
        $isRootUser = $user?->hasRole('root');

        // admin notification message
        if (! $isRootUser && generaleSetting('setting')->shop_type != 'single') {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $message = 'Product Updated Request';
            try {
                AdminProductRequestEvent::dispatch($message);
            } catch (\Throwable $th) {
            }

            $data = (object) [
                'title' => $message,
<<<<<<< HEAD
                'content' => 'Product Updated Request from '.auth()->user()->shop->name,
=======
                'content' => 'Product Updated Request from '.$shop->name,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'url' => '/admin/products?status=1',
                'icon' => 'bi-shop',
                'type' => 'success',
            ];
            // store notification
            NotificationRepository::storeByRequest($data);
        }

        return to_route('shop.product.index')->withSuccess(__('Product updated successfully!'));
    }

    /**
     * delete thumbnail
     */
    public function thumbnailDestroy(Product $product, Media $media)
    {
        $product->medias()->detach($media->id);
        if (Storage::exists($media->src)) {
            Storage::delete($media->src);
        }

        $media->delete();

        return back()->withSuccess(__('Thumbnail deleted successfully!'));
    }

    /**
     * status toggle a product
     */
    public function statusToggle(Product $product)
    {
        if (! $product->is_approve) {
            return back()->withError(__('Sorry! Your Product is not approved yet!'));
        }

        $product->update([
            'is_active' => ! $product->is_active,
        ]);

        return back()->withSuccess(__('Status updated successfully'));
    }

    /**
     * generate barcode
     */
    public function generateBarcode(Product $product)
    {
        if (! $product->code) {
            return back()->withError(__('Sorry! Your Product code is not generated yet!'));
        }

<<<<<<< HEAD
        $quantitys = request('qty', 4);

        return view('shop.product.barcode', compact('product', 'quantitys'));
=======
        $quantities = request('qty', 4);

        return view('shop.product.barcode', compact('product', 'quantities'));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
