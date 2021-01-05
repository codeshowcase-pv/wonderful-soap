<template>
    <div class="bg-chudo-200 w-full flex justify-center flex-grow-0">
        <div class="container py-4">
            <header class="flex w-full
            flex-col items-center gap-3
            sm:flex-row sm:justify-between sm:align-center sm-gap-0
            flex-wrap">
                <a href="/">
                    <h1 class="text-4xl text-chudo-300">CHUDESNOE</h1>
                </a>
                <div class="flex justify-content-between align-items-center">
                    <span class="h-6 w-6 mt-2 text-chudo-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span class="text-3xl">2</span>

                    <span class="text-chudo-400 text-3xl mx-4">300р</span>
                    <button class="bg-chudo-300 shadow tracking-wider uppercase text-xl px-3 py-1  text-white rounded">Заказать</button>
                </div>
            </header>
        </div>
    </div>
</template>

<script>
    export default {
        name: "header-component"
    }
</script>

<style scoped>

</style>
