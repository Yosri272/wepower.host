<!---################################--->
<!-- ////// Shop Header Navbar  ////// -->
<!---################################--->
<div class="shop-nav">
<<<<<<< HEAD
    <ul class="nav">
=======
    <ul class="nav gap-2">
        @hasPermission('admin.shop.show')
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.shop.show') ? 'active' : '' }}"
                href="{{ route('admin.shop.show', $shop->id) }}">
                {{ __('Shop overview') }}
            </a>
        </li>
<<<<<<< HEAD

=======
        @endhasPermission

        @hasPermission('admin.shop.orders')
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.shop.orders') ? 'active' : '' }}" href="{{ route('admin.shop.orders', $shop->id) }}">
                {{ __('Order') }}
            </a>
        </li>
<<<<<<< HEAD

=======
        @endhasPermission

        @hasPermission('admin.shop.products')
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.shop.products') ? 'active' : '' }}" href="{{ route('admin.shop.products', $shop->id) }}">
                {{ __('Product') }}
            </a>
        </li>
<<<<<<< HEAD

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.shop.category') ? 'active' : '' }}" href="{{ route('admin.shop.category', $shop->id) }}">
                {{ __('Category') }}
            </a>
        </li>

=======
        @endhasPermission

        @hasPermission('admin.shop.reviews')
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.shop.reviews') ? 'active' : '' }}" href="{{ route('admin.shop.reviews', $shop->id) }}">
                {{ __('Review') }}
            </a>
        </li>
<<<<<<< HEAD
=======
        @endhasPermission
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    </ul>
</div>
