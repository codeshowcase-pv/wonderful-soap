<template>
    <div id="admin-app">
        <md-app>
            <md-app-toolbar class="md-primary">
                <span class="md-title">CHUDESNOE | ADMIN PANEL</span>
            </md-app-toolbar>
        </md-app>
        <div>
            <md-table v-model="categories">
                <md-table-toolbar>
                    <h1 class="md-display-1">Категории</h1>
                </md-table-toolbar>

                <md-table-row>
                    <md-table-head md-numeric>
                        <span class="md-title">ID</span>
                    </md-table-head>
                    <md-table-head>
                        <span class="md-title">Имя</span>
                    </md-table-head>
                </md-table-row>

                <md-table-row :key="key" v-for="(category,key) in categories" @click="categoryClickEvent(key)">
                    <md-table-cell md-numeric>
                        <span class="md-title">{{category.id}}</span>
                    </md-table-cell>
                    <md-table-cell>
                        <span class="md-title px-0">{{category.name}}</span>
                    </md-table-cell>
                </md-table-row>
            </md-table>
        </div>
        <div class="mt-2">
            <form novalidate @submit.prevent="editCategory">
                <md-card>
                    <md-card-content>
                        <md-field>
                            <md-input placeholder="имя категории..." class="md-headline" v-model="editableCategory.name" name="name"></md-input>
                        </md-field>
                        <md-card-actions>
                            <md-button type="submit" class="md-raised md-accent">Сохранить</md-button>
                        </md-card-actions>
                    </md-card-content>
                </md-card>
            </form>
        </div>
        <div class="mt-2">
            <form novalidate @submit.prevent="createCategory">
                <md-card>
                    <md-card-content>
                        <md-field>
                            <md-input placeholder="новая категория..." class="md-display-2" v-model="newCategoryName" name="name"></md-input>
                        </md-field>
                        <md-card-actions>
                            <md-button type="submit" class="md-raised md-primary">Добавить</md-button>
                        </md-card-actions>
                    </md-card-content>
                </md-card>
            </form>
        </div>

    </div>
</template>

<script>
    export default {
        name: "admin",
        data: function () {
            return {
                newCategoryName: '',
                editableCategory: {},
                categories: [
                    {id: 1, name: 'Мыло'},
                    {id: 2, name: 'Свечи'},
                    {id: 3, name: 'Бомбочки'}
                ]
            }
        },
        created() {
            //todo тут загрузка списка категорий
        },
        methods: {
            categoryClickEvent(key) {
                this.editableCategory = Object.assign({}, this.categories[key]);
            },
            editCategory() {
                console.log(this.editableCategory);
                //todo тут идёт отправка данных о категории на сервер, в ответ приходит список
                this.editableCategory = {};
            },
            createCategory() {
                console.log(this.newCategoryName);
                //todo тут идет отправка имени на сервер, в ответ приходит список
                this.newCategoryName = "";
            }
        }
    }
</script>

<style scoped>
    * {
        font-family: 'Roboto', sans-serif;
    }
</style>
