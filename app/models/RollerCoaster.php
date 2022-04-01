<php 
class RollerCoaster {
    $sql = "SELECT * FROM `rollercoaster`";

    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    $result = mysqli_query($conn, $sql);
    
    $records = "";

    private $db;

    public function __construct() {
    $this->db = new Database();
    }

    public function getCountries() {
    $this->db->query("SELECT * FROM `rollercoaster`;");

    $result = $this->db->resultSet();

    return $result;
    }
    

}

