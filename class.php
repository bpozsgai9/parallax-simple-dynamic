<?php
class Osztaly{

    private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "rajzvasznak";
	private $conn = NULL;

	public function __construct(){
		
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($this->conn->connect_error) {
    		die("Kapcsolati hiba: " . $conn->connect_error);
		} 
	}

	public function __destruct(){
		$this->conn->close();
    }

    public function insert($nev, $anyag, $meret, $ar){

		$sql = "INSERT INTO vasznak (nev, anyag, meret, ar) 
        VALUES ('" . $nev . "', '" . $anyag . "', " . $meret . ", ". $ar .")";

		if ($this->conn->query($sql) === TRUE) {
		    echo "Új termék sikeresen létrehozva!";
		} else {
		    echo "Hiba: " . $sql . "<br>" . $this->conn->error;
		}
    }

    public function update($id, $nev, $anyag, $meret, $ar){

		$sql = "UPDATE vasznak SET 
		nev = '" . $nev . "', 
		anyag = '" . $anyag . "', 
		meret = '" . $meret . "', 
		ar = '" . $ar . "'
		WHERE id=" . $id;

		if ($this->conn->query($sql) === TRUE) {
		    echo "Sikeres frissítés!";
		} else {
		    echo "Hiba: " . $this->conn->error;
		}
    }
    
    public function delete($id){

		$sql = "DELETE FROM vasznak WHERE id = $id";

		if ($this->conn->query($sql) === TRUE) {
		    echo "Sikeres törlés!";
		} else {
		    echo "Hiba: " . $this->conn->error;
		}
    }

    public function listData(){

		$sql = "SELECT id, nev, anyag, meret, ar FROM vasznak ORDER BY nev ASC";
		
		$result = $this->conn->query($sql);

		//tábla teteje
        echo "<table class='table'>";
        echo "<thead>";
		echo "<tr>";
		echo "<th scope='col'>Név:</th>";
		echo "<th scope='col'>Anyag:</th>";
		echo "<th scope='col'>Méret:</th>";
		echo "<th scope='col'>Ár:</th>";
		echo "<th scope='col'></th>";
        echo "</tr>";
        echo "</thead>";
		echo "<tbody>";
		//adatok
		if ($result->num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<form method='post' class='form-group'>";
				echo "<td><input class='form-control' type='text' name='updateNev' value='". $row['nev'] ."'></td>";
				echo "<td><input class='form-control'type='text' name='updateAnyag' value='". $row['anyag'] ."'></td>";
				echo "<td><input class='form-control'type='number' name='updateMeret' value='". $row['meret'] ."'></td>";
				echo "<td><input class='form-control'type='number' name='updateAr' value='". $row['ar'] ."'></td>";
				echo "<td><input class='form-control'type='hidden' name='hiddenId' value='". $row['id'] ."'></td>";
				echo "<td><input class='btn btn-warning' type='submit' name='modositas' value='Módosítás'></td>";
				echo "<td><input class='btn btn-danger'type='submit' name='torles' value='Törlés'></td>";
				echo "</tr>";
				echo "</form>";
    		}
		} else {
    		echo "Nincs adat";
		}
        echo "</tbody>";
		echo "</table>";
	}

	public function listCard(){
		$sql = "SELECT id, nev, anyag, meret, ar FROM vasznak ORDER BY nev ASC";
		$result = $this->conn->query($sql);

		echo "<div class='row'>";
		if ($result->num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
				echo "<div class='col-md-6 col-lg-3'>";
				echo "<div class='card'>";
				echo "<img class='card-img-top img-fluid' src='vaszon.jpg'>";
				echo "<div class='card-block'>";
				echo "<h3 class='card-title'>". $row['nev'] ."</h3>";
				echo "<p class='card-text'>"; 
				echo "Méret: ". $row['meret']. "<br />";
				echo "Anyag: ". $row['anyag']. "<br />";
				echo "Ár: " . $row['ar']. "<br />";
				echo "</p>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
    		}
		} else {
    		echo "Nincs adat";
		}
		echo "</div>";
	}
}
?>

