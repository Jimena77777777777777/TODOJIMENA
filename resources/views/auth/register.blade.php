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

        <section class="vh-100" style="background-color: #9c89b8;">
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://i.pinimg.com/564x/37/bc/ad/37bcad8ff329598b5698ab443a76d81c.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; object-fit: cover; height: 100%;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
        


                            <form action="{{route('register')}}" method="post">
                                @csrf
                                
                                <div class="d-flex justify-content-center align-items-center mb-3 pb-1">
                                  <i class="fas fa-cubes fa-2x me-3" style="color: #9c89b8;;"></i>
                                  <span class="h1 fw-bold mb-0" style="color: #9c89b8;;">INICIAR SESIÓN</span>
                              </div>
                              
                           
    
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form2Example11">Nombre
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                      </svg>
                                    </label>
                                  <input type="text" name="name" id="form2Example11" class="form-control"
                                    placeholder="Ingresar Nombre" />
                                </div>
              
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form2Example11">Correo
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                                        <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765zM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516M0 13.373l5.693-3.163L0 6.873z"/>
                                      </svg>  
                                    </label>
                                  <input type="email" name="email" id="form2Example11" class="form-control"
                                    placeholder="Ingresar correo" />
                                </div>
              
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form2Example22">Contraseña
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                      </svg>
                                    </label>
                                  <input type="password" name="password" id="form2Example22" class="form-control" /> 
                                </div>
    
                                
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form2Example22">Confirmar Contraseña
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                      </svg>
                                    </label>
                                  <input type="password" name="password_confirmation" id="form2Example22" class="form-control" /> 
                                </div>
              
                                <div class="text-center pt-1 mb-3 pb-1">
                                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-block fa-lg mb-3" type="submit" 
                                      style="background-color: #e7c6ff; color: white; border: none; font-weight: 700; font-size: 1.25rem; padding: 10px 25px; border-radius: 50px;">
                                      Registrarse
                                  </button>
                              </div>
                              
                                
              
                              <div class="d-flex align-items-center justify-content-center pb-0">
                                <p class="mb-0 me-2">Regresar a Inicio?</p>
                                <a href="{{route('login')}}" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-dark" 
                                    style="color: #9c89b8; border-color: #9c89b8; border-radius: 50px; padding: 10px 25px; font-weight: 700; font-size: 1rem;">
                                    Regresar
                                </a>
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
