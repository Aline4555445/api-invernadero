<?php
class sensor
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

  public function insertarSen($request)
  {
    $req = json_decode($request->getbody());

    $sql = "INSERT INTO sensor(id_sensor,id_invernadero) VALUES(:id_sensor,:id_invernadero)";
    $response=new stdClass();
      try {
        $statement = $this->con->prepare($sql);
        $statement->bindparam("id_sensor", $req->id_sensor);
        $statement->bindparam("id_invernadero", $req->id_invernadero);
        $statement->execute();

        $response=$req;
      } catch (Exception $e) {
        $response->mensaje = $e->getMessage();
      }

    return json_encode($response);
  }
  public function getSenData($request)
  {
    $req = json_decode($request->getbody());

    $sql = "SELECT * FROM sensor WHERE id_sensor=:id_sensor";
    $response=new stdClass();
      try {
        $statement = $this->con->prepare($sql);
        $statement->bindparam("id_sensor", $req->id_sensor);      
        $statement->execute();        
        $response->result=$statement->fetchall(PDO::FETCH_OBJ);
      } catch (Exception $e) {
        $response->mensaje = $e->getMessage();
      }

    return json_encode($response);
  }
  public function eliminarSen($request)
  {
    $req = json_decode($request->getbody());
     $sql = "DELETE FROM sensor WHERE id_sensor=:id_sensor";
    $response=new stdClass();
      try {
        $statement = $this->con->prepare($sql);
        $statement->bindparam("id_sensor", $req->id_sensor);
        $statement->execute();
        $response=$result=" El registro con el  id: $req->id_sensor  se logro borrar";
      } catch (Exception $e) {
        $response->mensaje = $e->getMessage();
      }

    return json_encode($response);
  }
/* public function actualizarSen($request)
  {
    $req = json_decode($request->getbody());

    $sql = "UPDATE sensor SET =:sensor,valor=:valor WHERE id=:id";
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
