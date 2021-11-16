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
    <form action="/">
      <div class="banner">
        <h1>Donation Form for Donors</h1>
      </div>
      <br>
      <div class="question">
        <p>Please tick the donation type/types<span class="required">*</span></p>
       
        <div class="question-answer checkbox-item">
          <div>
            <input type="checkbox" value="none" id="check_1" name="checklist" required/>
            <label for="check_1" class="check"><span>Monetary Value</span></label>
          </div>
          <div>
            <input type="checkbox" value="none" id="check_2" name="checklist" required/>
            <label for="check_2" class="check"><span>Laptops</span></label>
          </div>
          <div>
            <input type="checkbox" value="none" id="check_3" name="checklist" required/>
            <label for="check_3" class="check"><span>Vehicle</span></label>
          </div>
          <div>
            <input type="checkbox" value="none" id="check_4" name="checklist" required/>
            <label for="check_4" class="check"><span>Laboratory Equipments for medical students</span></label>
          </div>
          <div>
            <input type="checkbox" value="none" id="check_5" name="checklist" required/>
            <label for="check_5" class="check"><span>Academic Equipments</span></label>
          </div>
          <div>
            <input type="checkbox" value="none" id="check_6" name="checklist" required/>
            <label for="check_6" class="check"><span>Other</span></label>
          </div>
</div>
<div class="item">
        <p>If you tick other, please mention the donation type in here</p>
        <input type="text" name="name" />
      </div>
      <div class="item">
        <p>Date you wish to donate</p>
        <input type="date" name="bdate" required/>
        <i class="fas fa-calendar-alt"></i>
      </div>
      <h5>1. Donor Details:</h5>
      <div class="item">
        <p>Name with Initials<span class="required">*</span></p>
        <input type="text" name="name" required/>
      </div>
      <div class="item">
        <p> Address<span class="required">*</span></p>
        <input type="text" name="name" placeholder="Street address" required/>
        <input type="text" name="name" placeholder="Street address line 2" required/>
        <div class="city-item">
          <input type="text" name="name" placeholder="City" required/>
          <input type="text" name="name" placeholder="Region" required/>
          <input type="text" name="name" placeholder="Postal / Zip code" required/>
          <input type="text" name="name" placeholder="Country" required/>
        </div>
      </div>
      <div class="item">
        <p>Contact Number<span class="required">*</span></p>
        <input type="text" name="name" required/>
      </div>
      <div class="item">
        <p>Fax</p>
        <input type="text" name="name" />
      </div>
      <div class="item">
        <p>Email<span class="required">*</span></p>
        <input type="text" name="name" required/>
      </div>
     

      <h5>2.Donation Details</h5>
      <div class="question">
        <p>Is it for the students of particular faculty/ open to all the undegraduates?<span class="required">*</span></p>
        <div class="question-answer">
          <input type="radio" value="none" id="radio_1" name="Faculty" required/>
          <label for="radio_1" class="radio"><span>Faculty</span></label>
          <input type="radio" value="none" id="radio_2" name="All" required/>
          <label for="radio_2" class="radio"><span>All</span></label>
        </div>
      </div>

      <div class="item">
        <p>If you tick Faculty, mention faculty name/names;</p>
        <input type="text" name="name" />
      </div>

      <h5>3.If Donation is a monetary value ;</h5>

      <div class="item">
        <p>The amount you wish to donate</p>
        <input type="text" name="name" />
      </div>
      <div class="question">
        <p>Type<span class="required">*</span></p>
        <div class="question-answer">
          <input type="radio" value="none" id="radio_3" name="cash" required/>
          <label for="radio_3" class="radio"><span>Cash</span></label>
          <input type="radio" value="none" id="radio_4" name="cheque" required/>
          <label for="radio_4" class="radio"><span>Cheque</span></label>
          <input type="radio" value="none" id="radio_4" name="deposit" required/>
          <label for="radio_4" class="radio"><span> Bank(deposit)</span></label>
        </div>
      </div>

      <div class="question">
        <p>How long would you be able to donate?<span class="required">*</span></p>
        <div class="question-answer">
          <input type="radio" value="none" id="radio_5" name="six" required/>
          <label for="radio_5" class="radio"><span>Less than six years</span></label>
          <input type="radio" value="none" id="radio_6" name="one" required/>
          <label for="radio_6" class="radio"><span>6-12 months</span></label>
          <input type="radio" value="none" id="radio_6" name="more" required/>
          <label for="radio_6" class="radio"><span>More than one year</span></label>
        </div>
      </div>

      <h5>4. If donation is a vehicle/equipment/item ;</h5>
      <div class="item">
        <p>Mention them specifically<span class="required">*</span></p>
        <input type="text" name="name" />
      </div>
      <div class="item">
        <p>The value of the item/items</p>
        <input type="text" name="name" />
      </div>
      <div class="item">
        <p>Amount</p>
        <input type="text" name="name" />
      </div>
      <div class="item">
        <p>Add more details regarding you donation</p>
        <textarea rows="3" required></textarea>
      </div>

      <h5>5.General:</h5>
      <div class="item">
        <p>Your expectations/target through this donation</p>
        <input type="text" name="name" />
      </div>
      <div class="item">
        <p>If you have any specific requirments you can suggest/p>
        <textarea rows="3" required></textarea>
      </div>
      
        <br />
        <div class="question">
              <input type="checkbox" value="none" id="check_9" name="check" required/>
              <label for="check_9" class="check"><span>I agree to the <a href="https://cmb.ac.lk/services/">terms of providing this service.</a></span></label>
            </div>
       
        </div>
        <div class="item">
          <p>Electronic signature<span class="required">*</span></p>
          <textarea rows="3" required></textarea>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
        </form>
    </div>
  </body>
</html>