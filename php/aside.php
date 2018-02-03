                <div class="col-xs-12 col-sm-4">
                    <aside>
                        <div class="aside">
                            <h3>Subscribe to our Blog</h3>
                            <form class="form" role="form">
                                <input type="email" class="form-control" placeholder="Write your email"><br>
                                <button type="submit" class="btn btn-primary btn-sm">Suscribe</button>
                            </form>
                        </div>
                    </aside>
                    
                    <aside>
                        <div class="aside">
                            <h3>Recent Posts</h3>
                            <nav >
                                <ul class="nav nav-pills nav-stacked">
                                    <?php
                                    $sql = "SELECT * FROM t_posts inner join t_usuarios on t_posts.id_usuario = t_usuarios.id_usuario 
                                            inner join t_topico on t_posts.id_topico = t_topico.id_topico order by id_posts desc limit 10";
                                    
                                    $query = mysqli_query(conexion(), $sql);
                                    while ($i = mysqli_fetch_array($query)) {
                                    ?>
                                      <li><a href="post_comment.php?id_post=<?php echo $i['id_posts']?>"><?php echo $i["tx_titulo"]?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>                            
                            </nav>
                        </div>
                    </aside>
                    <aside>
                        <div class="aside">
                            <h3>Topics</h3>
                            <nav>
                                <ul class="nav nav-pills nav-stacked">
                                    <?php
                                    $sql = "SELECT t.tx_topico, t.id_topico, count(p.id_topico) num
                                            FROM t_topico t, t_posts p
                                            where t.id_topico = p.id_topico
                                            group by t. tx_topico order by num desc";
                                    $query = mysqli_query(conexion(), $sql);
                                    while ($i = mysqli_fetch_array($query)) {
                                    ?>
                                      <li><a href="blog.php?id_topico=<?php echo $i['id_topico']?>"><?php echo $i["tx_topico"] . "(" . $i["num"] . ")"?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>                            
                            </nav>
                        </div>
                    </aside>
                    <aside>
                        <div class="aside">
                            <h3>Create Post</h3>
                            <a href="admin.php?action=create"><button type="button" class="btn btn-primary btn-sm">Create Post</button></a>
                        </div>
                    </aside>
                    
                </div> 