<template>
    <component :is="$route.meta.layout" :key="$route.fullPath">
        <RouterView />
    </component>
</template>
