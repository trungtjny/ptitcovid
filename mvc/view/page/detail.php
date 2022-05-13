 
<main>
    <?php
     $i= json_decode($data["postItem"]);  
     
    ?>
        <div class="container mt-3">
                <hr>
            <h4 class="title mt-3">
                <?php echo $i->title ?>
            </h4>
            <p class="text-top mt-3"><?php echo $i->text_top ?></p>
            <div  class="" >
            <img class=" img-fluid rounded mx-auto d-block my-3  "  src="./public/upload/<?php echo $i->thumbnail?>" alt=""></div>
            <p>
            <?php echo $i->text_bot ?>
            </p>
            <hr>
        </div>

    </main>