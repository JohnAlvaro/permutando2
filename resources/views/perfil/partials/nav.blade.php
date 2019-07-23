<div class="col-12 col-md-4 col-lg-3 col-xl-2 sidebar">
    <img class="logo" src="img/perfil-logo.png" />
    <div class="user">
        <input
            type="hidden"
            id="userId"
            value="{{Auth::User()->id}}"
        />
       {{Auth::User()->name}}
    </div>
    <ul class="menu">
        <li><a href="#">Perfil</a></li>
        <li><a href="#">Mis inmuebles favoritos</a></li>
        <li><a href="#">Mis inmuebles contactados</a></li>
        <li><a href="#">Mis mensajes</a></li>
        <li>
            <a href="#" class="">Mis publicaciones</a>
        </li>
        <li><a href="#">Mis alertas</a></li>
        <li><a href="#">Crear Alertas</a></li>
    </ul>
</div>