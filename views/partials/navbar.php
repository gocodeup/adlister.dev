<!--partial view for navbar-->
<!DOCTYPE HTML>
<html>
	<body>
		<div id="navBar">
			<ul>
			    <li class="welcomeLi"><h3>Welcome To Adlister</h3></li>
			    <!-- <li>Log In</li>
			    <li>Search</li> -->
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

			<script>
			/* When the user clicks on the button,
			toggle between hiding and showing the dropdown content */
			function myFunction() {
			    document.getElementById("myDropdown").classList.toggle("show");
			}

			function filterFunction() {
			    var input, filter, ul, li, a, i;
			    input = document.getElementById("myInput");
			    filter = input.value.toUpperCase();
			    div = document.getElementById("myDropdown");
			    a = div.getElementsByTagName("a");
			    for (i = 0; i < a.length; i++) {
			        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
			            a[i].style.display = "";
			        } else {
			            a[i].style.display = "none";
			        }
			    }
			}
			</script>
		</div>
		  <!--   <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div> -->

	</body>
</html>