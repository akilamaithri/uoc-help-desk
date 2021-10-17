 <?php
require '../modules/connect.php';
require '../controllers/register.php';
require '../controllers/login.php';
require '../helpers/header.php';
?>

<html>
    <head>
        <title>UOC HELP DESK</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="../../public/javascript/register.js"></script>

        <script src="https://kit.fontawesome.com/05dbc83c69.js" cross-origin="anonymous"></script>
    </head>

<body>
    <div class = "comp_container">
    <div class="complain_box">

        <div class="title">Complaint Form</div>

        <form name = "complaint-form" action="#">

            <div class="comp_details">
            
                <input type ="radio" id="html" name="compType" value="complaint" checked="checked">
                <label for="complaint">Complaint</label>
                
                <input type = "radio" id="html" name="compType" value="notice">
                <label for="notice">Notice |</label>
                
                <input type = "checkbox" id="privacy" name="type" value="public">
                <label for="notice">Private</label>
        
                <div class="comp_box">	
                    <select name="issuetype" id="issuetype">
                        <option value="0">Select the type of the issue</option>
                        <option value="fin">Finance Issues</option>
                        <option value="bur">Bursary Issues</option>
                        <option value="hos">Hostel Issues</option>
                        <option value="med">Medical Issues</option>
                        <option value="lap">Laptop Loan Issues</option>
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
                <br><br>
            
                <!-- <div class="icon">
                    <i class="fas fa-undo-alt"></i>
                    <i class="fas fa-redo"></i>
                    <i class="fas fa-bold"></i>
                    <i class="fas fa-italic"></i>
                    <i class="fas fa-underline"></i>
                    <i class="fas fa-list-ol"></i>
                    <i class="fas fa-align-justify"></i>
                    <i class="fas fa-align-right"></i>
                    <i class="fas fa-align-left"></i>
                    <i class="fas fa-align-center"></i>
                    <i class="fas fa-image"></i>
                    <i class="fas fa-link"></i>
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-at"></i>
                    <i class="far fa-smile-beam"></i>
                </div> -->
                <input type="submit" value="Send" class="mainbtn">
                <br>
            </div>
		</form>
    </div>
    </div>

</body>
    <?php require '../helpers/footer.php';?>
