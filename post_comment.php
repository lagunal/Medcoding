<?php
require("static/php/header.php");
require("static/php/guarda_comment.php");

$id_post = $_GET['id_post'];

?>

<main>
<!------------header blog---->
                <?php
                require("static/php/header_blog.php");
                ?>
    
    <section>
        <div class="container articles">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <?php
                    $sql = "SELECT * FROM t_posts inner join t_usuarios on t_posts.id_usuario = t_usuarios.id_usuario 
                            inner join t_topico on t_posts.id_topico = t_topico.id_topico 
                            where t_posts.id_posts = '$id_post'";
                    $query = mysqli_query(conexion(), $sql);
                    while ($i = mysqli_fetch_array($query)) {
                    ?>
                        <article>
                            <div class="article">
                                
                                <div class="article-body">
                                    <h1 class="text-justify"><?php echo $i["tx_titulo"] ?></h1>
                                    <span><i class="glyphicon glyphicon-user"></i><?php echo $i["tx_nombre"] . "  " . $i["tx_apellido"]?> </span>
                                    <span><i class="glyphicon glyphicon-calendar"></i><?php echo $i["fe_creacion"] ?></span>
                                    <span><i class="glyphicon glyphicon-folder-open"></i><?php echo $i["tx_topico"] ?></span><br><br>
                                    <img src="static/img/Time_Management_Tips_for_Healthcare_Professionals.jpg" class="img-article"></img>
                                    <p><?php echo html_entity_decode($i["tx_cuerpo"]) ?></p>
                                </div>
                            </div>
                        </article>
                    <?php
                    }
                    ?>
                    <section class="aside">
                        <div class="mensajes">
                            <?php guarda_comment();?>
                        </div>
                        <div class="option">
                            <form action="" method="POST">
                                <h4 class="text_justify">First Name</h4>
                                <input type="text" name="name" class="inputs">
                                <br>
                                <h4 class="text_justify">Last Name</h4>
                                <input type="text" name="last" class="inputs">
                                <br>
                                <h4 class="text_justify">Email</h4>
                                <input type="text" name="email" class="inputs">
                                <br>
                                <h4 class="text_justify">Comment</h4>
                                <input type="text" name="comment" class="inputs">
                                <br>
                                <button type="submit" class="btn btn-primary btn-sm">Submit Comment</button>
                                <br>
                            </form>
                            
                        </div>
                    </section>
                    
                </div>
                        
                <!--************************ aside-->
                <?php
                require("static/php/aside.php");
                ?>



            </div>
      
        </div>
      

 
    </section>
                   


</main>


<?php
require("static/php/footer.php");
?>