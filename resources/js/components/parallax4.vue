// Image.vue

<template>
  <parallax :parallax="true" :speedFactor="0.3">
    <section id="section4" class="h-screen x-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="grid grid-cols-1 place-items-center h-full sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-20">
            <div class="w-3/4 h-3/5 shadow-2xl rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-10">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="assets/images/pigeon.jpg" alt="photo">
                </div>
                <div class="text-center mb-10">
                    <p class="text-xl text-gray-700 font-bold mb-2">Nicolas Latchimy</p>
                    <p class="text-base text-gray-400 font-normal">Technicien Développeur</p>
                </div>
            </div>
            <div class="w-3/4 h-3/5 shadow-2xl rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-10">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="assets/images/panda.jpg" alt="photo">
                </div>
                <div class="text-center mb-10">
                    <p class="text-xl text-gray-700 font-bold mb-2">Benjamin Hoarau</p>
                    <p class="text-base text-gray-400 font-normal">Technicien Développeur</p>
                </div>
            </div>
            <div class="w-3/4 h-3/5 shadow-2xl rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-10">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="assets/images/cerf.jpg" alt="photo">
                </div>
                <div class="text-center mb-10">
                    <p class="text-xl text-gray-700 font-bold mb-2">Jonathan Riviere</p>
                    <p class="text-base text-gray-400 font-normal">Technicien Développeur</p>
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