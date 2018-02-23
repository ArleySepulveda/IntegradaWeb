/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package OpCli;

import javax.jws.WebService;

/**
 *
 * @author Ing. Sepulveda
 */
@WebService(serviceName = "Operacion", portName = "OperacionPort", endpointInterface = "opser.Operacion", targetNamespace = "http://OpSer/", wsdlLocation = "WEB-INF/wsdl/Cliente/Operacion1.wsdl.xml.wsdl")
public class Cliente {

    public java.lang.String ope(java.lang.Double resultado) {
       resultado = resultado*0.19;
        return "El Iva es de: " + resultado; 
    }
    
}
