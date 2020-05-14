<div id='bodyleft'>
    <h3>Categories Management </h3>
    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="index.php?category">View Course Categories</a></li>
        <li><a href="#">View Course Sub Categories</a></li>
    </ul>

    <h3>Course Management </h3>
    <ul>
        <li><a href="#">Active Courses</a></li>
        <li><a href="#">Pending Courses</a></li>
        <li><a href="#">Unpublish Courses</a></li>
        <li><a href="#">Advance Course Searching</a></li>
    </ul>

    <h3>User Management </h3>
    <ul>
        <li><a href="#">View All Students</a></li>
        <li><a href="#">View All Teachers</a></li>
        <li><a href="#">Advance User Search</a></li>
    </ul>

    <h3>Payments Management </h3>
    <ul>
        <li><a href="#">Pay to Finance Officer</a></li>
        <li><a href="#">Complete Payment</a></li>
        <li><a href="#">Advance Payment Searching</a></li>
    </ul>
 
    <h3>Page Management </h3>
    <ul>
        <li><a href="#">Terms & Condition page</a></li>
        <li><a href="#">Contact Us Page</a></li>
        <li><a href="#">About Us Page</a></li>
        <li><a href="#">FAQ's Page</a></li>
        <li><a href="#">Edit Slider</a></li>
    </ul>
</div>

<?php 
        //Trying to call the category section if its been clicked
    if(isset($_GET['category'])) {
        include("category.php");
    }

?>