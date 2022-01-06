<?php
require '../helpers/headerIn.php';
require '../views/complain.php';   
require '../helpers/scholership_header.php';

?>

<html>
    <head>
        <title>UOC HELP DESK</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="../../public/javascript/register.js"></script>
    </head>

<body>

<!------------------- Department card -------------------->

    

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
                <?php require '../views/pplCard.php'; ?>

        
    </div>

    <div class="column-2 box" style="width:100%; padding: 0px 20px 0px 20px">
	
	 <div class="comp_box_short">	
                    <select name="issuetype" id="issuetype">
                        <option value="0">English</option>
                        <option value="fin">Sinhala</option>
                        <option value="bur">Tamil</option>
                    </select>

                <div class="long-card" id="#long-card">
                    <div class="card-content">				
                        

                    <p class="title">Overview</p>


                    <p class="content">The $2,000 “No Essay” Scholarship is an easy scholarship with no essay required! The scholarship can be used to cover tuition, housing, books, or any education-related expenses. The $2,000 “No Essay” Scholarship is an easy scholarship with no essay required! The scholarship can be used to cover tuition, housing, books, or any education-related expenses.  The $2,000 “No Essay” Scholarship is an easy scholarship with no essay required! The scholarship can be used to cover tuition, housing, books, or any education-related expenses. </p>
                        <br>

                    </div>
			    </div>

                <div class="long-card" id="#long-card">
                    <div class="card-content">				
                        

                    <p class="title">Overview</p>


                    <p class="content">The $2,000 “No Essay” Scholarship is an easy scholarship with no essay required! The scholarship can be used to cover tuition, housing, books, or any education-related expenses. The $2,000 “No Essay” Scholarship is an easy scholarship with no essay required! The scholarship can be used to cover tuition, housing, books, or any education-related expenses.  The $2,000 “No Essay” Scholarship is an easy scholarship with no essay required! The scholarship can be used to cover tuition, housing, books, or any education-related expenses.</p>
                        <br>

                    </div>
			    </div>

                <div class="long-card" id="#long-card">
                    <div class="card-content">				
                        

                    <p class="title">Overview</p>


                    <p class="content">The $2,000 “No Essay” Scholarship is an easy scholarship with no essay required! The scholarship can be used to cover tuition, housing, books, or any education-related expenses. The $2,000 “No Essay” Scholarship is an easy scholarship with no essay required! The scholarship can be used to cover tuition, housing, books, or any education-related expenses.  The $2,000 “No Essay” Scholarship is an easy scholarship with no essay required! The scholarship can be used to cover tuition, housing, books, or any education-related expenses.</p>
                        <br>

                    </div>
			    </div>

                <ul class="cards">
			<li class="cards_item_dep" id="topic1" onclick="location.href='scholershipapp.php'">
				<div class="depCard">
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Application Form</h3>
						</div>
					</div>
				</div>
			</li>

			<li class="cards_item_dep" id="topic2">
				<div class="depCard">
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Submission link</h3>
						</div>
					</div>
				</div>
			</li>

            <li class="cards_item_dep" id="topic2">
				<div class="depCard">
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Report an Issue</h3>
						</div>
					</div>
				</div>
			</li>
		</ul>
        <br><br><br>
        <ul class="cards" style="width:90%">
				<li >

					
						<div class="depCard_content" style=" border-radius:5px; border:1px solid rgb(173, 205, 206);">
					      <p class="depCard_text" style="font-size:14px; line-height:1.5">  Season Tickets at concession rates for Students to be used for the train services and public transport operated by Sri Lanka Transport Board are issued only for a limited distance.</p>
						</div>
		</ul>
	</div>


    </div>

    </div>

</body>

</div>
    <?php require '../helpers/footer.php';?>



<!-- <a href="<?php echo $userLoggedIn; ?>">  -->
   <!-- <?php echo $user['first_name'] . " " . $user['last_name']; ?>  -->
</a> 
<br>
<!-- <?php echo "Posts: " . $user['num_posts']. "<br>"; 
echo "Likes: " . $user['num_likes']; 

?> 