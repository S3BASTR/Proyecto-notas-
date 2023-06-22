<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

*
{
    margin: 0;
    padding: 0;
    font-family: 'poppins',sans-serif;
}
section
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgb(6, 3, 59) 0%, rgb(14, 14, 131) 35%, rgb(59, 94, 209) 100%);
    background-position: center;
    background-size: cover;
}
.form-box{
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center;

}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
.inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
}
.inputbox label{
    position: absolute;
    top: 5%;
    left: 5px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1em;
    pointer-events: none;
    transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
top: -5px;
}
.inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding:0 35px 0 5px;
    color: #fff;
}
.inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    top: 20px;
}

button{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
}
.register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register p a{
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}
.register p a:hover{
    text-decoration: underline;
}

</style>



<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../../CSS\estilos.css">
  <title>Registro Usuario</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="../Controladores/agregarusuario.php">
                    <h2> Registro de usuario </h2>

                    <div class="inputbox">
                        <input type="text" required>
                        <label for="">Nombre</label name= txtnombre> 
                    </div>

                    <div class="inputbox">
                        <input type="text" required>
                        <label for="">Apellido</label name= txtapellido> >
                    </div>

                    <div class="inputbox">
                        <input type="text" required>
                        <label for="">Usuario</label name= txtusuario> >
                    </div>

                    <div class="inputbox">
                        <input type="password" required>
                        <label for="">Contraseña</label name= txtcontrasena> 
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
                            <label for="perfil"></label>
                            <select name="txtestado" class="form-select">
                                <option selected> Elegir opcion </option>
                                <option value=" Activo "> Activo </option>
                                <option value=" No activo "> No activo </option>
                            </select>
                        </div>
                    </div>
                    <button> Ingresar </button>

                </form>
            </div>
        </div>
    </section>
</body>
</html>