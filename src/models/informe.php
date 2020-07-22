<?php
class informe
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

  public function insertarinfo($request)
  {
    $req = json_decode($request->getbody());

    $sql = "INSERT INTO informe(id_sensor, fecha, hora, temperatura, humedad) VALUES(:id_sensor, :fecha, :hora, :temperatura, :humedad)";
    $response=new stdClass();
      try {
        $statement = $this->con->prepare($sql);
       // $statement->bindparam("id_informe", $req->id_informe);
        $statement->bindparam("id_sensor", $req->id_sensor);
        $statement->bindparam("fecha", $req->fecha);
        $statement->bindparam("hora", $req->hora);
        $statement->bindparam("temperatura", $req->temperatura);
        $statement->bindparam("humedad", $req->humedad);

        $statement->execute();

        $response=$req;
      } catch (Exception $e) {
        $response->mensaje = $e->getMessage();
      }

    return json_encode($response);
  }
  public function getinfoData($request)
  {
    $req = json_decode($request->getbody());

    $sql = "SELECT * FROM informe WHERE id_informe=:id_informe";
    $response=new stdClass();
      try {
        $statement = $this->con->prepare($sql);
        $statement->bindparam("id_informe", $req->id_informe);      
        $statement->execute();        
        $response->result=$statement->fetchall(PDO::FETCH_OBJ);
      } catch (Exception $e) {
        $response->mensaje = $e->getMessage();
      }

    return json_encode($response);
  }
 /* public function eliminarSensor($request)
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
