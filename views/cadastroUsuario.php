<?php
    include("../views/header.php");
?>  
    <form method="Post" action="../controllers/inserirUsuario.php">
        <p>E-mail <input type="text" name="email"></p>
        <p>Senha<input type="password" name="senha"></p>
        <p>PIN<input type="Text" name="pin"></p>
        <button type="submit">Salvar</button>
    </form>
<?php
include("../views/footer.php");
?>