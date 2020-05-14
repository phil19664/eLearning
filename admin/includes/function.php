<?php 
    function add_category(){
        include("includes/db.php");
        if(isset($_POST['add_category'])) {
            $category_name=$_POST['category_name'];

            $add_category=$con->prepare("insert into category(category_name)values('$category_name')");
            if ($add_category->execute()){
                echo"<script>alert('Category Added Successfully')</script>";
                echo"<script>window.open('index.php?category','_self')</script>";
            }else{
                echo"<script>alert('Category Not Added Successfully')</script>";
                echo"<script>window.open('index.php?category','_self')</script>";
            }
        }
    }

?>