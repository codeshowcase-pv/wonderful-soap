<template>
    <div class="flex w-full justify-center gap-20 flex-wrap">
        <menu_item_component v-for="(item, key) in items" :key="key" :img="item.img" :title="item.title" :url="item.url"/>
    </div>
</template>

<script>
    import menu_item_component from "./menu-item"
    import bombochki_img from "./../../../images/bombochki.png"
    import mylo_img from "./../../../images/mylo.png"
    import svechi_img from "./../../../images/svechi.png"

    export default {
        name: "menu-component",
        data: function(){
          return {
              items: [
                  {title: 'Мыло', url: '/content/0', img: mylo_img},
                  {title: 'Свечи', url: '/content/1', img: svechi_img},
                  {title: 'Бомбочки', url: '/content/2', img: bombochki_img}
              ]
          }
        },
        components: {
            menu_item_component
        }
    }
</script>

<style scoped>

</style>
