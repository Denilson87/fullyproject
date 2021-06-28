<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Classe simplificada para envio de emails
 *
 * @author Joshua
 */
class EmailSender {

    /*
    Exemplo de uso

    public function teste() {
        $de = 'dev.software.2014@gmail.com';
        $de_nome_por_exibir = 'Dev Software 2014';
        $para = 'dev.software.2014@gmail.com';
        $assunto = 'Assunto - Anexo';
        $mensagem = 'Mensagem';

        $caminho = dirname(dirname(dirname(__FILE__))) . '/uploaded/products';
        $ficheiro = 'trident_5_spearmint.jpg';

        $arquivo = $caminho . "/" . $ficheiro;
        $anexos[] = $arquivo;

        $this->enviar_email($de, $de_nome_por_exibir, $para, "Teste de Anexo " . date("H:i:s"), "Conteudo do email", $anexos);
    }
    */

    public function enviar_email($de, $de_nome_por_exibir, $cc, $para, $assunto, $mensagem, $anexos) {
        $rn = "\r\n";
        $boundary = md5(rand());
        $boundary_content = md5(rand());

        // Headers
        $headers = 'From: ' . $de_nome_por_exibir . ' <' . $de . '>' . $rn;
        $headers .= 'Reply-To: ' . $de . $rn;

        if ($cc != null) {
            $headers .= 'Cc: ' . $cc . $rn;
        }

        $headers .= 'X-Mailer: PHP/' . phpversion();
        $headers .= 'Mime-Version: 1.0' . $rn;
        $headers .= 'Content-Type: multipart/related;boundary=' . $boundary . $rn;

        $headers .= $rn;

        // Message Body
        $msg = $rn . '--' . $boundary . $rn;
        $msg .= "Content-Type: multipart/alternative;" . $rn;
        $msg .= " boundary=\"$boundary_content\"" . $rn;

        // Body Mode Html
        $msg.= $rn . "--" . $boundary_content . $rn;
        $msg .= 'Content-Type: text/html; charset=ISO-8859-1' . $rn;
        $msg .= 'Content-Transfer-Encoding: quoted-printable' . $rn;

        // equal sign are email special characters. =3D is the = sign
        $msg .= $rn . '<div>' . nl2br(str_replace("=", "=3D", $mensagem)) . '</div>' . $rn;

        $msg .= $rn . '--' . $boundary_content . '--' . $rn;

        if ($anexos != NULL) {
            foreach ($anexos as $anexo) {
                if ($anexo != '' && file_exists($anexo)) {
                    $conAttached = $this->prepareAttachment($anexo);
                    if ($conAttached !== false) {
                        $msg .= $rn . '--' . $boundary . $rn;
                        $msg .= $conAttached;
                    }
                }
            }
        }
        $msg .= $rn . '--' . $boundary . '--' . $rn;

        return mail($para, $assunto, $msg, $headers);
    }

    public function prepareAttachment($path) {
        $rn = "\r\n";

        if (file_exists($path)) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $ftype = finfo_file($finfo, $path);
            $file = fopen($path, "r");
            $attachment = fread($file, filesize($path));
            $attachment = chunk_split(base64_encode($attachment));
            fclose($file);

            $msg = 'Content-Type: \'' . $ftype . '\'; name="' . basename($path) . '"' . $rn;
            $msg .= "Content-Transfer-Encoding: base64" . $rn;
            $msg .= 'Content-ID: <' . basename($path) . '>' . $rn;

            $msg .= $rn . $attachment . $rn . $rn;
            return $msg;
        } else {
            return false;
        }
    }

}
