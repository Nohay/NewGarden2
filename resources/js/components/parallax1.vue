// Image.vue

<template>
  <parallax :parallax="true" :speedFactor="0.3">
    <section id="section1" class="h-screen">
      <div class="grid grid-cols-2 place-items-center h-full pb-20">
        <div>
          <div id="constellation">
            <span class="point1" aria-describedby="truc1" style="background-color: black; z-index: 8; position: relative; 
            width: 10px; display: block; height: 10px; border-radius: 5px;">
              <p style="background-color: #f2efea; box-shadow: 0,0,0,0.5" id="truc1">
                "CO²" vous donnera la composition de l'air et vous avertira
                si la qualité de l'air est insuffisante pour les plants de
                votre équipement.
              </p>
            </span>
            <span class="point2" aria-describedby="truc2" style="background-color: black; z-index: 5; position: relative; 
            width: 10px; display: block; height: 10px; border-radius: 5px;">
              <p style="background-color: #f2efea; box-shadow: 0,0,0,0.5" id="truc2">
                "Photon" est un capteur de luminosité il permet d'avoir une 
                idée du temps qu'il fait à chaque instant sur votre parcelle 
                en extérieur. Dans le cas ou votre installation est en intérieur 
                il est possible de régler l'intensité, la chaleur et la couleur de 
                "SecondSun" votre point lumineux artificiel.
              </p>
            </span>
            <span class="point3" aria-describedby="truc3" style="background-color: black; z-index: 5; position: relative; 
            width: 10px; display: block; height: 10px; border-radius: 5px; border-radius: 8px;">
              <p style="background-color: #f2efea; box-shadow: 0,0,0,0.5" id="truc3">Encore une autre</p>
            </span>
            <span class="point4" aria-describedby="truc4" style="background-color: black; z-index: 5; position: relative; 
            width: 10px; display: block; height: 10px; border-radius: 5px; border-radius: 8px;">
              <p style="background-color: #f2efea; box-shadow: 0,0,0,0.5" id="truc4">Une specificitée vraiment utilse</p>
            </span>
            <span class="point5" aria-describedby="truc5" style="background-color: black; z-index: 5; position: relative; 
            width: 10px; display: block; height: 10px; border-radius: 5px; border-radius: 8px;">
              <p style="background-color: #f2efea; box-shadow: 0,0,0,0.5" id="truc5">Le background</p>
            </span>
            <img class="ml-40 object-cover h-60" src="assets/images/plante.png" alt="Nothing">
          </div>
        </div>
          <div class="w-6/12" style="font-size:1.1em">
              <h1 class="text-xl font-bold" style="font-family: Lobster;">Green House One</h1>
              <br>
              <p>
                Gérer votre installation sans vous soucier de la qualité de l'air,
                du taux d'humidité en sol et hors sol ou encore de la luminosité nécessaire
                à vos plants pour sa photosynthèse. Vous pouvez le faire à distance tout en 
                optimisant votre production et en réduisant les coûts en matière première.
              </p>
              <br>
              <button style="color: #33c481" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-20 rounded-xl button">
                Précommander
              </button>
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
