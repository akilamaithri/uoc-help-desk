
<div class = "comp_container" id="ann_container">
    <div class="complain_box">

        <div class="title">Announcement</div><br>

        <form name = "complaint-form" action="#">

            <div class="comp_details">

                <div class="comp_box">	
                    <select name="issuetype" id="issuetype" required= "">
                        <option value="0">Category</option>
                        <option value="com">Common</option>
                        <option value="sci">Science Faculty</option>
                        <option value="med">Medicine Faculty</option>
                        <option value="ucsc">UCSC</option>
                        <option value="art">Art Faculty</option>
                        <option value="man">Management & Finance Faculty</option>
                        <option value="law">Law Faculty</option>                     
                        <option value="rag">Technology Faculty</option>
                       
                    </select>
                </div>
                
                <input type="text" id="Title" name="Title" placeholder="Title" required= "">
               

                <textarea name="issue" placeholder="Add description to your announcement" required= "" style="height:100px"></textarea>

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
                <div class="compBtns" align="left">
                    <div class="btn">
                        <input type="submit" class="mainbtn" name="complain" id="complain_button" value="Publish">
                    </div>

                    <div class="btn">
                        <button class="mainbtn" onclick="closeAnnounce()">Close</button>
                    </div>
                </div>
                <br>
            </div>
		</form>
    </div>
</div>
