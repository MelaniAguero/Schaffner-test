<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="google-signin-client_id"
            content="1014953044176-6g1scqc4hugnvnajp58kajo83d7hr47d.apps.googleusercontent.com.apps.googleusercontent.com">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <title>Login y Registro</title>

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/assets/css/stylesheet.css"/>
      <link rel="stylesheet" href="/assets/css/style-register.css"/>
</head>

<body>
      <header>
            <nav class="navbar navbar-expand-lg">
                  <div class="container-fluid">
                        <a href="index.html"> <img src="/assets/img/imgLOGO,transparente.png" width="" href="index.html"
                                    alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                              data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                              aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                          <a class="nav-link" aria-current="page" href="">Buscar</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="">Informe</a>
                                    </li>
                              </ul>
                        </div>
                  </div>
            </nav>
      </header>
      <form action="registro.php" method="post">
            <div class="container">
                  <h5>Ingrese los Datos  de Analisis</h5>
                  <br>
                  <div class="row">
                        <div class="col-3">
                        </div>
                        <div class="col-6">
                              <h5>Datos Equipo</h5>
                              <label>Marca de Equipo</label>
                              <input class="form-control" type="text" placeholder="Ingrese su Marca"
                                    name="marca_equipo" required><br>
                              <br><label>Año </label>
                              <input class="form-control" type="text" placeholder="Ingrese año del Equipo" name="ano_equipo"
                                  required  >
                              <br>
                              <label>N° de Serie</label>
                              <input class="form-control" type="text" placeholder="Ingrese N° Serie" name="serie_equipo"
                                    required><br>
                              <br><label>Volataje AT</label>
                              <input class="form-control" type="text" placeholder="Voltes " name="volat_equipo"
                                    >
                              <label>Volataje BT</label>
                              <input class="form-control" type="text" placeholder="Volatos"
                                    name="volbt_equipo" >
                              <br>
                              <label>Volataje  Terciario</label>
                              <input class="form-control" type="text" placeholder="Volatos"
                                    name="volter_equipo" >
                              <br>
                              <label>Potencia etapa 1</label>
                              <input class="form-control" type="text" placeholder="Ingrese kVa"
                                    name="pote1_equipo" >
                               <label>Potencia etapa 2</label>
                              <input class="form-control" type="text" placeholder="Ingrese kVa"
                                    name="pote2_equipo" >
                               <label>Potencia etapa 3</label>
                              <input class="form-control" type="text" placeholder="Ingrese kVa"
                                    name="pote3_equipo" >
                               <label>Refrigeracion</label>
                              <input class="form-control" type="text" placeholder="Ingrese refrigeracion"
                                    name="refrig_equipo" >
                              <label>Fluido del Equipo</label>
                              <input class="form-control" type="text" placeholder="Ingrese fluido"
                                    name="fluido_equipo" >
                              <label>Marca del Fluido</label>
                              <input class="form-control" type="text" placeholder="Ingrese marca fluido"
                                    name="marcfluid_equipo" >
                               <label>Cliente Dueño</label>
                              <input class="form-control" type="text" placeholder="Ingrese Nombre Dueño"
                                    name="cliente_equipo" >
                              <label>N° informe</label>
                              <input class="form-control" type="text" placeholder="Nº Informe An. Fco-Químico"
                                    name="num_informe_quimico" >
                               <label>N° info Gases</label>
                              <input class="form-control" type="text" placeholder="Nº Informe An. de Gases"
                                    name="num_informe_gases" >
                               <label>Fecha Ingreso</label>
                              <input class="form-control" type="text" placeholder="ingrese fecha ingreso"
                                    name="fecha_ingreso" >
                              <label>Fecha Egreso</label>
                              <input class="form-control" type="text" placeholder="ingrese fecha egreso"
                                    name="fecha_egreso" >
                               <label>Nota de Pedido</label>
                              <input class="form-control" type="text" placeholder="nota_pedido"
                                    name="nota_pedido" >

                               <label>N° informe</label>
                              <input class="form-control" type="text" placeholder="Nº Informe An. Fco-Químico"
                                    name="num_informe_quimico" >

                              

                              










                              <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                              </div><br><br>
                              <button type="submit" class="btn btn-primary">Enviar</button>

                        </div>



                  </div>

            </div>

      </form>


</body>