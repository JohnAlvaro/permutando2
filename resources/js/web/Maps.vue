<template>
  <div class="conenedor">
    <div class="mapa" id="mymap"></div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      direcciones: [],
      resultDir: {}
    };
  },
  mounted() {
    this.cargarInmuebles();
  },
  created() {},
  methods: {
    cargarMap(direcciones) {
      var map;
      var geocoder;
      geocoder = new google.maps.Geocoder();
      map = new google.maps.Map(document.getElementById("mymap"), {
        center: { lat: 4.60971, lng: -74.08175 },
        zoom: 10
      });
      for (let index = 0; index < direcciones.length; index++) {
        geocoder.geocode({ address: direcciones[index].direccion }, function(
          results,
          status
        ) {
          if (status == "OK") {
            //Orientar cerca el marcador
            console.log(direcciones[index].direccion);
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
            });
          } else {
            alert("Error al mostrar Inmuebles: " + status);
          }
        });
      }
    },
    cargarInmuebles() {
      axios.get("/api/inmuebles-map").then(res => {
        this.direcciones = res.data;
        console.log(this.direcciones);
        this.cargarMap(this.direcciones);
      });
    }
  }
};
</script>

<style>
.mapa {
  height: 500px;
}
</style>
