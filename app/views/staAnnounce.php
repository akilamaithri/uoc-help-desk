<?php
require '../helpers/headerIn.php';
require '../views/announcement.php';  
?>

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
        <?php require '../views/staCard.php'; ?>
        
    </div>
    <div class="column-2 box" style="width:100%; padding: 0px 20px 0px 20px">

    <h2> Announcements</h2>
		
        <div class="long-card" id="#long-card">
            <div class="card-content">
            <p class="title">COVID19 Vaccination of staff and the students below 30 years of age State Universities and HEIs</p>			

            <p class="author">Staff</p>
            <p class="date">10th of October, 2021</p>
                <!-- <br><br><br> -->

            <p class="content">To resume onsite academic activities with the assurance of a healthy & safe environment for the university community, the Ministry of Health in collaboration with the University Grants Commission have launched a special vaccination campaign in all state universities for all staff and students yet unvaccinated to access close to their residence, during the week starting from 11th October 2021.
            Accordingly, the universities mentioned below are conducting vaccination programs.   
             </br>         
            You are hereby requested to obtain your vaccine at the nearest university vaccination center.</p>  <br>
            </br>
            <a href="#" class="btn-reply">Edit</a>    
        </div>
        </div>

        <div class="long-card" id="#long-card">
            <div class="card-content">
            <p class="title">UoC Presentation by Director Centre for Environmental Initiatives</p>			

            <p class="author">Staff</p>
            <p class="date">10th of October, 2021</p>
                <!-- <br><br><br> -->

            <p class="content">Dear All</br>
             I share with you the presentation made on our behalf by Professor Erandathie Lokupitiya, Director of the CEI of UoC.
              </br>
             While being well aware that each of us are trying our level best to cope with the current COVID19 crisis, I believe that this synopsis would shed some rays of sunshine and hope.
            </br>
            While thanking Professor Lokupitiya and team, I wish you the best of health and contentment. Stay safe! </p>  <br>
             </br>
             <a href="#" class="btn-reply">Edit</a>        
        </div>
        </div>


    </div>
</div>


<?php require '../helpers/footer.php';?>
