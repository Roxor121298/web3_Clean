<?php
    // Toujours dans cet ordre : require de l'action, execute() et après, le header
    // Car on pourrait rediriger dans le execute, donc aucun HTML à envoyer au navigateur
    require_once("action/indexAction.php");
    
    // execute = logique backend (web 3)
    // Ça retourne les variables, dans $data, qui permettent d'influencer/générer la vue (ex: nomUsager, )
    $data = execute();
    
    $pageTitle = "Accueil";
    require_once("partial/header.php");
?>
    <img src="img/theater.jpg" alt="Theater magic">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cupiditate nesciunt porro eligendi, fugiat tempore blanditiis excepturi. Qui rerum reprehenderit sequi deserunt, dolorum commodi reiciendis deleniti. Tempore officia reprehenderit fugit?
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cupiditate nesciunt porro eligendi, fugiat tempore blanditiis excepturi. Qui rerum reprehenderit sequi deserunt, dolorum commodi reiciendis deleniti. Tempore officia reprehenderit fugit?
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cupiditate nesciunt porro eligendi, fugiat tempore blanditiis excepturi. Qui rerum reprehenderit sequi deserunt, dolorum commodi reiciendis deleniti. Tempore officia reprehenderit fugit?
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cupiditate nesciunt porro eligendi, fugiat tempore blanditiis excepturi. Qui rerum reprehenderit sequi deserunt, dolorum commodi reiciendis deleniti. Tempore officia reprehenderit fugit?
    </p>
<?php
    require_once("partial/footer.php");