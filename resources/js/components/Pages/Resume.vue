<template>
    <div id="Resume">
        <!--Page Header-->
        <PageHeader></PageHeader>
        <!--Education-->
        <Education class="pt-10"></Education>
        <!--Experiences-->
        <div id="experiences" class="pt-12">
            <!--Header-->
            <div class="w-full">
                <h3>
                    <span class="border-b-2 border-blue-500">All Experiences</span> <span class="side-link" @click="goTo()"> - See All</span>
                </h3>
            </div>
            <TopExperiences></TopExperiences>
        </div>
        <!--Skills-->
        <Skills class="pt-12"></Skills>
    </div>
</template>

<script>
    import TopExperiences from "../Sections/Experience/TopExperiences";
    export default {
        components: {TopExperiences},
        data() {
            return {

            }
        },
        methods: {
            goTo() {
                this.$router.push({name: 'Experience'});
            }
        }
    }
</script>

<style scoped>

</style>
