<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        username/email
        <input type="text" name="name" id=''>
        password_get_info
        <input type="password" name="password" id="">

        <input type="submit" value="login">
    </form>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
        >
        </script>
        <link rel="stylesheet" href="/css/styles.css" />
        @vite(['resources/css/styles.css', 'resources/js/login.js'])
        <title>Sign in & Sign up Form</title>
    </head>
    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="/login" method="POST" class="sign-in-form">
                    @csrf
                            <h2 class="title">Iniciar Sesionn</h2>
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" name="name" placeholder="Username" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Password" />
                            </div>
                            <input type="submit" value="Iniciar Sesion" class="btn solid" />

                            <p class="social-text">O Iniciar sesión con plataformas sociales</p>
                            <div class="social-media">
                                <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                    <form action="/registro" method="POST" class="sign-up-form">
                        @csrf
                        <h2 class="title">REGISTRARSE</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" placeholder="Username" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="text" name="email" placeholder="Email" />
                        </div>
                        <input type="text" name="rol" placeholder="" value="estudiante" hidden />
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password" />
                        </div>
                        <input type="submit" class="btn" value="REGISTRAR" />
                        <p class="social-text">O Iniciar sesión con plataformas sociales</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>¿Nuevo aquí ?</h3>
                        <p>
                        Porvafor si no tiene un usuario registrado no podra ingresar
                        al sistema
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            REGISTRARSE
                        </button>
                    </div>
                    <img src="img/log.svg" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>¿iNGRESAR AL SISTEMA?</h3>
                        <p>
                            Porvafor si no tiene usuario registrado no podra inresar
                            al sistema
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            INICIAR SESION
                        </button>
                    </div>
                    <img src="{{ asset('img/register.svg') }}" class="image" alt="" />
                </div>
            </div>
        </div>
        <script src="app.js"></script>
    </body>
</html>
