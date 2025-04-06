<<<<<<< HEAD
<!--- Dashboard--->
<li>
    <a class="menu {{ $request->routeIs('shop.dashboard') ? 'active' : '' }}" href="{{ route('shop.dashboard') }}">
        <span>
            <i class="fa-solid fa-house menu-icon"></i>
=======
<!--- Dashboard --->
<li class="menu-divider">
    <span class="menu-title">{{ __('Main') }}</span>
</li>
<li>
    <a class="menu {{ $request->routeIs('shop.dashboard.*') ? 'active' : '' }}"
        href="{{ route('shop.dashboard.index') }}">
        <span>
            <img class="menu-icon" src="{{ asset('assets/icons-admin/dashboard.svg') }}" alt="icon" loading="lazy" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            {{ __('Dashboard') }}
        </span>
    </a>
</li>

<<<<<<< HEAD
<li class="menu-divider">
    <span class="menu-title">{{ __('PROMOTION MANAGEMENT') }}</span>
</li>

<!--- Coupon Voucher--->
<li>
    <a class="menu {{ $request->routeIs('shop.voucher.*') ? 'active' : '' }}" href="{{ route('shop.voucher.index') }}">
        <span>
            <i class="fa-solid fa-ticket menu-icon"></i>
            {{ __('Coupon Voucher') }}
        </span>
    </a>
</li>

@if ($businessModel == 'multi')
    <!--- banner--->
    <li>
        <a class="menu {{ $request->routeIs('shop.banner.*') ? 'active' : '' }}" href="{{ route('shop.banner.index') }}">
            <span>
                <i class="fa-solid fa-image menu-icon"></i>
                {{ __('Banner') }}
            </span>
        </a>
    </li>
@endif

<li class="menu-divider">
    <span class="menu-title">{{ __('ORDER MANAGEMENT') }}</span>
</li>
<!--- Orders--->
<li>
    <a class="menu {{ request()->routeIs('shop.order.*') ? 'active' : '' }}" data-bs-toggle="collapse"
        href="#settingMenu">
        <span>
            <i class="fa-solid fa-cart-shopping menu-icon"></i>
            {{ __('All Orders') }}
        </span>
        <img src="{{ asset('assets/icons/arrowDown.svg') }}" alt="" class="downIcon">
    </a>
    <div class="collapse dropdownMenuCollapse {{ $request->routeIs('shop.order.*') ? 'show' : '' }}" id="settingMenu">
        <div class="listBar">
            @php
                use App\Enums\OrderStatus;
                $orderStatuses = OrderStatus::cases();
            @endphp
            <a href="{{ route('shop.order.index') }}"
                class="subMenu hasCount {{ request()->url() === route('shop.order.index') ? 'active' : '' }}">
                {{ __('All') }} <span class="count statusAll">{{ $allOrders > 99 ? '99+' : $allOrders }}</span>
            </a>
            @foreach ($orderStatuses as $status)
                <a href="{{ route('shop.order.index', str_replace(' ', '_', $status->value)) }}"
                    class="subMenu hasCount {{ request()->url() === route('shop.order.index', str_replace(' ', '_', $status->value)) ? 'active' : '' }}">
                    <span>{{ __($status->value) }}</span>
                    <span
                        class="count status{{ Str::camel($status->value) }}">{{ ${Str::camel($status->value)} > 99 ? '99+' : ${Str::camel($status->value)} }}</span>
                </a>
            @endforeach
        </div>
    </div>
</li>

<li class="menu-divider">
    <span class="menu-title">{{ __('POS Management') }}</span>
</li>

<!--- POS--->
<li>
    <a class="menu {{ $request->routeIs('shop.pos.index') ? 'active' : '' }}" href="{{ route('shop.pos.index') }}">
        <span>
            <i class="fa-solid fa-store menu-icon"></i>
            {{ __('POS') }}
        </span>
    </a>
</li>

<!--- Draft --->
<li>
    <a class="menu {{ $request->routeIs('shop.pos.draft') ? 'active' : '' }}" href="{{ route('shop.pos.draft') }}">
        <span>
            <i class="fa-brands fa-firstdraft menu-icon"></i>
            {{ __('Draft') }}
        </span>
    </a>
