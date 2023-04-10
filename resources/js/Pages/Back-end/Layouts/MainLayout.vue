<template>
    <div class="app align-content-stretch d-flex flex-wrap">

        <SideBar/>

        <div class="app-container">
            
            <Header/>
            
            <div class="app-content">
            <div class="content-wrapper">
            <div class="container">

                <slot></slot>

            </div>
            </div>
            </div>
            
        </div>

    </div>
</template>

<script setup>
    import Header from '../Partials/Header.vue';
    import SideBar from '../Partials/SideBar.vue';
</script>