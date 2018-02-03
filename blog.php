<?php
require("static/php/header.php");

$id_topico = $_GET['id_topico'];
?>

<main>

                <!------------header blog---->
                <?php
                require("static/php/header_blog.php");
                ?>

    
    <section>
        <div class="container articles">
            <div class="row">

                <!--************************ articles-->
                <?php
                require("static/php/articles.php");
                ?>




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
