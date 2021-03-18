function leeCumpleanios() {
	
	fetch('AnunciosPBMC/controller/cumpleanios2.txt')
  		.then(function(response) {
		      if (response.status !== 200) {
		        console.log('Looks like there was a problem. Status Code: ' +
		          response.status);
		        return;
		      }
		      
		      // Examine the text in the response
		      response.text().then(
		      	function(data) {
		      		data.split('\n');
		        	console.log(data);
		        	//console.log(data.length);
		        	//console.log(data.split('\n'));
		        	cumpleanios = data.split('\n');
		        	//console.log(cumpleanios);
		        	//console.log(texto_separado[1]);
		        	//console.log(texto_separado.length);
		        	/*linea = texto_separado[5];
		        	longitud = linea.length;
		        	
		        	console.log("linea: " + linea );
		        	console.log("longitud de linea " + longitud);
		        	mes = linea.slice(0,2);
		        	numero_mes = parseInt(mes);
		        	if(numero_mes >= 9){
		        		posicion_inicio_nombre = 3;
		        		longitud_nombre = longitud - 3;
		        	}
		        	else
		        	{
		        		posicion_inicio_nombre = 2;
		        		longitud_nombre = longitud - 2;
		        	}
		        	nombre = linea.slice(posicion_inicio_nombre, longitud - 2);
		        	console.log(Number(mes));
		        	console.log(nombre);*/

		      });
		    }
		  )
		  .catch(function(err) {
		    console.log('Fetch Error :-S', err);
		  });

		  return cumpleanios;

}

leeCumpleanios();