<?php
/**
 * Handles all processes of the mail, its sending, and its database communication
 *
 * @author Kyle Vermeulen <kyle@source-lab.co.za>
 */

require_once(SITE_ROOT . '/classes/Connection.php');

class Mailer {
    
    private $dbConn;
    private $phpmailer;
    private $log;
    private $notifyTemplate;
    
    /**
     * Full path to the confirmation email template.
     * 
     * @var String
     */
    public $template_path;
    
    /**
     * Email address which will recieve the confirmation email after filling out the contact form.
     * 
     * @var String
     */
    public $client_email;
    
    /**
     * Client's name filled out in the contact form.
     * 
     * @var String
     */
    public $client_name;
    
    /**
     * Client's contact number filled out in the contact form.
     * 
     * @var String
     */
    public $client_telephone;
    
    /**
     * Client's message number filled out in the contact form.
     * 
     * @var String
     */
    public $client_message;
    
    /**
     * Administrative email address, will recieve notifactions of a completed contact form request
     * 
     * @var String
     */
    public $admin_email;
    
    /**
     * Administrative contact name
     * 
     * @var String
     * 
     */
    public $admin_name;

    /**
     * Initiate a database connection for storing mail logs, sets
     * PDO error mode to Exception for that try/catch goodness, and
     * starts an instance of class.mailer.php
     */
    public function __construct() {
        // initiate PHPmailer
        require_once('class.phpmailer.php');
        $this->phpmailer = new PHPMailer();
        
        /**
         * removed because we dont have database credentials that allow us to create databases or tables
         * 
        // create a new database connection
        $this->dbConn = new Connection();
        $this->dbConn = $this->dbConn->dbConnect();
        
        // set PDO error mode for exception catching
        if ($this->dbConn) $this->dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         * 
         */
    }
    
    private function getTemplate() {
        $template_file = fopen($this->template_path, 'r');
        $template_string = fread($template_file, filesize($this->template_path));
        $template_string = trim($template_string);
        fclose($template_file);
       
        return $template_string;
    }
    
   /**
    * Captures a database log of a completed contact form.
    * 
    * @param string $name
    * @param string $number
    * @param string $email
    * @param string $message
    * @return boolean
    * @throws PDOException
    */
    public function logEmail() {
        try {
            // prepare the sql query
            $this->log = $this->dbConn->prepare('INSERT INTO '.DB_LOGS_TBL.' (name, number, email, message, date, unix, ip) VALUES (:name, :number, :email, :message, :date, :unix, :ip);');
            
            // bind our values
            $this->log->bindValue(':name',      $this->client_name);
            $this->log->bindValue(':number',    $this->client_telephone);
            $this->log->bindValue(':email',     $this->client_email);
            $this->log->bindValue(':message',   $this->client_message);
            $this->log->bindValue(':date',      date('d-m-Y'));
            $this->log->bindValue(':unix',      time());
            $this->log->bindValue(':ip',        $_SERVER['REMOTE_ADDR']);
            
            // execute query
            if($this->log->execute()) return true;
        } catch (PDOException $ex) {
            throw new Exception($ex->getMessage());
        }
    }
    
    /**
     * Sends a confirmation email to the client after completing the contact form on the website.
     * Email template stored in ./templates/index.html
     * 
     * @return boolean
     * @throws Exception
     */
    public function sendConfirmEmail() {
        $this->phpmailer->From = $this->admin_email;
        $this->phpmailer->FromName = $this->admin_name;
        $this->phpmailer->AddAddress($this->client_email);
        $this->phpmailer->AddReplyTo($this->admin_email, 'Integrated Solutions');

        $this->phpmailer->IsHTML(true);

        $this->phpmailer->Subject = 'Integrated Solutions';
        $this->phpmailer->Body    = $this->getTemplate();
        $this->phpmailer->AltBody = 'Thank you for completing the contact form on our website. We have received your contact request and will be in touch with you shortly to discuss your needs./r/n/r/nRegards,/r/nIntegrated Solutions';

        if(!$this->phpmailer->Send()) {
            throw new Exception('Error sending confirmation email.');
        }else{
            return true;
        }
    }
    
    /**
     * Creates a simple notification email that a contact form request has been
     * completed on the website.
     * 
     * @return String
     */
    private function prepNotification(){
        $this->notifyTemplate = "A contact form request has been completed.<br />";
        $this->notifyTemplate .= '<strong>Name: </strong>'.$this->client_name."<br />";
        $this->notifyTemplate .= '<strong>Contact no. </strong>: '.$this->client_telephone."<br />";
        $this->notifyTemplate .= '<strong>Email: </strong>'.$this->client_email."<br />";
        $this->notifyTemplate .= '<strong>Message: </strong>'.$this->client_message;
        
        return $this->notifyTemplate;
    }
    
    /**
     * Sends a notification email to the admin that a user has completed
     * the contact form on the website.
     * 
     * @return boolean
     * @throws Exception
     */
    public function sendNotifyEmail() {
        $this->phpmailer->From = $this->client_email;
        $this->phpmailer->FromName = $this->client_name;
        //$this->phpmailer->AddAddress($this->admin_email);
        $this->phpmailer->AddAddress($this->client_email);
        $this->phpmailer->AddReplyTo($this->client_email, $this->admin_name);

        $this->phpmailer->IsHTML(true);

        $this->phpmailer->Subject = 'IS Website Contact Notification';
        $this->phpmailer->Body    = $this->prepNotification();
        $this->phpmailer->AltBody = '';

        if(!$this->phpmailer->Send()) {
            throw new Exception('Error sending notification email.');
        }else{
            return true;
        }
    }
    
    
}