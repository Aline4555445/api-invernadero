<?php
class Invernadero
{
  private $con;

  function __construct()
  {
    $db = new DbConnect;
    $this->con = $db->connect();
  }

  function __destruct()
  {
    $this->con = null;
  }

  /*public function insertarSensor($request)
  {
    $req = json_decode($request->getbody());

    $sql = "INSERT INTO ejemplo(sensor,valor) VALUES(:sensor,:valor)";
    $response=new stdClass();
      try {
        $statement = $this->con->prepare($sql);
        $statement->bindparam("sensor", $req->sensor);
        $statement->bindparam("valor", $req->valor);
        $statement->execute();

        $response=$req;
      } catch (Exception $e) {
        $response->mensaje = $e->getMessage();
      }

    return json_encode($response);
  }*/
  public function getInvernaderoData($request)
  {
    $req = json_decode($request->getbody());

    $sql = "SELECT * FROM invernadero WHERE id_invernadero=:id_invernadero";
    $response=new stdClass();
      try {
        $statement = $this->con->prepare($sql);
        $statement->bindparam("id_invernadero", $req->id_invernadero);      
        $statement->execute();        
        $response->result=$statement->fetchall(PDO::FETCH_OBJ);
      } catch (Exception $e) {
        $response->mensaje = $e->getMessage();
      }

    return json_encode($response);
  }
  /*public function eliminarSensor($request)
  {
    $req = json_decode($request->getbody());
     $sql = "DELETE FROM ejemplo WHERE id=:id";
    $response=new stdClass();
      try {
        $statement = $this->con->prepare($sql);
        $statement->bindparam("id", $req->id);
        $statement->execute();
        $response=$result=" El registro con el  id: $req->id  se logro borrar";
      } catch (Exception $e) {
        $response->mensaje = $e->getMessage();
      }

    return json_encode($response);
  }
 public function actualizarSensor($request)
  {
    $req = json_decode($request->getbody());

    $sql = "UPDATE ejemplo SET sensor=:sensor,valor=:valor WHERE id=:id";
    $response=new stdClass();
      try {
        $statement = $this->con->prepare($sql);
        $statement->bindparam("id", $req->id);
        $statement->bindparam("sensor", $req->sensor);
        $statement->bindparam("valor", $req->valor);
        $statement->execute();
        $response=$result=" El registro con el id: $req->id se logro modificar";
      } catch (Exception $e) {
        $response->mensaje = $e->getMessage();
      }

    return json_encode($response);
  }*/
}