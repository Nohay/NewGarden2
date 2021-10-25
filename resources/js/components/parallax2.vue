// Image.vue

<template>
  <parallax :parallax="true" :fixed="true">
    <section id="section2" class="h-screen">
      <div class="grid grid-cols-3 place-items-center h-full">
            <div class="grid place-items-center w-3/4 h-2/4 hover:bg-gray-100 rounded-lg shadow-2xl card">
                <div>
                  <img class="h-40 mb-20" src="assets/images/microchip.png" alt="Nothing">
                  <p class="text-center text-xl font-bold" style="color: #7a7a7a">Composants</p>
                </div>
            </div>
            <div class="grid place-items-center w-3/4 h-2/4 hover:bg-gray-100 rounded-lg shadow-2xl card">
                <div>
                    <img class="h-40 mb-20" src="assets/images/sensor.png" alt="Nothing">
                    <p class="text-center text-xl font-bold" style="color: #7a7a7a">Capteurs</p>
                </div>
            </div>
            <div class="grid place-items-center w-3/4 h-2/4 hover:bg-gray-100 rounded-lg shadow-2xl card">
                <div>
                    <img class="h-40 mb-20" src="assets/images/analytics.png" alt="Nothing">
                    <p class="text-center text-xl font-bold" style="color: #7a7a7a">Graphiques</p>
                </div>
            </div>
      </div>
    </section>
  </parallax>
</template>

<script>

  import Parallax from 'vue-parallaxy'
  export default {
    components: {
      Parallax
    },
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>