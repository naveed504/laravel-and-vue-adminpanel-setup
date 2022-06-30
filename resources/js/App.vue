<template>
    <div >
        <mysidebar/>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <mynavbar/>   
       
         <router-view> </router-view>
      
        </main>
      
    </div>
</template>

<script>
import NavBar from './components/layout/NavBar.vue';
import SideBar from './components/layout/SideBar.vue';
export default{
    components: {
        'mysidebar' : SideBar,
        'mynavbar' : NavBar,       
    },
}
</script>