<!DOCTYPE html>
<html lang="es">
<head>
<title>Registro Usuario</title>
<style>
body {
    background: linear-gradient(to right, lightblue, blue);
    font-family: Arial, sans-serif;
}

.form-box {
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;
}

.form-box input[type="text"], .form-box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}

.form-box input[type="text"]:focus, .form-box input[type="password"]:focus {
    width: 280px;
    border-color: #2ecc71;
}

.form-box button {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}

.form-box button:hover {
    background: #2ecc71;
}
</style>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="../Controladores/agregarUsuario.php" method="POST">
                    <h2> Registro de usuario </h2>

                    <div class="inputbox">
                        <input name= "txtnombre" type="text" required>
                        <label  for="">Nombre</label > 
                    </div>

                    <div class="inputbox">
                        <input name= "txtapellido" type="text" required>
                        <label for="">Apellido</label > >
                    </div>

                    <div class="inputbox">
                        <input name= "txtusuario" type="text" required>
                        <label for="">Usuario</label > >
                    </div>

                    <div class="inputbox">
                        <input name= "txtcontrasena" type="password" required>
                        <label for="">Contraseña</label > 
                    </div>

                    <div class="form-group">
                            <p> Perfil: </p>
                            <label for="perfil"></label>
                            <select name="txtperfil" class="form-select">
                                <option selected> Elegir opcion </option>
                                <option value=" Administrador "> Administrador </option>
                                <option value=" Docente "> Docente </option>
                            </select>
                        </div>


                        <div class="form-group">
                            <p> Estado: </p>
                            <label for="Estado"></label>
                            <select name="txtestado" class="form-select">
                                <option selected> Elegir opcion </option>
                                <option value=" Activo "> Activo </option>
                                <option value=" No activo "> No activo </option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary d-block mx-auto">REGISTRAR</button>

                </form>
            </div>
        </div>
    </section>
</body>
</html>