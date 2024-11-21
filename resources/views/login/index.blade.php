<title>Login</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
        <div id="login">
            <form action="{{route('inicio.index')}}" method="get"> 
                @csrf
                <img src="assets/images/logo.svg" alt="logo">
                <h1>Ingresar</h1>
                <p>Por favor, ingresa las credenciales para poder administrar la aplicación.
                </p>
                <div class="group-input">
                    <input type="text" placeholder="Usuario">
                    <img class="user" src="assets/images/iconuser.svg" alt="user">
                </div>
                <div class="group-input">
                    <input type="password" placeholder="Contraseña">
                    <img class="password" src="assets/images/mdi_password.svg" alt="password">
                </div>
                
                    <button type="submit">Ingresar</button>
            
                <a href="olvidePassword.php">Olvide mi contraseña</a>
            </form>
        </div>
    
    
</body>
</html>