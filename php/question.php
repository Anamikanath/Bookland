<?php
        session_start();
        $conn = mysqli_connect("localhost", "root", "", "bookdb");
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>SellBooks</title>
             <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/shopping.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<?php require_once('php/header2.php');

?>
<style>

body{

background-image: url(evie-s-yDN0aAiHSMg-unsplash.jpg);
background-position:center ;
background-repeat: no-repeat;
background-size: cover;
text-align: center;

}

.container{
   
    padding: 20px;
    font-family: 'Times New Roman', Times, serif;
    width: 35%;
    margin: auto;
    font-size: 19px;
}
.ayesha33{
    font-size: 28px;
    font-weight: bolder;
    font-size: 25px;
    color:darkred;
    padding:5%;
}
</style>

<div class="container">
            
        
        </head>

        <body>
         
            
      <p class="ayesha33">THANK YOU FOR SHOWING YOUR INTEREST IN SELLING OLD BOOKS</p>
                <?php if (isset($_GET['error'])): ?>
                <p><?php echo $_GET['error']; ?></p>
            <?php endif ?>
                <form action="upload.php"
                method="post"
                enctype="multipart/form-data">
                <div class="ay3">

                <label class="ay4"> Name of the Book:*</label>
                       
                        <input type="text" name="nameofbook"  required class="ay5"><br>
                        <br><label class="ay4">Author of the Book:*</label>
                         <input type="author" name="author"  required class="ay5"><br>
                        <br><label class="ay4">Edition of the book: (if any)</label>
                        <input type="edition" name="edition"  class="ay5" ><br>

                        <br> <label class="ay4">Is the cover page teared?</label>
                    <select class="ay6" name="chooseoption1" class="ay5" >
                            <option>Choose option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select><br>
                         <br><label class="ay4" >Is any page missing?</label>
                        <select class="ay6" name="chooseoption2" class="ay5" >
                            <option>Choose option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <br><br><label class="ay4" >Initial bid:*</label>
                        <input type="number" name="price"   class="ay5" required>
                        <br><br><label class="ay4">Bid Start Time 	:*</label>
                          
                          <input type = "datetime-local" name = "starttime" required><br><br>
        <label class="ay4">Bid End Time 	:*</label>
      <input type = "datetime-local" name = "endtime"><br><br>
                    </div>
                     
                     <label class="ay4" >Upload the cover page of book:*</label>
                <input type="file" class="ay7"
                        name="my_image" required>
<br><br><br>
                <input type="submit" class="ay8"
                        name="submit"
                        value="Upload" style="background:black; color:white;">
                
            </form>  
                </div>
            
               
   <script src="boot/js/bootstrap.bundle.min"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
        </html>