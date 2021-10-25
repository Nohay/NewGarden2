// Image.vue

<template>
    <header class="border-b" style="font-family: Lobster; font-size: 1.3em;">
            <nav class="flex justify-between items-center">
                <a href="#" class="ml-10 text-3xl font-bold" style="color: #33c481">
                    <img style="display: inline; width: 30px; position: relative; bottom: 4px; left: 5px;" src="assets/images/icon.png" alt="Nothing"/>
                    New 
                    <span style="color: #21a366">Garden</span></a>
                <ul class="flex justify-between items-center my-6">
                    <li class="ml-20">
                        <a href="#section1" class="m-4 font-bold" style="font-family: Source;">Accueil</a>
                    </li>
                    <li class="ml-20">
                        <a href="#section2" class="m-4 font-bold" style="font-family: Source;">Composant</a>
                    </li>
                    <li class="ml-20">
                        <a href="#section3" class="m-4 font-bold" style="font-family: Source;">Précommander</a>
                    </li>
                    <li class="ml-20">
                        <a href="#section4" class="m-4 font-bold" style="font-family: Source;">Contact</a>
                    </li>
                </ul>
                <div class="hidden">
                    <span class="block w-4 h-1"></span>
                    <span class="block w-4 h-1"></span>
                    <span class="block w-4 h-1"></span>
                </div>
            </nav>
        </header>
</template>

<script>

  export default {
    mounted() {
            console.log('Component mounted.')
        }
  }
</script>

