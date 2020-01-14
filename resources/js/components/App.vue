<template>
<div class="flex flex-col flex-1 h-screen overflow-y-hidden">
    <Nav />

    <div class="flex overflow-y-hidden flex-1">
     <Sidebar />

    <div class="overflow-x-hidden w-2/3">

        <router-view></router-view>


Ut proverbia non nulla veriora sint quam vestra dogmata. Quid, si etiam iucunda memoria est praeteritorum malorum? Quem Tiberina descensio festo illo die tanto gaudio affecit, quanto L. Sed erat aequius Triarium aliquid de dissensione nostra iudicare.</p>

    </div>

    </div>
</div>
</template>

<script>

import Nav from './Nav';
import Sidebar from './Sidebar';

export default {
    name: "App",

    components:{
        Nav,
        Sidebar
    }
}
</script>
<style scoped>

</style>
