<?php 
require_once("header.php");
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 p-5 shadow bg-white">
            <h2>Add Fruits </h2>
            <hr>
            <ul class="sidebar-link">
                <li><a href="manager.php">Add Fruit stock</a></li>
                <li><a href="viewfruits.php">View Fruit stock</a></li>
                <li><a href="updatefruits.php">Update fruit stock</a></li>
            </ul>
        </div>
        
        <div class="col-md-7 ms-5 p-5 shadow bg-white">
            <h2>Add Fruits Form (Customers Module)</h2>
            <hr/>
            <form>
            <div class="form-group mt-2">
                <input type="text" name="fruitname" placeholder="Fruit Name *" required class="form-control">
            </div>

            
            <div class="form-group mt-2">
                <input type="number" name="qty" placeholder="Fruit qty *" required class="form-control">
            </div>

            
            <div class="form-group mt-2">
                <input type="text" name="price" placeholder="Fruit Price *" required class="form-control">
            </div>

            
            <div class="form-group mt-2">
                <input type="submit" name="addfruit" value="Add Fruit" class="btn btn-dark btn-lg text-white">
            </div>

            </form>
        </div>
    </div>
</div>