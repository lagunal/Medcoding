
                <div class="col-xs-12 col-sm-8">
                    <?php
                    if (isset($_GET['id_topico'])){
                        $where = "where t_posts.id_topico = '$id_topico'";
                    }else{
                        $where = '';
                    }
                    $sql = "SELECT * FROM t_posts inner join t_usuarios on t_posts.id_usuario = t_usuarios.id_usuario 
                            inner join t_topico on t_posts.id_topico = t_topico.id_topico $where order by id_posts desc";
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
                                    <a href="post_comment.php?id_post=<?php echo $i['id_posts']?>">Read more/Write comment</a>
                                </div>
                            </div>
                        </article>
                    <?php
                    }
                    ?>
                    
                </div>
