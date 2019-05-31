@extends('layouts.admin')
@section('content')
 <div class="content-wrapper">
 
      <section class="content-header">
        <h1>
          Descripción
          <small>Inmueble</small>
        </h1>
        <ol class="breadcrumb">
          <li>
            <a >
              <i class="fa fa-dashboard"></i> Dashboard
          </a>
          </li>
        <li>
            <a href="/lista-inmuebles">
                <i class="fa fa-pencil"></i> Lista
            </a>
        </li>
          
        </ol>
      </section>
      <!-- Main content -->
      <section class="content container-fluid">
        <!-- Main content -->
        <section class="content">
      <form  >
        <div class="row">
          <!-- left column -->
          <div class="col-md-7">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Datos del Usuario</h3>
              </div>

                <div class="box-body">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nombres</label>
                    <input   class="form-control" disabled value="{{$inmueble->username}}">
                  </div>
            
                  
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Correo</label>
                    <input type="email" class="form-control"  disabled   value="{{$inmueble->useremail}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Télefono - Celular</label>
                    <input type="text" class="form-control" disabled  value="{{$inmueble->usertel}}">
                  </div>
                </div>

            </div>
            <!-- /.box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Datos del Inmueble</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
                <div class="box-body">
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Area m2</label>
                    <input type="text" class="form-control" disabled value="{{$inmueble->area}}">
                  </div>


                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Habitaciones</label>
                    <input type="text"  class="form-control" disabled  value="{{$inmueble->habitaciones}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Baños</label>
                    <input type="text"  class="form-control" disabled value="{{$inmueble->banos}}">
                  </div>


                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Balcón</label>
                    <input type="text" class="form-control" disabled value="{{$inmueble->balcon}}" >
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Terraza</label>
                    <input type="text" class="form-control" disabled value="{{$inmueble->terraza}}" >
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Porteria</label>
                    <input type="text" class="form-control" disabled value="{{$inmueble->porteria}}" >
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Parqueadero</label>
                    <input type="text" class="form-control" disabled value="{{$inmueble->parqueadero}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Departamento</label>
                    <input type="text" class="form-control" disabled value="{{$inmueble->departamento}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Ciudad</label>
                    <input type="text" class="form-control" disabled value="{{$inmueble->ciudad}}">
                  </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Barrio</label>
                    <input type="text" class="form-control" disabled value="{{$inmueble->barrio}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Dirección</label>
                    <input type="text" class="form-control" disabled value="{{$inmueble->direccion}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Estrato</label>
                    <input type="text" class="form-control" disabled value="{{$inmueble->estrato}}">
                </div>

                  <div class="form-group col-md-12">
                    <label for="exampleInputPassword1">Caracteristicas</label>
                    <textarea  class="form-control" 
                     rows="5" cols="80">{{$inmueble->caracteristicas}}</textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="exampleInputPassword1">Mas información</label>
                    <textarea  class="form-control" 
                     rows="5" cols="80">{{$inmueble->mas_informacion}}</textarea>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <!-- <button  type="submit" class="btn btn-primary"  >
                    <span >Editar</span>
                  </button>   -->
                </div>
            </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-5">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Zonas Comunes</h3>
              </div>
                <div class="container box-body">
                    <div class="row">
                        <div class="col-md-4">
                          @foreach($inmueble->zonas as $zona)
                            <span class="label label-success">{{$zona->nombre}}</span>
                          @endforeach
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.box -->
          </div>

        <div class="col-md-5">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Trasporte</h3>
                </div>
        
                <div class="container box-body">
                    <div class="row">
                        <div class="col-md-4">
                           @foreach($inmueble->transporte as $transporte)
                            <span class="label label-success">{{$transporte->nombre}}</span>
                           @endforeach
                        </div>
        
                    </div>
                </div>
        
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-5">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Víveres</h3>
                </div>
        
                <div class="container box-body">
                    <div class="row">
                        <div class="col-md-4">
                            @foreach($inmueble->viveres as $viveres)
                            <span class="label label-success">{{$viveres->nombre}}</span>
                           @endforeach
                        </div>
        
                    </div>
                </div>
        
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-5">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Entretenimiento</h3>
                </div>
        
                <div class="container box-body">
                    <div class="row">
                        <div class="col-md-4">
                            @foreach($inmueble->entretenimiento as $entretenimiento)
                            <span class="label label-success">{{$entretenimiento->nombre}}</span>
                           @endforeach
                        </div>
        
                    </div>
                </div>
        
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-5">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Educativo</h3>
                </div>
        
                <div class="container box-body">
                    <div class="row">
                        <div class="col-md-4">
                            @foreach($inmueble->educativo as $educativo)
                            <span class="label label-success">{{$educativo->nombre}}</span>
                           @endforeach
                        </div>
        
                    </div>
                </div>
        
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-5">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Gastronomía</h3>
                </div>
        
                <div class="container box-body">
                    <div class="row">
                        <div class="col-md-4">
                           @foreach($inmueble->gastronomia as $gastronomia)
                            <span class="label label-success">{{$gastronomia->nombre}}</span>
                           @endforeach
                        </div>
        
                    </div>
                </div>
        
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-5">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Mascotas</h3>
                </div>
        
                <div class="container box-body">
                    <div class="row">
                        <div class="col-md-4">
                           @foreach($inmueble->mascotas as $mascotas)
                            <span class="label label-success">{{$mascotas->nombre}}</span>
                           @endforeach
                        </div>
        
                    </div>
                </div>
        
            </div>
            <!-- /.box -->
        </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
    </section>

 
  </div>
@stop