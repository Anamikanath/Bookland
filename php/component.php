<?php

function component($bookname,$authorname,$prevprice,$bookprice,$bookimg,$bookid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"indexafter.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$bookimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$bookname</h5>
                            <h6 class=\"card-title1\">$authorname</h6>
                            <h8>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h8>
                            <h5>
                                <small><s class=\"text-secondary\">$$prevprice</s></small>
                                <span class=\"price\">$$bookprice</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                            <input type='hidden' name='id' value='$bookid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}
function component1($bookname,$authorname,$prevprice,$bookprice,$bookimg,$bookid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"register.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$bookimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$bookname</h5>
                            <h6 class=\"card-title1\">$authorname</h6>
                            <h8>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h8>
                            <h5>
                                <small><s class=\"text-secondary\">$$prevprice</s></small>
                                <span class=\"price\">$$bookprice</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                            <input type='hidden' name='id' value='$bookid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($bookimg,$bookname,$authorname,$bookprice,$bookid)
{
    $element="
    <form action=\"cart.php?action=remove&id=$bookid\" method=\"post\" class=\"cart-items\">
                <div class=\"border rounded\">
                    <div class=\"row bg-white\">
                        <div class=\"col-md-3 pl-0\">
                            <img src=$bookimg alt=\"image1\" class=\"img-fluid\">
                        </div>
                        <div class=\"col-md-6\">
                            <h5 class=\"pt-2\">$bookname</h5>
                            <small class=\"text-secondary\">$authorname</small>
                        <h5 class=\"pt-2\">$$bookprice</h5>
                        <button type=\"submit\" class=\"btn btn-warning\">Save for later</button>
                        <button type=\"submit\" class=\"btn btn-danger mx-4\" name=\"remove\">Remove</button>
                    </div>
                        
                    </div>
                </div>
            </form>
    ";
    echo $element;
}
