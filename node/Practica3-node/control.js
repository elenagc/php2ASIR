document.getElementById("fetchData").addEventListener("click", function() {
    //La función fetch hace una solicitud HTTP
    fetch("http://localhost:8888")
        .then(function(response) {
            return response.text(); // Convertir la respuesta a texto
        })
        .then(function(data) {
            //Voy a copiar en el parrafo con id response lo que me 
            //contesta el servidor node 
            document.getElementById("response").innerText = data;
        })
        .catch(function(error) {
            console.error("Error:", error);
        });
});
