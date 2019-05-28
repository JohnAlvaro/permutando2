<template>
    <div class="box resultados-busco">
        <div class="list-mode">
            <div class="filter">
                <h3>Resultados de la búsqueda</h3>
                <small>Mostrar resultados:</small>
                <input type="radio" id="lista" name="lista" checked><label for="lista" class="radio-btn">Lista</label>
                <input type="radio" id="mapa" name="lista"><label for="mapa" class="radio-btn">Mapa</label>
            </div>
            <div class="list">
                <div class="item">
                    <div class="img" style="background-image:url('/img/img-demo.jpg')"></div>
                    <div class="info">
                        <h3>Casa en venta (Usaquén)</h3>
                        <div class="desc">
                            <div>
                                <span><strong>Área:</strong> 54 Area mts<sup>2</sup></span>
                                <span><strong>Habitaciones:</strong> 3</span>
                                <span><strong>Baños:</strong> 2</span>
                            </div>
                            <div>
                                <span><strong>Valor:</strong> $200'000.000</span>
                                <span><strong>Barrio:</strong> Usaquén</span>
                                <span><strong>Baños:</strong> Calle 150 #1-50</span>
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn" data-toggle="modal" data-target="#infoModal">Información</button>
                        <button type="button" class="btn">Mensaje</button>
                    </div>
                </div>
                
                
                
            </div>
            <div id="infoModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Descripción del inmueble</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body box-info">
                            <div class="img" style="background-image:url('/img/img-demo.jpg')"></div>
                            <div class="text">
                                <h3>Casa en venta (Usaquén)</h3>
                                <div class="desc">
                                    <div>
                                        <span><strong>Área:</strong> 54 Area mts<sup>2</sup></span>
                                        <span><strong>Habitaciones:</strong> 3</span>
                                        <span><strong>Baños:</strong> 2</span>
                                    </div>
                                    <div>
                                        <span><strong>Valor:</strong> $200'000.000</span>
                                        <span><strong>Barrio:</strong> Usaquén</span>
                                        <span><strong>Baños:</strong> Calle 150 #1-50</span>
                                    </div>
                                </div>
                                <strong>Descripción:</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus nec massa vitae facilisis. Vestibulum purus felis, porttitor eu faucibus vitae, condimentum in eros.</p>
                            </div>
                            <div class="more">
                                <strong>Entorno:</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus nec massa vitae facilisis. Vestibulum purus felis, porttitor eu faucibus vitae, condimentum in eros.</p>
                                <button type="button" class="btn">Contactar</button>
                                <button type="button" class="btn">Ofertar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
   
}
</script>

