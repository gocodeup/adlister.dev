<!--partial view for navbar-->
<!DOCTYPE HTML>
<html>
	<body>
		<div id="navBar">
			<ul>
			    <li class="welcomeLi"><h3>Adlister</h3></li>
			    <li>Log In</li>
			    <li>Create An Account</li>
			    <li>Contact Us</li>
			<div class="dropdown">
			<button onclick="myFunction()" class="dropbtn">Search Categories</button>
			  <div id="myDropdown" class="dropdown-content">
			    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
			    <a href="#automotive">Automotive</a>
			    <a href="#sportingGoods">Sporting Goods</a>
			    <a href="#Jobs">Jobs</a>
			    <a href="#computers">Computers</a>
			    <a href="#hunting">Hunting</a>
			    <a href="#childCare">Child Care</a>
			    <a href="#tools">Tools</a>
			  </div>
			</div>
			</ul>
		</div>