<template>
    <div class="flex flex-col items-center bg-chudo-200 p-5 rounded">
        <div class="w-36 h-36 shadow rounded border border-chudo-400 overflow-hidden">
            <img :src="img" alt="">
        </div>
        <span class="text-2xl text-chudo-400 mt-1">Мыло такое</span>
        <div class="flex items-center gap-6">
            <div class="text-2xl">150р.</div>
            <span v-if="is_in_cart" class="h-6 w-6 text-chudo-400" v-on:click="is_in_cart = !is_in_cart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                          clip-rule="evenodd"/>
                </svg>
            </span>
            <span v-if="!is_in_cart" class="h-6 w-6 text-chudo-400" v-on:click="is_in_cart = !is_in_cart">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </span>
        </div>
    </div>
</template>

<script>
    import mylo_img from './../../../images/mylo.png'

    export default {
        name: "content-item",
        data: function () {
            return {
                img: mylo_img,
                is_in_cart: false
            }
        }
    }
</script>

<style scoped>
    img {
        object-fit: cover;
        height: 100%;
    }
</style>
