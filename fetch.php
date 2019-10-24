<?php
include 'db.php';
$output = '';
		$sel_side="SELECT pan_no from pan_no WHERE pan_no LIKE '%".$_POST["search"]."%' ";
		$run_side=mysqli_query($conn,$sel_side);
        if(mysqli_num_rows($run_side) > 0){
        	while( $rows=mysqli_fetch_array($run_side) ){
        		$output .=' <li data-value="'.$rows['pan_no'].'">'.$rows['pan_no'].'</li> ';
        	}
        	echo $output;
        }

        if( strlen($_POST["search"]) == 9 ){
            
            if( mysqli_query($conn,"INSERT  INTO pan_no ( pan_no ) VALUES ('$_POST[search]')" )){
               echo 'added';
            }
        }

        
?>
