<?php

function component($productname, $productprice, $productimg,$productid){
    $element = "
    

    <div class=\"col-sm-6 col-md-6 col-lg-4 col-xl-4\">
        <div class=\"products-single fix\">
            <div class=\"box-img-hover\">
                
                <img src=\"$productimg\" class=\"img-fluid\" alt=\"Image\">
                <div class=\"mask-icon\">
                <a class=\"cart\" href=\"#\">Adauga in cos</a>
                </div>
            </div>
                
            </div>
            <div class=\"why-text\">
                <h4> $productname </h4>
                <h5> $productprice	</h5>
            </div>
            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                            <input type='hidden' name='product_id' value='$productid'>
        </div>
    </div>

   
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

















