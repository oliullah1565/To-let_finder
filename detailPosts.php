<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="./css/jquery-ui.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <title>To-let Finder | Home</title>
</head>
<?php
include('Admin/dbname.php');
$id=$_GET['id'];
$show="SELECT * from posts where id='$id'"; 
// $show="SELECT * from posts";
?>   
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="body_change">
                        <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10" style="margin-top:20px;">
                                    
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                    <h4>Post Details</h4>
                                                    <hr class="hr_white">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                    
                                                       <?php
                                                       
                                                            $result=mysqli_query($conn,$show);
	                                                        $row=mysqli_fetch_array($result)
	
	                                                   ?>
                                                    <form>
                                                        <div class="form-group row">
                                                            <label for="title" class="col-3 col-form-label">Title:</label>
                                                            <label id="title" class="col-9 col-form-label"><?php echo $row['title'];?></label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="description" class="col-3 col-form-label">Description:</label>
                                                            <label id="description" class="col-9 col-form-label"><?php echo $row['description'];?></label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="phone" class="col-3 col-form-label">Phone:</label>
                                                            <label id="phone" class="col-9 col-form-label"><?php echo $row['phone'];?></label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="date" class="col-3 col-form-label">Posted Date:</label>
                                                            <label id="date" class="col-9 col-form-label"><?php echo $row['date'];?></label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="preferred_client" class="col-3 col-form-label">Preferred Client:</label>
                                                            <label id="preferred_client" class="col-9 col-form-label"><?php echo $row['preferred_client'];?></label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="offering" class="col-3 col-form-label">Offering:</label>
                                                            <label id="offering" class="col-9 col-form-label"><?php echo $row['offering'];?></label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="quantity" class="col-3 col-form-label">Quantity:</label>
                                                            <label id="quantity" class="col-9 col-form-label"><?php echo $row['quantity'];?></label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="sublet" class="col-3 col-form-label">Sublet:</label>
                                                            <label id="sublet" class="col-9 col-form-label"><?php echo $row['sublet'];?></label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="district" class="col-3 col-form-label">District:</label>
                                                            <label id="district" class="col-9 col-form-label"><?php echo $row['district'];?></label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="aria" class="col-3 col-form-label">Aria:</label>
                                                            <label id="aria" class="col-9 col-form-label"><?php echo $row['aria'];?></label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="address" class="col-3 col-form-label">Address:</label>
                                                            <label id="address" class="col-9 col-form-label"><?php echo $row['address'];?></label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="price" class="col-3 col-form-label">Price:</label>
                                                            <label id="price" class="col-9 col-form-label"><?php echo $row['price'];?> </label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="nagotiable" class="col-3 col-form-label">Nagotiable:</label>
                                                            <label id="nagotiable" class="col-9 col-form-label"><?php echo $row['nagotiable'];?></label>
                                                        </div>
                                                    </form>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>          
                </div>
            </div>
        </div>
        <span class="text text-danger" id="error"></span>
    </div>
</body>

</html>





<script>

    /*var temp = localStorage.getItem('post');
    //pase the value 
    var post = JSON.parse(temp);
    // it look like this { "1": "value1", "2": "value2", "3": "value3" };

    var post_id = post.post_id;
    $.post("./admin/detailPost.php",
    {
        post_id: post_id
    },
    function(data, status){
        data = JSON.parse(data);
        $('#title').text(data.title);
        $('#description').text(data.description);
        $('#phone').text(data.phone);
        $('#date').text(data.date);
        $('#preferred_client').text(data.preferred_client);
        $('#offering').text(data.offering);
        $('#quantity').text(data.quantity);
        $('#sublet').text(data.sublet);
        $('#district').text(data.district);
        $('#aria').text(data.aria);
        $('#address').text(data.address);
        $('#price').text(data.title);
        $('#nagotiable').text(data.nagotiable);

    });

    // $.ajax({
	// 	url: './user/profileUser.php',
	// 	method: 'get',

	// 	success: function (mgs) {
	// 		mgs = JSON.parse(mgs);
	// 		$('#name_user').text(mgs.name);
	// 		$('#email_user').text(mgs.email);
	// 	}
	// });*/

</script>