</li>

<!--- POS Sales--->
<li>
    <a class="menu {{ $request->routeIs('shop.pos.sales') ? 'active' : '' }}" href="{{ route('shop.pos.sales') }}">
        <span>
            <i class="fa-solid fa-cart-shopping menu-icon"></i>
            {{ __('POS Sales') }}
        </span>
    </a>
</li>

<li class="menu-divider">
    <span class="menu-title">{{ __('Product Variants') }}</span>
</li>

<!--- Brands--->
<li>
    <a class="menu {{ $request->routeIs('shop.brand.*') ? 'active' : '' }}" href="{{ route('shop.brand.index') }}">
        <span>
            <i class="fa-solid fa-star menu-icon"></i>
            {{ __('Brand') }}
        </span>
    </a>
</li>

<!--- color--->
<li>
    <a class="menu {{ $request->routeIs('shop.color.*') ? 'active' : '' }}" href="{{ route('shop.color.index') }}">
        <span>
            <i class="fa-solid fa-palette menu-icon"></i>
            {{ __('Color') }}
        </span>
    </a>
</li>

<!--- unit--->
<li>
    <a class="menu {{ $request->routeIs('shop.unit.*') ? 'active' : '' }}" href="{{ route('shop.unit.index') }}">
        <span>
            <i class="fa-brands fa-unity menu-icon"></i>
            {{ __('Unit') }}
        </span>
    </a>
</li>

<!--- size--->
<li>
    <a class="menu {{ $request->routeIs('shop.size.*') ? 'active' : '' }}" href="{{ route('shop.size.index') }}">
        <span>
            <i class="fa-solid fa-list-ol menu-icon"></i>
            {{ __('Sizes') }}
        </span>
    </a>
</li>

<li class="menu-divider">
    <span class="menu-title">{{ __('Product Management') }}</span>
</li>
<!--- categories--->

<li>
    <a class="menu {{ request()->routeIs('shop.category.*', 'shop.subcategory.*') ? 'active' : '' }}"
        data-bs-toggle="collapse" href="#categoryMenu">
        <span>
            <i class="fa-solid fa-border-all menu-icon"></i>
            {{ __('Categories') }}
        </span>
        <img src="{{ asset('assets/icons/arrowDown.svg') }}" alt="" class="downIcon">
    </a>
    <div class="collapse dropdownMenuCollapse {{ $request->routeIs('shop.category.*', 'shop.subcategory.*') ? 'show' : '' }}"
        id="categoryMenu">
        <div class="listBar">

            <a href="{{ route('shop.category.index') }}"
                class="subMenu hasCount {{ request()->routeIs('shop.category.*') ? 'active' : '' }}">
                {{ __('Category') }}
            </a>

            <!--- sub categories--->
            <a href="{{ route('shop.subcategory.index') }}"
                class="subMenu hasCount {{ request()->routeIs('shop.subcategory.*') ? 'active' : '' }}">
                {{ __('Sub Category') }}
            </a>

        </div>
    </div>
</li>

<!--- Products--->
<li>
    <a class="menu {{ $request->routeIs('shop.product.*') ? 'active' : '' }}"
        href="{{ route('shop.product.index') }}">
        <span>
            <i class="fa-brands fa-codepen menu-icon"></i>
            {{ __('Products') }}
        </span>
    </a>
</li>

<!--- gift--->
{{-- <li>
    <a class="menu {{ $request->routeIs('shop.gift.*') ? 'active' : '' }}" href="{{ route('shop.gift.index') }}">
        <span>
            <i class="fa-solid fa-gift menu-icon"></i>
            {{ __('Gift') }}
        </span>
    </a>
</li> --}}

<li class="menu-divider">
    <span class="menu-title">{{ __('STORE MANAGEMENT') }}</span>
</li>
<!--- Profile --->
<li>
    <a class="menu {{ $request->routeIs('shop.profile.*') ? 'active' : '' }}"
        href="{{ route('shop.profile.index') }}">
        <span>
            <i class="bi bi-person-circle menu-icon"></i>
            {{ __('Profile') }}
        </span>
    </a>
</li>


