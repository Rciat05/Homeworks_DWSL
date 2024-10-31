document.getElementById('validationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let summary = "<h3>Resumen de los datos ingresados:</h3>";
    
    const nombreInput = document.getElementById('nombre');
    const nombrePattern = /^[MOPS]/i;
    if (nombrePattern.test(nombreInput.value)) {
        nombreInput.classList.add("css_ok_input");
        summary += `<p><strong>Nombre:</strong> ${nombreInput.value}</p>`;
    } else {
        nombreInput.setCustomValidity("El nombre debe iniciar con M, O, P o S.");
        nombreInput.classList.add("css_error_input");
        return;
    }

    const direccionInput = document.getElementById('direccion');
    const direccionPattern = /^(casa|apartamento)/i;
    if (direccionPattern.test(direccionInput.value)) {
        direccionInput.classList.add("css_ok_input");
        summary += `<p><strong>Dirección:</strong> ${direccionInput.value}</p>`;
    } else {
        direccionInput.setCustomValidity("La dirección debe empezar con 'casa' o 'apartamento'.");
        direccionInput.classList.add("css_error_input");
        return;
    }


    const correoInput = document.getElementById('correo');
    const correoPattern = /@gmail\.com$/;
    if (correoPattern.test(correoInput.value)) {
        correoInput.classList.add("css_ok_input");
        summary += `<p><strong>Correo:</strong> ${correoInput.value}</p>`;
    } else {
        correoInput.setCustomValidity("El correo debe terminar en @gmail.com.");
        correoInput.classList.add("css_error_input");
        return;
    }

    const textoInput = document.getElementById('texto');
    const asWords = (textoInput.value.match(/\b\w*as\b/gi) || []).length;
    textoInput.classList.add("css_ok_input");
    summary += `<p><strong>Texto ingresado:</strong> ${textoInput.value} (Palabras que terminan en 'as': ${asWords})</p>`;

    const telefonoInput = document.getElementById('telefono');
    const telefonoPattern = /^[27]\d{7}$/;
    if (telefonoPattern.test(telefonoInput.value)) {
        const tipoTelefono = telefonoInput.value.startsWith('2') ? "Teléfono de casa" : "Teléfono celular";
        telefonoInput.classList.add("css_ok_input");
        summary += `<p><strong>Teléfono:</strong> ${telefonoInput.value} (${tipoTelefono})</p>`;
    } else {
        telefonoInput.setCustomValidity("Debe ingresar un número de teléfono válido (iniciando con 2 para casa o 7 para celular).");
        telefonoInput.classList.add("css_error_input");
        return;
    }

    const companiaInput = document.getElementById('compania');
    const companiaPattern = /^(79|72|77|75|71|73)\d{6}$/;
    let compania;
    if (companiaInput.value.startsWith("79") || companiaInput.value.startsWith("72")) {
        compania = "Tigo";
    } else if (companiaInput.value.startsWith("77") || companiaInput.value.startsWith("75")) {
        compania = "Movistar";
    } else if (companiaInput.value.startsWith("71") || companiaInput.value.startsWith("73")) {
        compania = "Digicel";
    } else {
        companiaInput.setCustomValidity("Ingrese un número válido (79 o 72 para Tigo, 77 o 75 para Movistar, 71 o 73 para Digicel).");
        companiaInput.classList.add("css_error_input");
        return;
    }
    companiaInput.classList.add("css_ok_input");
    summary += `<p><strong>Compañía de celular:</strong> ${companiaInput.value} (Compañía: ${compania})</p>`;

    const generoInput = document.getElementById('genero');
    const generoPattern = /^[12]$/;
    const genero = generoInput.value === "1" ? "Masculino" : "Femenino";
    if (generoPattern.test(generoInput.value)) {
        generoInput.classList.add("css_ok_input");
        summary += `<p><strong>Género:</strong> ${generoInput.value} (${genero})</p>`;
    } else {
        generoInput.setCustomValidity("Debe ingresar '1' para masculino o '2' para femenino.");
        generoInput.classList.add("css_error_input");
        return;
    }

    document.getElementById('summary').innerHTML = summary;
});
