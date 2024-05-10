function numAsis() {
    var option = document.getElementById('asistentes').value;
    var capa = document.getElementById('vacio');
    capa.innerHTML = ``;
    for (let index = 1; index <= option; index++) {
        capa.innerHTML += `
    <div class="row" id="asis${index}">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-right p-0 pr-2">
            Nombre y Apellidos
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-left p-0 pb-4 pr-2">
            <input class="nameInput" type="text" name="nombre${index}">
        </div>


        <div class="col-9 col-sm-6 col-md-6 col-lg-6 text-right">
            ¿Es alérgico a algún alimento?
        </div>
        <div class="col-3 col-sm-6 col-md-6 col-lg-6 text-left p-0 pb-4">
               <select id="tiene${index}" name="tiene${index}" onchange="changeValue()">
                    <option value="no">No</option>
                    <option value="si">Sí</option>
               </select>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

            <div class="row invisible" id="inputAlergia${index}">
                <div class="col-4 col-sm-6 col-md-6 col-lg-6 text-right">
                    ¿A cuál?
                </div>
                <div class="col-8 col-sm-6 col-md-6 col-lg-6 text-left pb-4">
                    <input class="nameInput" type="text" name="alergia${index}">
                </div>
            </div>
        </div>
    </div>
`;
    }
}