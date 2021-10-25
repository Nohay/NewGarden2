// Image.vue

<template>
  <parallax :parallax="true" :speedFactor="0.3">
    <section id="section3" class="h-screen">
    <div class="grid grid-cols-3 place-items-center h-full">
        <!-- <div class="grid place-items-center"> -->
        <div>
            <img class="h-40" src="assets/images/giftbox.png" alt="Nothing">
        </div>
        <!-- </div> -->
        <div class="col-span-2 grid place-items-center w-10/12 h-1/2 rounded-lg shadow-2xl">
            <div class="w-11/12 h-5/6">
                <p class="text-right text-xl font-bold mb-10">Précommander</p>
                <p></p>
                <div class="grid grid-cols-2 gap-10">
                    <div>
                        <h3 class="font-bold mb-1">Nom</h3>
                        <input type="text" class="p-2 pl-1 w-full rounded-xl border border-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Jean Claude" />
                    </div>
                    <div>
                        <h3 class="font-bold mb-1">Prenom</h3>
                        <input type="text" class="p-2 pl-1 w-full rounded-xl border border-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Koindin" />
                    </div>
                </div>
                
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