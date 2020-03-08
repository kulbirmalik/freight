<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$to = $_POST['tt'];
$frm = $_POST['frm'];
$type = $_POST['type'];
$nvec = $_POST['nvec'];
$ndate = $_POST['ndate'];

         // fetch data from the database



$records = mysqli_query($conn,"SELECT * FROM search WHERE fromm='$frm' AND too='$to' AND type='$type'") or die("Query fail: " . mysqli_error());


?>

<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="styles.css" type="text/css" rel="stylesheet"/>
    <title>Hello, world!</title>
  </head>
  <body>
    

    <div class="container b">
      <div class="row">
        <h3>New Bookings</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <h5 class="text-danger">Fiter & Sort</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
      </div>
      <div class="row">
        <table class="table">
          <tr>
    <th scope="col">Route</th>
    <th scope="col">Loading Time</th>
    <th scope="col">Rate<span class="glyphicon glyphicon-align-left"></span></th>
    <th scope="col">Vechile</th>
    <th scope="col">Driver Phone Number</th>
    <th scope="col">Location</th>
    <th scope="col"></th>

    </tr>
      <tbody>
      	 



 <?php 
            //records as in an array

foreach( $records as $data ) // using foreach  to display each element of array
            {
                echo "<tr><td>".$data['fromm']."->".$data['too']."<br>24 october 2019 &nbsp;&nbsp;&nbsp;&nbsp;12:30 PM</td>
                          <td>"."8:30 TODAY"."</td>
                          <td><i style='font-size:14px' class='fa'>&#xf156;</i> 82000</td>
                          <td>".$data['number']."<br>".$data['type']."</td>
                          <td>".$data['date']."</td>
                           <td><div id='map'>
      <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7521975262885!2d77.05475301455486!3d28.426733200117344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2281a4d891a5%3A0xf3abc0fe705398e0!2sS+S+Plaza!5e0!3m2!1sen!2sin!4v1557472469917!5m2!1sen!2sin' width='150' height='100' frameborder='0' style='border:0' allowfullscreen></iframe>
      <td><button class='btn btn-danger'><a href='accepting.html'>ACCEPT BOOKING</a></button><br> <br><button class='btn btn-outline-dark'><a href='rejecting.html'>REJECT BOOKING</a></button></td>
  </div></td>
                       </tr>";
            }
       ?>
      <!-- 
      <tr>
        <td>Chennai -> Delhi <br>24 october 2019 &nbsp;&nbsp;&nbsp;&nbsp;12:30 PM</td>
        <td>6:30 TODAY</td>
        <td><i style="font-size:14px" class="fa">&#xf156;</i> 82000</td>
        <td>DL03G4141<br>Truck Trailer</td>
        <td>+917448729500</td>
        <td><div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7521975262885!2d77.05475301455486!3d28.426733200117344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2281a4d891a5%3A0xf3abc0fe705398e0!2sS+S+Plaza!5e0!3m2!1sen!2sin!4v1557472469917!5m2!1sen!2sin" width="150" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
      <td><button class="btn btn-danger"><a href="model.html">ACCEPT BOOKING</a></button><br> <br><button class="btn btn-outline-dark">REJECT BOOKING</button></td>
  </div></td>
      </tr>
      <tr>
        <td>Bengaluru ->Gurugram <br>22 April 2019 &nbsp;&nbsp;&nbsp;&nbsp;12:30 PM</td>
        <td>8:30 TODAY</td>
        <td><i style="font-size:14px" class="fa">&#xf156;</i>78000</td>
        <td>KA 7 JW 6475<br>Tanker Truck</td>
        <td>+919876543210</td>
        <td><div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7521975262885!2d77.05475301455486!3d28.426733200117344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2281a4d891a5%3A0xf3abc0fe705398e0!2sS+S+Plaza!5e0!3m2!1sen!2sin!4v1557472469917!5m2!1sen!2sin" width="150" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div></td>
  <td><button class="btn btn-danger"><a href="model.html">ACCEPT BOOKING</a></button><br> <br><button class="btn btn-outline-dark">REJECT BOOKING</button></td>
      </tr>
      <tr>
        <td>Mumbai ->Himachal Pradesh <br>20 April 2019 &nbsp;&nbsp;&nbsp;&nbsp;12:30 PM</td>
        <td>12:00 TODAY</td>
        <td><i style="font-size:14px" class="fa">&#xf156;</i>98000</td>
        <td>MH12G4567<br>Semi-TRailer</td>
        <td>+919991442295</td>
        <td><div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7521975262885!2d77.05475301455486!3d28.426733200117344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2281a4d891a5%3A0xf3abc0fe705398e0!2sS+S+Plaza!5e0!3m2!1sen!2sin!4v1557472469917!5m2!1sen!2sin" width="150" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div></td>
  <td><button class="btn btn-danger">ACCEPT BOOKING</button><br> <br><button class="btn btn-outline-dark">REJECT BOOKING</button></td>
      </tr>
      <tr>
        <td>Madhya Pradesh->Haryana <br>22 october 2019 &nbsp;&nbsp;&nbsp;&nbsp;12:30 PM</td>
        <td>4:30 TODAY</td>
        <td><i style="font-size:14px" class="fa">&#xf156;</i> 53000</td>
        <td>HR13G0987<br>Straight Truck</td>
        <td>+918178478978</td>
        <td><div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7521975262885!2d77.05475301455486!3d28.426733200117344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2281a4d891a5%3A0xf3abc0fe705398e0!2sS+S+Plaza!5e0!3m2!1sen!2sin!4v1557472469917!5m2!1sen!2sin" width="150" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div></td>
  <td><button class="btn btn-danger">ACCEPT BOOKING</button><br> <br><button class="btn btn-outline-dark">REJECT BOOKING</button></td>
      </tr>
      <tr>
        <td>Haryana ->Jammu <br>22 october 2019 &nbsp;&nbsp;&nbsp;&nbsp;12:30 PM</td>
        <td>10:30 TODAY</td>
        <td><i style="font-size:14px" class="fa">&#xf156;</i> 50000</td>
        <td>HR07N0999<br>Tanker Truck</td>
        <td>+919876543210</td>
        <td><div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7521975262885!2d77.05475301455486!3d28.426733200117344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2281a4d891a5%3A0xf3abc0fe705398e0!2sS+S+Plaza!5e0!3m2!1sen!2sin!4v1557472469917!5m2!1sen!2sin" width="150" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div></td>
  <td><button class="btn btn-danger">ACCEPT BOOKING</button><br> <br><button class="btn btn-outline-dark">REJECT BOOKING</button></td>
      </tr>
      <tr>
        <td>Bengaluru ->Gurugram <br>22 April 2019 &nbsp;&nbsp;&nbsp;&nbsp;12:30 PM</td>
        <td>12:30 TODAY</td>
        <td><i style="font-size:14px" class="fa">&#xf156;</i> 79000</td>
        <td>KA 7 JW 6475<br>Eicher 17 Ft</td>
        <td>+917056397178</td>
        <td><div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7521975262885!2d77.05475301455486!3d28.426733200117344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2281a4d891a5%3A0xf3abc0fe705398e0!2sS+S+Plaza!5e0!3m2!1sen!2sin!4v1557472469917!5m2!1sen!2sin" width="150" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div></td>
  <td><button class="btn btn-danger">ACCEPT BOOKING</button><br> <br><button class="btn btn-outline-dark">REJECT BOOKING</button></td>
      </tr>
      <tr>
        <td>Gujarat ->Delhi <br>22 October 2019 &nbsp;&nbsp;&nbsp;&nbsp;12:30 PM</td>
        <td>12:30 TODAY</td>
        <td><i style="font-size:14px" class="fa">&#xf156;</i> 65000</td>
        <td>DL03G4142<br>Semi-Trailer</td>
        <td>+917056803649</td>
        <td><div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7521975262885!2d77.05475301455486!3d28.426733200117344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2281a4d891a5%3A0xf3abc0fe705398e0!2sS+S+Plaza!5e0!3m2!1sen!2sin!4v1557472469917!5m2!1sen!2sin" width="150" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div></td>
  <td><button class="btn btn-danger">ACCEPT BOOKING</button><br> <br><button class="btn btn-outline-dark">REJECT BOOKING</button></td>
      </tr>
      <tr>
        <td>Bengaluru ->Gurugram <br>22 April 2019 &nbsp;&nbsp;&nbsp;&nbsp;12:30 PM</td>
        <td>7:30 TODAY</td>
        <td><i style="font-size:14px" class="fa">&#xf156;</i> 32000</td>
        <td>KA 7 JW 6475<br>Eicher 17 Ft</td>
        <td>+919813357627</td>
        <td><div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7521975262885!2d77.05475301455486!3d28.426733200117344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2281a4d891a5%3A0xf3abc0fe705398e0!2sS+S+Plaza!5e0!3m2!1sen!2sin!4v1557472469917!5m2!1sen!2sin" width="150" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div></td>
  <td><button class="btn btn-danger">ACCEPT BOOKING</button><br> <br><button class="btn btn-outline-dark">REJECT BOOKING</button></td>
      </tr>
      <tr>
        <td>Gujarat->Assam <br>28 October 2019 &nbsp;&nbsp;&nbsp;&nbsp;12:30 PM</td>
        <td>8:30 TODAY</td>
        <td><i style="font-size:14px" class="fa">&#xf156;</i> 97000</td>
        <td>GJ09N7654<br>Truck Trailer</td>
        <td>+919876543210</td>
        <td><div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7521975262885!2d77.05475301455486!3d28.426733200117344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2281a4d891a5%3A0xf3abc0fe705398e0!2sS+S+Plaza!5e0!3m2!1sen!2sin!4v1557472469917!5m2!1sen!2sin" width="150" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div></td>
  <td><button class="btn btn-danger">ACCEPT BOOKING</button><br> <br><button class="btn btn-outline-dark">REJECT BOOKING</button></td>
      </tr>
      <tr>
        <td>West Bengal->Delhi <br>22 April 2019 &nbsp;&nbsp;&nbsp;&nbsp;12:30 PM</td>
        <td>1:30 TODAY</td>
        <td><i style="font-size:14px" class="fa">&#xf156;</i> 89000</td>
        <td>DL03G4141<br>Straight Truck</td>
        <td>+919600977007</td>
        <td><div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7521975262885!2d77.05475301455486!3d28.426733200117344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2281a4d891a5%3A0xf3abc0fe705398e0!2sS+S+Plaza!5e0!3m2!1sen!2sin!4v1557472469917!5m2!1sen!2sin" width="150" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div></td>
  <td><button class="btn btn-danger">ACCEPT BOOKING</button><br> <br><button class="btn btn-outline-dark">REJECT BOOKING</button></td>
      </tr> -->


      </tbody>
        </table>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
