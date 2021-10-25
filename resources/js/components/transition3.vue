// Image.vue

<template>
  <parallax :parallax="true" :speedFactor="0.3">
    <video width="100%" src="assets/images/search.mp4" autobuffer autoplay loop muted></video>
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