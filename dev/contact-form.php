<?php
    require 'libs/PHPMailerAutoload.php';
    $action=$_REQUEST['action'];
    if ($action==""){
?>
<!-- Campos del formulario editables -->
<form action="#Contact-section" method="POST" enctype="multipart/form-data" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
    <input type="hidden" name="action" value="submit">
    <input required type="text" name="nombre" value="" class="form-control Form_input animated fadeInUp" id="nombre" placeholder="Name">
    <input required type="email" name="email" value="" class="form-control Form_input animated fadeInUp" id="email" placeholder="Email">
<div class="Select_container animated fadeInUp">
    <select required id="servicio" class="form-control Form_input form-control-lg" name="servicio">
        <option selected="selected" disabled="disabled">Project</option>
        <option value="Branding" >Branding</option>
        <option value="Web Design" >Web Design</option>
        <option value="App Design" >App Design</option>
        <option value="Social Marketing" >Social Marketing</option>
    </select>
</div>
    <textarea required type="text" name="mensaje" rows="4" cols="50" class="form-control Form_area animated fadeInUp" id="mensaje" placeholder="Message"></textarea>
    <div class="Btn-container">
        <button id="submit" type="submit" class="Btn Btn-contact animated fadeInUp">
            CONTACT NOW
        </button>

      </div>
    
</form>
            <?php
    }
    
  
    else{
        
        // Variables donde se guardan los datos del formulario
        $nombre=$_REQUEST['nombre'];
        $email=$_REQUEST['email'];
        $servicio=$_REQUEST['servicio'];
        $mensaje=$_REQUEST['mensaje'];
           
        $mail = new PHPMailer;
        // Condicional de campos vacíos 
        if (($nombre=="")||($email=="")||($mensaje=="")){
        echo "Hay campos vacíos, por favor llenar los campos requeridos con * <a href=\"\">Volver</a>.";
      }
      else{ 
     
        
           
        
            //$mail->SMTPDebug = 4;                               // Habilitar el debug
            
            //$mail->isSMTP();                                      // Usar SMTP
            $mail->Host = 'mail.juancarmona.co';  //***EDITAR*** Especificar el servidor SMTP reemplazando por el nombre del servidor donde esta alojada su cuenta
            $mail->SMTPAuth = true;                               // Habilitar autenticacion SMTP
            $mail->Username = 'hello@juancarmona.co';             //***EDITAR*** Nombre de usuario SMTP donde debe ir la cuenta de correo a utilizar para el envio
            $mail->Password = 'Estudioamarillo904';              //***EDITAR*** Clave SMTP donde debe ir la clave de la cuenta de correo a utilizar para el envio
            $mail->SMTPSecure = 'ssl';                            // Habilitar encriptacion
            $mail->Port = 465;                                    // Puerto SMTP
            
            $mail->setFrom($email);     //***EDITAR*** Direccion de correo remitente
            $mail->addAddress('hello@juancarmona.co'); //***EDITAR*** Agregar eldestinatario
            
            $mail->addBCC($email);                          // Direccion con copia del envío 
            
            $mail->addReplyTo('hello@juancarmona.co');     //***EDITAR*** Direccion de correo para respuestas
            
            $mail->isHTML(true);                                  // Habilitar contenido HTML
            
            $mail->Subject = 'New email from Juancarmona.co Website'; //***EDITAR*** Asunto del mensaje . No debe tener tildes o estar escrito todo en Mayusculas
            $mail->Body    ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
                                "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                                <html xmlns="http://www.w3.org/1999/xhtml">
                                <head></head>
                                <body>
                                <table>
                                    <th style="font-size:18px">Nueva Consulta de Servicio - Juan Carmona - Design Studio</th>
                                </table>
                                <table>
                                    <tr><td>Nombre</td><td></td><td>' . $nombre . '</td></tr>
                                    <tr><td>Email</td><td></td><td>' . $email . '</td></tr>
                                    <tr><td>Servicio</td><td></td><td>' . $servicio . '</td></tr>
                                    <tr><td>Mensaje</td><td></td><td>' . $mensaje . '</td></tr>
                                </table>
                                </body>
                                </html>'; // Contenido del mensaje.
            
            if(!$mail->send()) {
                echo 'El mensaje no pudo ser enviado';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo "<p class='done-message'>Your Message has been sent successfully!<br>I will be in touch very soon :)</p>";
            }
        
        }
          
    
  }
?>