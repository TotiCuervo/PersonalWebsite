<template>
    <header id="sidebar" class="sidebar">
        <div id="profilePic" class="w-full">
            <img src="/images/profile.jpeg" alt="Avatar" class="w-32 h-32 rounded-full mx-auto">
        </div>
        <div id="name" class="w-full pt-3">
            <h1>Toti Cuervo</h1>
        </div>
        <div id="site-navigation" class="pt-16">
            <ul>
                <router-link @click.native="checkToggle" to="/" tag="li" class="nav-item c" v-bind:class="{'selected': this.$route.name === 'Home'}">Home</router-link>
                <router-link @click.native="checkToggle" to="/Resume" tag="li" class="nav-item" v-bind:class="{'selected': this.$route.name === 'Resume'}">Resume</router-link>
                <router-link @click.native="checkToggle" to="/Portfolio" tag="li" class="nav-item" v-bind:class="{'selected': this.$route.name === 'Portfolio'}">Portfolio</router-link>
            </ul>
        </div>
        <div id="icons" class="pt-5">
            <a href="https://github.com/TotiCuervo" target="_blank" class="text-gray-600 cursor-pointer hover:text-blue-500 transition-fast">
                <i class="fab fa-github-square fa-2x"></i>
            </a>
            <a href="https://www.linkedin.com/in/toti-cuervo-zt1314/" target="_blank" class="text-gray-600 cursor-pointer hover:text-blue-500 transition-fast">
                <i class="fab fa-linkedin fa-2x"></i>
            </a>
        </div>
        <div id="resume" class="pt-5">
            <div class="w-full mx-auto">
                <DownloadResumeButton class="mx-auto"></DownloadResumeButton>
            </div>
        </div>

    </header>
</template>

<script>
    export default {
        data() {
            return {

            }
        },
        methods: {
            checkToggle() {
                //checks to see if we need to turn off the sidebar for mobile view
                if (document.getElementById('sidebar').classList.contains('m-0')) {
                    document.getElementById('sidebar').classList.remove('m-0');
                }
            }
        }
    }
</script>

<style scoped>

</style>
