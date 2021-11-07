
<div class = "comp_container" id="comp_container">
    <div class="complain_box">

        <div class="title">Complaint Form</div><br>

        <form name = "complaint-form" action="#">

            <div class="comp_details">

                <div class="comp_box">	
                    <select name="issuetype" id="issuetype" required= "">
                        <option value="0">Select the type of the issue</option>
                        <option value="bur">Bursary Issues</option>
                        <option value="lap">Laptop Loan Issues</option>
                        <option value="mah">Mahapola</option>
                        <option value="hos">Hostel Issues</option>
                        <option value="veh">Vehicle Pass</option>
                        <option value="sea">Season/Railway tickets</option>                     
                        <option value="rag">Ragging and Violance Issues</option>
                        <option value="aca">Academic Issues</option>
                    </select>
                </div>
                
                <input type="text" id="Title" name="Title" placeholder="Title" required= "">
               

                <textarea name="issue" placeholder="Add description to your issue" required= "" style="height:100px"></textarea>

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
                <input type = "checkbox" id="privacy" name="type" value="public">
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
                <br>
            </div>
		</form>
    </div>
</div>
