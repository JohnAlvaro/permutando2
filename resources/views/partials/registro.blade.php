<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="accordionLogin" class="modal-body accordion">
                        
                        <div class="card">
                            <div id="headLogin" class="card-header" data-toggle="collapse" data-target="#login" aria-expanded="true" aria-controls="login">
                                Iniciar sesión
                            </div>
                            <div id="login" class="collapse show" aria-labelledby="headLogin" data-parent="#accordionLogin">
                                <div class="card-body">
                                    <form action="autenticar" method="POST">
                                        {!!csrf_field()!!}
                                        <input type="email" name="email" class="form-control mb-3" placeholder="Correo electrónico">
                                        <input type="password" name="password" class="form-control mb-3" placeholder="Contraseña">
                                        <button type="submit" class="btn">Iniciar sesión</button>
                                        <a href="#" class="btn fb">Facebook</a>
                                        <a href="#" class="btn gl">Google</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div id="headRegister" class="card-header" data-toggle="collapse" data-target="#register" aria-expanded="true" aria-controls="register">
                                ¿No tiene cuenta? Regístrate
                            </div>
                            <div id="register" class="collapse" aria-labelledby="headRegister" data-parent="#accordionLogin">
                                <div class="card-body">
                                    <form method="POST" action="{{url('registro')}}">
                                        {!!csrf_field()!!}
                                        <input type="text" name="name" class="form-control mb-3" placeholder="Nombre">
                                        <input type="text" name="tel" class="form-control mb-3" placeholder="Tel/Cel">
                                        <input type="email" name="email" class="form-control mb-3" placeholder="Correo electrónico">
                                        <input type="password" name="password" class="form-control mb-3" placeholder="Contraseña">
                                        <button type="submit" class="btn">Registrar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>