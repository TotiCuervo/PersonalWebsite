<template>
    <div id="Home" class="h-screen">
        <PageHeader></PageHeader>
        <div class="pt-24 pb-10 px-5 md:px-20">
            <h1>Hi there!</h1>
            <p>My name is <span class="font-black text-blue-700">Toti Cuervo</span>. I love to build things: ideas, strategies, applications &mdash; you name it. I pride myself in my eagerness to learn, my inclination to creativity, and honest desire to help people. If you find this and what you learn about me interesting, I would love to talk to you.</p>
        </div>
        <div class="flex flex-wrap">
            <div class="w-full text-center">
                <p><span class="font-black text-lg">Mail: </span>TotiferCuervo@gmail.com</p>
            </div>
            <div class="w-full text-center">
                <p><span class="font-black text-lg">Phone: </span>901-692-4116</p>
            </div>
        </div>
        <div class="w-full text-center pt-5">
            <DownloadResumeButton></DownloadResumeButton>
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
