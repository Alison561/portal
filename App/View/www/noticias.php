<h1>noticias</h1>
<form id="form" method="post" enctype="multipart/form-data">
    <img  id="img">
    <input type="file" name="file" id="file">
    <input type="text" name="titulo" id="titulo">
    <input type="text" name="subtitulo" id="subtitulo">
    <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
    <input type="submit" name="enviar" value="Enviar">
</form>
<script src="<?php echo url; ?>public/js/noticias.js"></script>
<script src="https://cdn.tiny.cloud/1/74czl6vhyu8fuum9mmvwtbjyu6rnmbx75blg4ywfqdx7ylah/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
</script>