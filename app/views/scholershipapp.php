<!DOCTYPE html>
<html>
  <head>
    <title>UOC HELP DESK</title>

<style>
    html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      h5 {
      margin: 10px 0;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #5a1e50; 
      }
      .banner {
      position: relative;
      height: 210px;
      background-color: #5a1e50;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.5); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder, a {
      color: #56T]
      ;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #800080;
      color: #800080;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      /* input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      } */
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio, label.check {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      .checkbox-item label {
      margin: 5px 20px 10px 0;
      }
      label.radio:before, label.check:before {
      content: "";
      position: absolute;
      left: 0;
      }
      label.radio:before {
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #800080;
      }
      label.check:before {
      top: 2px;
      width: 16px;
      height: 16px;
      border-radius: 2px;
      border: 1px solid #800080;
      }
      input[type=checkbox]:checked + .check:before {
      background: #800080;
      }
      label.radio:after {
      left: 5px;
      border: 3px solid #800080;
      }
      label.check:after {
      left: 4px;
      border: 3px solid #fff;
      }
      label.radio:after, label.check:after {
      content: "";
      position: absolute;
      top: 6px;
      width: 8px;
      height: 4px;
      background: transparent;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after, input[type=checkbox]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      color: #800080;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #800080;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #800070;
      }
      @media (min-width: 568px) {
      .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
  
    </style>

<script type="text/javascript">
     
     function validate(){
        if( document.myForm.initialName.value == "" ) {
           alert( "Please provide your name with initials!" );
           document.myForm.initialName.focus() ;
           return false;
        }
        if( document.myForm.streetone.value == "" ){
           alert( "Please provide your Address!" );
           document.myForm.streetone.focus() ;
           return false;
        }
        if( document.myForm.city.value == "" ){
           alert( "Please provide the City!" );
           document.myForm.city.focus() ;
           return false;
        }
        if( document.myForm.zipCode.value == "" ||
             isNaN( document.myForm.zip.value ) ||
             document.myForm.zipCode.value.length != 5 )
        {
            alert( "Please provide a Zip in the format #####." );
            document.myForm.zipCode.focus() ;
            return false;
        }

        if( document.myForm.conNo.value == "" ||
             isNaN( document.myForm.conNo.value ) ||
             document.myForm.conNo.value.length != 10 )
        {
            alert( "Please provide the contact number with 10 digits." );
            document.myForm.conNo.focus() ;
            return false;
        }
        return(true);
     }
    //  $("#esighn").click(function(){
    //   var myCanvas = document.getElementById('canvas');
    //   var img = myCanvas.toDataURL("img/png");
    //   console.log(img);
    //  });
  </script>
  </head>
  <body>

    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
  </head>
  <body> -->

    

      <div class="testbox">
      <form action = "../controllers/Scholership.php" name="myForm" onsubmit="return(validate());" method="POST">
        
          <div class="banner">
            <h1>Application form for Season Ticket</h1>
          </div>
      
          <div class="item">
          <p>Undergraduate Year </p>
            <select name="year">
              <option value= "First Year"> First Year</option>
              <option value= "second Year"> Second Year</option>
              <option value= "Third Year"> Third Year</option>
              <option value= "Fourth Year"> Fourth Year</option> 
    </select>
          </div>

          <div class="item">
            <p>Date of the submission<span class="required">*</span></p>
            <input type="date" name="subdate" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
          
          <h5>1. Your Details:</h5>
          <div class="item">
            <p>Name with Initials<span class="required">*</span></p>
            <input type="text" name="initialName" required/>
          </div>
          <div class="item">
            <p> Address<span class="required">*</span></p>
            <input type="text" name="streetone" placeholder="Street address" required/>
            <input type="text" name="streettwo" placeholder="Street address line 2" required/>
            <div class="city-item">
              <input type="text" name="city" placeholder="City" required/>
              <select name="province">
              <option value= "Province"> Province</option>
              <option value= "western"> Western Province</option>
              <option value= "Southern"> Southern Province</option>
              <option value= "Northern"> Northern Province</option> 
              <option value= "North Central"> North Central Province</option> 
              <option value= "North Western "> North Western Province</option> 
              <option value= "Eastern"> Eastern Province</option> 
              <option value= "Uva"> Uva Province</option> 
              <option value= "Sabaragamuwa"> Sabaragamuwa Province</option>
              <option value= "Central"> Central Province</option> 
           </select>
              <input type="text" name="zipCode" placeholder="Postal / Zip code" required/>
            </div>
          </div>

          <div class="item">
            <p>Contact Number<span class="required">*</span></p>
            <input type="text" name="conNo" required/>
          </div>
          
          <div class="item">
            <p>Email<span class="required">*</span></p>
            <input type="email" name="mailAddress" required/>
          </div>

      
          <div class="question">
            <p>Gender<span class="required">*</span></p>
            <div class="question-answer">
              <input type="radio" value="male" id="radio_5" name="genderType" required/>
              <label for="radio_5" class="radio"><span>Male</span></label>
              <input type="radio" value="female" id="radio_6" name="genderType" required/>
              <label for="radio_6" class="radio"><span>Female</span></label>
            </div>
    </div>
      

            <div class="item">
              <p>Electronic signature<span class="required">*</span></p>
              <textarea rows="3" name="esign" required></textarea>
            </div>
            <div class="btn-block">
              <button type="submit" name="submit">Generate PDF</button>
            </div>
      </form>
    </div>


  </body>
</html>