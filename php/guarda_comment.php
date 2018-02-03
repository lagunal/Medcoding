<?php


function guarda_comment(){
    if (isset($_POST['name']) && isset($_POST['last']) && isset($_POST['email']) && isset($_POST['comment']) ){
        $name = htmlentities($_POST['name'], ENT_QUOTES);
        $last = htmlentities($_POST['last'], ENT_QUOTES);
        $email = htmlentities($_POST['email'], ENT_QUOTES);
        $comment = htmlentities($_POST['comment'], ENT_QUOTES);
        
        $id_usuario = 1;
        //$id_post;
        
        $fecha = date("Y-m-d H:i:s");
        
        $sql_insert = "INSERT INTO t_comentario (tx_comentario, id_usuario, id_posts, fe_creacion) VALUES ('$comment', '$id_usuario', '$id_post','$fecha')";
        $query = mysqli_query(conexion(),$sql_insert);
        if($query){
            echo "<div class='alert'>The comment has been submitted</div>";
        }else{
            echo "<div class='alert'>There was an error submitting the comment</div>";
        }
        mysqli_close(conexion());
        
    }else{
        if ($_POST['name'] === ''){
            echo "<div class='alert'>You must write a name</div>";
            
        }elseif ($_POST['last'] === ''){
            echo "<div class='alert'>You must write a last name</div>";
        }
        
    }
    
    
}