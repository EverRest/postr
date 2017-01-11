<?php
class Login_Model extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function run() {
        $_REQUEST =XSS::xss_cleaner($_REQUEST);
        $sth = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = MD5(:password)");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['pwd']
        ));

        $data = $sth->fetchAll();
        $count = $sth->rowCount();
        if($count > 0) {
            Session::init();
            Session::set('loggedIn', TRUE);
            if ($_POST['login'] == 'admin') {
                Session::set('moderator', TRUE);
            }
            header('Location: ../dashboard');
        } else {
            header('Location: ../login');
        }
    }
}
?>