
<div class = "comp_container" id="ask_friend">
    <div class="complain_box">

        <div class="title">Ask Friend</div><br>

        <form name = "complaint-form" action="#">

            <div class="comp_details">

                <input type="text" id="Title" name="Title" placeholder="Title" required= "">
               

                <textarea name="issue" placeholder="Add description to your issue" required= "" style="height:100px"></textarea>
          
                <br>
                <input type = "checkbox" id="privacy" name="type" value="public">
                <label for="notice">Private</label>
                <br>

                <div class="btn">
                    <input type="submit" class="mainbtn" name="complain" id="complain_button" value="Publish">
                </div>

                <div class="btn">
                    <button class="mainbtn" onclick="closeFriend()">Close</button>
                </div>
                
                <br>
            </div>
		</form>
    </div>
</div>
