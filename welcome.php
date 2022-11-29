<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
    <link href="stylesheet.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>UcupStore</title>
</head>

<body>
<header>
			<div class="logo">
				<img src="logo.jpg" alt="logo" class="logo-img" />
				<h1 class="logo-title">Ucup Store</h1>
			</div>
			
			<nav>
				<ul>
          			<li><a href="#favorite" style="text-decoration:none;">Buy</li>
					<li><a href="https://wa.me/+6285732635421" target="_blank" style="text-decoration:none;">Contact Person</a></li>
				</ul>
			</nav>
			<button class="btn-cta" onclick="redirInstagram()">Follow Saya</button>
		</header>
  <div class="container" id="container7">
    <hr>
    <div class="row">
      <div class="col-md-4 mt-auto mb-auto text-center">
        <h1>Pesanan<br>Kamu</h1>
      </div>
      <div class="col-md-6">
        <p>Nama:
          <?php echo $_POST["Nama"]; ?>
        </p>
        <p>E-mail:
          <?php echo $_POST["Email"]; ?>
        </p>
        <p>Alamat:
          <?php echo $_POST["Alamat"]; ?>
        </p>
        <p>Barang Pesanan:
          <?php echo $_POST["BarangPesanan"]; ?>
        </p>
          <?php
          $servername = "host";
          $username = "user";
          $password = "2e32e127681ce347874addc60994e6b8f89113e5e5d6685083b871d7b5c01ae8";
	  $port = "5432";
          $dbname = "website";
          $Nama = $_POST["Nama"];
          $Email = $_POST["Email"];
          $Alamat = $_POST["Alamat"];
          $BarangPesanan = $_POST["BarangPesanan"];

          // Create Connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check Connection
          if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
          }
          $sql = "INSERT INTO pesanan (Nama, Email, Alamat, BarangPesanan) 
          VALUES ('$Nama','$Email','$Alamat','$BarangPesanan')";
          if ($conn->query($sql) === TRUE){
            //   echo "New Records Created Successfully";
          } else {
            echo 'Error' . $sql . "<br>" . $conn->error;
          } ?>

        </p>
        <br>
      </div>
      <hr>
    </div>
    </section>
  </div>
  <div class="text-center" style="background-color: #f9f2d8;">
    <marquee>
      <h1 style="color:red;">TERIMAKASIH<br>SEMOGA SUKA DENGAN PRODUCT KAMI!<h1>
    </marquee>
  </div>
  <?php
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT Nama, No_HP, Email, Alamat, BarangPesanan FROM pesanan";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      // echo "data muncul";
    }
  } else {
    echo "0 results";
  }
  ?>
</body>
	  <?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("pgsql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyDB.MyGuests");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

</html>
