<template>
    <div class="flex flex-row justify-center flex-wrap gap-6">
        <content_item_component/>
        <content_item_component/>
        <content_item_component/>
        <content_item_component/>
        <content_item_component/>
        <content_item_component/>
        <content_item_component/>
        <content_item_component/>
        <content_item_component/>
        <content_item_component/>
        <content_item_component/>
        <content_item_component/>
    </div>
</template>

<script>
    import content_item_component from './content-item'

    export default {
        name: "content-component",
        props:['category'],
        components: {
            content_item_component
        }
    }
</script>

<style scoped>

</style>
