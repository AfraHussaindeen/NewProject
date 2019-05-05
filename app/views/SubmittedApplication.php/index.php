<?php $this->setSiteTitle('Overseas Training');?>

<?php $this->start('head'); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<?php $this->end(); ?>
<?php $this->start('body'); ?>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					
					

					

				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Name Initial</th>
									<th class="cell100 column2">regNumber</th>
									<th class="cell100 column3">email</th>
									<th class="cell100 column4">contact</th>
									<th class="cell100 column5">field</th>
									<th class="cell100 column5">departure</th>
									<th class="cell100 column5">arrival</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php
            session_start();
            $usernm="root";
            $passwd="";
            $host="localhost";
            $database="notifications";
          
            mysql_connect($host,$usernm,$passwd);
    
            mysql_select_db($database);
    
            $sql = "SELECT * FROM comments WHERE comment_status=0 ORDER BY comment_id DESC ";
            $result = mysql_query ($sql) or die (mysql_error ());
            $con = mysqli_connect("localhost", "root", "", "comments");
            if(isset($_POST["comment_subject"]))
      {

      $subject = mysqli_real_escape_string($con, $_POST["comment_subject"]);
      $comment = mysqli_real_escape_string($con, $_POST["comment_text"]);
      $query = "
      INSERT INTO com(comment_subject, comment_text)
      VALUES ('$subject', '$comment')
      ";
      mysqli_query($con, $query);
      }
        while ($row = mysql_fetch_array ($result)){

        ?>
            <form name="form1" method="post">
                <tr class="row100 body" style="background-color:#8FA1FB">
                    <td class="cell100 column1"><input type="text" style="color:#5D6D7E; font-family:Verdana; font-size:15px; "  name="comment_subject" value="<?php echo $row ['comment_subject']; ?> " ></td>
                    <td class="cell100 column2"><input type="text" style="color:#5D6D7E; font-family:Verdana; font-size:15px; "  name="comment_text" value="<?php echo $row ['comment_text']; ?>"></td>
                    <td class="cell100 column3"><input type="submit" style="color:#5A6D7E; font-family:Verdana; font-size:15px;  " name="submit" value="Update">
                </tr>
                </form>
            <?php
            }
            ?>
							</tbody>
						</table>
					</div>
				</div>

				


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php $this->end(); ?>