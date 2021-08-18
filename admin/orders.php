<?php include("partials/menu.php"); ?>
    <!--main content starts-->
    <div class="container-fluid" style="margin-left:4%;">
        <h3 style="margin:auto !important;dispaly:block;padding-top:70px;font-family: 'Righteous', cursive;font-size:30px;margin-bottom:5%;">Manage Order</h3>
        <br>
        <br>
        <table class="manage-order">
            <tr>
                <th>IMAGE</th>
                <th>NAME</th>
                <th>AUTHOR</th>
                <th>PRICE</th>
                <th>ORDER DATE</th>
            </tr>
            <?php 
        
                //sql to get data from tbl_order
                $sql="SELECT * FROM orders ORDER BY date";
                $res=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($res);
                $i=1;
                if($count>0){
                    while($row=mysqli_fetch_assoc($res)){
                        $id=$row['id'];
                        $image=$row['image'];
                        $name= $row['name'];
                        $author= $row['author'];
                        $price= $row['price'];
                        $date=$row['date'];   //date year-month-date hour-minute-sec-am/pm
                        $status=$row['status']; 
                    ?>
                        <tr>
                            <td><img src="<?php echo SITEURL;?>images/uploadedBooks/<?php echo $image;?>" alt="image added" width=80px></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $author; ?></td>
                            <td><?php echo $price ; ?></td>
                            <td><?php echo $date; ?></td>
                        </tr>
                    <?php
                    
                    }    
                
                }
                else{
                    
                }
            ?>
            
        </table>      
    </div>
    <!--main content ends-->
<?php include("partials/footer.php") ; ?>