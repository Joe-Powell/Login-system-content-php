<?php

require "header.php";

?>



<main>

    <div class"wrapper-main">

        <section class="section-default">

        <?php  

          if(isset($_SESSION['username'])) {

            echo '<p class ="login-status">You are logged in'. ' ' . $_SESSION['username'] . '</p>';
         

            }else{

            echo '<p class="login-status">You are logged out!</p>';

          }

        

        ?>

        </section>

    </div>    

</main>


<?php

require "footer.php";

?>
