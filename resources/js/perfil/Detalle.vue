<template>
  <div class="col-12 col-md-8 col-lg-9 col-xl-10 content">
    <div class="row title">
      <div class="col">
        <span>Detalle de Inmueble</span>
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
  created() {},
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
