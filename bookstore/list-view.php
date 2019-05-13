<?php

require_once 'include/common.php';
require_once 'include/protect.php';

$dao = new BookDAO();
$result = $dao->retrieveAll();

    
?>

<html>
    <body>
        <?php include 'include/header.php' ; ?>
        
        <h1>Book Listing</h1>
        <div class="col-md-6">
          <table class='table table-striped' id='book-list' border='1'>
              <tr>
                  <th>Title</th>
                  <th>ISBN 13</th>
                  <th>Price</th>
                  <th>Option</th>
              </tr>
  <?php            
          foreach($result as $book) {
              echo "
              <tr>
                  <td>$book->title</td>
                  <td>$book->isbn13</td>
                  <td>$book->price</td>
                  <td><a href='add-to-cart.php?id=$book->isbn13'>add to cart</a></td>
              </tr>
              ";
              
          }
  ?>
          
          </table>
        </div>
    </body>
</html>


