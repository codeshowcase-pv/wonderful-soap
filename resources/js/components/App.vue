<template>
    <div class="flex flex-col h-full">
        <header_component></header_component>
        <router-view></router-view>
        <footer_component></footer_component>
    </div>

</template>

<script>
    import header_component from "./header";
    import body_component from "./body";
    import footer_component from "./footer";

    export default {
        name: "App",
        components:{
            header_component,
            body_component,
            footer_component
        },
    }
</script>

<style scoped>

</style>
