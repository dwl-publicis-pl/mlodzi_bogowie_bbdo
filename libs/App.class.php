<?php
class App
{
    const APP_URL = 'https://mlodzibogowie.pl/';
    const APP_NAME = 'Czy jesteś młodym bogiem?';
    const APP_DESC = 'Obalamy finansowe mity młodych bogów! Kim są młodzi bogowie? Być może Ty jesteś jednym z nich. Sprawdź!';
    const CONTACT_EMAIL_CC = null;
    
    private $error = [];
    
    protected $emailFrom = 'noreply@mlodzibogowie.pl';
    protected $emailFromName = 'MłodziBogowie.pl';
    protected $emailTo = 'czachorowski@bbdo.com.pl';
    protected $emailCC = null;


    public static function init()
    {
        date_default_timezone_set('Europe/Warsaw');
        error_reporting(-1);
        ini_set('display_errors', 0);
        ini_set('log_errors', 1);
        ini_set('error_log', 'php_errors.log');
        
        require_once('libs/Tpl.class.php');
        
        return true;
    }
    
    
    public static function currentPage()
    {
        $currentPage = basename($_SERVER['PHP_SELF'], '.php');
        
        return $currentPage;
    }
    
    
    public function getErrors()
    {
        return $this->error;
    }
    
    
    private function setError($msg)
    {
        $this->error[] = $msg;
        
        return true;
    }
    
    
    private function isError()
    {
        if (count($this->error) > 0) {
            return true;
        } else {
            return false;
        }
    }

    
    public function sendEmail($subject, $name, $email, $content)
    {
        $subject = trim($subject);
        $name = trim($name);
        $email = trim($email);
        $content = trim($content);
        
        if (empty($subject)) {
            $this->setError('Nie wybrano tematu.');
        }
        
        if (empty($name)) {
            $this->setError('Nie podano imienia i nazwiska.');
        }
        
        if (empty($content)) {
            $this->setError('Brakuje treści wiadomości :(');
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $this->setError('Nieprawidłowy adres e-mail.'); 
        }
        
        if ($this->isError()) {
            return false;
        }
        
        require('libs/PHPMailerAutoload.php');
        
        $mail = new PHPMailer;
        $mail->CharSet = 'utf-8';

        $mail->From = $this->emailFrom;
        $mail->FromName = $this->emailFromName;
        $mail->addAddress($this->emailTo);
        $mail->addReplyTo($email);
        
        if (!empty($this->emailCC)) {
            $mail->addCC($this->emailCC);
        }
        
        $body = 'Witaj,' . "\n";
        $body .= 'Poniższa wiadomość została wysłana za pośrednictwem strony ' . self::APP_URL . "\n";
        $body .= '-----------------------------------------------------------------------------------------' . "\n\n";
        $body .= 'temat: ' . $subject . "\n";
        $body .= 'nadawca: ' . $name . ', ' . $email . "\n\n";
        $body .= $content . "\n\n";
        $body .= 'Aby odpisać nadawcy, wybierz opcję "Odpowiedz".' . "\n\n";
        
        $mail->Subject = 'Wiadomość ze strony ' . self::APP_NAME;
        $mail->Body = $body;
        
        if (!$mail->send()) {
            $this->setError('Przepraszamy, wystąpił błąd wysyłania wiadomości. Spróbuj ponownie za chwilę.');
            error_log($mail->ErrorInfo);
        } else {
            return true;
        }
    }
}

App::init();
