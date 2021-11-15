<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cyber Attack Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<?php 
// phpinfo();
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$con = mysqli_connect('localhost','edgelit_demo','edgelit_demo','edgelit_demo');
//mysqli_select_db('register_db',$connect);

	$sql="SELECT * FROM `SECOND_PAGE_LEFT_TOP_source_country_predict` WHERE `destination_country`='".$_GET['Country']."' && `day`='".$_GET['Day']."'";
	$query = mysqli_query($con,$sql);

	$sql2="SELECT * FROM `SECOND_PAGE_LEFT_BOTTOM` WHERE `destination_country`='".$_GET['Country']."' && `day`='".$_GET['Day']."'";
	$query2 = mysqli_query($con,$sql2);

	$sql3="SELECT * FROM `SECOND_PAGE_RIGHT` WHERE `type`='".$_GET['attackType']."'";
	$query3 = mysqli_query($con,$sql3);

?>
<body >
<div class="main-div" style="background:url(images/bg0.png) no-repeat; background-size:cover">
	<header>
		<div class="header-top">
			<div class="container">
				<h2><img src='images/web_icon.gif' width='80px'> Cyber Attack Prediction and Analysis using Spatial and Geo Hotspot</h2>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					  </button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
					  <ul class="nav navbar-nav cus-nav">
						<li><a href="index.html">Live Map </a></li>
						<li><a href="prediction.php" class="active">Prediction</a></li>
						<li><a href="statistics.php">Statistics</a></li> 
						<li><a href="attack_information.html">Attack Information</a></li> 
						<li><a href="about.html">About Us</a></li> 
					  </ul>
					  
					</div>
				</nav>
			</div>
		</div>
	</header>
	
	<div class="content-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 cus-col">
					<h3 class="content-heading">Source Country and Attack Prediction</h3>
					<div class="content-sub-div">
						<h4>Shows the most probable <br>country which will attack</h4>
						<div class="row">
							<form>
								<div class="col-xs-6">
									<div class="form-group">
									  <label for="sel1">Enter Country</label>
									  <input id="myInput" type="text" name="Country" class="form-control" placeholder="Country" required>
									  
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
									  <label for="sel1">Enter Day</label>
									  <select class="form-control" name="Day" id="sel1">
										<option value="Sun">Sunday</option>
										<option value="Mon">Monday</option>
										<option value="Tue">Tuesday</option>
										<option value="Wed">Wednesday</option>
										<option value="Thu">Thursday</option>
										<option value="Fri">Friday</option>
										<option value="Sat">Saturday</option>
									  </select>
									</div>
								</div>
								<div class="col-xs-12">
									<button class="btn btn-enter">ENTER</button>
								</div>
							</form>
						</div>
						<?php
							 while( $rows = mysqli_fetch_array($query) ){
						?>
						<p><?php echo $rows['pre_result']; ?>% Possibility from <?php echo $rows['source_country']; ?></p>
						<?php } ?>
						<hr>
						<?php
							 while( $rows2 = mysqli_fetch_array($query2) ){
						?>
						<p><?php echo $rows2['pre_result_attack']; ?>% Possibility from <?php echo $rows2['type']; ?></p>
						<?php } ?>
					</div>
				</div>
				
				<div class="col-sm-6">
					<h3 class="content-heading">Attack-wise Source Country Prediction</h3>
					<div class="content-sub-div">
						<h4>Shows the top 2 most probable countries <br>which will attack for given attack type</h4>
						<div class="row">
							<form>
								<div class="col-xs-12">
									<div class="form-group">
									  <label for="sel1">Enter Attack</label>
									  <select class="form-control" id="sel1" name="attackType">
										<option>Botnet Activity</option>
										<option>Infected Mail</option>
										<option>Local Infections</option>
										<option>Network Attacks</option>
										<option>On-Demand Scan</option>
										<option>Spam</option>
										<option>Vulnerabilities</option>
										<option>Web Threats</option>
									  </select>
									</div>
								</div>
								<div class="col-xs-12">
									<button class="btn btn-enter">ENTER</button>
								</div>
							</form>
						</div>
						<?php
							 while( $rows3 = mysqli_fetch_array($query3) ){
						?>
						<p><?php echo $rows3['pre_result_attack']; ?>% Possibility from <?php echo $rows3['source_country']; ?></p>
						<?php } ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
<style>
input.form-control{
	font-size: 18px;
    height: 45px;
    font-weight: 600;
}
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
  color: #000;
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #000; 
}
</style>
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>
</body>
</html>
