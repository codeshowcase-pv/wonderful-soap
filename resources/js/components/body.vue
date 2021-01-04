<template>
    <div class="bg-chudo-100 flex-grow w-full flex justify-center">
        <div class="container py-4 flex flex-col items-center">
            <h1 class="text-chudo-400 text-4xl my-10">Чудесное мыло и не только</h1>
            <menu_component/>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {
        name: "body-component",
        components: {
            menu_component
        },
    }
</script>

<style scoped>

</style>
