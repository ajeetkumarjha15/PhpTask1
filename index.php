<?php 
$products = array(
    "Electronics" => array(
                        "Television" => array(
                                            array(
                                                "id" => "PR001", 
                                                "name" => "MAX-001",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR002", 
                                                "name" => "BIG-301",
                                                "brand" => "Bravia"
                                            ),
                                            array(
                                                "id" => "PR003", 
                                                "name" => "APL-02",
                                                "brand" => "Apple"
                                            )
                                        ),
                        "Mobile" => array(
                                            array(
                                                "id" => "PR004", 
                                                "name" => "GT-1980",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR005", 
                                                "name" => "IG-5467",
                                                "brand" => "Motorola"
                                            ),
                                            array(
                                                "id" => "PR006", 
                                                "name" => "IP-8930",
                                                "brand" => "Apple"
                                            )
                                        )
                    ),
    "Jewelry" => array(
                        "Earrings" => array(
                                            array(
                                                "id" => "PR007", 
                                                "name" => "ER-001",
                                                "brand" => "Chopard"
                                            ),
                                            array(
                                                "id" => "PR008", 
                                                "name" => "ER-002",
                                                "brand" => "Mikimoto"
                                            ),
                                            array(
                                                "id" => "PR009", 
                                                "name" => "ER-003",
                                                "brand" => "Bvlgari"
                                            )
                                        ),
                        "Necklaces" => array(
                                            array(
                                                "id" => "PR010", 
                                                "name" => "NK-001",
                                                "brand" => "Piaget"
                                            ),
                                            array(
                                                "id" => "PR011", 
                                                "name" => "NK-002",
                                                "brand" => "Graff"
                                            ),
                                            array(
                                                "id" => "PR012", 
                                                "name" => "NK-003",
                                                "brand" => "Tiffany"
                                            )
                                        )				
                )
)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: Embed in HTML</title>
    <link href="Task1.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>1. List of all products</h1>
<table>
    <tr>
        <th>Category</th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
    <?php
        foreach($products as $key1 => $val1){
            foreach($val1 as $key2 => $val2){
                foreach($val2 as $key3 => $val3){
                    echo "<tr>";
                    echo "<td>" . $key1 . "</td>";
                    echo "<td>" . $key2 . "</td>";
                    echo "<td>" . $val3['id'] . "</td>";
                    echo "<td>" . $val3['name'] . "</td>";
                    echo "<td>" . $val3['brand'] . "</td>";
                    echo "</tr>";
    }
        }

}
?>                                         
   
</table>

<h1>2. List of all products in Mobile subcategory</h1>
<table>
    <tr>
        <th>Category</th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
<?php 
    foreach($products as $key1 => $val1){
        foreach($val1 as $key2 => $val2){
            foreach($val2 as $key3 => $val3){
                if($key2== "Mobile"){
                echo "<tr>";
                echo "<td>" . $key1 . "</td>";
                echo "<td>" . $key2 . "</td>";
                echo "<td>" . $val3['id'] . "</td>";
                echo "<td>" . $val3['name'] . "</td>";
                echo "<td>" . $val3['brand'] . "</td>";
                echo "</tr>";
                }
        }
    }

}
?>       
</table>


<h1>3. List of all products with brand name samsung</h1>

<?php 
    foreach($products as $key1 => $val1){
        foreach($val1 as $key2 => $val2){
            foreach($val2 as $key3 => $val3){
                if($val3['brand']== "Samsung"){
                /*echo "<tr>";
                echo "<td>" . $key1 . "</td>";
                echo "<td>" . $key2 . "</td>";
                echo "<td>" . $val3['id'] . "</td>";
                echo "<td>" . $val3['name'] . "</td>";
                echo "<td>" . $val3['brand'] . "</td>";
                echo "</tr>";*/

                echo "<div>";
                echo "<ul>";
                echo "<li> Produt Id:". $val3['id'] ."</li>";
                echo "<li> Product Name:". $val3['name'] ."</li>";
                echo "<li> Subcategory:". $key2 ."</li>";
                echo "<li> Category:". $key1 ."</li>";
                echo "</ul>";
                echo "</div>";
                }
        }
    }

}
?>    

<h1>4. Delete Product with id = PR003</h1>
<table>
    <tr>
        <th>Category</th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
    <?php
            
        foreach($products as $key1 => $val1){
            foreach($val1 as $key2 => $val2){
                foreach($val2 as $key3 => $val3){
                    if($val3['id'] == "PR003")
                    {
                        unset($products[$key1][$key2][$key3]);
                    }
                    echo "<tr>";
                    echo "<td>" . $key1 . "</td>";
                    echo "<td>" . $key2 . "</td>";
                    echo "<td>" . $val3['id'] . "</td>";
                    echo "<td>" . $val3['name'] . "</td>";
                    echo "<td>" . $val3['brand'] . "</td>";
                    echo "</tr>";
    }
        }

}
?>                                         
</table>

<h1>5. Update product name = BIG-55 with id = PR002</h1>
<table>
    <tr>
        <th>Category</th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
    <?php
            
        foreach($products as $key1 => $val1){
            foreach($val1 as $key2 => $val2){
                foreach($val2 as $key3 => $val3){
                    if($val3['id'] == "PR002")
                    {
                        $val3['name'] = "BIG-555";
                    }
                    echo "<tr>";
                    echo "<td>" . $key1 . "</td>";
                    echo "<td>" . $key2 . "</td>";
                    echo "<td>" . $val3['id'] . "</td>";
                    echo "<td>" . $val3['name'] . "</td>";
                    echo "<td>" . $val3['brand'] . "</td>";
                    echo "</tr>";
    }
        }

}
?>                      
</body>
</html>