<template>
     <div class="row justify-content-end">
        <div class="col-12 col-md-5 col-lg-4 sidebar">
            <div class="box">
                <div class="search-menu">
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50"><path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z "/></svg>
                        <h2>Busco</h2>
                        <div class="check-group buscador showto">
                            <input type="checkbox" id="busco-1" name="inmueble" @click="buscarTipo('Casa')" class="unique" show="busco"><label for="busco-1" class="radio-btn">Casa</label>
                            <input type="checkbox" id="busco-2" name="inmueble" class="unique" @click="buscarTipo('Apto')" show="busco"><label for="busco-2" class="radio-btn">Apto</label>
                            <input type="checkbox" id="busco-3" name="inmueble" @click="buscarTipo('Oficina')" class="unique" show="busco"><label for="busco-3" class="radio-btn">Oficina</label>
                            <input type="checkbox" id="busco-4" name="inmueble"  @click="buscarTipo('Bodega')"  class="unique" show="busco"><label for="busco-4" class="radio-btn">Bodega</label>
                        </div>
                    </div>
                    <div class="fields">
                        <div class="check-group estado showto">
                            <input type="checkbox" id="busco_estado-1" class="unique" @click="buscarModo('Venta')"   name="busco_estado" show="busco"><label for="busco_estado-1"  class="radio-btn">Venta</label>
                            <input type="checkbox" id="busco_estado-2" class="unique" @click="buscarModo('Arriendo')"    name="busco_estado" show="busco"><label for="busco_estado-2" class="radio-btn">Arriendo</label>
                            <input type="checkbox" id="busco_estado-3" class="unique" @click="buscarModo('Permuta')"     name="busco_estado" show="busco"><label for="busco_estado-3" class="radio-btn">Permuta</label>
                        </div>
                        <div class="detalles">
                            <div class="ubicacion showto">
                                <h3>Ubicación</h3>
                                <select show="busco">
                                    <option>-- Departamento --</option>
                                </select>
                                <select show="busco">
                                    <option>-- Ciudad --</option>
                                </select>
                                <select show="busco">
                                    <option>-- Barrio --</option>
                                </select>
                            </div>
                            <div class="valor">
                                <h3>Valor</h3>
                                <input type="text" placeholder="Desde">
                                <input type="text" placeholder="Hasta">
                                <label><input type="checkbox">Mostrar todos</label>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="sell-menu">
                    <div class="title">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 489 489"><g><path d="M247.298,336.8c-5.9,5.9-5.9,15.6,0,21.5s15.6,5.9,21.5,0s5.9-15.6,0-21.5C262.898,330.8,253.198,330.8,247.298,336.8z"/><path d="M171.998,274.9c-5.9-5.9-15.6-5.9-21.5,0s-5.9,15.6,0,21.5s15.6,5.9,21.5,0S177.898,280.9,171.998,274.9z"/><path d="M414.498,31c-4.7-11.4-19.1-30.6-62.9-31c-0.5,0-0.9,0-1.4,0c-26.9,0-58.9,7.1-90.4,20.1c-5.8,2.4-11.4,4.9-16.8,7.6 l-0.3-0.3c-18-17.5-46.7-17.5-64.7,0l-88.2,85.7c-11.7,11.3-18.3,26.9-18.3,43.2v290.3c0,23.4,19,42.4,42.4,42.4h193 c23.4,0,42.4-19,42.4-42.4V156.3c0-8.3-1.7-16.5-5-23.9c18.7-10.5,35-22.5,47.5-35.1C422.398,66.2,419.198,42.4,414.498,31z M124.498,285.7c0-20.2,16.5-36.7,36.7-36.7s36.7,16.5,36.7,36.7s-16.5,36.7-36.7,36.7C140.998,322.4,124.598,306,124.498,285.7z M155.698,381.7c-3.8-3.2-4.3-8.8-1.2-12.6l96.4-116.1c3.2-3.8,8.8-4.3,12.6-1.2c3.8,3.2,4.3,8.8,1.2,12.6l-96.4,116.1 C165.098,384.3,159.498,384.8,155.698,381.7z M258.098,384.3c-20.2,0-36.7-16.5-36.7-36.7s16.5-36.7,36.7-36.7 c20.2,0,36.7,16.5,36.7,36.7C294.798,367.8,278.298,384.3,258.098,384.3z M298.798,114.7c-18.4,7.6-37.3,13-54.5,15.6 c0,0.8,0.1,1.5,0.1,2.3c0,19.4-15.7,35.1-35.1,35.1s-35.1-15.7-35.1-35.1s15.7-35.1,35.1-35.1c11.6,0,21.8,5.6,28.2,14.2 c16.3-2.8,33.9-7.9,51.2-15c6.1-2.5,11.8-5.1,17.2-7.8l-35.4-34.5c1-0.4,2-0.8,3-1.3c26.9-11.1,54.8-17.4,76.8-17.4 c0.3,0,0.7,0,1,0c21.1,0.2,29,5.9,30.2,8.9C385.198,53.8,361.698,88.8,298.798,114.7z"/></g></svg>
                        <h2>Tengo</h2>
                        <div class="check-group">
                            <input type="checkbox" id="vendo-1" name="inmueble" @click="tengo('Casa')"  class="unique" ><label for="vendo-1" class="radio-btn">Casa</label>
                            <input type="checkbox" id="vendo-2" name="inmueble" @click="tengo('Apto')" class="unique"><label for="vendo-2" class="radio-btn">Apto</label>
                            <input type="checkbox" id="vendo-3" name="inmueble" @click="tengo('Oficina')" class="unique"><label for="vendo-3" class="radio-btn">Oficina</label>
                            <input type="checkbox" id="vendo-4" name="inmueble" @click="tengo('Bodega')" class="unique"><label for="vendo-4" class="radio-btn">Bodega</label>
                        </div>
                    </div>
                    <div class="fields">
                        <div class="check-group estado showto">
                            <input type="checkbox" id="vendo_estado-1" v-model="modo" value="Venta" name="vendo_estado"  show="vendo">
                            <label for="vendo_estado-1" class="radio-btn">Venta</label>

                            <input type="checkbox" id="vendo_estado-2"  v-model="modo"  value="Arriendo"  name="vendo_estado"  show="vendo">
                            <label for="vendo_estado-2" class="radio-btn">Arriendo</label>

                            <input type="checkbox" id="vendo_estado-3" v-model="modo"  value="Permuta"   name="vendo_estado"  show="vendo">
                            <label for="vendo_estado-3" class="radio-btn">Permuta</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="col-12 col-md-7 col-lg-8 content">
    <div class="box resultados-busco">
        <div class="list-mode">
            <div class="filter">
                <h3>Resultados de la búsqueda</h3>
                <small>Mostrar resultados:</small>
                <input type="radio" id="lista" name="lista" checked><label for="lista" class="radio-btn">Lista</label>
                <input type="radio" id="mapa" name="lista"><label for="mapa" class="radio-btn">Mapa</label>
            </div>
            <div class="list">
                <div class="item" v-for="resultado in resultadoTipo" :key="resultado.id">
                    <div class="img" v-bind:style="{ backgroundImage: 'url(' + '/' + resultado.imagen+')' }"></div>
                    <div class="info">
                        <h3>{{resultado.tipo}} en {{modoParaBusqueda}} ({{resultado.barrio}})</h3>
                        <div class="desc">
                            <div>
                                <span><strong>Área:</strong> {{resultado.area}} Area mts<sup>2</sup></span>
                                <span><strong>Habitaciones:</strong> {{resultado.habitaciones}}</span>
                                <span><strong>Baños:</strong> {{resultado.banos}}</span>
                            </div>
                            <div>
                                <span><strong>Valor:</strong> ${{resultado.valor}}</span>
                                <span><strong>Barrio:</strong> {{resultado.barrio}}</span> 
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn"  @click="infoInmueble(resultado.id)">Información</button>
                        <!-- <button type="button" class="btn">Mensaje</button> -->
                    </div>
                </div>
            </div>

            <div class="list-map">
                <div class="mapa" id="mymap"></div>
            </div>

            <!-- Modal -->
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
                            <div class="img" v-bind:style="{ backgroundImage: 'url(' + '/' + info.imagen+')' }"></div>
                            <div class="text">
                                <h3>{{info.tipo}} en venta (Usaquén)</h3>
                                <div class="desc">
                                    <div>
                                        <span><strong>Área:</strong> {{info.area}} Area mts<sup>2</sup></span>
                                        <span><strong>Habitaciones:</strong> {{info.habitaciones}}</span>
                                        <span><strong>Baños:</strong> {{info.banos}}</span>
                                    </div>
                                    <div>
                                        <span><strong>Valor:</strong> ${{info.valor}}</span>
                                        <span><strong>Barrio:</strong> {{info.barrio}}</span>
                                        <!-- <span><strong>Baños:</strong> {{info.direccon}}</span> -->
                                    </div>
                                </div>
                                <strong>Caracteristicas:</strong>
                                <p>{{info.caracteristicas}}</p>
                            </div>
                            <div class="more">
                                <strong>Mas información:</strong>
                                <p>{{info.mas_informacion}}</p>
                                <button type="button" class="btn">Contactar</button>
                                <button type="button" class="btn">Ofertar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
  <div class="box resultados-vendo">
    <form role="form" @submit.prevent="storeInmueble" class="f1">
        <div class="f1-steps">
            <div class="f1-progress">
                <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
            </div>
            <div class="f1-step active">
                <div class="f1-step-icon">1</div>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">2</div>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">3</div>
            </div>
        </div>

            <fieldset>
                <h4>{{tipo}} en {{modo}}</h4>
                <div class="form-group">
                    <div class="form-field">
                        <div class="my-text">
                            <span>Area mts<sup>2</sup></span>
                            <input v-model="form.area" type="text" name="area">
                        </div>
                    </div>
                    <div class="form-field">
                        <div class="my-select">
                            <span>Habitaciones</span>
                            <select v-model="form.habitaciones">
                                <option >--</option>
                                <option value="1" >1</option>
                                <option value="2" >2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-field">
                        <div class="my-select">
                            <span>Baños</span>
                            <select v-model="form.banos">
                                <option>--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-field">
                        <div class="my-radio">
                            <span>Balcón</span>
                            <input type="radio" v-model="form.balcon" value="1" id="balcon_1"><label for="balcon_1">Si</label>
                            <input type="radio" v-model="form.balcon" value="0" id="balcon_0" checked><label for="balcon_0" class="no">No</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <div class="my-radio">
                            <span>Terraza</span>
                            <input type="radio" v-model="form.terraza" value="1" id="terraza_1"><label for="terraza_1">Si</label>
                            <input type="radio" v-model="form.terraza" value="0" id="terraza_0" checked><label for="terraza_0" class="no">No</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <div class="my-radio">
                            <span>Portería</span>
                            <input type="radio" v-model="form.porteria" value="12h" id="porteria_12"><label for="porteria_12">12H</label>
                            <input type="radio" v-model="form.porteria" value="24h" id="porteria_24" checked><label for="porteria_24">24H</label>
                            <input type="radio" v-model="form.porteria" value="no" id="porteria_0" checked><label for="porteria_0" class="no">No</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <div class="my-radio">
                            <span>Parqueadero</span>
                            <input type="radio" v-model="form.parqueadero" value="1" id="parqueadero_1"><label for="parqueadero_1">Si</label>
                            <input type="radio" v-model="form.parqueadero" value="0" id="parqueadero_0" checked><label for="parqueadero_0" class="no">No</label>
                        </div>
                    </div>
                    <div class="form-field w2">
                        <div class="my-checkbox">
                            <span>Zonas Comunes</span>
                            <div class="form-col">
                                <input type="checkbox" v-model="form.zonas" value="Gimnasio" id="zonas_1"><label for="zonas_1">Gimnasio</label>
                                <input type="checkbox" v-model="form.zonas" value="BBQ" id="zonas_2"><label for="zonas_2">BBQ</label>
                                <input type="checkbox" v-model="form.zonas" value="Salón comunal" id="zonas_3"><label for="zonas_3">Salón comunal</label>
                            </div>
                            <div class="form-col">
                                <input type="checkbox" v-model="form.zonas" value="Zona húmeda" id="zonas_4"><label for="zonas_4">Zona húmeda</label>
                                <input type="checkbox" v-model="form.zonas" value="Parques para niños" id="zonas_5"><label for="zonas_5">Parques para niños</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-field w50">
                        <div class="my-select">
                            <span>Departamento</span>
                            <select v-model="form.departamento">
                                <option>Cundinamarca</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-field w50">
                        <div class="my-select">
                            <span>Ciudad</span>
                            <select v-model="form.ciudad">
                                <option>--</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-field w50">
                        <div class="my-text">
                            <span>Barrio</span>
                            <input v-model="form.barrio" type="text" name="area">
                        </div>
                    </div>
                    <div class="form-field w50">
                        <div class="my-text">
                            <span>Dirección</span>
                            <input v-model="form.direccion" type="text" name="area">
                        </div>
                    </div>
                    <div class="form-field w50">
                        <div class="my-text">
                            <span>Estrato</span>
                            <input v-model="form.estrato" type="text" name="area">
                        </div>
                    </div>
                    <textarea v-model="form.caracteristica" placeholder="Otras características"></textarea>
                    <div class="form-field value">
                        <span>Valor: $</span>
                        <input type="text" v-model="form.valor">
                    </div>
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-next">Siguiente</button>
                </div>
            </fieldset>
        <!-- Page 2 -->
            <fieldset>
                <h4>Entorno del inmueble</h4>
                <div class="form-group list">
                    <div class="form-field">
                        <span>Transporte</span>
                        <div class="my-checkbox">
                            <input type="checkbox" v-model="form.transporte" value="Transmilenio" id="transporte_1"><label for="transporte_1">Transmilenio</label>
                            <input type="checkbox" v-model="form.transporte" value="Paradero SITP" id="transporte_2"><label for="transporte_2">Paradero SITP</label>
                            <input type="checkbox" v-model="form.transporte" value="Ciclorutas" id="transporte_3"><label for="transporte_3">Ciclorutas</label>
                            <input type="checkbox" v-model="form.transporte" value="Parqueaderos" id="transporte_4"><label for="transporte_4">Parqueaderos</label>
                            <input type="checkbox" v-model="form.transporte" value="Gasolineras" id="transporte_5"><label for="transporte_5">Gasolineras</label>
                            <input type="checkbox" v-model="form.transporte" value="Alimentadores" id="transporte_6"><label for="transporte_6">Alimentadores</label>
                            <input type="checkbox" v-model="form.transporte" value="Buses intermunicipales" id="transporte_7"><label for="transporte_7">Buses intermunicipales</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <span>Víveres</span>
                        <div class="my-checkbox">
                            <input type="checkbox" v-model="form.viveres" value="Tienda de barrio" id="viveres_1"><label for="viveres_1">Tienda de barrio</label>
                            <input type="checkbox" v-model="form.viveres" value="Panadería" id="viveres_2"><label for="viveres_2">Panadería</label>
                            <input type="checkbox" v-model="form.viveres" value="Fruterías" id="viveres_3"><label for="viveres_3">Fruterías</label>
                            <input type="checkbox" v-model="form.viveres" value="Plaza de mercado" id="viveres_4"><label for="viveres_4">Plaza de mercado</label>
                            <input type="checkbox" v-model="form.viveres" value="Mercado de frutas y verduras" id="viveres_5"><label for="viveres_5">Mercado de frutas y verduras</label>
                            <input type="checkbox" v-model="form.viveres" value="Supermercados" id="viveres_6"><label for="viveres_6">Supermercados</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <span>Bienestar</span>
                        <div class="my-checkbox">
                            <input type="checkbox" v-model="form.bienestar" value="Gimnasios" id="bienestar_1"><label for="bienestar_1">Gimnasios</label>
                            <input type="checkbox" v-model="form.bienestar" value="Centro de Yoga" id="bienestar_2"><label for="bienestar_2">Centro de Yoga</label>
                            <input type="checkbox" v-model="form.bienestar" value="Ciclovía" id="bienestar_3"><label for="bienestar_3">Ciclovía</label>
                            <input type="checkbox" v-model="form.bienestar" value="Parques" id="bienestar_4"><label for="bienestar_4">Parques</label>
                            <input type="checkbox" v-model="form.bienestar" value="Hospitales" id="bienestar_5"><label for="bienestar_5">Hospitales</label>
                            <input type="checkbox" v-model="form.bienestar" value="Clínicas" id="bienestar_6"><label for="bienestar_6">Clínicas</label>
                            <input type="checkbox" v-model="form.bienestar" value="Iglesias" id="bienestar_7"><label for="bienestar_7">Iglesias</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <span>Entretenimiento</span>
                        <div class="my-checkbox">
                            <input type="checkbox" v-model="form.entretenimiento" value="Centros comerciales" id="entrenimiento_1"><label for="entrenimiento_1">Centros comerciales</label>
                            <input type="checkbox" v-model="form.entretenimiento" value="Teatros" id="entrenimiento_2"><label for="entrenimiento_2">Teatros</label>
                            <input type="checkbox" v-model="form.entretenimiento" value="Cines" id="entrenimiento_3"><label for="entrenimiento_3">Cines</label>
                            <input type="checkbox" v-model="form.entretenimiento" value="Bares" id="entrenimiento_4"><label for="entrenimiento_4">Bares</label>
                            <input type="checkbox" v-model="form.entretenimiento" value="Discotecas" id="entrenimiento_5"><label for="entrenimiento_5">Discotecas</label>
                            <input type="checkbox" v-model="form.entretenimiento" value="Museos" id="entrenimiento_6"><label for="entrenimiento_6">Museos</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <span>Educativo</span>
                        <div class="my-checkbox">
                            <input type="checkbox" v-model="form.educativo" value="Jardines" id="educativo_1"><label for="educativo_1">Jardines</label>
                            <input type="checkbox" v-model="form.educativo" value="Colegios" id="educativo_2"><label for="educativo_2">Colegios</label>
                            <input type="checkbox" v-model="form.educativo" value="Universidades" id="educativo_3"><label for="educativo_3">Universidades</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <span>Gastronomía</span>
                        <div class="my-checkbox">
                            <input type="checkbox" v-model="form.gastronomia" value="Restaurantes" id="gastronomia_1"><label for="gastronomia_1">Restaurantes</label>
                            <input type="checkbox" v-model="form.gastronomia" value="Cafés" id="gastronomia_2"><label for="gastronomia_2">Cafés</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <span>Mascotas</span>
                        <div class="my-checkbox">
                            <input type="checkbox" v-model="form.mascotas"  value="Veterinarias" id="mascotas_1"><label for="mascotas_1">Veterinarias</label>
                            <input type="checkbox" v-model="form.mascotas"  value="Guarderias" id="mascotas_2"><label for="mascotas_2">Guarderias</label>
                            <input type="checkbox" v-model="form.mascotas"  value="Paseadores de perros" id="mascotas_3"><label for="mascotas_3">Paseadores de perros</label>
                            <input type="checkbox" v-model="form.mascotas"  value="Tienda para mascotas" id="mascotas_4"><label for="mascotas_4">Tienda para mascotas</label>
                        </div>
                    </div>
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-prev">Anterior</button>
                    <button type="button" class="btn btn-next">Siguiente</button>
                </div>
            </fieldset>

            <fieldset>
                <h4>Más información</h4>
                <div class="form-group more">
                    <div class="form-field">
                        <span>Más información</span>
                        <textarea v-model="form.mas_informacion" placeholder="¿Cúal?"></textarea>
                    </div>
                    <div class="form-field">
                        <span>Imágenes</span>
                        <div class="image">
                            <input type="file" id="file" ref="file" @change="img"  class="inputfile" />
                            <label for="file">Subir imagen</label>
                            <small>Máximo 6 imágenes</small>
                        </div>
                    </div>
                    <div class="form-field w100">
                        <div class="my-text">
                            <span>Url Video</span>
                            <input v-model="form.video" type="text" name="area">
                        </div>
                    </div>
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-prev">Anterior</button>

                    <button type="submit" v-if="enviando" class="btn btn-submit">Finalizar</button>
                    <button type="submit" v-else  class="btn btn-submit">Enviando...</button>
                </div>
            </fieldset> 
     </form>
   </div>    
