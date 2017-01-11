<?php
class Dashboard_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    function xhrInsert() {
        $_REQUEST = XSS::xss_cleaner($_REQUEST);
        if (isset($_POST['text']) AND !empty($_POST['text'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $site = $_POST['site'];
            $text = $_POST['text'];
            $ip = $_POST['ip'];
            $client = $_POST['client'];
            $sth = $this->db->prepare('INSERT INTO dashboard(name, email, site, text, ip, client) VALUES(:name, :email, :site, :text, :ip, :client)');
            $sth->execute(array(':name' => $name, ':email' => $email, ':site' => $site, ':text' => $text, ':ip' => $ip, ':client' => $client));
            $data = array('text' => $text, 'id' => $this->db->lastInsertId());
        }
//        echo json_encode($data);
      }

    public function xhrGetListings() {
        $sth = $this->db->prepare("SELECT * FROM dashboard ORDER BY created_at DESC");
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        return $data = $sth->fetchAll();
//        echo json_encode($data);
    }

    public function xhrDeleteListing() {
        $_REQUEST = XSS::xss_cleaner($_REQUEST);
        $id = $_POST['id'];
        $sth = $this->db->prepare('DELETE FROM dashboard WHERE id = "'.$id.'"');
        $sth->execute();
    }

    public function xhrEditListing()
    {
        $_REQUEST = XSS::xss_cleaner($_REQUEST);
        if (isset($_POST['text']) AND !empty($_POST['text'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $site = $_POST['site'];
            $text = $_POST['text'];

            $sth = $this->db->prepare('UPDATE dashboard SET name = :name, email = :email, site = :site, text = :text WHERE id = :id');
            $sth->execute(array(':name' => $name, ':email' => $email, ':site' => $site, ':text' => $text, ':id' => $id));
        }
    }

    public function xhrGetNoteById()
    {
        $_REQUEST = XSS::xss_cleaner($_REQUEST);
        $id = $_POST['id'];
        $sth = $this->db->prepare('SELECT name, email, site, text, ip, client FROM dashboard WHERE id = :id');
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute(array('id' => $id));
        $data = $sth->fetchAll();
        echo json_encode($data);
    }
}
?>