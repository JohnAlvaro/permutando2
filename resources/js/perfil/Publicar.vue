<template>
  <div class="col-12 col-md-8 col-lg-9 col-xl-10 content">
    <div class="row title">
      <div class="col">
        <span>Publicar Inmueble</span>
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
      enviando: false,
      form: {}
    };
  },
  created() {},
  methods: {}
};
</script>
