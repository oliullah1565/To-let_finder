<?php

$preferred_client   = $_POST['preferred_client'];
$offering           = $_POST['offering'];
$quantity           = $_POST['quantity'];
$sublet             = $_POST['sublet'];
$month              = $_POST['month'];
$district           = $_POST['district'];
$minValue           = $_POST['minValue'];
$maxValue           = $_POST['maxValue'];
$nagotiable         = $_POST['nagotiable'];


include_once('db/crud.php');
$crud = new Crud();

$query = "SELECT id,title,description,price,image1 from posts where preferred_client='$preferred_client'  and quantity='$quantity' and sublet='$sublet' and month='$month'  and district='$district'  and nagotiable='$nagotiable' and  approved='Yes' and price BETWEEN '$minValue' and '$maxValue';";

$result = $crud->execute($query);
if($result)
{
    while($res = $result->fetch_assoc())
    {
        echo '<div class="row">
            <div class="col-md-5">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="../tolet_in_php/image/'.$res['image1'].'" height="250px" width="700px" alt="POST IMAGE">
                </a>
            </div>
            <div class="col-md-7">
                <input type="hidden" name="post_id" value="'.$res['id'].'">
                <h4>'.$res['title'].'</h4>
                <p>'.$res['description'].'</p>
                <label>Price: '.$res['price'].'</label>
                <br>
                <a class="btn btn-success" href="detailPosts.php?id='.$res['id'].'">View Post</a>
            </div>

        </div>
        <hr class="hr_white">';
    }

}
else
{
    echo "<br>Could not execute the query<br>";
}