@if (!auth()->user()->hasRole('root'))
    <li class="menu-divider">
        <span class="menu-title">{{ __('ACCOUNTS') }}</span>
    </li>
    <!--- withdraw --->
    <li>
        <a class="menu {{ $request->routeIs('shop.withdraw.*') ? 'active' : '' }}"
            href="{{ route('shop.withdraw.index') }}">
            <span>
                <i class="bi bi-wallet2 menu-icon"></i>
                {{ __('Withdraws') }}
            </span>
        </a>
    </li>
@endif

<li class="menu-divider">
    <span class="menu-title">{{ __('Import / Export') }}</span>
</li>
<li>
    <a class="menu {{ $request->routeIs('shop.bulk-product-export.*') ? 'active' : '' }}"
        href="{{ route('shop.bulk-product-export.index') }}">
        <span>
            <i class="fa-solid fa-download menu-icon"></i>
            {{ __('Bulk Export') }}
        </span>
    </a>
</li>

<li>
    <a class="menu {{ $request->routeIs('shop.bulk-product-import.*') ? 'active' : '' }}"
        href="{{ route('shop.bulk-product-import.index') }}">
        <span>
            <i class="fa-solid fa-upload menu-icon"></i>
            {{ __('Bulk Import') }}
        </span>
    </a>
</li>

<!--- gallery --->
<li>
    <a class="menu {{ $request->routeIs('shop.gallery.*') ? 'active' : '' }}"
        href="{{ route('shop.gallery.index') }}">
        <span>
            <i class="fa-solid fa-file-image menu-icon"></i>
            {{ __('Gallery Import') }}
=======
@php
    use App\Enums\OrderStatus;
    $orderStatuses = OrderStatus::cases();
@endphp
@hasPermission('shop.order.index')
    <li class="menu-divider">
        <span class="menu-title">{{ __('Order Handling') }}</span>
    </li>
    <!--- Orders--->
    <li>
        <a class="menu {{ request()->routeIs('shop.order.*') ? 'active' : '' }}" data-bs-toggle="collapse"
            href="#settingMenu">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/orders.svg') }}" alt="icon" loading="lazy" />
                {{ __('All Orders') }}
            </span>
            <img src="{{ asset('assets/icons-admin/caret-down.svg') }}" alt="" class="downIcon" loading="lazy" />
        </a>
        <div class="collapse dropdownMenuCollapse {{ $request->routeIs('shop.order.*') ? 'show' : '' }}" id="settingMenu">
            <div class="listBar">
                <a href="{{ route('shop.order.index') }}"
                    class="subMenu hasCount {{ request()->url() === route('shop.order.index') ? 'active' : '' }}">
                    {{ __('All') }} <span class="count statusAll">{{ $allOrders > 99 ? '99+' : $allOrders }}</span>
                </a>
                @foreach ($orderStatuses as $status)
                    <a href="{{ route('shop.order.index', str_replace(' ', '_', $status->value)) }}"
                        class="subMenu hasCount {{ request()->url() === route('shop.order.index', str_replace(' ', '_', $status->value)) ? 'active' : '' }}">
                        <span>{{ __($status->value) }}</span>
                        <span class="count status{{ Str::camel($status->value) }}">
                            {{ ${Str::camel($status->value)} > 99 ? '99+' : ${Str::camel($status->value)} }}
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </li>
@endhasPermission

@hasPermission(['shop.pos.index', 'shop.pos.draft', 'shop.pos.sales'])
    <li class="menu-divider">
        <span class="menu-title">{{ __('POS Management') }}</span>
    </li>
@endhasPermission

