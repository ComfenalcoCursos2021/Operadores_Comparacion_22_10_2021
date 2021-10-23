addEventListener("DOMContentLoaded", ()=>{
    let formulario = document.querySelector("#myFormulario");
    formulario.addEventListener("submit", (e)=>{
        let input = Array.from(formulario);
        input.pop();
        let data = {};
        for(let [id, valor] of Object.entries(input)){
            data[`${valor.id}`] = valor.value;
        }
        let peticion = async()=>{
            let ruta = await fetch('https://pruebacofenalco.000webhostapp.com/Operadores_Comparacion_22_10_2021/api.php', {method: 'POST', body: JSON.stringify(data)});
            let json = await ruta.text();
            alert(json);
        }
        peticion();

        e.preventDefault();
    })
})