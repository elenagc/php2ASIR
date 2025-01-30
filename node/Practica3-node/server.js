//Importa el módulo http, de esta forma permite crear un servidor web y //atender solicitudes http
const http = require("http");
//El módulo fs se usa para interactuar con el sistema de archivos del //servidor
const fs = require("fs");
//El módulo path ayuda a trabajar con ruts de archivos y directorios
const path = require("path");

// Crea el servidor y si la url termina en / muestra el index.html
const server = http.createServer((request, response) => {
    const url = request.url; //obtenemos la ruta del archivo solicitado
    
    let filePath = request.url === "/" ? "index.html" : request.url;
    filePath = path.join(__dirname, filePath);

    fs.readFile(filePath, (err, data) => {
        if (err) {
            response.writeHead(404, { "Content-Type": "text/plain" });
            response.end("404 - Archivo no encontrado");
        } else {
            response.writeHead(200, { "Content-Type": "text/html" });
            response.end(data);
        }
    });
    
    
});

server.listen(8888, () => {
    console.log("Servidor corriendo en http://localhost:8888");
});

