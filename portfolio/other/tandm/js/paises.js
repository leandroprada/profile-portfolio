function recorrerPaises() {
var listaPaises = [{"name":"Afganistán "},	{"name":"Albania "},	{"name":"Alemania "},	{"name":"Andorra"},	{"name":"Angola"},	{"name":"Antigua y Barbuda "},	{"name":"Arabia Saudí "},	{"name":"Argelia "},	{"name":"Argentina"},	{"name":"Armenia "},	{"name":"Aruba"},	{"name":"Australia"},	{"name":"Austria "},	{"name":"Azerbaiyán "},	{"name":"Bahamas"},	{"name":"Bahrein "},	{"name":"Bangladesh"},	{"name":"Barbados"},	{"name":"Bélgica "},	{"name":"Belice "},	{"name":"Benín "},	{"name":"Bermudas "},	{"name":"Bielorrusia "},	{"name":"Bolivia"},	{"name":"Bosnia y Herzegovina "},	{"name":"Botswana"},	{"name":"Brasil"},	{"name":"Brunei "},	{"name":"Bulgaria "},	{"name":"Burkina Faso"},	{"name":"Burundi"},	{"name":"Bután "},	{"name":"Cabo Verde"},	{"name":"Camboya "},	{"name":"Camerún "},	{"name":"Canadá "},	{"name":"Catar "},	{"name":"Chad "},	{"name":"Chile"},	{"name":"China "},	{"name":"Chipre "},	{"name":"Colombia"},	{"name":"Comoras "},	{"name":"Congo "},	{"name":"Congo (Dem. Rep.)"},	{"name":"Corea del Norte "},	{"name":"Corea del Sur "},	{"name":"Costa de Marfil "},	{"name":"Costa Rica"},	{"name":"Croacia "},	{"name":"Cuba"},	{"name":"Dinamarca "},	{"name":"Dominica"},	{"name":"Ecuador"},	{"name":"Egipto "},	{"name":"El Salvador"},	{"name":"Emiratos Árabes Unidos "},	{"name":"Eritrea "},	{"name":"Eslovaquia "},	{"name":"Eslovenia "},	{"name":"España"},	{"name":"Estados Unidos "},	{"name":"Estonia "},	{"name":"Etiopía "},	{"name":"Filipinas "},	{"name":"Finlandia "},	{"name":"Fiyi "},	{"name":"Francia "},	{"name":"Gabón "},	{"name":"Gambia"},	{"name":"Georgia "},	{"name":"Ghana"},	{"name":"Grecia "},	{"name":"Guatemala"},	{"name":"Guayana Francesa "},	{"name":"Guinea "},	{"name":"Guinea Ecuatorial"},	{"name":"Guinea-Bisáu "},	{"name":"Guyana"},	{"name":"Haiti "},	{"name":"Honduras"},	{"name":"Hong Kong "},	{"name":"Hungría "},	{"name":"India "},	{"name":"Indonesia"},	{"name":"Irak "},	{"name":"Iran "},	{"name":"Irlanda "},	{"name":"Islandia "},	{"name":"Israel "},	{"name":"Italia"},	{"name":"Jamaica"},	{"name":"Japón "},	{"name":"Jordania "},	{"name":"Kazajistán "},	{"name":"Kenia "},	{"name":"Kirguizistán "},	{"name":"Kiribati"},	{"name":"Kosovo "},	{"name":"Kuwait "},	{"name":"Laos "},	{"name":"Lesotho"},	{"name":"Letonia "},	{"name":"Líbano "},	{"name":"Liberia"},	{"name":"Libia "},	{"name":"Liechtenstein"},	{"name":"Lituania "},	{"name":"Luxemburgo "},	{"name":"Macao "},	{"name":"Macedonia "},	{"name":"Madagascar "},	{"name":"Malasia "},	{"name":"Malawi"},	{"name":"Maldivas "},	{"name":"Mali"},	{"name":"Malta"},	{"name":"Marruecos "},	{"name":"Mauricio "},	{"name":"Mauritania "},	{"name":"México"},	{"name":"Micronesia"},	{"name":"Moldavia "},	{"name":"Mónaco "},	{"name":"Mongolia "},	{"name":"Montenegro "},	{"name":"Montserrat"},	{"name":"Mozambique "},	{"name":"Myanmar "},	{"name":"Namibia"},	{"name":"Nauru"},	{"name":"Nepal "},	{"name":"Nicaragua"},	{"name":"Níger "},	{"name":"Nigeria"},	{"name":"Noruega "},	{"name":"Nueva Zelanda "},	{"name":"null "},	{"name":"Omán "},	{"name":"Países Bajos "},	{"name":"Pakistán "},	{"name":"Palau"},	{"name":"Palestina "},	{"name":"Panamá"},	{"name":"Papúa Nueva Guinea "},	{"name":"Paraguay"},	{"name":"Perú"},	{"name":"Polonia "},	{"name":"Portugal"},	{"name":"Puerto Rico"},	{"name":"Reino Unido "},	{"name":"República Centroafricana "},	{"name":"República Checa "},	{"name":"República de Sudáfrica "},	{"name":"República Dominicana"},	{"name":"Ruanda "},	{"name":"Rumania "},	{"name":"Rusia "},	{"name":"Samoa"},	{"name":"San Marino"},	{"name":"Santa Sede "},	{"name":"Santo Tomé y Príncipe "},	{"name":"Senegal "},	{"name":"Serbia "},	{"name":"Seychelles"},	{"name":"Sierra Leone"},	{"name":"Singapur "},	{"name":"Siria "},	{"name":"Somalia "},	{"name":"Sri Lanka "},	{"name":"Sudán "},	{"name":"Sudán del Sur "},	{"name":"Suecia "},	{"name":"Suiza "},	{"name":"Surinam "},	{"name":"Tailandia "},	{"name":"Taiwán "},	{"name":"Tanzania"},	{"name":"Tayikistán "},	{"name":"Timor Oriental "},	{"name":"Togo"},	{"name":"Tonga"},	{"name":"Trinidad y Tobago "},	{"name":"Túnez "},	{"name":"Turkmenistán "},	{"name":"Turquía "},	{"name":"Tuvalu"},	{"name":"Ucrania "},	{"name":"Uganda"},	{"name":"Uruguay"},	{"name":"Uzbekistán "},	{"name":"Vanuatu"},	{"name":"Venezuela"},	{"name":"Vietnam "},	{"name":"Yemen "},	{"name":"Yibuti "},	{"name":"Zambia"},	{"name":"Zimbabue "},	{"name":"Seychelles"},	{"name":"Sierra Leone"},	{"name":"Singapur "},	{"name":"null "},	{"name":"República Eslovaca "},	{"name":"Eslovenia "},	{"name":"Islas Salomón "},	{"name":"Somalia "},	{"name":"República de Sudáfrica "},	{"name":"Islas Georgias del Sur y Sandwich del Sur "},	{"name":"Corea del Sur "},	{"name":"Sudán del Sur "},	{"name":"España"},	{"name":"Sri Lanka "},	{"name":"Sudán "},	{"name":"Surinam "},	{"name":"Islas Svalbard y Jan Mayen "},	{"name":"Suazilandia "},	{"name":"Suecia "},	{"name":"Suiza "},	{"name":"Siria "},	{"name":"Taiwán "},	{"name":"Tayikistán "},	{"name":"Tanzania"},	{"name":"Tailandia "},	{"name":"Timor Oriental "},	{"name":"Togo"},	{"name":"Islas Tokelau "},	{"name":"Tonga"},	{"name":"Trinidad y Tobago "},	{"name":"Túnez "},	{"name":"Turquía "},	{"name":"Turkmenistán "},	{"name":"Islas Turks y Caicos "},	{"name":"Tuvalu"},	{"name":"Uganda"},	{"name":"Ucrania "},	{"name":"Emiratos Árabes Unidos "},	{"name":"Reino Unido "},	{"name":"Estados Unidos "},	{"name":"Uruguay"},	{"name":"Uzbekistán "},	{"name":"Vanuatu"},	{"name":"Venezuela"},	{"name":"Vietnam "},	{"name":"Wallis y Futuna "},	{"name":"Sahara Occidental "},	{"name":"Yemen "},	{"name":"Zambia"},	{"name":"Zimbabue "}]
;

var miSelectPaises = document.querySelector("#paises");

for (var pais in listaPaises) {
  idPais = listaPaises[pais]["name"];

  var opcionNueva = '<option value="' + idPais + '">' + idPais + "</option>";




				miSelectPaises.innerHTML = miSelectPaises.innerHTML + opcionNueva;
			}
    }
    function recorrerIdiomas1() {
          var listaIdiomas = [	  {"idioma":"Afrikaans"},	  {"idioma":"Albano"},	  {"idioma":"Alemán"},	  {"idioma":"Árabe"},	  {"idioma":"Azerbaijani"},	  {"idioma":"Azteca"},	  {"idioma":"Bielorruso"},	  {"idioma":"Bosnio"},	  {"idioma":"Bretón"},	  {"idioma":"Búlgaro"},	  {"idioma":"Catalan"},	  {"idioma":"Checheno"},	  {"idioma":"Checo"},	  {"idioma":"Chino"},	  {"idioma":"Croata"},	  {"idioma":"Danés"},	  {"idioma":"Eslovaco"},	  {"idioma":"Esloveno"},	  {"idioma":"Español"},	  {"idioma":"Esperanto"},	  {"idioma":"Estonio"},	  {"idioma":"Farsi"},	  {"idioma":"Finlandés"},	  {"idioma":"Flamenco"},	  {"idioma":"Francés"},	  {"idioma":"Friulano"},	  {"idioma":"Gaélico"},	  {"idioma":"Gales"},	  {"idioma":"Gallego"},	  {"idioma":"Georgian"},	  {"idioma":"Griego"},	  {"idioma":"Guaraní"},	  {"idioma":"Gujarati"},	  {"idioma":"Hebreo"},	  {"idioma":"Hindi"},	  {"idioma":"Holandés"},	  {"idioma":"Húngaro"},	  {"idioma":"Icelandés"},	  {"idioma":"Idiomas Mayas"},	  {"idioma":"Indonesio"},	  {"idioma":"Inglés"},	  {"idioma":"Irish"},	  {"idioma":"Italiano"},	  {"idioma":"Japonés"},	  {"idioma":"Coreano"},	  {"idioma":"Kurdo"},	  {"idioma":"Latin"},	  {"idioma":"Letón"},	  {"idioma":"Lituano"},	  {"idioma":"Macedonio"},	  {"idioma":"Malayalam"},	  {"idioma":"Malayo"},	  {"idioma":"Maltes"},	  {"idioma":"Maorí"},	  {"idioma":"Maratí"},	  {"idioma":"Masai"},	  {"idioma":"Mongoli"},	  {"idioma":"Nahuatl"},	  {"idioma":"Nepalés"},	  {"idioma":"Noruego"},	  {"idioma":"Persa"},	  {"idioma":"Polaco"},	  {"idioma":"Portugués"},	  {"idioma":"Punjabi"},	  {"idioma":"Rumano"},	  {"idioma":"Ruso"},	  {"idioma":"Serbio"},	  {"idioma":"Sueco"},	  {"idioma":"Tagalog"},	  {"idioma":"Tailandés"},	  {"idioma":"Tamil"},	  {"idioma":"Telugu"},	  {"idioma":"Turco"},	  {"idioma":"Ucraniano"},	  {"idioma":"Urdu"},	  {"idioma":"Vasco"},	  {"idioma":"Vietnamita"},	  {"idioma":"Yiddish"},	  {"idioma":"Zulu"}];



          var miSelectIdiomas1 = document.querySelector("#idiomas1");
          for (var idioma in listaIdiomas) {
            idIdioma = listaIdiomas[idioma]["idioma"];

            var opcionNueva = '<option value="' +idIdioma+ '">' + idIdioma + "</option>";


                  miSelectIdiomas1.innerHTML = miSelectIdiomas1.innerHTML + opcionNueva;
                      }



                                  }
    function recorrerIdiomas2() {
          var listaIdiomas = [	  {"idioma":"Afrikaans"},	  {"idioma":"Albano"},	  {"idioma":"Alemán"},	  {"idioma":"Árabe"},	  {"idioma":"Azerbaijani"},	  {"idioma":"Azteca"},	  {"idioma":"Bielorruso"},	  {"idioma":"Bosnio"},	  {"idioma":"Bretón"},	  {"idioma":"Búlgaro"},	  {"idioma":"Catalan"},	  {"idioma":"Checheno"},	  {"idioma":"Checo"},	  {"idioma":"Chino"},	  {"idioma":"Croata"},	  {"idioma":"Danés"},	  {"idioma":"Eslovaco"},	  {"idioma":"Esloveno"},	  {"idioma":"Español"},	  {"idioma":"Esperanto"},	  {"idioma":"Estonio"},	  {"idioma":"Farsi"},	  {"idioma":"Finlandés"},	  {"idioma":"Flamenco"},	  {"idioma":"Francés"},	  {"idioma":"Friulano"},	  {"idioma":"Gaélico"},	  {"idioma":"Gales"},	  {"idioma":"Gallego"},	  {"idioma":"Georgian"},	  {"idioma":"Griego"},	  {"idioma":"Guaraní"},	  {"idioma":"Gujarati"},	  {"idioma":"Hebreo"},	  {"idioma":"Hindi"},	  {"idioma":"Holandés"},	  {"idioma":"Húngaro"},	  {"idioma":"Icelandés"},	  {"idioma":"Idiomas Mayas"},	  {"idioma":"Indonesio"},	  {"idioma":"Inglés"},	  {"idioma":"Irish"},	  {"idioma":"Italiano"},	  {"idioma":"Japonés"},	  {"idioma":"Coreano"},	  {"idioma":"Kurdo"},	  {"idioma":"Latin"},	  {"idioma":"Letón"},	  {"idioma":"Lituano"},	  {"idioma":"Macedonio"},	  {"idioma":"Malayalam"},	  {"idioma":"Malayo"},	  {"idioma":"Maltes"},	  {"idioma":"Maorí"},	  {"idioma":"Maratí"},	  {"idioma":"Masai"},	  {"idioma":"Mongoli"},	  {"idioma":"Nahuatl"},	  {"idioma":"Nepalés"},	  {"idioma":"Noruego"},	  {"idioma":"Persa"},	  {"idioma":"Polaco"},	  {"idioma":"Portugués"},	  {"idioma":"Punjabi"},	  {"idioma":"Rumano"},	  {"idioma":"Ruso"},	  {"idioma":"Serbio"},	  {"idioma":"Sueco"},	  {"idioma":"Tagalog"},	  {"idioma":"Tailandés"},	  {"idioma":"Tamil"},	  {"idioma":"Telugu"},	  {"idioma":"Turco"},	  {"idioma":"Ucraniano"},	  {"idioma":"Urdu"},	  {"idioma":"Vasco"},	  {"idioma":"Vietnamita"},	  {"idioma":"Yiddish"},	  {"idioma":"Zulu"}];



            var miSelectIdiomas2 = document.querySelector("#idiomas2");
          for (var idioma in listaIdiomas) {
            idIdioma = listaIdiomas[idioma]["idioma"];

            var opcionNueva = '<option value="' +idIdioma+ '">' + idIdioma + "</option>";


                  miSelectIdiomas2.innerHTML = miSelectIdiomas2.innerHTML + opcionNueva;
                      }



                                  }






window.addEventListener("load",recorrerPaises);
window.addEventListener("load",recorrerIdiomas);
