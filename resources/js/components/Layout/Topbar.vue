<template>
    <div class="w-full md:hidden h-12 flex items-center bg-gray-100 justify-between px-6 border-b">
        <h4>Toti Cuervo</h4>
        <span class="text-xl cursor-pointer" @click="toggleMenu"><i class="fas fa-bars"></i></span>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                clicked: false
            }
        },
        methods: {
            toggleMenu() {

                if(!this.clicked) {
                    // document.getElementById('sidebar').classList.add("block");
                    document.getElementById('sidebar').classList.add("m-0");
                    this.clicked = true;
                } else {
                    // document.getElementById('sidebar').classList.remove("block");
                    document.getElementById('sidebar').classList.remove("m-0");
                    this.clicked = false;
                }
            }
        }
    }
</script>

<style scoped>

</style>
