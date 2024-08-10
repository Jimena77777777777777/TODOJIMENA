<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>

        <section class="vh-100" style="background-color: #9A616D;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                  <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                      <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img src="https://i.pinimg.com/736x/6c/43/02/6c4302f1a5415158d9d21bbc5948db7e.jpg"
                          alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                      </div>
                      <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
          
                         


                            <form action="{{route('register')}}" method="post">
                                @csrf
                                
                                <p>INICIAR SESION</p>
    
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form2Example11">Nombre</label>
                                  <input type="text" name="name" id="form2Example11" class="form-control"
                                    placeholder="Ingresar Nombre" />
                                </div>
              
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form2Example11">Correo</label>
                                  <input type="email" name="email" id="form2Example11" class="form-control"
                                    placeholder="Ingresar correo" />
                                </div>
              
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form2Example22">Contraseña</label>
                                  <input type="password" name="password" id="form2Example22" class="form-control" /> 
                                </div>
    
                                
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form2Example22">Confirmar Contraseña</label>
                                  <input type="password" name="password_confirmation" id="form2Example22" class="form-control" /> 
                                </div>
              
                                <div class="text-center pt-1 mb-5 pb-1">
                                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarse</button>
                                </div>
              
                                <div class="d-flex align-items-center justify-content-center pb-4">
                                  <p class="mb-0 me-2">Regresar a Inicio?</p>
                                  <a href="{{route('login')}}" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Regresar</a>
                                </div>
              
                              </form>
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        



        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
