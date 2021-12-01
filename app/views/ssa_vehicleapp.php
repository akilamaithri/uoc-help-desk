<?php
   
    require '../controllers/vehiclepass.php';
   
?>


<!DOCTYPE html>
<html>
  <head>
  <title>UOC HELP DESK</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
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
      color: #095484;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #095484;
      color: #095484;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
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
      }
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
      border: 2px solid #095484;
      }
      label.check:before {
      top: 2px;
      width: 16px;
      height: 16px;
      border-radius: 2px;
      border: 1px solid #095484;
      }
      input[type=checkbox]:checked + .check:before {
      background: #095484;
      }
      label.radio:after {
      left: 5px;
      border: 3px solid #095484;
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
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #0666a3;
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
  </head>
  <body>

    <div class="testbox">
        
             <form action="../controllers/vehiclepass.php" method="post">
                        <div class="banner">
                          <h1>Application form of the  vehicle pass for University students</h1>
                        </div>
                            <div class="question">
       
                            </div>
                            <div class="item">
      <p>Undergraduate Year<span class="required">*</span></p>
        <input type="text" name="year" required/>
      </div>
                       
      <h5>1. Your Details:</h5>
      <div class="item">
        <p>Name with Initials<span class="required">*</span></p>
        <input type="text" name="name" required/>
      </div>
      <div class="item">
        <p> Address<span class="required">*</span></p>
        <input type="text" name="address" placeholder="Street address" required/>
        <div class="city-item">
          <input type="text" name="city" placeholder="City" required/>
          <input type="text" name="province" placeholder="Province" required/>
          <input type="text" name="zip" placeholder="Postal / Zip code" required/>
        </div>
      </div>
<div class="item">
        <p>Contact Number<span class="required">*</span></p>
        <input type="text" name="contact" required/>
      </div>
      <div class="item">
        <p>National Identity Card No<span class="required">*</span></p>
        <input type="text" name="id_no" />
      </div>
      <div class="item">
        <p>Faculty<span class="required">*</span></p>
        <input type="text" name="faculty" required/>
      </div>
      <div class="question">
        <p>Gender<span class="required">*</span></p>
        <div class="question-answer">
          <input type="radio" value="male" name ="gender"id="radio_5" required/>
          <label for="radio_5" class="radio"><span>Male</span></label>
          <input type="radio" value="female" name ="gender"id="radio_6"  required/>
          <label for="radio_6" class="radio"><span>Female</span></label>
        </div>
      </div>
      <h5>2.Vehicle Details</h5>
      <div class="question">
        <p>Type of the Vehicle (Motor bicycle/Car/Van etc)<span class="required">*</span></p>
        <input type="text" name="vehicle" required/>
        </div>
     

      <div class="item">
        <p>Vehicle No</p>
        <input type="text" name="vehi_no" />
      </div>

      <div class="item">
        <p>Name of the owner of the Vehicle (Submit the copy of Vehicle registration book)</p>
        <input type="text" name="owner" />
        <p><b> If you are not the owner of the vehicle please submit a formal letterof authorization to use the vehicle</b></p>
      </div>

      <div class="item">
        <p>Form submission date</p>
        <input type="date" name="date" />
      </div>
      <br />
        <div class="question">
              <input type="checkbox" value="none" id="check_9" name="check" required/>
              <label for="check_9" class="check"><span>I certify that the above information given by me true and correct. I do not hold the University liable for the 
                 safety of the above vehicle during the hours I park the vehicle inside the University premises.
              </span></label>
            </div>
       
        
        <div class="item">
          <p>Electronic signature<span class="required">*</span></p>
          <textarea rows="3" required></textarea>
        </div>

        <p><b> Don't foget to attach the recommendation letter of Dean/Head of the department/ DR/SAR of the faculty</b></p>
        <div class="btn-block">
                        <button type="submit"  name="submit" value="Submit">Submit</button>
                    </form>
                
   
</body>
</html>