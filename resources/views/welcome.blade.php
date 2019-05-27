<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Permutando</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type='text/css' media='all'>
    <link rel="stylesheet" href="css/main.css" type='text/css' media='all'>
    <link rel="stylesheet" href="css/buscador.css" type='text/css' media='all'>

    <link rel="stylesheet" href="wizard/css/style.css">

</head>

<body>
    <div id="app">
        
        <div class="map"></div>
        
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand mx-3" href="#">Permutando</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Partner y servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        @if(Auth::user())
                            <button type="button" class="btn nav-link mx-3" >{{Auth::User()->name}}</button>
                        @else
                        <button type="button" class="btn nav-link mx-3" data-toggle="modal" data-target="#loginModal">Iniciar sesión</button>

                        @endif
                    </li>
                </ul>
            </div>
        </nav>
        
        @include('partials.registro')
        
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-12 col-md-5 col-lg-4 sidebar">
                    <div class="box">
                        <div class="search-menu">
                            <div class="title">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50"><path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z "/></svg>
                                <h2>Busco</h2>
                                <div class="check-group">
                                    <input type="checkbox" id="busco-1" name="inmueble" class="unique"><label for="busco-1" class="radio-btn">Casa</label>
                                    <input type="checkbox" id="busco-2" name="inmueble" class="unique"><label for="busco-2" class="radio-btn">Apto</label>
                                    <input type="checkbox" id="busco-3" name="inmueble" class="unique"><label for="busco-3" class="radio-btn">Oficina</label>
                                    <input type="checkbox" id="busco-4" name="inmueble" class="unique"><label for="busco-4" class="radio-btn">Bodega</label>
                                </div>
                            </div>
                            <div class="fields">
                                <div class="check-group estado">
                                    <input type="checkbox" id="busco_estado-1" name="busco_estado" show="busco"><label for="busco_estado-1" class="radio-btn">Venta</label>
                                    <input type="checkbox" id="busco_estado-2" name="busco_estado" show="busco"><label for="busco_estado-2" class="radio-btn">Arriendo</label>
                                    <input type="checkbox" id="busco_estado-3" name="busco_estado" show="busco"><label for="busco_estado-3" class="radio-btn">Permuta</label>
                                </div>
                                <div class="detalles">
                                    <div class="ubicacion">
                                        <h3>Ubicación</h3>
                                        <select>
                                            <option>-- Departamento --</option>
                                        </select>
                                        <select>
                                            <option>-- Ciudad --</option>
                                        </select>
                                        <select>
                                            <option>-- Barrio --</option>
                                        </select>
                                    </div>
                                    <div class="valor">
                                        <h3>Valor</h3>
                                        <label><input type="checkbox">$50'000.000 - $100'000.000</label>
                                        <label><input type="checkbox">$100'000.000 - $150'000.000</label>
                                        <label><input type="checkbox">$150'000.000 - $200'000.000</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sell-menu">
                            <div class="title">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 489 489"><g><path d="M247.298,336.8c-5.9,5.9-5.9,15.6,0,21.5s15.6,5.9,21.5,0s5.9-15.6,0-21.5C262.898,330.8,253.198,330.8,247.298,336.8z"/><path d="M171.998,274.9c-5.9-5.9-15.6-5.9-21.5,0s-5.9,15.6,0,21.5s15.6,5.9,21.5,0S177.898,280.9,171.998,274.9z"/><path d="M414.498,31c-4.7-11.4-19.1-30.6-62.9-31c-0.5,0-0.9,0-1.4,0c-26.9,0-58.9,7.1-90.4,20.1c-5.8,2.4-11.4,4.9-16.8,7.6 l-0.3-0.3c-18-17.5-46.7-17.5-64.7,0l-88.2,85.7c-11.7,11.3-18.3,26.9-18.3,43.2v290.3c0,23.4,19,42.4,42.4,42.4h193 c23.4,0,42.4-19,42.4-42.4V156.3c0-8.3-1.7-16.5-5-23.9c18.7-10.5,35-22.5,47.5-35.1C422.398,66.2,419.198,42.4,414.498,31z M124.498,285.7c0-20.2,16.5-36.7,36.7-36.7s36.7,16.5,36.7,36.7s-16.5,36.7-36.7,36.7C140.998,322.4,124.598,306,124.498,285.7z M155.698,381.7c-3.8-3.2-4.3-8.8-1.2-12.6l96.4-116.1c3.2-3.8,8.8-4.3,12.6-1.2c3.8,3.2,4.3,8.8,1.2,12.6l-96.4,116.1 C165.098,384.3,159.498,384.8,155.698,381.7z M258.098,384.3c-20.2,0-36.7-16.5-36.7-36.7s16.5-36.7,36.7-36.7 c20.2,0,36.7,16.5,36.7,36.7C294.798,367.8,278.298,384.3,258.098,384.3z M298.798,114.7c-18.4,7.6-37.3,13-54.5,15.6 c0,0.8,0.1,1.5,0.1,2.3c0,19.4-15.7,35.1-35.1,35.1s-35.1-15.7-35.1-35.1s15.7-35.1,35.1-35.1c11.6,0,21.8,5.6,28.2,14.2 c16.3-2.8,33.9-7.9,51.2-15c6.1-2.5,11.8-5.1,17.2-7.8l-35.4-34.5c1-0.4,2-0.8,3-1.3c26.9-11.1,54.8-17.4,76.8-17.4 c0.3,0,0.7,0,1,0c21.1,0.2,29,5.9,30.2,8.9C385.198,53.8,361.698,88.8,298.798,114.7z"/></g></svg>
                                <h2>Vendo</h2>
                                <div class="check-group">
                                    <input type="checkbox" id="vendo-1" name="inmueble" class="unique"><label for="vendo-1" class="radio-btn">Casa</label>
                                    <input type="checkbox" id="vendo-2" name="inmueble" class="unique"><label for="vendo-2" class="radio-btn">Apto</label>
                                    <input type="checkbox" id="vendo-3" name="inmueble" class="unique"><label for="vendo-3" class="radio-btn">Oficina</label>
                                    <input type="checkbox" id="vendo-4" name="inmueble" class="unique"><label for="vendo-4" class="radio-btn">Bodega</label>
                                </div>
                            </div>
                            <div class="fields">
                                <div class="check-group estado vendo">
                                    <input type="checkbox" id="vendo_estado-1" name="vendo_estado" show="vendo"><label for="vendo_estado-1" class="radio-btn">Venta</label>
                                    <input type="checkbox" id="vendo_estado-2" name="vendo_estado" show="vendo"><label for="vendo_estado-2" class="radio-btn">Arriendo</label>
                                    <input type="checkbox" id="vendo_estado-3" name="vendo_estado" show="vendo"><label for="vendo_estado-3" class="radio-btn">Permuta</label>
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
                    
                    <div class="box resultados-vendo">
                        @include('componentes.formulario_vender')
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script src="wizard/js/jquery.backstretch.min.js"></script>
    <script src="wizard/js/scripts.js"></script>

</body>

</html>
