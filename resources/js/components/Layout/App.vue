<template>
    <div class="flex flex-row flex-wrap">
        <Topbar></Topbar>
        <Sidebar></Sidebar>
        <div id="content" class="w-full md:ml-2/9 md:w-7/9 bg-gray-200 md:pl-4 h-full">
            <div class="content-container">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {

            }
        }
    }
</script>

<style scoped>

</style>
