<?php


function crear(){
    if (isset($_POST['titulo']) && isset($_POST['contenido'])){
        $titulo = htmlentities($_POST['titulo'], ENT_QUOTES);
        $contenido = htmlentities($_POST['contenido'], ENT_QUOTES);
        $id_usuario = 1;
        $id_topico = $_POST['topico'];
        $fecha = date("Y-m-d H:i:s");
        
        $sql_insert = "INSERT INTO t_posts (tx_titulo, tx_cuerpo, id_usuario, id_topico, fe_creacion) VALUES ('$titulo', '$contenido', '$id_usuario', '$id_topico','$fecha')";
        $query = mysqli_query(conexion(),$sql_insert);
        if($query){
            echo "<div class='alert'>The post has been published</div>";
        }else{
            echo "<div class='alert'>There was an error publishing the post</div>";
        }
        mysqli_close(conexion());
        
    }else{
        if ($_POST['titulo'] === ''){
            echo "<div class='alert'>You must write a title for the post</div>";
            
        }elseif ($_POST['contenido'] === ''){
            echo "<div class='alert'>You must write a content for the post</div>";
        }
        
    }
    
    
}