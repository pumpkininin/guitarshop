<?php
class productModel
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
        if ($this->con)
         {
             mysqli_set_charset($this->con, 'utf8');
         }
        return $this->con;
    }

    public function execute($sql)
    {
        $this->result = $this->con->query($sql);
        return $this->result;
    }

    public function getDataById($id)
    {
        $sql = "SELECT * FROM products WHERE product_id = '$id'";
        $this->execute($sql);
        if ($this->num_rows() != 0)
            $data = mysqli_fetch_array($this->result);
        else 
            $data = 0;
        return $data;
    }

    /**
     * @return null
     */
    public function getProductData()
    {
        $sql = "SELECT * FROM products WHERE type = 'guitar'";
        $this->execute($sql);
        if($this->num_rows() !=0)
            $data = mysqli_fetch_array($this->result);
        else
            $data = 0;
        return $data;
    }

    public function getGuitarshopData()
    {
        $sql = "SELECT * FROM products WHERE and type = 'Guitarshop'";
        $this->execute($sql);
        if($this->num_rows() !=0)
            $data = mysqli_fetch_array($this->result);
        else
            $data = 0;
        return $data;
    }
    public function getData()
    {
    
        if ($this->result)
            $data = mysqli_fetch_array($this->result);
        else 
            $data = 0;
        return $data;
    }
    public function getAllData($table)
    {
        $sql = "SELECT * FROM $table";
        $this->execute($sql);
        if ($this->num_rows() === 0)
            $data=0;
        else 
            while ($datas = $this->getData())
                $data[] = $datas;
        return $data;
    }

    public function num_rows()
    {
        if ($this->result)
            $num = mysqli_num_rows($this->result);
        else $num = 0;
        return $num;    
    }

    public function insertData($id, $name, $image, $price, $type)
    {
        $sql = "INSERT INTO  products(product_id, name, image, price, type) VALUES ($id, '$name', '$image', $price, '$type') ";
        return $this->execute($sql);
    }

    public function updateData($id, $name, $image, $price, $type)
    {   
        $sql = "UPDATE products 
                    SET  name = '$name', image = '$image', price = $price, type = '$type'
                    WHERE product_id = $id  ";
        return $this->execute($sql);            
    }
    public function updateData1($id, $name, $price, $type)
    {
        $sql = "   UPDATE products 
                    SET name = '$name', price = $price, type = '$type'
                    WHERE product_id = $id  ";
        return $this->execute($sql);
    }

    public function delete($id)
    {
        $sql = " DELETE FROM products
                     WHERE product_id = '$id' ";
        return $this->execute($sql);     
    }

    public function filterTable($valueToSearch)
    {
        $query = "SELECT * FROM `products` WHERE name LIKE '%".$valueToSearch."%'";
        $this->execute($query);
        if ($this->num_rows() === 0)
            $data=0;
        else
            while ($datas = $this->getData())
                $data[] = $datas;
        return $data;
    }
    public function filterTableByPrice($minValue, $maxValue)
    {
        $query = "SELECT * FROM `products` WHERE price >= $minValue and price <= $maxValue";
        $this->execute($query);
        if ($this->num_rows() === 0)
            $data=0;
        else
            while ($datas = $this->getData())
                $data[] = $datas;
        return $data;
    }

}