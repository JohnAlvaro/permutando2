<form role="form" action="" method="post" class="f1">

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
        <h4>Casa en venta</h4>
        <div class="form-group">
            <div class="form-field">
                <div class="my-text">
                    <span>Area mts<sup>2</sup></span>
                    <input type="text" name="area">
                </div>
            </div>
            <div class="form-field">
                <div class="my-select">
                    <span>Habitaciones</span>
                    <select name="habitaciones">
                        <option>--</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="form-field">
                <div class="my-select">
                    <span>Baños</span>
                    <select name="banos">
                        <option>--</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="form-field">
                <div class="my-radio">
                    <span>Balcón</span>
                    <input type="radio" name="balcon" id="balcon_1"><label for="balcon_1">Si</label>
                    <input type="radio" name="balcon" id="balcon_0" checked><label for="balcon_0" class="no">No</label>
                </div>
            </div>
            <div class="form-field">
                <div class="my-radio">
                    <span>Terraza</span>
                    <input type="radio" name="terraza" id="terraza_1"><label for="terraza_1">Si</label>
                    <input type="radio" name="terraza" id="terraza_0" checked><label for="terraza_0" class="no">No</label>
                </div>
            </div>
            <div class="form-field">
                <div class="my-radio">
                    <span>Portería</span>
                    <input type="radio" name="porteria" id="porteria_12"><label for="porteria_12">12H</label>
                    <input type="radio" name="porteria" id="porteria_24" checked><label for="porteria_24">24H</label>
                    <input type="radio" name="porteria" id="porteria_0" checked><label for="porteria_0" class="no">No</label>
                </div>
            </div>
            <div class="form-field">
                <div class="my-radio">
                    <span>Parqueadero</span>
                    <input type="radio" name="parqueadero" id="parqueadero_1"><label for="parqueadero_1">Si</label>
                    <input type="radio" name="parqueadero" id="parqueadero_0" checked><label for="parqueadero_0" class="no">No</label>
                </div>
            </div>
            <div class="form-field w2">
                <div class="my-checkbox">
                    <span>Zonas Comunes</span>
                    <div class="form-col">
                        <input type="checkbox" name="zonas" id="zonas_1"><label for="zonas_1">Gimnasio</label>
                        <input type="checkbox" name="zonas" id="zonas_2"><label for="zonas_2">BBQ</label>
                        <input type="checkbox" name="zonas" id="zonas_3"><label for="zonas_3">Salón comunal</label>
                    </div>
                    <div class="form-col">
                        <input type="checkbox" name="zonas" id="zonas_4"><label for="zonas_4">Zona húmeda</label>
                        <input type="checkbox" name="zonas" id="zonas_5"><label for="zonas_5">Parques para niños</label>
                    </div>
                </div>
            </div>
            <textarea placeholder="Otras características"></textarea>
            <div class="form-field value">
                <span>Valor: $</span>
                <input type="text" name="valor">
            </div>
        </div>
        <div class="f1-buttons">
            <button type="button" class="btn btn-next">Siguiente</button>
        </div>
    </fieldset>

    <fieldset>
        <h4>Entorno del inmueble</h4>
        <div class="form-group list">
            <div class="form-field">
                <span>Transporte</span>
                <div class="my-checkbox">
                    <input type="checkbox" name="transporte" id="transporte_1"><label for="transporte_1">Transmilenio</label>
                    <input type="checkbox" name="transporte" id="transporte_2"><label for="transporte_2">Paradero SITP</label>
                    <input type="checkbox" name="transporte" id="transporte_3"><label for="transporte_3">Ciclorutas</label>
                    <input type="checkbox" name="transporte" id="transporte_4"><label for="transporte_4">Parqueaderos</label>
                    <input type="checkbox" name="transporte" id="transporte_5"><label for="transporte_5">Gasolineras</label>
                    <input type="checkbox" name="transporte" id="transporte_6"><label for="transporte_6">Alimentadores</label>
                    <input type="checkbox" name="transporte" id="transporte_7"><label for="transporte_7">Buses intermunicipales</label>
                </div>
            </div>
            <div class="form-field">
                <span>Víveres</span>
                <div class="my-checkbox">
                    <input type="checkbox" name="viveres" id="viveres_1"><label for="viveres_1">Tienda de barrio</label>
                    <input type="checkbox" name="viveres" id="viveres_2"><label for="viveres_2">Panadería</label>
                    <input type="checkbox" name="viveres" id="viveres_3"><label for="viveres_3">Fruterías</label>
                    <input type="checkbox" name="viveres" id="viveres_4"><label for="viveres_4">Plaza de mercado</label>
                    <input type="checkbox" name="viveres" id="viveres_5"><label for="viveres_5">Mercado de frutas y verduras</label>
                    <input type="checkbox" name="viveres" id="viveres_6"><label for="viveres_6">Supermercados</label>
                </div>
            </div>
            <div class="form-field">
                <span>Bienestar</span>
                <div class="my-checkbox">
                    <input type="checkbox" name="bienestar" id="bienestar_1"><label for="bienestar_1">Gimnasios</label>
                    <input type="checkbox" name="bienestar" id="bienestar_2"><label for="bienestar_2">Centro de Yoga</label>
                    <input type="checkbox" name="bienestar" id="bienestar_3"><label for="bienestar_3">Ciclovía</label>
                    <input type="checkbox" name="bienestar" id="bienestar_4"><label for="bienestar_4">Parques</label>
                    <input type="checkbox" name="bienestar" id="bienestar_5"><label for="bienestar_5">Hospitales</label>
                    <input type="checkbox" name="bienestar" id="bienestar_6"><label for="bienestar_6">Clínicas</label>
                    <input type="checkbox" name="bienestar" id="bienestar_7"><label for="bienestar_7">Iglesias</label>
                </div>
            </div>
            <div class="form-field">
                <span>Entretenimiento</span>
                <div class="my-checkbox">
                    <input type="checkbox" name="entrenimiento" id="entrenimiento_1"><label for="entrenimiento_1">Centros comerciales</label>
                    <input type="checkbox" name="entrenimiento" id="entrenimiento_2"><label for="entrenimiento_2">Teatros</label>
                    <input type="checkbox" name="entrenimiento" id="entrenimiento_3"><label for="entrenimiento_3">Cines</label>
                    <input type="checkbox" name="entrenimiento" id="entrenimiento_4"><label for="entrenimiento_4">Bares</label>
                    <input type="checkbox" name="entrenimiento" id="entrenimiento_5"><label for="entrenimiento_5">Discotecas</label>
                    <input type="checkbox" name="entrenimiento" id="entrenimiento_6"><label for="entrenimiento_6">Museos</label>
                </div>
            </div>
            <div class="form-field">
                <span>Educativo</span>
                <div class="my-checkbox">
                    <input type="checkbox" name="educativo" id="educativo_1"><label for="educativo_1">Jardines</label>
                    <input type="checkbox" name="educativo" id="educativo_2"><label for="educativo_2">Colegios</label>
                    <input type="checkbox" name="educativo" id="educativo_3"><label for="educativo_3">Universidades</label>
                </div>
            </div>
            <div class="form-field">
                <span>Gastronomía</span>
                <div class="my-checkbox">
                    <input type="checkbox" name="gastronomia" id="gastronomia_1"><label for="gastronomia_1">Restaurantes</label>
                    <input type="checkbox" name="gastronomia" id="gastronomia_2"><label for="gastronomia_2">Cafés</label>
                </div>
            </div>
            <div class="form-field">
                <span>Mascotas</span>
                <div class="my-checkbox">
                    <input type="checkbox" name="mascotas" id="mascotas_1"><label for="mascotas_1">Veterinarias</label>
                    <input type="checkbox" name="mascotas" id="mascotas_2"><label for="mascotas_2">Guarderias</label>
                    <input type="checkbox" name="mascotas" id="mascotas_3"><label for="mascotas_3">Paseadores de perros</label>
                    <input type="checkbox" name="mascotas" id="mascotas_4"><label for="mascotas_4">Tienda para mascotas</label>
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
                <textarea placeholder="¿Cúal?"></textarea>
            </div>
            <div class="form-field">
                <span>Imágenes</span>
                <div class="image">
                    <input type="file" id="file" class="inputfile" />
                    <label for="file">Subir imagen</label>
                </div>
            </div>
        </div>
        <div class="f1-buttons">
            <button type="button" class="btn btn-prev">Anterior</button>
            <button type="submit" class="btn btn-submit">Finalizar</button>
        </div>
    </fieldset>

</form>
