<template>
  <div class="col-12 col-md-8 col-lg-9 col-xl-10 content">
    <div class="row title">
      <div class="col">
        <span>Mis publicaciones</span>
      </div>
    </div>

    <div class="row inmuebles">
      <div
        class="inmueble col-12 col-lg-6 col-xl-4"
        v-for="inmueble in inmuebles"
        :key="inmueble.id"
      >
        <div class="box">
          <div class="image" style="background-image:url(img/img-demo.jpg);"></div>
          <div class="content">
            <div class="name">
              <h4>{{inmueble.tipo}}</h4>
            </div>
            <div class="group">
              <div class="item rooms">{{inmueble.habitaciones}} Habitaciones</div>
              <div class="item bath">{{inmueble.banos}} baños</div>
              <div class="item garage">{{inmueble.parqueadero}} parqueaderos</div>
            </div>
            <div class="group">
              <div class="item meters">{{inmueble.area}} m2</div>
              <div class="item price">${{inmueble.valor}}</div>
              <a href="/perfil-detalle/1">Ver</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
var userId = document.getElementById("userId").value;
export default {
  data() {
    return {
      userId: userId,
      inmuebles: []
    };
  },
  created() {
    this.getInmuebles();
  },
  methods: {
    getInmuebles() {
      axios.get("api/mis-inmuebles/" + this.userId).then(res => {
        this.inmuebles = res.data;
        console.log(this.inmuebles);
      });
    }
  }
};
</script>
