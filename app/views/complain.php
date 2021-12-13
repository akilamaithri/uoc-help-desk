
<div class = "comp_container" id="comp_container">
    <div class="complain_box">

        <div class="title">Complaint Form</div><br>

        <form name = "complaint-form" action="studentDash.php" method="POST">

            <div class="comp_details">

                <div class="comp_box">	
                    <select name="issuetype" id="issuetype" required= "">
                        <option value="issuetype">Select the type of the issue</option>
                        <option value="Bursary Issues">Bursary Issues</option>
                        <option value="Laptop Loan Issues">Laptop Loan Issues</option>
                        <option value="Mahapola">Mahapola</option>
                        <option value="Hostel Issues">Hostel Issues</option>
                        <option value="Vehicle Pass">Vehicle Pass</option>
                        <option value="Season/Railway tickets">Season/Railway tickets</option>                     
                        <option value="Ragging and Violance Issues">Ragging and Violance Issues</option>
                        <option value="Academic Issues">Academic Issues</option>
                    </select>
                </div>
                
                <input type="text" id="Title" name="Title" placeholder="Complain Title" required= "">
               

                <textarea name="complain_text" id="complain_text"  placeholder="Describe your issue" required= "" style="height:100px"></textarea>

                <input type="file" id="fileToUpload" name="fileToUpload">
                <!-- <script src="../../public/javascript/nicEdit.js" type="text/javascript"></script>
                <script type="text/javascript">
                bkLib.onDomLoaded(function() {
                    new nicEditor().panelInstance('area1');
                    new nicEditor({fullPanel : true}).panelInstance('area2');
                    new nicEditor({iconsPath : '../../public/img/icons/nicEditorIcons.gif'}).panelInstance('area3');
                    new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
                    new nicEditor({maxHeight : 40}).panelInstance('area5');
                });
                </script> -->            
                <br>
                <input type = "checkbox" name="type" value="Private">
                <label for="notice">Private</label>
                <br>
                <div class="compBtns" align="left">
                    <div class="btn">
                        <input type="submit" class="mainbtn" name="complain" id="complain_button" value="Publish">
                    </div>

                    <div class="btn">
                        <button class="mainbtn" onclick="closeForm()">Close</button>
                    </div>
                </div>
                
            </div>
		</form>
    </div>
</div>
