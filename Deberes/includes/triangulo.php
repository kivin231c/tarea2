<?php







class Triangulo{
    
    private $base;
    private $altura;
    
    
    function Triangulo(){
        $this->base1 = 0;
        $this->altura = 0;
      
        
    }
    public Function get_form_transporte_area(){
       $html = ' 
           
            <form action="" method="POST" name="transporte" aling= "center">
               <table aling="center" border="1">
                    <tr>
                       <td colspan="2">AREA-TRIANGULO</td>
                   </tr>
                   <tr>
                       <td>base</td>
                       <td><input type="text"  name="base1" size"4"></td>
                   </tr>
                   <tr>
                       <td>altura</td>
                       <td><input type="text"  name="altura" size"4"></td>
                   </tr>
                   <tr  aling="center">
                       <td aling="center" colspan="2"><center><input type="submit"  name="guardar" value="Guardar"></center></td>
                   </tr>
               </table>
             
            </form>
           ';

        return $html;
    }

    public function get_form_transporte_perimetro() {
        $html = '
             <form action="" method="POST" name="transporte" aling= "center">
                 <table aling="center " border="1">
                    <tr>
                       <td colspan="2">PERIMETRO-TRIANGULO</td>
                   </tr>
                   <tr>
                       <td>lado 1</td>
                       <td><input type="text"  name="lado1" size"4"></td>
                   </tr>
                   <tr>
                       <td>lado 2</td>
                       <td><input type="text"  name="lado2" size"4"></td>
                   </tr>
                   <tr>
                       <td>lado 3</td>
                       <td><input type="text"  name="lado3" size"4"></td>
                   </tr>
                   
                   <tr  aling="center">
                       <td aling="center" colspan="2"><center><input type="submit"  name="guardarP" value="Guardar"></center></td>
                   </tr>
               </table>
             
            </form>
           ';
        return $html;
    }
    //Funcion para calcular el area
    public function area($base1, $altura) {
        $area = ($base1 * $altura) / 2;
        return $area;
    }

    //Function para calcular el perimetro del triangulo 
    public function perimetro($lado1, $lado2, $lado3) {
        $perimetro = ($lado1 + $lado2 + $lado3);
        return $perimetro;
    }
    
        
            
        
}




    

?>

