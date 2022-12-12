    
    /*=============================================
    =    VALIDAION QUE SOLO PERMITA UN ESPACIO          =
    =============================================*/
    
    
    function validate(s){
        if (/^(\w+\s?)*\s*$/.test(s)){
          return s.replace(/\s+$/,  '');
        }
        return 'NOT ALLOWED';
        }
        
        validate('test ing')      //'test ing'
        validate('testing')       //'testing'
        validate(' testing')      //'NOT ALLOWED'
        validate('testing ')      //'testing'
        validate('testing  ')     //'testing'
        validate('testing   ')    //'test ing'
        
        
        /*=============================================
         VALIDACION QUE SOLO PERMITA LETRAS Y NUMEROS             
        =============================================*/
        
        function letrasynumeros(e){
            
            key=e.keyCode || e.wich;
        
            teclado= String.fromCharCode(key).toUpperCase();
        
            letras= "ABCDEFGHIJKLMNOPQRSTUVWXYZÑ1234567890";
            
            especiales ="8-37-38-46-164";
        
            teclado_especial=false;
        
            for (var i in especiales) {
              
              if(key==especiales[i]){
                teclado_especial= true;break;
              }
            }
        
            if (letras.indexOf(teclado)==-1 && !teclado_especial) {
              return false;
            }
        
        }
        
        /*=====  End of Section comment block  ======*/
        
        
        /*==============================================
        =     VALIDACION SOLO LETRAS            =
        ==============================================*/
        function sololetras(e){
            
            key=e.keyCode || e.wich;
        
            teclado= String.fromCharCode(key).toUpperCase();
        
            letras= " ABCDEFGHIJKLMNOPQRSTUVWXYZÑ";
            
            especiales ="8-37-38-46-164";
        
            teclado_especial=false;
        
            for (var i in especiales) {
              
              if(key==especiales[i]){
                teclado_especial= true;break;
              }
            }
        
            if (letras.indexOf(teclado)==-1 && !teclado_especial) {
              return false;
            }
        
        }
        
        /*==============================================
        =        VALIDACION SOLO NUMEROS           =
        ==============================================*/
        function solonumeros(e){
            
            key=e.keyCode || e.wich;
        
            teclado= String.fromCharCode(key).toUpperCase();
        
            letras= "1234567890";
            
            especiales ="8-37-38-46-164";
        
            teclado_especial=false;
        
            for (var i in especiales) {
              
              if(key==especiales[i]){
                teclado_especial= true;break;
              }
            }
        
            if (letras.indexOf(teclado)==-1 && !teclado_especial) {
              return false;
            }
        
        }
        
    
        //no permite dobre espacio
        function DobleEspacio(campo, event) {
    
          CadenaaReemplazar = "  ";
          CadenaReemplazo = " ";
          CadenaTexto = campo.value;
          CadenaTextoNueva = CadenaTexto.split(CadenaaReemplazar).join(CadenaReemplazo);
          campo.value = CadenaTextoNueva;
        
        }

        /***************************************
 *  FUNCION PARA RESTRINGIR EL ESPACIO *
 ***************************************/
function Espacio(campo, event) {
    CadenaaReemplazar = " ";
    CadenaReemplazo = "";
    CadenaTexto = campo.value;
    CadenaTextoNueva = CadenaTexto.split(CadenaaReemplazar).join(CadenaReemplazo);
    campo.value = CadenaTextoNueva;
  }


  //Cliente

  const validarFormulario = (e) => {
	switch (e.target.name) {
		case "DNI_PERSONA":
			validarCampo(expresiones.DNI_PERSONA, e.target, 'DNI_PERSONA');
		break;
		case "PRIMER_NOMBRE":
			validarCampo(expresiones.PRIMER_NOMBRE, e.target, 'PRIMER_NOMBRE');
		break;
		case "SEGUNDO_NOMBRE":
			validarCampo(expresiones.SEGUNDO_NOMBRE, e.target, 'SEGUNDO_NOMBRE');
		break;
		case "APELLIDO":
			validarCampo(expresiones.APELLIDO, e.target, 'APELLIDO');
		break;
		case "SEXO":
			validarCampo(expresiones.SEXO, e.target, 'SEXO');
		break;
		case "ESTADO_CIVIL":
			validarCampo(expresiones.ESTADO_CIVIL, e.target, 'ESTADO_CIVIL');
		break;
		case "AGE":
			validarCampo(expresiones.AGE, e.target, 'AGE');
		break;
		case "USUARIO_ADD":
			validarCampo(expresiones.USUARIO_ADD, e.target, 'USUARIO_ADD');
		break;
		case "FECHA_ADD":
			validarCampo(expresiones.FECHA_ADD, e.target, 'FECHA_ADD');
		break;
	
	}
}


