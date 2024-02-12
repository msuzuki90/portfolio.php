<?php include "inc/header.php"?>
<?php include "inc/nav.php"?>

<?php 


if(isset($_POST['submit'])){

    $to = "muazu.suzuki@gmail.com";
    $subject = wordwrap($_POST['subject'],70);
    $body = $_POST['body'];
    $header = "From: " .$_POST['email'];

    mail($to,$subject,$body,$header);

    
}


?>
    <div class="container">
        <div class="row pt-5">
            <div class="col-xs-6 col-xs-offset-3 pt-5">
                <h1 class="text-center">Contact</h1>
                <form action="" method="post">

                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="somebody@mail.com">
                    </div>

                    <div class="form-group">
                        <label for="subject" class="sr-only">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Your Subject">
                    </div>


                    <div class="form-group">
                        <label for="body">Comment</label>
                        <textarea class= "form-control" name="body" id="body" cols="30" rows="10" placeholder="write down here!"></textarea>
                    </div>
                    
                    <input type="submit" name="submit" id="btn-login" class="btn btn-primary btn-lg btn-block" value="Submit">

                
                </form >


            </div>

        </div>
        
    </div>



<?php include "inc/footer.php"?>



