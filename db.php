<?php
class Db
{
   private $servername = "localhost";
   private   $user = "root";
   private  $password = "";   
   private $db="nguyenthibichhuyen";
   private $conn=null;
   public function _construct()
   {
    $this->conn = new mysqli($this->servername, $this->user, $this->password,$this->db);
   }
   //lay ra tat ca
public function getALL()
{
    $sql = "SELECT id,name,image,status FROM 0058_brand WHERE status!=0";
    $result = $this->conn->query($sql);
    return $result->fetch_all(MYSQLI-ASSOC);
}
   //lay ra 1
public function getOne($id)
{
   $sql="SELECT * FROM 0058_brand WHERE id='$id'";
   $result = $this->conn->query($sql);
   return $result->fetch_assoc();
}   //so luong
public function getCount()
{
    $sql = "SELECT id,name,image,status FROM 0058_brand WHERE status!=0";
    $result = $this->conn->query($sql);
}
   //them
public function insert($data)
{
   $strf="";
   $strv="";
   foreach($data as $f=>$v)
   {
      $strf.="$f,";
      $strv.="'$v',";
   }
   $strf=rtrim(rtrim($strf),',');
   $strv=rtrim(rtrim($strv),',');
   $sql="INSERT INTO 0058_brand( $strf) VALUES( $strv)";
   $this->conn->query($sql);
}
//sua
public function update($data,$id)
{
   $strset="";
   foreach($data as $f=>$v)
   {
      $strset.="$f,'$v',";
   }
   $strf=rtrim(rtrim($strset),',');
   $sql="UPDATE 0058_brand SET $strset WHERE id='$id'";
   $this->conn->query($sql);
}
   //xoa
   public function delete($id)
   {
       $sql = "DELETE FROM 0058_brand WHERE id='$id'";
       $this->conn->query($sql);
   }
}