// resources/js/router/index.js
import { createRouter, createWebHistory } from "vue-router";

<<<<<<< HEAD
// import layouts
import defaultLayout from "../layouts/default.vue";
import authLayout from "../layouts/auth.vue";

// import pages
import Home from "../pages/Home.vue";
import Shop from "../pages/Shop.vue";
import ShopDetail from "../pages/ShopDetails.vue";
import ShopCategoryProduct from "../pages/ShopCategoryProduct.vue";
import ProductDetails from "../pages/ProductDetails.vue";
import CategoryProduct from "../pages/CategoryProduct.vue";
import Checkout from "../pages/Checkout.vue";

import Dashboard from "../pages/Dashboard.vue";
import OrderHistory from "../pages/OrderHistory.vue";
import OrderDetails from "../pages/OrderDetails.vue";
import Wishlist from "../pages/Wishlist.vue";
import MyProfile from "../pages/MyProfile.vue";
import ManageAddress from "../pages/ManageAddress.vue";
import Support from "../pages/Support.vue";
import TermsAndConditions from "../pages/TermsAndConditions.vue";
import PrivacyPolicy from "../pages/PrivacyPolicy.vue";
import AddNewAddress from "../pages/AddNewAddress.vue";
import EditAddress from "../pages/EditAddress.vue";
import AboutUs from "../pages/AboutUs.vue";
import ChangePassword from "../pages/ChangePassword.vue";
import BuyNow from "../pages/BuyNow.vue";
import MostPopular from "../pages/MostPopular.vue";
import ContactUs from "../pages/ContactUs.vue";
import BestDeal from "../pages/BestDeal.vue";
import Products from "../pages/Products.vue";
import Category from "../pages/Category.vue";
import SupportTicket from "../pages/SupportTicket.vue"
import SupportTicketDetails from "../pages/SupportTicketDetails.vue";
=======
// import master store
import { useMaster } from "../stores/MasterStore";

// import layouts
import defaultLayout from "../layouts/default.vue";
import authLayout from "../layouts/auth.vue";
import layoutBlank from "../layouts/blank.vue";
import blogLayout from "../layouts/blog.vue";

// import pages
const Home = () => import("../pages/Home.vue");
const Shop = () => import("../pages/Shop.vue");
const ShopDetails = () => import("../pages/ShopDetails.vue");
const ProductDetails = () => import("../pages/ProductDetails.vue");
const CategoryProduct = () => import("../pages/CategoryProduct.vue");
const Checkout = () => import("../pages/Checkout.vue");

const Dashboard = () => import("../pages/Dashboard.vue");
const OrderHistory = () => import("../pages/OrderHistory.vue");
const OrderDetails = () => import("../pages/OrderDetails.vue");
const Wishlist = () => import("../pages/Wishlist.vue");
const MyProfile = () => import("../pages/MyProfile.vue");
const ManageAddress = () => import("../pages/ManageAddress.vue");
const Support = () => import("../pages/Support.vue");
const TermsAndConditions = () => import("../pages/TermsAndConditions.vue");
const PrivacyPolicy = () => import("../pages/PrivacyPolicy.vue");
const AddNewAddress = () => import("../pages/AddNewAddress.vue");
const EditAddress = () => import("../pages/EditAddress.vue");
const AboutUs = () => import("../pages/AboutUs.vue");
const ChangePassword = () => import("../pages/ChangePassword.vue");
const BuyNow = () => import("../pages/BuyNow.vue");
const MostPopular = () => import("../pages/MostPopular.vue");
const ContactUs = () => import("../pages/ContactUs.vue");
const BestDeal = () => import("../pages/BestDeal.vue");
const Products = () => import("../pages/Products.vue");
const Category = () => import("../pages/Category.vue");
const SupportTicket = () => import("../pages/SupportTicket.vue");
const SupportTicketDetails = () => import("../pages/SupportTicketDetails.vue");
const FlashSale = () => import("../pages/FlashSale.vue");
const Blog = () => import("../pages/Blog.vue");
const BlogDetails = () => import("../pages/BlogDetails.vue");
const PolicyPages = () => import("../pages/PolicyPages.vue");

// 404 page
const NotFound = () => import("../errors/404.vue");
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

