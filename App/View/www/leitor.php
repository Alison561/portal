<?php

foreach ($this->getNoticiasId() as $key => $value) {?>

    <img src="<?php echo url; ?>public/uploads/<?php echo $value['img']; ?>">

    <h1><?php echo $value['titulo']; ?></h1>
    <h2><?php echo $value['subtitulo']; ?></h2>
    <?php echo $value['texto']; ?>

<?php } ?>