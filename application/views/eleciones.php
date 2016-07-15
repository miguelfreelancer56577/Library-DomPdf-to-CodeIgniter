<html>
    <head>
        <style type="text/css">
            body {
                background-color: #fff;
                /*margin: 20px;*/
                margin-top: 70px;
                margin-bottom: 20px;
                font-family: Lucida Grande, Verdana, Sans-serif;
                font-size: 14px;
                color: black;
            }
            table{
                font-size: 9pt;
            }
            table td{
                height: 35px;
                border: 1px solid black;
                height: 60px;
            }
            .t1, .t2, .t4, .t5, .t6, .t7{
                width: 80px;
            }
            .t3{
                width: 500px;
                text-align: left;
            }
            
            /* estilos para el footer y el numero de pagina */
            @page { 
                /*margin: 20px 10px;*/ 
                margin-top: 20px;
                margin-bottom: 0px;
                margin-left: 10px;
                margin-right: 10px;
            }
            #header { 
                position: fixed; 
                left: 0px; 
                top: 0px; 
                right: 0px; 
                height: 30px; 
                /*background-color: #009926;*/ 
                color: black;
                text-transform: uppercase;
            }
            #title{
                font-weight: bold;
                font-size: 16pt;
                text-align: center; 
            }
            #lugar{
                font-size: 13pt !important;
                text-align: left !important;
                padding-left: 40px;
            }
        </style>
    </head>
    <body>
        <!--set the footer with library-->
        
        <script type="text/php"> 

            if ( isset($pdf) ) { 

            $font = Font_Metrics::get_font("Arial", "bold"); 
            $pdf->page_text(350, 570, "Fuente IEDF. Hoja: {PAGE_NUM} de {PAGE_COUNT}", $font, 8, array(0,0,0)); 

            } 

        </script>
        
            <!--header-->
        <div id="header">
            <div id="title"><?php echo $title ?></div>
            <br />
            <div id="lugar"><strong>ZONA: </strong> <strong>DELEGACI&Oacute;N: </strong> <strong>UPC: </strong></div>
        </div>
        
            <table id="table" style="border-collapse: collapse; margin: 15px;" >
                <tr >
                    <td class="t1" style="font-weight: bold; height: 30px;">CUADRANTE</td>
                    <td class="t2" style="font-weight: bold; height: 30px;"># CASILLA</td>
                    <td class="t3" style="font-weight: bold; height: 30px; text-align: center;">DOMICILIO</td>
                    <td class="t4" style="font-weight: bold; height: 30px;">APERTURA</td>
                    <td class="t5" style="font-weight: bold; height: 30px;">CIERRE</td>
                    <td class="t6" style="font-weight: bold; height: 30px;">ENTREGA</td>
                    <td class="t7" style="font-weight: bold; height: 30px;">FOTO</td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK555.jpg" alt="Sin Imagen" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
                <tr>
                    <td class="t1">CUADRANTE</td>
                    <td class="t2"># CASILLA</td>
                    <td class="t3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique facilis quas ex sed. Corporis explicabo totam omnis soluta culpa ducimus, maiores esse aperiam, excepturi voluptatibus tenetur quibusdam asperiores aut vero?
                        <hr />
                        <strong>Coorporacion: </strong> 
                        <strong>Placa: </strong>
                        <strong>Nombre: </strong>
                        <strong>Telefono: </strong>
                        <hr />
                        <strong>Coorporacion: </strong>PBI
                        <strong>Placa: </strong>895687
                        <strong>Nombre: </strong>Carrasco mendez Solis
                        <strong>Telefono: </strong>5589563256
                    </td>
                    <td class="t4">APERTURA</td>
                    <td class="t5">CIERRE</td>
                    <td class="t6">ENTREGA</td>
                    <td class="t7" style="text-align: center">
                        <img src="http://10.13.77.87/eleccionesPrueba/img/PK.jpg" alt="img" style="width: 80px; height: 97px;" />
                    </td>
                </tr>
            </table>
            
            
            
</html>
