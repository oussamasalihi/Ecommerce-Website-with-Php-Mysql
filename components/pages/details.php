<?php 

require_once ('connect.php');



if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($connection , $_GET['id']);

// 3>> kanselectiw infos o kan7otohom fi var   
    // Select Data from database = write query to get users
         $sql = "SELECT * FROM `products` where id = $id";

// 4>> kansifto wahad query l basedonne o kanjibo les info kan7otohom fi wahad var
    //Make Query and get Results
        $result = mysqli_query($connection , $sql);

// 5>> kan7Awlo dak var l array bach nat7Akmo fi les info
    //fetch the resulting rows as an array
        $products = mysqli_fetch_all($result , MYSQLI_ASSOC);

// 6>> kankhwiw les donnes
    //FInally free result from memory
        mysqli_free_result($result);

// 7>> kansado connection
    //close the connection
        mysqli_close($connection);

    // print the infos in website hh
        //  print_r($products);
}



?>


<div id="popup">
        <?php if ($num_of_rows > 0) :  ?>
            
            <table>

                <caption><h2 style="color: rgb(0, 155, 155);"><?php echo htmlspecialchars($r['title']); ?></h2></caption>
                <tr>
                    <td>Product Title : </td>
                    <td><?php echo htmlspecialchars($r['name']; ?></td>
                </tr>
                <tr>
                    <td>Brand :</td>
                    <td><?php echo htmlspecialchars($r['brand']); ?></td>
                </tr>
                <tr>
                    <td>Details :</td>
                    <td><?php echo htmlspecialchars($r['detail']); ?>$</td>
                </tr>
                <tr>
                    <td>Price :</td>
                    <td><?php echo htmlspecialchars($r['price']); ?></td>
                </tr>
                
 	        </table>
            
            <a href="" onclick="toggle()">Close</a>
            <?php else: ?>
                <H2>There is no Product</H2>
                <a href="" onclick="toggle()">Close</a>
        <?php endif; ?>
    </div> 