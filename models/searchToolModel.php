<?php
class searchToolModel

{
	private $hostname = 'us-cdbr-east-04.cleardb.com';
	private $username = 'b68cc0612ad287';
	private $password = '5a36e9c7';
	private $dbname = 'heroku_e395b5c0fbba471';
    private $con = null;
    private $result = null;

    public function connect()
    {
        $this->con =  mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        if ($this->con) {
            mysqli_set_charset($this->con, 'utf8');
        }
        return $this->con;
    }
    public function execute($sql)
    {
        $this->result = $this->con->query($sql);
        return $this->result;
    }
    public function num_rows()
    {
        if ($this->result)
            $num = mysqli_num_rows($this->result);
        else $num = 0;
        return $num;
    }

    public function getData()
    {

        if ($this->result)
            $data = mysqli_fetch_array($this->result);
        else
            $data = 0;
        return $data;
    }
    public function  searchData($key)
    {
        $sql = "SELECT * FROM products WHERE name REGEXP '$key'";
        $this->execute($sql);
        
        if ($this->num_rows() === 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }
}