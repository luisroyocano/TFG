<?php 
$numConsulta = $_POST['consulta'];
        $descripcion = $_POST['descripcion'];
        
        
require('fpdf/fpdf.php'); //Cargamos el archivo con la clase FPDF class PDF extends FPDF { // Cabecera de página function Header() { // Logo $this-&gt;Image('img/logo.png',10,8,33); //Imagen corporativa
       
       
                
  
                define("DB_HOST","localhost" );
                define("DB_USER", "root");
                define("DB_PASS", "");
                define("DB_DATABASE", "srcperformance" ); 
                
                
                $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
                
               
                $sql = "select cliente, referencia, precio from reg_presu Where numRegistro = '$numConsulta'";
              
                $resultado  = mysqli_query($con, $sql) or die ("no se ha podido realizar la consulta");
                $num_filas = $resultado -> num_rows;
                $respuesta = array();
                for ($i=0; $i<$num_filas; $i++){
                    
                    $r = $resultado -> fetch_array();
                    
                   $respuesta[0] = $r['cliente'];
                   $respuesta[1] =  $r['referencia'];
                   $respuesta[2] = $r['precio']; 
                   
                }
               // $precio = mysqli_query($con, $sql[2]) or die ("no se ha podido realizar la consulta");
               // $referencia = mysqli_query($con, $sql[1]) or die ("no se ha podido realizar la consulta");
             
        $pdf=new FPDF();
    
        $pdf->SetTitle('PRESUPUESTO');
        $pdf->AliasNbPages();
        $pdf->SetTopMargin(10);
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',10); //Establecemos tipo de fuente, negrita y tamaño 16
        //Agregamos texto en una celda de 40px ancho y 10px de alto, Con Borde, Sin salto de linea y Alineada a la derecha
            $pdf->Cell(37,8,'Num. Presupuesto:',1);
            $pdf->Cell(20,8,'P2020-0'.$numConsulta,1);
            $pdf->Ln();
            $pdf->Cell(37,8,'Fecha Presupuesto: ',1);
            $pdf->Cell(20,8,date('d-m-Y'),1);
            $pdf->Image('imagenes/srcp.png', 100, 5, 100, 28);
            $pdf->Ln(40);
        
            $pdf->SetFont('Arial','U',26);
            $pdf->Cell(62,10,'',0);
            $pdf->Cell(63,10,'PRESUPUESTO',0);
            $pdf->Cell(62,10,'',0);
            $pdf->Ln(35);
        
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(27,10,'Reg.',1);
            $pdf->Cell(55,10,'Cliente',1);
            $pdf->Cell(50,10,'Referencia',1);
            $pdf->Cell(55,10,'Precio sin IVA',1);
            $pdf->Ln(12);
            $pdf->SetFont('Arial', '',11);
            $pdf->Cell(27,8,$numConsulta,1);
            $pdf->Cell(55,8,$respuesta[0],1);
            $pdf->Cell(50,8,$respuesta[1],1);
            $pdf->Cell(55,8,$respuesta[2]*0.79,1);
            $pdf->Ln();
            $pdf->Cell(27,8,'',1);
            $pdf->Cell(55,8,'',1);
            $pdf->Cell(50,8,'',1);
            $pdf->Cell(55,8,'',1);
            $pdf->Ln();
            $pdf->Cell(27,8,'',1);
            $pdf->Cell(55,8,'',1);
            $pdf->Cell(50,8,'',1);
            $pdf->Cell(55,8,'',1);
            $pdf->Ln(35);
            $pdf->SetFont('Arial','B',11);
            $pdf->Cell(40,8,'Descripción:',0);
            $pdf->Ln();
            $pdf->SetFont('Arial', '',10);
            $pdf->MultiCell(187,4,$descripcion,1);
            $pdf->Ln(50);
            $pdf->SetFont('Arial','B',6);
            $pdf->Cell(60,10,'BASE: '.$respuesta[2]*0.79 ,1);
            $pdf->Cell(60,10,'IVA(21%): '.$respuesta[2]*.21 ,1);
            $pdf->Cell(60,10,'TOTAL: '.$respuesta[2],1);
            $pdf->Ln(15);
            $pdf->MultiCell(180, 4, 'No se proporciona ninguna garantía ni declaración en cuanto a la exactitud de esta información y se declina cualquier responsabilidad por errores tipográficos u otros errores u omisiones en el tipo de contenido. Al proporcionar esta información, además, no se concede ninguna licencia sobre ningún copyright, patente o cualquier otro derecho de propiedad intelectual. No puede modificar de ninguna manera los materiales de esta web, ni reproducir o mostrar públicamente, ni distribuir o utilizar de otro modo para fines públicos o comerciales. En caso de violación de estos Términos, la autorización de uso será necesaria, destruyendo con efecto inmediato eventuales materiales descargados o impresos.', 1);
            
         $pdf->Output(); //Mostramos el PDF creado
        ?>
