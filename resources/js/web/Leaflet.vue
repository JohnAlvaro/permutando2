<template>
<div>
    <div class="list">
            <div class="item"> 
                <l-map :zoom="zoom" :center="center">
                    <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
                    <l-marker :lat-lng="marker"></l-marker>
                </l-map>   
            </div>
    </div>
</div>
</template>

<script>
import {LMap, LTileLayer, LMarker } from 'vue2-leaflet';
export default {

    components: {
        LMap,
        LTileLayer,
        LMarker
    },
    data(){
        return{
            zoom:13,
      center: L.latLng(47.413220, -1.219482),
      url:'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
      attribution:'&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
      marker: L.latLng(47.413220, -1.219482),

        }
    },
    created(){
 

    },
    
    methods:{


    }
    
}
</script>

<style>
 .item{
  height: 30pc;
  margin: 0;
}
</style>

