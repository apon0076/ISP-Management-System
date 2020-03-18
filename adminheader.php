<!DOCTYPE html>
<html>
<head>
<style>
.body
{width: 960px;margin: 0 auto;background: #0DE5C8}

body
{background: azure;font-family: tohoma;font-size: 14 px;line-height: 22px;background: url(photos/background.jpg) repeat scroll }

.Header{}

.Header img
{width: 100%;height: 150px}

.mainmenu
{background: #a94ed3}

.mainmenu ul
{margin: 0;padding: 0;list-style: none}

.mainmenu ul li
{display: inline-block}

.mainmenu ul li a
{color: #000080;padding: 15px;display:  inline-block;text-decoration: none}

.mainmenu ul li a:hover
{background: aqua}

.order ul li a: hover
{background: aqua}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
    .maincontent{}

}
</style>

</head>
<body>
      <div class="body">
            
            <div class="Header">
            <img src="photos/banner.jpg"/>
            </div>
            <div class="mainmenu">
                <div>
                    <ul>
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="salary.php">Salary</a></li>
                    <li><a href="package_insert.php">Package</a></li>
                    
                     

                        <div class="dropdown">
                        <button class="dropbtn">Search</button>
                          <div class="dropdown-content">
                            <a href="search_client.php">Client</a>
                            <a href="search_admin.php">Admin</a>
                            <a href="search_employee.php">Emplyoee</a>
                            <a href="search_bill.php">Bill</a>
                            <a href="search_package.php">Package</a>
                            <a href="search_salary.php">Salary</a>
                            
                          </div>

                        </div>

                        <div class="dropdown">
                        <button class="dropbtn">View</button>
                          <div class="dropdown-content">
                            <a href="view_client.php">Client</a>
                            <a href="view_admin.php">Admin</a>
                            <a href="view_employee.php">Emplyoee</a>
                            <a href="view_bill.php">Bill</a>
                            <a href="view_package.php">Package</a>
                            <a href="view_salary.php">Salary</a>
                            
                          </div>

                        </div>
                        <li><a href="logout.php">Logout</a></li>             
                    </ul>
                </div>
            </div>
</body>
</html>
</body>



</html>
