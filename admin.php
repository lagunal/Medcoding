<?php

require ("static/php/header.php");
require ("static/php/posts.php");

require ("static/php/header_blog.php");

if (isset($_GET['action'])){
    switch($_GET['action']){
        case 'edit':
            
            break;
        case 'create':
            ?>
            <div class="admin">
                <main>
                    <section>
                        <h1 class="text_justify">Create new post</h1>
                        <div class="mensajes">
                            <?php crear();?>
                        </div>
                        <div class="option">
                            <form action="" method="POST">
                                <h4 class="text_justify">Write the title of your post</h4>
                                <input type="text" name="titulo" class="inputs">
                                <br>
                                <h4 class="text_justify">Select the topic</h4>
                                    <?php
                                    $sql = "SELECT id_topico, tx_topico
                                            FROM t_topico order by tx_topico";
                                    $query = mysqli_query(conexion(), $sql);
                                    ?>
                                <select name=topico id=topico>
                                    <option value='0'>Select...</option>
                                    <?php
                                    while ($i = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value='<?php echo $i['id_topico'] ?>'>  <?php echo $i['tx_topico'] ?></option>
                                    <?php
                                    } 
                                    ?>
                                </select>
                                <br><br>
                                <h4 class="text_justify">Write the content of your post</h4>
                                <script type="text/javascript" src="static/js/tinymce/tinymce.min.js"></script>
                                <script type="text/javascript">
                                      tinymce.init({
                                      selector: 'textarea',
                                      height: 300,
                                      plugins: [
                                        'advlist autolink lists link image charmap print preview anchor',
                                        'searchreplace visualblocks code fullscreen',
                                        'insertdatetime media table contextmenu paste code'
                                      ],
                                      toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                                      content_css: [
                                        '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                                        '//www.tinymce.com/css/codepen.min.css'
                                      ]
                                    });
                                </script>
                                <textarea class="textarea" name=contenido rows=4></textarea>
                                <br>
                                <button type="submit" class="btn btn-primary btn-sm">Publish</button>
                                <br>
                            </form>
                            
                        </div>
                    </section>
                </main>
            </div>
            <?php
            break;
        default:
            ?>
            <div class="admin">
                <main>
                    <section>
                        <h1>Post does not exist...</h1>
                    </section>
                </main>
            </div>
            <?php
            break;
    }
}else{
    
}

require ("static/php/footer.php");


