<?
class Stats_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        $sth = $this->db->prepare("SELECT * FROM students");
        $sth->execute();

        return $result = $sth->fetchAll();
    }
}