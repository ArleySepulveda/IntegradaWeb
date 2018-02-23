/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package OpSer;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *
 * @author Ing. Sepulveda
 */
@WebService(serviceName = "Operacion")
public class Operacion {

    
    @WebMethod(operationName = "Ope")
    public String Ope(@WebParam(name = "Resultado") Double Resultado) {
        Resultado = Resultado*0.19;
        return "Bienvenido su Iva es de : "+Resultado;
    }

   
    
}
