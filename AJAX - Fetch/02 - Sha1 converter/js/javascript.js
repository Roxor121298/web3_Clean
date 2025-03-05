console.log("ici!! ")

window.addEventListener("load", () => {
    // addEventListener("keyup")
    let field = document.querySelector("input");
    field.onkeyup = () => {
        let form = new FormData();
        form.append("mot", field.value);

        fetch("ajax-sha1.php", {
            method: 'POST',
            body: form,
        })
        .then(nn => nn.json())
        .then(data => {
            // Créer un div
            let newNode = document.createElement("div");
            // mettre data dedans
            newNode.append(data);
            // ajouter à #result
            let parentNode = document.querySelector("#result");
            parentNode.innerHTML = "";
            
            newNode.innerText = data;
            newNode.addEventListener("mouseover" , () => {
                newNode.remove();
            });
            parentNode.append(newNode);
        });
    }    
})

