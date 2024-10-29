<?php include 'includes/header.php';?>
<h1>senatareas</h1>
<div class="login">
    <div class="login_logo">
        <h2><img src="/images/sena.png" alt="css"></h2>
        
    </div> 
    <div class="form_login">
        <form action="" method="post">
            <fieldset>
                <legend>iniciar sesion</legend>
                
                <label for="usu"> Usuario</label>
                <input type="text" name="email" placeholder="example@correo.com" id="usu" requiredname="email">
                <label for="pass">Contraseña</label>
                <input type="text" name="password" id="pass" placeholder="valide su usuario" required>
                <button type="submit">Iniciar Sesion</button>
            </fieldset>
        </form>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['email'];
    $password = $_POST['password'];
    
    session_start();
    try {
        require 'includes/conexion_bd.php';
        $sql = "SELECT * FROM usuarios WHERE email='$correo' ";
        $consulta = mysqli_query($conexion, $sql);
        $resul = mysqli_fetch_assoc($consulta);

        if ($_POST['password'] == $resul['contra']) {

            $_SESSION['rol'] = $resul['rol'];
            header('location: panel_principal.php');
        } else {
            echo ('usuario y/o contraseña no son correctos');
        }
    } catch (\Throwable $th) {
        echo ($th);
    }
}

include 'includes/footer.php';