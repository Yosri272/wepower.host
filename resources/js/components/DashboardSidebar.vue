<template>
    <div>
        <div class="text-center hidden md:block">
            <img :src="authStore.user?.profile_photo" alt="profile" class="md:w-20 md:h-20 lg:w-24 lg:h-24 object-cover rounded-full mx-auto">

            <div class="mt-3 text-slate-900 text-2xl font-medium font-['Roboto'] leading-loose truncate">{{ authStore.user?.name }}</div>

            <div class="text-slate-500 text-sm font-normal leading-tight">
                {{ authStore.user?.phone }}
            </div>
        </div>

        <div class="bg-slate-50 rounded-[10px] flex overflow-x-auto md:flex-col justify-start items-start md:mt-4">

            <router-link to="/dashboard" class="routerLink group">
                <Squares2X2Icon class="w-5 h-5 md:w-6 md:h-6 hidden group-[&.router-link-active]:block"/>
                <Squares2X2IconOutline class="w-5 h-5 md:w-6 md:h-6 block group-[&.router-link-active]:hidden"/>
<<<<<<< HEAD
                Dashboard
=======
                {{ $t('Dashboard') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </router-link>

            <router-link to="/order-history" class="routerLink group" :class="route.name == 'order-details' ? 'router-link-active' : ''">
                <ArchiveBoxIcon class="w-5 h-5 md:w-6 md:h-6 hidden group-[&.router-link-active]:block"/>
                <ArchiveBoxIconOutline class="w-5 h-5 md:w-6 md:h-6 block group-[&.router-link-active]:hidden"/>
<<<<<<< HEAD
                Order History
=======
                {{ $t('Order History') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </router-link>

            <router-link to="/wishlist" class="routerLink group">
                <HeartIcon class="w-5 h-5 md:w-6 md:h-6 hidden group-[&.router-link-active]:block"/>
                <HeartIconOutline class="w-5 h-5 md:w-6 md:h-6 block group-[&.router-link-active]:hidden"/>
<<<<<<< HEAD
                Wishlist
=======
                {{ $t('Wishlist') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </router-link>

            <router-link to="/profile" class="routerLink group">
                <UserIcon class="w-5 h-5 md:w-6 md:h-6 hidden group-[&.router-link-active]:block"/>
                <UserIconOutline class="w-5 h-5 md:w-6 md:h-6 block group-[&.router-link-active]:hidden"/>
<<<<<<< HEAD
                My Profile
=======
                {{ $t('My Profile') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </router-link>

            <router-link to="/manage-address" class="routerLink group" :class="route.name == 'add-new-address' || route.name == 'edit-address' ? 'router-link-active' : ''">
                <MapPinIcon class="w-5 h-5 md:w-6 md:h-6 hidden group-[&.router-link-active]:block"/>
                <MapPinIconOutline class="w-5 h-5 md:w-6 md:h-6 block group-[&.router-link-active]:hidden"/>
<<<<<<< HEAD
                Manage Address
=======
                {{ $t('Manage Address') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </router-link>

            <router-link to="/support-tickets" class="routerLink group">
                <TicketIcon class="w-5 h-5 md:w-6 md:h-6 hidden group-[&.router-link-active]:block"/>
                <TicketIconOutline class="w-5 h-5 md:w-6 md:h-6 block group-[&.router-link-active]:hidden"/>
<<<<<<< HEAD
               Support Ticket
=======
                {{ $t('Support Ticket') }}
            </router-link>

            <router-link to="/change-password" class="routerLink group">
                <KeyIcon class="w-5 h-5 md:w-6 md:h-6 hidden group-[&.router-link-active]:block"/>
                <KeyIconOutline class="w-5 h-5 md:w-6 md:h-6 block group-[&.router-link-active]:hidden"/>
                {{ $t('Change Password') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </router-link>

            <router-link to="/terms-and-conditions" class="routerLink group">
                <ListBulletIcon class="w-5 h-5 md:w-6 md:h-6 hidden group-[&.router-link-active]:block"/>
                <ListBulletIconOutline class="w-5 h-5 md:w-6 md:h-6 block group-[&.router-link-active]:hidden"/>
<<<<<<< HEAD
               Terms & Conditions
=======
                {{ $t('Terms & Conditions') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </router-link>

            <router-link to="/privacy-policy" class="routerLink group">
                <ShieldCheckIcon class="w-5 h-5 md:w-6 md:h-6 hidden group-[&.router-link-active]:block"/>
                <ShieldCheckIconOutline class="w-5 h-5 md:w-6 md:h-6 block group-[&.router-link-active]:hidden"/>
<<<<<<< HEAD
                Privacy Policy
=======
                {{ $t('Privacy Policy') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </router-link>

        </div>

    </div>
</template>

<script setup>
import { useAuth } from '../stores/AuthStore';
<<<<<<< HEAD
import { Squares2X2Icon, ArchiveBoxIcon,HeartIcon,UserIcon,MapPinIcon,TicketIcon,ShieldCheckIcon, ListBulletIcon } from '@heroicons/vue/24/solid';
import { Squares2X2Icon as Squares2X2IconOutline, HeartIcon as HeartIconOutline, ArchiveBoxIcon as ArchiveBoxIconOutline, UserIcon as UserIconOutline, MapPinIcon as MapPinIconOutline, TicketIcon as TicketIconOutline, ShieldCheckIcon as ShieldCheckIconOutline, ListBulletIcon as ListBulletIconOutline } from '@heroicons/vue/24/outline';
=======
import { Squares2X2Icon, ArchiveBoxIcon,HeartIcon,UserIcon,MapPinIcon,TicketIcon,ShieldCheckIcon, ListBulletIcon,KeyIcon } from '@heroicons/vue/24/solid';
import { Squares2X2Icon as Squares2X2IconOutline, HeartIcon as HeartIconOutline, ArchiveBoxIcon as ArchiveBoxIconOutline, UserIcon as UserIconOutline, MapPinIcon as MapPinIconOutline, TicketIcon as TicketIconOutline, ShieldCheckIcon as ShieldCheckIconOutline, ListBulletIcon as ListBulletIconOutline, KeyIcon as KeyIconOutline } from '@heroicons/vue/24/outline';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

import { useRoute } from 'vue-router';

const authStore = useAuth();
const route = useRoute();

</script>

<style scoped>
.routerLink{
    @apply md:p-4 p-[10px] rounded-lg md:rounded-[10px] justify-start items-center gap-3 inline-flex border-b-2 md:border-b-0 md:border-r-4 border-transparent hover:text-primary text-slate-600 text-sm md:text-base leading-normal transition duration-300 shrink-0 md:w-full
}

.router-link-active{
    @apply border-primary bg-primary-100 text-primary
}

</style>
