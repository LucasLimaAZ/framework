<?php

namespace App\models;

use App\Core\App;
use App\models\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email extends Model
{

    public static function enviar($remetente, $destinatario, $conteudo)
    {
        $mail = new PHPMailer(false);
        try {
            
            $mail->SMTPDebug = 0;   
            $mail->IsSMTP();
            
            $mail->SMTPAuth = true;
            $mail->Host       = 'smtp.gmail.com';  
            $mail->Username   = 'lucasdelimamonteiro@gmail.com';                     
            $mail->Password   = 'nuclear00123';                               
            $mail->SMTPSecure = 'ssl';                                  
            $mail->Port       = 465;                                    
            
            $mail->setFrom($remetente, 'Nuclear Framework');
            $mail->addAddress($destinatario, 'Nuclear');     
            $mail->addAddress($destinatario);               
            $mail->addReplyTo('lucasdelimamonteiro@gmail.com', 'No Reply');
            
            $mail->isHTML(true);                                  
            $mail->Subject = utf8_decode($conteudo['assunto']);
            $mail->Body    = utf8_decode($conteudo['mensagem']);
            $mail->AltBody = utf8_decode($conteudo['mensagem']);
            $mail->send();

        } catch (Exception $e) {

            $e->getMessage();
            echo "A mensagem não pode ser enviada. Erro ocorrido: {$mail->ErrorInfo}";
            die();
            
        }
        
    }

    public static function gerarToken($tamanho)
    {
        $basic = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        $token= "";

        for($count= 0; $tamanho > $count; $count++){

            $token.= $basic[rand(0, strlen($basic) - 1)];
        }

        return $token;
    }

}
