
<div class = "comp_container" id="ann_container">
    <div class="complain_box">

        <div class="title">Announcement Form</div><br>

        <form name = "complaint-form" action="studentDash.php" method="POST">

            <div class="comp_details">

                <div class="comp_box">	
                    <select name="issuetype" id="issuetype" required= "">
                        <option value="issuetype">Announcement Type</option>
                        <option value="Bursary Issues"></option>
                        <option value="Laptop Loan Issues">Laptop Loan Issues</option>
                    </select>
                </div>
                
                <input type="text" id="Title" name="Title" placeholder="Annoucement Title" required= "">               

                <textarea name="complain_text" id="complain_text"  placeholder="Announcement Body" required= "" style="height:100px"></textarea>
         
                <br>

                <br>
                <div class="compBtns" align="left">
                    <div class="btn">
                        <input type="submit" class="mainbtn" name="complain" id="complain_button" value="Publish">
                    </div>

                    <div class="btn">
                        <button class="mainbtn" onclick="closeAnnouncement()">Close</button>
                    </div>
                </div>
                
            </div>
		</form>
    </div>
</div>
