<?php    

    $tableau = array("Salut","Hello", "World");
    $tableau = json_encode($tableau);

    echo $tableau;
?>

<script>

    let tab = '<?= $tableau ?>';
    tab  = JSON.parse(tab);
    console.log(tab);

</script>