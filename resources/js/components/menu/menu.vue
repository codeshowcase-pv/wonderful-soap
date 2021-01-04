<template>
    <div class="flex w-full justify-center gap-20 flex-wrap mb-16">
        <menu_item_component
            v-for="(item, key) in items"
            :key="key"
            :img="item.img"
            :title="item.title"
            :url="item.url"
            :active="is_item_active(key)"
            v-on:click.native="menu_item_click(key, $event)"
        />
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
              active_item: -1,
              items: [
                  {title: 'Мыло', url: '/content/0', img: mylo_img, active: true},
                  {title: 'Свечи', url: '/content/1', img: svechi_img, active: false},
                  {title: 'Бомбочки', url: '/content/2', img: bombochki_img, active: false}
              ]
          }
        },
        components: {
            menu_item_component
        },
        methods:{
            menu_item_click: function(key, event) {
                this.active_item = key;
            },
            is_item_active: function(item_key){
                return item_key === this.active_item;
            }
        }
    }
</script>

<style scoped>

</style>
