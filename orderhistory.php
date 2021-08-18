<?php include('partials-front/menu.php')?>
<?php $id = $_GET['id']; ?>

<head>
    <style>

        /*manage -order*/
.manage-order{
    width:100%;
    margin: 1% 5% 0 0;
    border-collapse:collapse;
    font-size:10px;
}
.manage-order tr th{
    border:1px solid black;
    text-align:center  !important;
    width:auto;
    PADDING:10PX;
    font-family: "Times New Roman", Times, serif;
}
.manage-order  tr td{
    padding:1%;
    text-align:center;
    font-size:medium;
    font-family: "Times New Roman", Times, serif;
}
/*manage order ends*/

    </style>
</head>

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
                $sql="SELECT * FROM orders WHERE id=$id";
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

<?php include('partials-front/footer.php'); ?>