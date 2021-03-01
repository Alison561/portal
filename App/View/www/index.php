<?php

foreach ($this->getNoticias() as $key => $value) {?>
<a href="<?php echo url; ?><?php echo $value['id']; ?>">
    <div>
        <div>
            <img src="<?php echo url; ?>public/uploads/<?php echo $value['img']; ?>">
        </div>
        <div>
            <h3><?php echo $value['titulo']; ?></h3>
            <h4><?php echo $value['subtitulo']; ?></h4>
            <p><?php $txt = strip_tags($value['texto']); echo mb_strimwidth($txt, 0, 300, "..."); ?></p>
        </div>
    </div>
</a>
<?php } ?>