var title = document.getElementById("titulo");
var sub = document.getElementById("subtitulo");
var txt = document.getElementById("texto");
var form = document.getElementById("form");
var file = document.getElementById("file");
var img = document.getElementById("img");

file.addEventListener("change", ()=>{
    file = file.files[0]
    let reader = new FileReader()
    reader.addEventListener("load", (e)=>{
        img.src = e.target.result
        img.style.display = "inline-block";
    })
    reader.readAsDataURL(file)
})
form.addEventListener("submit", function(e){
    
    if (title.value == '' || title.value == null) {
        e.preventDefault()
        let html = document.createElement("div");
        let tex = document.createElement("p");
        tex.innerText="o titulo não pode ficar vazio";
        html.appendChild(tex);
        form.insertBefore(html, img);
    }
    if (sub.value == '' || sub.value == null) {
        console.log("subtitulo");
        e.preventDefault()
    }
    if (txt.value == '' || txt.value == null) {
        console.log("texto");
        e.preventDefault()
    }
    if (file.files[0] == undefined) {
        console.log("adicione a imagem");
        e.preventDefault()
    }
})