</div>
</div>
</template>

<script>
import toastr from 'toastr'
toastr.options ={
  "closeButton": true,
  "timeOut": "10000",
  // "progressBar": true,
};
var userId = document.getElementById("userId").value;



export default {

    created(){   

    },
    data(){
        return{
            enviando:true,
            userId:userId,
            resultadoTipo:[],
            resultadoModo:[],
            info:[],
            tipo:[],
            tipoParaBusqueda:'Casa',
            modoParaBusqueda:'',
            modo:[],
            modoBusco:'',
            form:{
                area:'',
                habitaciones:'',
                banos:'',
                balcon:'',
                terraza:'',
                porteria:'',
                parqueadero:'',
                caracteristica:'',
                valor:'',
                mas_informacion:'',
                zonas:[],
                transporte:[],
                viveres:[],
                bienestar:[],
                entretenimiento:[],
                educativo:[],
                gastronomia:[],
                mascotas:[],
                image:'',
                estrato:'',
                departamento:'',
                ciudad:'',
                barrio:'',
                direccion:'',

            }
        }
    },
    methods:{
        cargarMap(direcciones) {
            var map;
            var geocoder;
            geocoder = new google.maps.Geocoder();
            var infowindow = new google.maps.InfoWindow();
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
                    // console.log(direcciones[index].direccion);
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                    });
                    google.maps.event.addListener(marker, 'click', function() {
                        var contentString = '<div id="content">'+
                            '<h2>'+ direcciones[index].tipo + '</h2>'+
                            '<div>'+
                            '<p><b> $'+ direcciones[index].valor + '</b></p>'+
                            '<button onclick="infoInmueble()">Información</button>'+'</div>'+
                            '</div>';
                        // infowindow.setContent(direcciones[index].tipo +' $' + direcciones[index].valor   );
                        infowindow.setContent(contentString );
                        infowindow.open(map, this);
                        
                    });
                } else {
                    alert("Error al mostrar Inmuebles: " + status);
                }
                });
            }
            },
        //Buscador
        infoInmueble(id){
            axios.get('api/info-inmueble/'+id).then(res=>{
                this.info = res.data;
                $('#infoModal').modal('show');
                console.log(this.info);  
            });
        },
        buscarTipo(dato){
            this.resultadoTipo = [];
            this.modoParaBusqueda='';
            this.tipoParaBusqueda = dato;
            axios.get('api/buscar-tipo/'+dato).then(res=>{
                this.resultadoTipo = res.data;
                this.cargarMap(this.resultadoTipo);
                // console.log(res.data);           
            });
        },
        buscarModo(dato){
            this.resultadoTipo = [];
            this.modoParaBusqueda = dato;
            axios.get('api/buscar-modo/'+this.tipoParaBusqueda+'/'+dato).then(res=>{
                for (let index = 0; index < res.data.length; index++) {
                    this.resultadoTipo = res.data[index];     
                }
                this.cargarMap(this.resultadoTipo);
                console.log(res.data[index]);         
            });
        },
        //Tengo
        tengo(dato){
            this.tipo = dato;
            console.log(this.tipo);
            
        },
        modos(dato){
              this.modo = dato;
            // this.modo.push(dato);    
            console.log(this.modo);
            
        },
        img(event){
            this.form.image = this.$refs.file.files[0];
            console.log(this.form.image);
            
          },
          
          storeInmueble(){
              this.enviando =  false;
            let fd = new FormData();
            for (var i = 0; i < this.form.zonas.length; i++) {
                fd.append('zonas[]',this.form.zonas[i]);
            }
            for (var i = 0; i < this.form.transporte.length; i++) {  
                fd.append('transporte[]',this.form.transporte[i]);
            }
            for (var i = 0; i < this.form.viveres.length; i++) {    
                fd.append('viveres[]',this.form.viveres[i]);
            }
            for (var i = 0; i < this.form.bienestar.length; i++) {    
                 fd.append('bienestar[]',this.form.bienestar[i]);
            }
            for (var i = 0; i < this.form.entretenimiento.length; i++) {    
                 fd.append('entretenimiento[]',this.form.entretenimiento[i]);
            }
            for (var i = 0; i < this.form.educativo.length; i++) {    
                 fd.append('educativo[]',this.form.educativo[i]);
            }
            for (var i = 0; i < this.form.gastronomia.length; i++) {    
                 fd.append('gastronomia[]',this.form.gastronomia[i]);
            }
            for (var i = 0; i < this.form.mascotas.length; i++) {    
                 fd.append('mascotas[]',this.form.mascotas[i]);
            }
            for (var i = 0; i < this.modo.length; i++) {    
                 fd.append('modos[]',this.modo[i]);
            }
            fd.append('area',this.form.area);
            fd.append('tipo',this.tipo);
            
            fd.append('habitaciones',this.form.habitaciones);
            fd.append('banos',this.form.banos);
            fd.append('balcon',this.form.balcon);
            fd.append('image',this.form.image);
            fd.append('terraza',this.form.terraza);
            fd.append('porteria',this.form.porteria);
            fd.append('parqueadero',this.form.parqueadero);
            fd.append('caracteristica',this.form.caracteristica);
            fd.append('valor',this.form.valor);
            fd.append('mas_informacion',this.form.mas_informacion);
            fd.append('userId',this.userId);
            
            

            
            fd.append('departamento',this.form.departamento);
            fd.append('ciudad',this.form.ciudad);
            fd.append('barrio',this.form.barrio);
            fd.append('direccion',this.form.direccion);
            fd.append('estrato',this.form.estrato);

            axios.post('api/store-inmueble',
                fd,{
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  }
              }).then(res=>{
                  console.log(res.data);
                  this.enviando = true;
                  
                // this.form = {
                //   area:'',
                //   habitaciones:'',
                //   banos:'',
                //   balcon:'',
                //   image:'',
                //   terraza:'',
                //   porteria:'',
                //   parqueadero:'',
                //   caracteristica:'',
                //   mas_informacion:'',
                //   zonas:'',
                //   transporte:'',
                //   viveres:'',
                //   bienestar:'',
                //   entretenimiento:'',
                //   educativo:'',
                //   gastronomia:'',
                //   mascotas:'',
                // }
              toastr.success('Inmueble subido correctamente');

            });

          }
    }
   
    
}



</script>

<style>
.mapa {
  height: 500px;
}
</style>

