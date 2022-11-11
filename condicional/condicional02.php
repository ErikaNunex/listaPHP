<label for="">Genero</label>
<select name="" id="">
    <?php
    $generos = [
        'mulher',
        'homem',
    ];
    for($genero = 0; $genero <= 1; $genero++)
        echo "<option>{$generos[$genero]}</option>";
    ?>
</select>
<?php
if($genero == 'mulher'){
    echo "<label>A quanto tempo você está casada?</label>";
}else{
    echo "ok";
}