@hasPermission('shop.pos.index')
    <!--- POS--->
    <li>
        <a class="menu {{ $request->routeIs('shop.pos.index') ? 'active' : '' }}" href="{{ route('shop.pos.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/pos.svg') }}" alt="icon" loading="lazy" />
                {{ __('POS') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission('shop.pos.draft')
    <!--- Draft --->
    <li>
        <a class="menu {{ $request->routeIs('shop.pos.draft') ? 'active' : '' }}" href="{{ route('shop.pos.draft') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/draft.svg') }}" alt="icon" loading="lazy" />
                {{ __('Draft') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission('shop.pos.sales')
    <!--- POS Sales--->
    <li>
        <a class="menu {{ $request->routeIs('shop.pos.sales') ? 'active' : '' }}" href="{{ route('shop.pos.sales') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/pos-sale.svg') }}" alt="icon"
                    loading="lazy" />
                {{ __('POS Sales') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission(['shop.category.index', 'shop.subcategory.index', 'shop.product.index'])
    <li class="menu-divider">
        <span class="menu-title">{{ __('Product Management') }}</span>
    </li>
@endhasPermission

@hasPermission(['shop.category.index', 'shop.subcategory.index'])
    <!--- categories--->
    <li>
        <a class="menu {{ request()->routeIs('shop.category.*', 'shop.subcategory.*') ? 'active' : '' }}"
            data-bs-toggle="collapse" href="#categoryMenu">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/category.svg') }}" alt="icon"
                    loading="lazy" />
                {{ __('Categories') }}
            </span>
            <img src="{{ asset('assets/icons-admin/caret-down.svg') }}" alt="" class="downIcon" loading="lazy" />
        </a>
        <div class="collapse dropdownMenuCollapse {{ $request->routeIs('shop.category.*', 'shop.subcategory.*') ? 'show' : '' }}"
            id="categoryMenu">
            <div class="listBar">
                @hasPermission('shop.category.index')
                    <a href="{{ route('shop.category.index') }}"
                        class="subMenu hasCount {{ request()->routeIs('shop.category.*') ? 'active' : '' }}">
                        {{ __('Category') }}
                    </a>
                @endhasPermission
                @hasPermission('shop.subcategory.index')
                    <!--- sub categories--->
                    <a href="{{ route('shop.subcategory.index') }}"
                        class="subMenu hasCount {{ request()->routeIs('shop.subcategory.*') ? 'active' : '' }}">
                        {{ __('Sub Category') }}
                    </a>
                @endhasPermission
            </div>
        </div>
    </li>
@endhasPermission

@hasPermission('shop.product.index')
    <!--- Products--->
    <li>
        <a class="menu {{ $request->routeIs('shop.product.*') ? 'active' : '' }}"
            href="{{ route('shop.product.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/product.svg') }}" alt="icon"
                    loading="lazy" />
                {{ __('Products') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission('admin.flashSale.index')
    <li>
        <a href="{{ route('shop.flashSale.index') }}"
            class="menu {{ request()->routeIs('shop.flashSale.*') ? 'active' : '' }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/flash.svg') }}" alt="icon"
                    loading="lazy" />
                {{ __('Flash Sales') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission(['shop.brand.index', 'shop.color.index', 'shop.size.index', 'shop.unit.index'])
    <li class="menu-divider">
        <span class="menu-title">{{ __('Product Variants') }}</span>
    </li>
@endhasPermission

@hasPermission('shop.brand.index')
    <!--- brand --->
    <li>
        <a class="menu {{ $request->routeIs('shop.brand.*') ? 'active' : '' }}" href="{{ route('shop.brand.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/brand.svg') }}" alt="icon" loading="lazy" />
                {{ __('Brand') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission('shop.color.index')
    <!--- color--->
    <li>
        <a class="menu {{ $request->routeIs('shop.color.*') ? 'active' : '' }}" href="{{ route('shop.color.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/color.svg') }}" alt="icon" loading="lazy" />
                {{ __('Color') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission('shop.size.index')
    <!--- size--->
    <li>
        <a class="menu {{ $request->routeIs('shop.size.*') ? 'active' : '' }}" href="{{ route('shop.size.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/sizes.svg') }}" alt="icon" loading="lazy" />
                {{ __('Sizes') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission('shop.unit.index')
    <!--- unit--->
    <li>
        <a class="menu {{ $request->routeIs('shop.unit.*') ? 'active' : '' }}" href="{{ route('shop.unit.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/boxes.svg') }}" alt="icon" loading="lazy" />
                {{ __('Unit') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission(['shop.profile.index'])
    <li class="menu-divider">
        <span class="menu-title">{{ __('STORE MANAGEMENT') }}</span>
    </li>
    <!--- Profile --->
    <li>
        <a class="menu {{ $request->routeIs('shop.profile.*') ? 'active' : '' }}"
            href="{{ route('shop.profile.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/user-circle.svg') }}" alt="icon"
                    loading="lazy" />
                {{ __('Profile') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission(['shop.employee.index'])
    <!--- employee --->
    <li>
        <a class="menu {{ $request->routeIs('shop.employee.*') ? 'active' : '' }}"
            href="{{ route('shop.employee.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/employee.svg') }}" alt="icon"
                    loading="lazy" />
                {{ __('Employees') }}
            </span>
        </a>
    </li>
@endhasPermission


@hasPermission(['shop.voucher.index', 'shop.banner.index'])
    <li class="menu-divider">
        <span class="menu-title">{{ __('Marketing Promotions') }}</span>
    </li>
@endhasPermission

@hasPermission('shop.voucher.index')
    <!--- Promo Code--->
    <li>
        <a class="menu {{ $request->routeIs('shop.voucher.*') ? 'active' : '' }}" href="{{ route('shop.voucher.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/coupon-percent.svg') }}" alt="icon"
                    loading="lazy" />
                {{ __('Promo Code') }}
            </span>
        </a>
    </li>
@endhasPermission

@if ($businessModel == 'multi')
    <!--- banner--->
    @hasPermission('shop.banner.index')
        <li>
            <a class="menu {{ $request->routeIs('shop.banner.*') ? 'active' : '' }}"
                href="{{ route('shop.banner.index') }}">
                <span>
                    <img class="menu-icon" src="{{ asset('assets/icons-admin/promotional.svg') }}" alt="icon"
                        loading="lazy" />
                    {{ __('Promotional Banner') }}
                </span>
            </a>
        </li>
    @endhasPermission
@endif

@if (!auth()->user()->hasRole('root'))
    @hasPermission('shop.withdraw.index')
        <li class="menu-divider">
            <span class="menu-title">{{ __('Accounts') }}</span>
        </li>
        <!--- withdraw --->
        <li>
            <a class="menu {{ $request->routeIs('shop.withdraw.*') ? 'active' : '' }}"
                href="{{ route('shop.withdraw.index') }}">
                <span>
                    <img class="menu-icon" src="{{ asset('assets/icons-admin/withdraw.svg') }}" alt="icon"
                        loading="lazy" />
                    {{ __('Withdraws') }}
                </span>
            </a>
        </li>
    @endhasPermission
@endif

@hasPermission(['shop.bulk-product-import.index', 'shop.bulk-product-export.index', 'shop.gallery.index'])
    <li class="menu-divider">
        <span class="menu-title">{{ __('Import / Export') }}</span>
    </li>
@endhasPermission

@hasPermission('shop.bulk-product-export.index')
    <li>
        <a class="menu {{ $request->routeIs('shop.bulk-product-export.*') ? 'active' : '' }}"
            href="{{ route('shop.bulk-product-export.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/download.svg') }}" alt="icon"
                    loading="lazy" />
                {{ __('Bulk Export') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission('shop.bulk-product-import.index')
    <li>
        <a class="menu {{ $request->routeIs('shop.bulk-product-import.*') ? 'active' : '' }}"
            href="{{ route('shop.bulk-product-import.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/upload.svg') }}" alt="icon"
                    loading="lazy" />
                {{ __('Bulk Import') }}
            </span>
        </a>
    </li>
@endhasPermission

@hasPermission('shop.gallery.index')
    <!--- gallery --->
    <li>
        <a class="menu {{ $request->routeIs('shop.gallery.*') ? 'active' : '' }}"
            href="{{ route('shop.gallery.index') }}">
            <span>
                <img class="menu-icon" src="{{ asset('assets/icons-admin/image-upload.svg') }}" alt="icon"
                    loading="lazy" />
                {{ __('Gallery Import') }}
            </span>
        </a>
    </li>
@endhasPermission

<li>
    <a href="javascript:void(0)" class="menu logout">
        <span>
            <img class="menu-icon" src="{{ asset('assets/icons-admin/log-out.svg') }}" alt="icon"
                loading="lazy" />
            {{ __('Logout Account') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        </span>
    </a>
</li>
