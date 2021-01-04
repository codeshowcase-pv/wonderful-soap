<template>
    <div>
        <router-link :to="{path: url}">
            <div
                class="flex flex-col items-center flex-wrap gap-6 p-5 rounded"
                :class="[active ? 'bg-chudo-200' : 'bg-chudo-100']"
            >
                <div class="w-48 h-48 bg-chudo-300 rounded shadow-lg border-2 border-chudo-400 overflow-hidden">
                    <img :src="img" :alt="title">
                </div>
                <div class="text-3xl text-chudo-400">{{title}}</div>
            </div>
        </router-link>
    </div>


</template>

<script>
    export default {
        props: ['title', 'img', 'url', 'active'],
        name: "menu-item-component",
    }
</script>

<style scoped>
    img{
        object-fit: cover;
        height: 100%;
    }
</style>
