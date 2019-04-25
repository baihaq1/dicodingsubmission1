<?php
/**
 *
 */
class Registrasi
{
  public function __construct()
  {
      $this->conn = new PDO("sqlsrv:server = dicodingsrvr.database.windows.net; Database = dicodingwebapp", "xal70666","Baihaqi123");
      $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  }

  public function addUser($name, $email, $address, $jobs)
  {
    $sql = "INSERT INTO registrasi (ID, name, email, address, jobs) VALUES(
      (select isnull(max(id), 0) + 1 from registrasi),
      '$name', '$email', '$address','$jobs')";
    $query = $this->conn->query($sql);
    if (!$query)
    {
      return "Failed";
    }
    else
    {
      return "Success";
    }
  }

  public function showUser()
  {
    $sql = "SELECT * FROM registrasi";
    $query = $this->conn->query($sql);
    return $query;
  }
}


 ?>