// all pages router will be here
const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Home",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/shops",
        name: "shop",
        component: Shop,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Shops",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/products",
        name: "products",
        component: Products,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Products",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/categories",
        name: "categories",
        component: Category,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Categories",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/most-popular",
        name: "most-popular",
        component: MostPopular,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Most Popular Products",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/best-deal",
        name: "best-deal",
        component: BestDeal,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Best Deal Products",
        },
    },
    {
        path: "/flash-sale/:id",
        name: "flash-sale",
        component: FlashSale,
        meta: {
            layout: defaultLayout,
            title: "Flash Sale Products",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/shops/:id",
        name: "shop-detail",
<<<<<<< HEAD
        component: ShopDetail,
        meta: {
            layout: defaultLayout,
        },
    },
    {
        path: "/shops/:id/categories/:slug",
        name: "shop-category-product",
        component: ShopCategoryProduct,
        meta: {
            layout: defaultLayout,
=======
        component: ShopDetails,
        meta: {
            layout: defaultLayout,
            title: "Shop Details",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/products/:id/details",
        name: "productDetails",
        component: ProductDetails,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Product Details",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/categories/:slug",
        name: "category-product",
        component: CategoryProduct,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Category Products",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/checkout",
        name: "checkout",
        component: Checkout,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Checkout",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/buynow",
        name: "buynow",
        component: BuyNow,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Buy Now",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/dashboard",
        name: "dashboard",
        component: Dashboard,
        meta: {
            layout: authLayout,
<<<<<<< HEAD
=======
            title: "Dashboard",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/order-history",
        name: "order-history",
        component: OrderHistory,
        meta: {
            layout: authLayout,
<<<<<<< HEAD
=======
            title: "Order History",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/order-history/:id",
        name: "order-details",
        component: OrderDetails,
        meta: {
            layout: authLayout,
<<<<<<< HEAD
=======
            title: "Order Details",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/wishlist",
        name: "wishlist",
        component: Wishlist,
        meta: {
            layout: authLayout,
<<<<<<< HEAD
=======
            title: "Wishlist",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/profile",
        name: "profile",
        component: MyProfile,
        meta: {
            layout: authLayout,
<<<<<<< HEAD
=======
            title: "My Profile",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/manage-address",
        name: "manage-address",
        component: ManageAddress,
        meta: {
            layout: authLayout,
<<<<<<< HEAD
=======
            title: "Manage Address",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/manage-address/new",
        name: "add-new-address",
        component: AddNewAddress,
        meta: {
            layout: authLayout,
<<<<<<< HEAD
=======
            title: "Add New Address",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/manage-address/:id/edit",
        name: "edit-address",
        component: EditAddress,
        meta: {
            layout: authLayout,
<<<<<<< HEAD
=======
            title: "Edit Address",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/change-password",
        name: "change-password",
        component: ChangePassword,
        meta: {
            layout: authLayout,
<<<<<<< HEAD
=======
            title: "Change Password",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/support-tickets",
        name: "support-ticket",
        component: SupportTicket,
        meta: {
            layout: authLayout,
<<<<<<< HEAD
=======
            title: "Support Ticket",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/support-ticket/:ticketNumber",
        name: "support-ticket-details",
        component: SupportTicketDetails,
        meta: {
            layout: authLayout,
<<<<<<< HEAD
=======
            title: "Support Ticket Details",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },

    {
        path: "/support",
        name: "support",
        component: Support,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Support",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/terms-and-conditions",
        name: "terms-and-conditions",
        component: TermsAndConditions,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Terms & Conditions",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/privacy-policy",
        name: "privacy-policy",
        component: PrivacyPolicy,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Privacy Policy",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/about-us",
        name: "about-us",
        component: AboutUs,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "About Us",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
    {
        path: "/contact-us",
        name: "contact-us",
        component: ContactUs,
        meta: {
            layout: defaultLayout,
<<<<<<< HEAD
=======
            title: "Contact Us",
        },
    },
    {
        path: "/blogs",
        name: "blogs",
        component: Blog,
        meta: {
            layout: blogLayout,
            title: "Blogs",
        },
    },
    {
        path: "/blog/:slug",
        name: "blog-details",
        component: BlogDetails,
        meta: {
            layout: blogLayout,
            title: "Blog Details",
        },
    },
    {
        path: "/page/:slug",
        name: "policy-page",
        component: PolicyPages,
        meta: {
            layout: defaultLayout,
            title: "Policy Page",
        },
    },
    {
        path: "/:pathMatch(.*)*",
        name: "not-found",
        component: NotFound,
        meta: {
            title: "Page Not Found",
            layout: layoutBlank,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },
];

// create router
const router = createRouter({
    history: createWebHistory(),
    routes,
});

<<<<<<< HEAD
=======
// Dynamic Title for pages
router.beforeEach((to, from, next) => {
    const master = useMaster();
    const appName = master.appName;

    document.title = to.meta.title ? `${to.meta.title} - ${appName}` : appName;
    next();
});

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
export default router;
