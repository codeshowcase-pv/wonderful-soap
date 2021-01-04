<template>
    <div class="flex flex-col h-full">
        <top></top>
        <router-view></router-view>
        <footer_component></footer_component>
    </div>

</template>

<script>
    import top from "./header";
    import body_component from "./body";
    import footer_component from "./footer";

    export default {
        name: "App",
        components:{
            top,
            body_component,
            footer_component
        },
    }
</script>

<style scoped>

</style>
