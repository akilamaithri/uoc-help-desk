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
      <form action = "../controllers/Laptoploan.php" name="myForm" onsubmit="return(validate());" method="POST">
        
          <div class="banner">
            <h1>Application form for Laptop Loan</h1>
          </div>
          <div class="item">
            <p>Student Number<span class="required">*</span></p>
            <input type="text" name="stuNum" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>

          <div class="item">
            <p>Date of the submission<span class="required">*</span></p>
            <input type="date" name="subdate" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
          
          <h4>1. Your Details:</h4>
          <div class="item">
            <p>Name with Initials<span class="required">*</span></p>
            <input type="text" name="initialName" required/>
          </div>

          <div class="item">
            <p>NIC<span class="required">*</span></p>
            <input type="text" name="nic" required/>
          </div>

          <h7>Contact Number :</h7>
          <div class="item">
            <p>Fixed <span class="required"></span></p>
            <input type="tel" name="conNoF"/>
          </div>

          <div class="item">
            <p>Mobile <span class="required">*</span></p>
            <input type="tel" name="conNoM" required/>
          </div>
          
          <h4>2. Other Details:</h4>
          <div class="item">
            <p>Name of Supplier<span class="required">*</span></p>
            <input type="text" name="suplier" required/>
          </div>

          <div class="item">
            <p>Selected Option/Brand/Model of the Laptop<span class="required">*</span></p>
            <input type="text" name="laptopModel" required/>
          </div>

          <div class="item">
            <p>Price<span class="required">*</span></p>
            <input type="price" name="price" required/>
          </div>

          <div class="item">
            <p>Selected BOC Branch<span class="required">*</span></p>
            <select name="branch">
              

<option>
<value>7010</value>
<value>448</value>
<value>Addalachchenai</value>
</option>
<option>
<value>7010</value>
<value>487</value>
<value>Adikarigama</value>
</option>
<option>
<value>7010</value>
<value>657</value>
<value>Agalawatta</value>
</option>
<option>
<value>7010</value>
<value>488</value>
<value>Agarapathana</value>
</option>
<option>
<value>7010</value>
<value>276</value>
<value>Ahangama</value>
</option>
<option>
<value>7010</value>
<value>754</value>
<value>Ahungalla</value>
</option>
<option>
<value>7010</value>
<value>590</value>
<value>Akkaraipattu</value>
</option>
<option>
<value>7010</value>
<value>489</value>
<value>Akurana</value>
</option>
<option>
<value>7010</value>
<value>613</value>
<value>Akuressa</value>
</option>
<option>
<value>7010</value>
<value>812</value>
<value>Aladeniya</value>
</option>
<option>
<value>7010</value>
<value>449</value>
<value>Alankerny</value>
</option>
<option>
<value>7010</value>
<value>380</value>
<value>Alaveddy</value>
</option>
<option>
<value>7010</value>
<value>768</value>
<value>Alawathugoda</value>
</option>
<option>
<value>7010</value>
<value>498</value>
<value>Alawwa</value>
</option>
<option>
<value>7010</value>
<value>680</value>
<value>Aluthgama</value>
</option>
<option>
<value>7010</value>
<value>32</value>
<value>Aluthkade</value>
</option>
<option>
<value>7010</value>
<value>277</value>
<value>Aluthwala</value>
</option>
<option>
<value>7010</value>
<value>47</value>
<value>Ambalangoda</value>
</option>
<option>
<value>7010</value>
<value>537</value>
<value>Ambalantota</value>
</option>
<option>
<value>7010</value>
<value>329</value>
<value>Ambanpola</value>
</option>
<option>
<value>7010</value>
<value>21</value>
<value>Ampara</value>
</option>
<option>
<value>7010</value>
<value>548</value>
<value>Anamaduwa</value>
</option>
<option>
<value>7010</value>
<value>330</value>
<value>Anawilundawa</value>
</option>
<option>
<value>7010</value>
<value>381</value>
<value>Andankulam</value>
</option>
<option>
<value>7010</value>
<value>494</value>
<value>Andiambalama</value>
</option>
<option>
<value>7010</value>
<value>774</value>
<value>Angunakolapelessa</value>
</option>
<option>
<value>7010</value>
<value>490</value>
<value>Ankumbura</value>
</option>
<option>
<value>7010</value>
<value>22</value>
<value>Anuradhapura</value>
</option>
<option>
<value>7010</value>
<value>551</value>
<value>Anuradhapura Bazzar</value>
</option>
<option>
<value>7010</value>
<value>98</value>
<value>Anuradhapura New Town</value>
</option>
<option>
<value>7010</value>
<value>451</value>
<value>Araiyampathy</value>
</option>
<option>
<value>7010</value>
<value>599</value>
<value>Aralaganwila</value>
</option>
<option>
<value>7010</value>
<value>566</value>
<value>Aranayake</value>
</option>
<option>
<value>7010</value>
<value>713</value>
<value>Asiri Cenoptional</value>
</option>
<option>
<value>7010</value>
<value>778</value>
<value>Atchuvely</value>
</option>
<option>
<value>7010</value>
<value>757</value>
<value>Athurugiriya</value>
</option>
<option>
<value>7010</value>
<value>530</value>
<value>Avissawella</value>
</option>
<option>
<value>7010</value>
<value>401</value>
<value>Ayagama</value>
</option>
<option>
<value>7010</value>
<value>540</value>
<value>Badalkumbura</value>
</option>
<option>
<value>7010</value>
<value>525</value>
<value>Baddegama</value>
</option>
<option>
<value>7010</value>
<value>11</value>
<value>Badulla</value>
</option>
<option>
<value>7010</value>
<value>729</value>
<value>Badulla City</value>
</option>
<option>
<value>7010</value>
<value>662</value>
<value>Baduraliya</value>
</option>
<option>
<value>7010</value>
<value>652</value>
<value>Bakamuna</value>
</option>
<option>
<value>7010</value>
<value>688</value>
<value>Balangoda</value>
</option>
<option>
<value>7010</value>
<value>320</value>
<value>Ballaketuwa</value>
</option>
<option>
<value>7010</value>
<value>37</value>
<value>Bambalapitiya</value>
</option>
<option>
<value>7010</value>
<value>665</value>
<value>Bandaragama</value>
</option>
<option>
<value>7010</value>
<value>515</value>
<value>Bandarawela</value>
</option>
<option>
<value>7010</value>
<value>278</value>
<value>Barawakumbura</value>
</option>
<option>
<value>7010</value>
<value>522</value>
<value>Batapola</value>
</option>
<option>
<value>7010</value>
<value>679</value>
<value>Battaramulla</value>
</option>
<option>
<value>7010</value>
<value>12</value>
<value>Batticaloa</value>
</option>
<option>
<value>7010</value>
<value>452</value>
<value>Batticaloa Town</value>
</option>
<option>
<value>7010</value>
<value>708</value>
<value>Batuwatte</value>
</option>
<option>
<value>7010</value>
<value>539</value>
<value>Beliatta</value>
</option>
<option>
<value>7010</value>
<value>102</value>
<value>Bentota</value>
</option>
<option>
<value>7010</value>
<value>58</value>
<value>Beruwala</value>
</option>
<option>
<value>7010</value>
<value>579</value>
<value>Bibile</value>
</option>
<option>
<value>7010</value>
<value>554</value>
<value>Bingiriya</value>
</option>
<option>
<value>7010</value>
<value>732</value>
<value>Biyagama</value>
</option>
<option>
<value>7010</value>
<value>788</value>
<value>BOC premier</value>
</option>
<option>
<value>7010</value>
<value>699</value>
<value>Bogahakumbura</value>
</option>
<option>
<value>7010</value>
<value>808</value>
<value>Bogaswewa</value>
</option>
<option>
<value>7010</value>
<value>491</value>
<value>Bogawantalawa</value>
</option>
<option>
<value>7010</value>
<value>465</value>
<value>Bokkawala</value>
</option>
<option>
<value>7010</value>
<value>651</value>
<value>Bombuwela</value>
</option>
<option>
<value>7010</value>
<value>711</value>
<value>Bopitiya</value>
</option>
<option>
<value>7010</value>
<value>795</value>
<value>Boragas</value>
</option>
<option>
<value>7010</value>
<value>646</value>
<value>Boralesgamuwa</value>
</option>
<option>
<value>7010</value>
<value>668</value>
<value>Borella&nbsp; 2nd</value>
</option>
<option>
<value>7010</value>
<value>38</value>
<value>Borella S/G</value>
</option>
<option>
<value>7010</value>
<value>462</value>
<value>Botanical Gardens Peradeniya</value>
</option>
<option>
<value>7010</value>
<value>311</value>
<value>Bulathkohupitiya</value>
</option>
<option>
<value>7010</value>
<value>673</value>
<value>Bulathsinhala</value>
</option>
<option>
<value>7010</value>
<value>560</value>
<value>Buttala</value>
</option>
<option>
<value>7010</value>
<value>573</value>
<value>Cenoptional Bus Stand</value>
</option>
<option>
<value>7010</value>
<value>811</value>
<value>Cenoptional Camp</value>
</option>
<option>
<value>7010</value>
<value>15</value>
<value>Cenoptional Office</value>
</option>
<option>
<value>7010</value>
<value>672</value>
<value>Cenoptional Super Market</value>
</option>
<option>
<value>7010</value>
<value>731</value>
<value>CEYBANK Credit card cenoptione</value>
</option>
<option>
<value>7010</value>
<value>792</value>
<value>Chankanai</value>
</option>
<option>
<value>7010</value>
<value>501</value>
<value>Chavakachcheri</value>
</option>
<option>
<value>7010</value>
<value>382</value>
<value>Cheddikulam</value>
</option>
<option>
<value>7010</value>
<value>630</value>
<value>Chenkalady</value>
</option>
<option>
<value>7010</value>
<value>20</value>
<value>Chilaw</value>
</option>
<option>
<value>7010</value>
<value>436</value>
<value>China Bay</value>
</option>
<option>
<value>7010</value>
<value>53</value>
<value>Chunnakam</value>
</option>
<option>
<value>7010</value>
<value>1</value>
<value>City Office</value>
</option>
<option>
<value>7010</value>
<value>660</value>
<value>Corporate</value>
</option>
<option>
<value>7010</value>
<value>822</value>
<value>Corporate 2nd</value>
</option>
<option>
<value>7010</value>
<value>474</value>
<value>Court Complex Kandy</value>
</option>
<option>
<value>7010</value>
<value>715</value>
<value>Dalugama</value>
</option>
<option>
<value>7010</value>
<value>331</value>
<value>Dambadeniya</value>
</option>
<option>
<value>7010</value>
<value>700</value>
<value>Dambagalla</value>
</option>
<option>
<value>7010</value>
<value>576</value>
<value>Dambulla</value>
</option>
<option>
<value>7010</value>
<value>497</value>
<value>Dankotuwa</value>
</option>
<option>
<value>7010</value>
<value>466</value>
<value>Danture</value>
</option>
<option>
<value>7010</value>
<value>467</value>
<value>Daulagala</value>
</option>
<option>
<value>7010</value>
<value>567</value>
<value>Dedicated Economic Cenoptione – Meegoda</value>
</option>
<option>
<value>7010</value>
<value>686</value>
<value>Dehiattakandiya</value>
</option>
<option>
<value>7010</value>
<value>634</value>
<value>Dehiowita</value>
</option>
<option>
<value>7010</value>
<value>51</value>
<value>Dehiwala</value>
</option>
<option>
<value>7010</value>
<value>784</value>
<value>Deiyandara</value>
</option>
<option>
<value>7010</value>
<value>383</value>
<value>Delft</value>
</option>
<option>
<value>7010</value>
<value>716</value>
<value>Delgoda</value>
</option>
<option>
<value>7010</value>
<value>717</value>
<value>Demanhandiya</value>
</option>
<option>
<value>7010</value>
<value>561</value>
<value>Dematagoda</value>
</option>
<option>
<value>7010</value>
<value>528</value>
<value>Deniyaya</value>
</option>
<option>
<value>7010</value>
<value>642</value>
<value>Deraniyagala</value>
</option>
<option>
<value>7010</value>
<value>504</value>
<value>Devinuwara</value>
</option>
<option>
<value>7010</value>
<value>563</value>
<value>Dharga Town</value>
</option>
<option>
<value>7010</value>
<value>273</value>
<value>Digana</value>
</option>
<option>
<value>7010</value>
<value>469</value>
<value>Digana Village</value>
</option>
<option>
<value>7010</value>
<value>592</value>
<value>Dikwella</value>
</option>
<option>
<value>7010</value>
<value>433</value>
<value>Divulapitiya</value>
</option>
<option>
<value>7010</value>
<value>388</value>
<value>Diyabeduma</value>
</option>
<option>
<value>7010</value>
<value>389</value>
<value>Diyasenpura</value>
</option>
<option>
<value>7010</value>
<value>260</value>
<value>Diyatalawa</value>
</option>
<option>
<value>7010</value>
<value>293</value>
<value>Dodangoda</value>
</option>
<option>
<value>7010</value>
<value>390</value>
<value>Doramadalawa</value>
</option>
<option>
<value>7010</value>
<value>580</value>
<value>Dummalasuriya</value>
</option>
<option>
<value>7010</value>
<value>437</value>
<value>Eastern University</value>
</option>
<option>
<value>7010</value>
<value>57</value>
<value>Eheliyagoda</value>
</option>
<option>
<value>7010</value>
<value>258</value>
<value>Elakanda</value>
</option>
<option>
<value>7010</value>
<value>777</value>
<value>Elecoptiononic Banking Unit</value>
</option>
<option>
<value>7010</value>
<value>701</value>
<value>Ella</value>
</option>
<option>
<value>7010</value>
<value>619</value>
<value>Elpitiya</value>
</option>
<option>
<value>7010</value>
<value>535</value>
<value>Embilipitiya</value>
</option>
<option>
<value>7010</value>
<value>312</value>
<value>Embilipitiya City</value>
</option>
<option>
<value>7010</value>
<value>313</value>
<value>Endana</value>
</option>
<option>
<value>7010</value>
<value>674</value>
<value>Enderamulla</value>
</option>
<option>
<value>7010</value>
<value>692</value>
<value>Eppawala</value>
</option>
<option>
<value>7010</value>
<value>790</value>
<value>Eravur</value>
</option>
<option>
<value>7010</value>
<value>702</value>
<value>Ethiliwewa</value>
</option>
<option>
<value>7010</value>
<value>810</value>
<value>Ethimale</value>
</option>
<option>
<value>7010</value>
<value>476</value>
<value>Ettampitiya</value>
</option>
<option>
<value>7010</value>
<value>60</value>
<value>Fifth City</value>
</option>
<option>
<value>7010</value>
<value>718</value>
<value>Fish Market Peliyagoda</value>
</option>
<option>
<value>7010</value>
<value>615</value>
<value>Galagedera</value>
</option>
<option>
<value>7010</value>
<value>101</value>
<value>Galaha</value>
</option>
<option>
<value>7010</value>
<value>391</value>
<value>Galamuna</value>
</option>
<option>
<value>7010</value>
<value>122</value>
<value>Galenbindunuwewa</value>
</option>
<option>
<value>7010</value>
<value>432</value>
<value>Galewela</value>
</option>
<option>
<value>7010</value>
<value>549</value>
<value>Galgamuwa</value>
</option>
<option>
<value>7010</value>
<value>314</value>
<value>Galigamuwa</value>
</option>
<option>
<value>7010</value>
<value>653</value>
<value>Galkiriyagama</value>
</option>
<option>
<value>7010</value>
<value>89</value>
<value>Galle Bazaar</value>
</option>
<option>
<value>7010</value>
<value>3</value>
<value>Galle Fort</value>
</option>
<option>
<value>7010</value>
<value>514</value>
<value>Galnewa</value>
</option>
<option>
<value>7010</value>
<value>45</value>
<value>Gampaha S/G</value>
</option>
<option>
<value>7010</value>
<value>575</value>
<value>Gampola</value>
</option>
<option>
<value>7010</value>
<value>470</value>
<value>Gampola City</value>
</option>
<option>
<value>7010</value>
<value>720</value>
<value>Ganemulla</value>
</option>
<option>
<value>7010</value>
<value>524</value>
<value>Geli Oya</value>
</option>
<option>
<value>7010</value>
<value>392</value>
<value>General Hospital, A’ pura</value>
</option>
<option>
<value>7010</value>
<value>471</value>
<value>Ginigathhena</value>
</option>
<option>
<value>7010</value>
<value>669</value>
<value>Girandurukotte</value>
</option>
<option>
<value>7010</value>
<value>553</value>
<value>Giriulla</value>
</option>
<option>
<value>7010</value>
<value>786</value>
<value>Godakawela</value>
</option>
<option>
<value>7010</value>
<value>316</value>
<value>Gonagaldeniya</value>
</option>
<option>
<value>7010</value>
<value>438</value>
<value>Gonagolla</value>
</option>
<option>
<value>7010</value>
<value>643</value>
<value>Gonapola</value>
</option>
<option>
<value>7010</value>
<value>721</value>
<value>Gothatuwa</value>
</option>
<option>
<value>7010</value>
<value>628</value>
<value>Grandpass</value>
</option>
<option>
<value>7010</value>
<value>393</value>
<value>Habarana</value>
</option>
<option>
<value>7010</value>
<value>691</value>
<value>Hakmana</value>
</option>
<option>
<value>7010</value>
<value>463</value>
<value>Haldummulla</value>
</option>
<option>
<value>7010</value>
<value>785</value>
<value>Hali ela</value>
</option>
<option>
<value>7010</value>
<value>85</value>
<value>Hambantota</value>
</option>
<option>
<value>7010</value>
<value>741</value>
<value>Hanwella</value>
</option>
<option>
<value>7010</value>
<value>35</value>
<value>Haputale</value>
</option>
<option>
<value>7010</value>
<value>365</value>
<value>Hasalaka</value>
</option>
<option>
<value>7010</value>
<value>472</value>
<value>Hatharaliyadda</value>
</option>
<option>
<value>7010</value>
<value>40</value>
<value>Hatton</value>
</option>
<option>
<value>7010</value>
<value>999</value>
<value>Head Office</value>
</option>
<option>
<value>7010</value>
<value>772</value>
<value>Hemmathagama</value>
</option>
<option>
<value>7010</value>
<value>570</value>
<value>Hettipola</value>
</option>
<option>
<value>7010</value>
<value>609</value>
<value>Hikkaduwa</value>
</option>
<option>
<value>7010</value>
<value>601</value>
<value>Hingurakgoda</value>
</option>
<option>
<value>7010</value>
<value>509</value>
<value>Hingurana</value>
</option>
<option>
<value>7010</value>
<value>569</value>
<value>Hiripitiya</value>
</option>
<option>
<value>7010</value>
<value>568</value>
<value>Homagama</value>
</option>
<option>
<value>7010</value>
<value>54</value>
<value>Horana</value>
</option>
<option>
<value>7010</value>
<value>217</value>
<value>Horowpathana</value>
</option>
<option>
<value>7010</value>
<value>521</value>
<value>Hyde Park</value>
</option>
<option>
<value>7010</value>
<value>770</value>
<value>Ibbagamuwa</value>
</option>
<option>
<value>7010</value>
<value>377</value>
<value>Illavalai</value>
</option>
<option>
<value>7010</value>
<value>135</value>
<value>Imaduwa</value>
</option>
<option>
<value>7010</value>
<value>453</value>
<value>Independent&nbsp; Square</value>
</option>
<option>
<value>7010</value>
<value>604</value>
<value>Ingiriya</value>
</option>
<option>
<value>7010</value>
<value>87</value>
<value>International Division</value>
</option>
<option>
<value>7010</value>
<value>236</value>
<value>Ipalogama</value>
</option>
<option>
<value>7010</value>
<value>439</value>
<value>Irakkamam</value>
</option>
<option>
<value>7010</value>
<value>776</value>
<value>Islamic Banking Unit</value>
</option>
<option>
<value>7010</value>
<value>39</value>
<value>Ja Ela</value>
</option>
<option>
<value>7010</value>
<value>5</value>
<value>Jaffna</value>
</option>
<option>
<value>7010</value>
<value>500</value>
<value>Jaffna 2nd Branch</value>
</option>
<option>
<value>7010</value>
<value>366</value>
<value>Jaffna Bus Stand</value>
</option>
<option>
<value>7010</value>
<value>368</value>
<value>Jaffna Main Soptioneet</value>
</option>
<option>
<value>7010</value>
<value>369</value>
<value>Jaffna University</value>
</option>
<option>
<value>7010</value>
<value>600</value>
<value>Jayanthipura</value>
</option>
<option>
<value>7010</value>
<value>59</value>
<value>Kadawatha</value>
</option>
<option>
<value>7010</value>
<value>780</value>
<value>Kadawatha 2nd City</value>
</option>
<option>
<value>7010</value>
<value>502</value>
<value>Kaduruwela</value>
</option>
<option>
<value>7010</value>
<value>608</value>
<value>Kaduwela</value>
</option>
<option>
<value>7010</value>
<value>622</value>
<value>Kahatagasdigiliya</value>
</option>
<option>
<value>7010</value>
<value>507</value>
<value>Kahawatte</value>
</option>
<option>
<value>7010</value>
<value>370</value>
<value>Kaithady</value>
</option>
<option>
<value>7010</value>
<value>645</value>
<value>Kalawana</value>
</option>
<option>
<value>7010</value>
<value>426</value>
<value>Kallady</value>
</option>
<option>
<value>7010</value>
<value>427</value>
<value>Kallar</value>
</option>
<option>
<value>7010</value>
<value>510</value>
<value>Kalmunai</value>
</option>
<option>
<value>7010</value>
<value>589</value>
<value>Kalpitiya</value>
</option>
<option>
<value>7010</value>
<value>16</value>
<value>Kalutara S/G</value>
</option>
<option>
<value>7010</value>
<value>611</value>
<value>Kaluwanchikudy</value>
</option>
<option>
<value>7010</value>
<value>371</value>
<value>Kalviyankadu</value>
</option>
<option>
<value>7010</value>
<value>529</value>
<value>Kamburupitiya</value>
</option>
<option>
<value>7010</value>
<value>771</value>
<value>Kandana</value>
</option>
<option>
<value>7010</value>
<value>633</value>
<value>Kandapola</value>
</option>
<option>
<value>7010</value>
<value>2</value>
<value>Kandy</value>
</option>
<option>
<value>7010</value>
<value>649</value>
<value>Kandy 2nd</value>
</option>
<option>
<value>7010</value>
<value>473</value>
<value>Kandy City Cenoptione</value>
</option>
<option>
<value>7010</value>
<value>454</value>
<value>Kandy Hospital</value>
</option>
<option>
<value>7010</value>
<value>605</value>
<value>Kankesanthurai</value>
</option>
<option>
<value>7010</value>
<value>623</value>
<value>Kantale Bazaar</value>
</option>
<option>
<value>7010</value>
<value>428</value>
<value>Karadiyanaru</value>
</option>
<option>
<value>7010</value>
<value>749</value>
<value>Karainagar</value>
</option>
<option>
<value>7010</value>
<value>429</value>
<value>Karaitivu</value>
</option>
<option>
<value>7010</value>
<value>372</value>
<value>Karanavai</value>
</option>
<option>
<value>7010</value>
<value>280</value>
<value>Karapitiya</value>
</option>
<option>
<value>7010</value>
<value>294</value>
<value>Karawanella</value>
</option>
<option>
<value>7010</value>
<value>295</value>
<value>Karawita</value>
</option>
<option>
<value>7010</value>
<value>722</value>
<value>Katana</value>
</option>
<option>
<value>7010</value>
<value>616</value>
<value>Kataragama</value>
</option>
<option>
<value>7010</value>
<value>648</value>
<value>Kattankudy</value>
</option>
<option>
<value>7010</value>
<value>30</value>
<value>Katubedda</value>
</option>
<option>
<value>7010</value>
<value>666</value>
<value>Katugastota</value>
</option>
<option>
<value>7010</value>
<value>625</value>
<value>Katukurunda</value>
</option>
<option>
<value>7010</value>
<value>658</value>
<value>Katunayake I.P.Z.</value>
</option>
<option>
<value>7010</value>
<value>332</value>
<value>Katuneriya</value>
</option>
<option>
<value>7010</value>
<value>333</value>
<value>Katupotha</value>
</option>
<option>
<value>7010</value>
<value>261</value>
<value>Katuwana</value>
</option>
<option>
<value>7010</value>
<value>714</value>
<value>Katuwellegama Courtaulds Clothing Lanka (Pvt) Lvalue</value>
</option>
<option>
<value>7010</value>
<value>373</value>
<value>Kayts</value>
</option>
<option>
<value>7010</value>
<value>621</value>
<value>Kebithigollawa</value>
</option>
<option>
<value>7010</value>
<value>27</value>
<value>Kegalle</value>
</option>
<option>
<value>7010</value>
<value>536</value>
<value>Kegalle Bazaar</value>
</option>
<option>
<value>7010</value>
<value>297</value>
<value>Kegalle Hospital</value>
</option>
<option>
<value>7010</value>
<value>262</value>
<value>Kekanadura</value>
</option>
<option>
<value>7010</value>
<value>676</value>
<value>Kekirawa</value>
</option>
<option>
<value>7010</value>
<value>703</value>
<value>Keppetipola</value>
</option>
<option>
<value>7010</value>
<value>620</value>
<value>Kesbewa</value>
</option>
<option>
<value>7010</value>
<value>617</value>
<value>Keselwatte</value>
</option>
<option>
<value>7010</value>
<value>93</value>
<value>Kilinochchi</value>
</option>
<option>
<value>7010</value>
<value>735</value>
<value>Kinniya</value>
</option>
<option>
<value>7010</value>
<value>430</value>
<value>Kiran</value>
</option>
<option>
<value>7010</value>
<value>543</value>
<value>Kiribathgoda</value>
</option>
<option>
<value>7010</value>
<value>317</value>
<value>Kiriella</value>
</option>
<option>
<value>7010</value>
<value>334</value>
<value>Kirimetiyana</value>
</option>
<option>
<value>7010</value>
<value>571</value>
<value>Kirindiwela</value>
</option>
<option>
<value>7010</value>
<value>602</value>
<value>Kirulapana</value>
</option>
<option>
<value>7010</value>
<value>282</value>
<value>Kitulgala</value>
</option>
<option>
<value>7010</value>
<value>172</value>
<value>Kobeigane</value>
</option>
<option>
<value>7010</value>
<value>323</value>
<value>Kochchikade</value>
</option>
<option>
<value>7010</value>
<value>375</value>
<value>Kodikamam</value>
</option>
<option>
<value>7010</value>
<value>750</value>
<value>Koggala E.P.Z</value>
</option>
<option>
<value>7010</value>
<value>431</value>
<value>Kokkadicholai</value>
</option>
<option>
<value>7010</value>
<value>376</value>
<value>Kokuvil</value>
</option>
<option>
<value>7010</value>
<value>34</value>
<value>Kollupitiya</value>
</option>
<option>
<value>7010</value>
<value>670</value>
<value>Kollupitiya 2nd</value>
</option>
<option>
<value>7010</value>
<value>283</value>
<value>Kolonna</value>
</option>
<option>
<value>7010</value>
<value>595</value>
<value>Kolonnawa</value>
</option>
<option>
<value>7010</value>
<value>787</value>
<value>Kopay</value>
</option>
<option>
<value>7010</value>
<value>629</value>
<value>Koslanda</value>
</option>
<option>
<value>7010</value>
<value>263</value>
<value>Kosmodera</value>
</option>
<option>
<value>7010</value>
<value>455</value>
<value>Kotagala</value>
</option>
<option>
<value>7010</value>
<value>663</value>
<value>Kotahena</value>
</option>
<option>
<value>7010</value>
<value>813</value>
<value>Kothalawala Defence University</value>
</option>
<option>
<value>7010</value>
<value>284</value>
<value>Kotiyakumbura</value>
</option>
<option>
<value>7010</value>
<value>773</value>
<value>Kottawa</value>
</option>
<option>
<value>7010</value>
<value>264</value>
<value>Kudawella</value>
</option>
<option>
<value>7010</value>
<value>52</value>
<value>Kuliyapitiya</value>
</option>
<option>
<value>7010</value>
<value>324</value>
<value>Kumbukgete</value>
</option>
<option>
<value>7010</value>
<value>809</value>
<value>Kurunduwatte</value>
</option>
<option>
<value>7010</value>
<value>9</value>
<value>Kurunegala</value>
</option>
<option>
<value>7010</value>
<value>513</value>
<value>Kurunegala Bazaar</value>
</option>
<option>
<value>7010</value>
<value>325</value>
<value>Kuruwita</value>
</option>
<option>
<value>7010</value>
<value>636</value>
<value>Lake House</value>
</option>
<option>
<value>7010</value>
<value>612</value>
<value>Lake View</value>
</option>
<option>
<value>7010</value>
<value>603</value>
<value>Lanka Hospital</value>
</option>
<option>
<value>7010</value>
<value>577</value>
<value>Lunugala</value>
</option>
<option>
<value>7010</value>
<value>265</value>
<value>Lunugamvehera</value>
</option>
<option>
<value>7010</value>
<value>647</value>
<value>Lunuwatte</value>
</option>
<option>
<value>7010</value>
<value>544</value>
<value>Madampe</value>
</option>
<option>
<value>7010</value>
<value>654</value>
<value>Madatugama</value>
</option>
<option>
<value>7010</value>
<value>805</value>
<value>Madawakkulama</value>
</option>
<option>
<value>7010</value>
<value>581</value>
<value>Madawala</value>
</option>
<option>
<value>7010</value>
<value>378</value>
<value>Madhu</value>
</option>
<option>
<value>7010</value>
<value>565</value>
<value>Madurankuliya</value>
</option>
<option>
<value>7010</value>
<value>266</value>
<value>Maha-Edanda</value>
</option>
<option>
<value>7010</value>
<value>806</value>
<value>Mahaoya</value>
</option>
<option>
<value>7010</value>
<value>55</value>
<value>Maharagama</value>
</option>
<option>
<value>7010</value>
<value>319</value>
<value>Mahawewa</value>
</option>
<option>
<value>7010</value>
<value>542</value>
<value>Mahiyangana</value>
</option>
<option>
<value>7010</value>
<value>564</value>
<value>Maho</value>
</option>
<option>
<value>7010</value>
<value>26</value>
<value>Main Soptioneet</value>
</option>
<option>
<value>7010</value>
<value>299</value>
<value>Makandura</value>
</option>
<option>
<value>7010</value>
<value>267</value>
<value>Makandura – Matara</value>
</option>
<option>
<value>7010</value>
<value>789</value>
<value>Makola</value>
</option>
<option>
<value>7010</value>
<value>763</value>
<value>Malabe</value>
</option>
<option>
<value>7010</value>
<value>268</value>
<value>Malimbada</value>
</option>
<option>
<value>7010</value>
<value>255</value>
<value>Malkaduwawa</value>
</option>
<option>
<value>7010</value>
<value>349</value>
<value>Mallavi</value>
</option>
<option>
<value>7010</value>
<value>422</value>
<value>Malwatte</value>
</option>
<option>
<value>7010</value>
<value>423</value>
<value>Mamangama</value>
</option>
<option>
<value>7010</value>
<value>281</value>
<value>Manipay</value>
</option>
<option>
<value>7010</value>
<value>574</value>
<value>Mankulam</value>
</option>
<option>
<value>7010</value>
<value>46</value>
<value>Mannar</value>
</option>
<option>
<value>7010</value>
<value>351</value>
<value>Manthikai</value>
</option>
<option>
<value>7010</value>
<value>41</value>
<value>Maradana</value>
</option>
<option>
<value>7010</value>
<value>456</value>
<value>Marassana</value>
</option>
<option>
<value>7010</value>
<value>300</value>
<value>Marawila</value>
</option>
<option>
<value>7010</value>
<value>424</value>
<value>Maruthamunai</value>
</option>
<option>
<value>7010</value>
<value>352</value>
<value>Maruthankerny</value>
</option>
<option>
<value>7010</value>
<value>506</value>
<value>Maskeliya</value>
</option>
<option>
<value>7010</value>
<value>68</value>
<value>Matale</value>
</option>
<option>
<value>7010</value>
<value>24</value>
<value>Matara</value>
</option>
<option>
<value>7010</value>
<value>614</value>
<value>Matara City</value>
</option>
<option>
<value>7010</value>
<value>796</value>
<value>Mattala Airport</value>
</option>
<option>
<value>7010</value>
<value>583</value>
<value>Mattegoda</value>
</option>
<option>
<value>7010</value>
<value>556</value>
<value>Matugama</value>
</option>
<option>
<value>7010</value>
<value>559</value>
<value>Mawanella</value>
</option>
<option>
<value>7010</value>
<value>257</value>
<value>Mawathagama</value>
</option>
<option>
<value>7010</value>
<value>238</value>
<value>Medagama</value>
</option>
<option>
<value>7010</value>
<value>162</value>
<value>Medawachchiya</value>
</option>
<option>
<value>7010</value>
<value>797</value>
<value>Medawala</value>
</option>
<option>
<value>7010</value>
<value>641</value>
<value>Medirigiriya</value>
</option>
<option>
<value>7010</value>
<value>384</value>
<value>Meegahakiwula</value>
</option>
<option>
<value>7010</value>
<value>728</value>
<value>Meegalewa</value>
</option>
<option>
<value>7010</value>
<value>458</value>
<value>Meepilimana</value>
</option>
<option>
<value>7010</value>
<value>555</value>
<value>Melsiripura</value>
</option>
<option>
<value>7010</value>
<value>459</value>
<value>Menikhinna</value>
</option>
<option>
<value>7010</value>
<value>618</value>
<value>Meoptionopolitan</value>
</option>
<option>
<value>7010</value>
<value>518</value>
<value>Middeniya</value>
</option>
<option>
<value>7010</value>
<value>335</value>
<value>Mihintale</value>
</option>
<option>
<value>7010</value>
<value>593</value>
<value>Milagiriya</value>
</option>
<option>
<value>7010</value>
<value>394</value>
<value>Minneriya</value>
</option>
<option>
<value>7010</value>
<value>545</value>
<value>Minuwangoda</value>
</option>
<option>
<value>7010</value>
<value>88</value>
<value>Mirigama</value>
</option>
<option>
<value>7010</value>
<value>417</value>
<value>Mollipothana</value>
</option>
<option>
<value>7010</value>
<value>82</value>
<value>Monaragala</value>
</option>
<option>
<value>7010</value>
<value>705</value>
<value>Moneragala Town</value>
</option>
<option>
<value>7010</value>
<value>557</value>
<value>Moratumulla</value>
</option>
<option>
<value>7010</value>
<value>61</value>
<value>Moratuwa</value>
</option>
<option>
<value>7010</value>
<value>270</value>
<value>Morawaka</value>
</option>
<option>
<value>7010</value>
<value>418</value>
<value>Morawewa</value>
</option>
<option>
<value>7010</value>
<value>285</value>
<value>Morontota</value>
</option>
<option>
<value>7010</value>
<value>766</value>
<value>Mount Lavinia</value>
</option>
<option>
<value>7010</value>
<value>353</value>
<value>Mulankavil</value>
</option>
<option>
<value>7010</value>
<value>355</value>
<value>Mullativu</value>
</option>
<option>
<value>7010</value>
<value>723</value>
<value>Mulleriyawa New Town</value>
</option>
<option>
<value>7010</value>
<value>511</value>
<value>Mulliyawalai</value>
</option>
<option>
<value>7010</value>
<value>356</value>
<value>Murungan</value>
</option>
<option>
<value>7010</value>
<value>118</value>
<value>Muttur</value>
</option>
<option>
<value>7010</value>
<value>818</value>
<value>Nagoda</value>
</option>
<option>
<value>7010</value>
<value>357</value>
<value>Nainativu</value>
</option>
<option>
<value>7010</value>
<value>724</value>
<value>Naiwala</value>
</option>
<option>
<value>7010</value>
<value>358</value>
<value>Nallur</value>
</option>
<option>
<value>7010</value>
<value>359</value>
<value>Nanatan</value>
</option>
<option>
<value>7010</value>
<value>762</value>
<value>Narahenpita</value>
</option>
<option>
<value>7010</value>
<value>534</value>
<value>Narammala</value>
</option>
<option>
<value>7010</value>
<value>552</value>
<value>National Institute Of Education</value>
</option>
<option>
<value>7010</value>
<value>50</value>
<value>Nattandiya</value>
</option>
<option>
<value>7010</value>
<value>92</value>
<value>Naula</value>
</option>
<option>
<value>7010</value>
<value>419</value>
<value>Navithanvely</value>
</option>
<option>
<value>7010</value>
<value>598</value>
<value>Nawalapitiya</value>
</option>
<option>
<value>7010</value>
<value>360</value>
<value>Nedunkerny</value>
</option>
<option>
<value>7010</value>
<value>18</value>
<value>Negombo</value>
</option>
<option>
<value>7010</value>
<value>572</value>
<value>Negombo Bazzar</value>
</option>
<option>
<value>7010</value>
<value>638</value>
<value>Nelliady</value>
</option>
<option>
<value>7010</value>
<value>799</value>
<value width="327">Nelundeniya</value>
</option>
<option>
<value>7010</value>
<value>667</value>
<value>Neluwa</value>
</option>
<option>
<value>7010</value>
<value>547</value>
<value>Nikaweratiya</value>
</option>
<option>
<value>7010</value>
<value>420</value>
<value>Nilavely</value>
</option>
<option>
<value>7010</value>
<value>591</value>
<value>Nintavur</value>
</option>
<option>
<value>7010</value>
<value>675</value>
<value>Nittambuwa</value>
</option>
<option>
<value>7010</value>
<value>597</value>
<value>Nivitigala</value>
</option>
<option>
<value>7010</value>
<value>656</value>
<value>Nochchiyagama</value>
</option>
<option>
<value>7010</value>
<value>779</value>
<value>Norchcholei</value>
</option>
<option>
<value>7010</value>
<value>49</value>
<value>Nugegoda Supergrade</value>
</option>
<option>
<value>7010</value>
<value>29</value>
<value>Nuwara Eliya</value>
</option>
<option>
<value>7010</value>
<value>402</value>
<value>Oddamavady</value>
</option>
<option>
<value>7010</value>
<value>361</value>
<value>Oddusudan</value>
</option>
<option>
<value>7010</value>
<value>706</value>
<value>Okkampitiya</value>
</option>
<option>
<value>7010</value>
<value>403</value>
<value>Oluwil</value>
</option>
<option>
<value>7010</value>
<value>362</value>
<value>Omanthai</value>
</option>
<option>
<value>7010</value>
<value>127</value>
<value>Padavi Parakramapura</value>
</option>
<option>
<value>7010</value>
<value>395</value>
<value>Padaviya</value>
</option>
<option>
<value>7010</value>
<value>492</value>
<value>Padiyapelella</value>
</option>
<option>
<value>7010</value>
<value>348</value>
<value>Padiyatalawa</value>
</option>
<option>
<value>7010</value>
<value>678</value>
<value>Padukka</value>
</option>
<option>
<value>7010</value>
<value>461</value>
<value>Palapathwela</value>
</option>
<option>
<value>7010</value>
<value>301</value>
<value>Palaviya</value>
</option>
<option>
<value>7010</value>
<value>363</value>
<value>Pallai</value>
</option>
<option>
<value>7010</value>
<value>302</value>
<value>Pallama</value>
</option>
<option>
<value>7010</value>
<value>816</value>
<value>Pallebedda</value>
</option>
<option>
<value>7010</value>
<value>464</value>
<value>Pallekelle</value>
</option>
<option>
<value>7010</value>
<value>640</value>
<value>Pallepola</value>
</option>
<option>
<value>7010</value>
<value>406</value>
<value>Palmuddai</value>
</option>
<option>
<value>7010</value>
<value>404</value>
<value>Palugamam</value>
</option>
<option>
<value>7010</value>
<value>7</value>
<value>Panadura</value>
</option>
<option>
<value>7010</value>
<value>607</value>
<value>Panadura Bazaar</value>
</option>
<option>
<value>7010</value>
<value>546</value>
<value>Pannala</value>
</option>
<option>
<value>7010</value>
<value>303</value>
<value>Paragahadeniya</value>
</option>
<option>
<value>7010</value>
<value>364</value>
<value>Paranthan</value>
</option>
<option>
<value>7010</value>
<value>644</value>
<value>Parliamentary Complex</value>
</option>
<option>
<value>7010</value>
<value>271</value>
<value>Pasgoda</value>
</option>
<option>
<value>7010</value>
<value>503</value>
<value>Passara</value>
</option>
<option>
<value>7010</value>
<value>690</value>
<value>Pelawatta</value>
</option>
<option>
<value>7010</value>
<value>707</value>
<value>Pelawatta</value>
</option>
<option>
<value>7010</value>
<value>541</value>
<value>Pelawatte City Kalutara</value>
</option>
<option>
<value>7010</value>
<value>42</value>
<value>Peliyagoda</value>
</option>
<option>
<value>7010</value>
<value>683</value>
<value>Pelmadulla</value>
</option>
<option>
<value>7010</value>
<value>152</value>
<value>Pemaduwa</value>
</option>
<option>
<value>7010</value>
<value>588</value>
<value>Peradeniya</value>
</option>
<option>
<value>7010</value>
<value>681</value>
<value>Personal</value>
</option>
<option>
<value>7010</value>
<value>344</value>
<value>Pesalai</value>
</option>
<option>
<value>7010</value>
<value>4</value>
<value>Pettah</value>
</option>
<option>
<value>7010</value>
<value>587</value>
<value>Pilimatalawa</value>
</option>
<option>
<value>7010</value>
<value>736</value>
<value>Piliyandala</value>
</option>
<option>
<value>7010</value>
<value>287</value>
<value>Pinnawala</value>
</option>
<option>
<value>7010</value>
<value>272</value>
<value>Pitabeddara</value>
</option>
<option>
<value>7010</value>
<value>533</value>
<value>Pitakotte</value>
</option>
<option>
<value>7010</value>
<value>610</value>
<value>Pitigala</value>
</option>
<option>
<value>7010</value>
<value>28</value>
<value>Point Pedro</value>
</option>
<option>
<value>7010</value>
<value>526</value>
<value>Polgahawela</value>
</option>
<option>
<value>7010</value>
<value>83</value>
<value>Polonnaruwa New Town</value>
</option>
<option>
<value>7010</value>
<value>783</value>
<value>Polpithigama</value>
</option>
<option>
<value>7010</value>
<value>405</value>
<value>Polwatte</value>
</option>
<option>
<value>7010</value>
<value>345</value>
<value>Poonagary</value>
</option>
<option>
<value>7010</value>
<value>346</value>
<value>Poovarasankulam</value>
</option>
<option>
<value>7010</value>
<value>664</value>
<value>Pothuhera</value>
</option>
<option>
<value>7010</value>
<value>318</value>
<value>Potuvil</value>
</option>
<option>
<value>7010</value>
<value>99</value>
<value>Primary Dealer Unit</value>
</option>
<option>
<value>7010</value>
<value>802</value>
<value>Provincial Council Complex, Pallakelle</value>
</option>
<option>
<value>7010</value>
<value>765</value>
<value>Pugoda</value>
</option>
<option>
<value>7010</value>
<value>441</value>
<value>Pujapitiya</value>
</option>
<option>
<value>7010</value>
<value>425</value>
<value>Pundaluoya</value>
</option>
<option>
<value>7010</value>
<value>347</value>
<value>Punnalaikadduvan</value>
</option>
<option>
<value>7010</value>
<value>337</value>
<value>Pussellawa</value>
</option>
<option>
<value>7010</value>
<value>341</value>
<value>Puthukudieruppu</value>
</option>
<option>
<value>7010</value>
<value>342</value>
<value>Puthukulam</value>
</option>
<option>
<value>7010</value>
<value>48</value>
<value>Puttalam</value>
</option>
<option>
<value>7010</value>
<value>687</value>
<value>Raddolugama</value>
</option>
<option>
<value>7010</value>
<value>442</value>
<value>Ragala</value>
</option>
<option>
<value>7010</value>
<value>764</value>
<value>Ragama</value>
</option>
<option>
<value>7010</value>
<value>746</value>
<value>Rajagiriya</value>
</option>
<option>
<value>7010</value>
<value>396</value>
<value>Rajanganaya</value>
</option>
<option>
<value>7010</value>
<value>397</value>
<value>Rajina Junction</value>
</option>
<option>
<value>7010</value>
<value>594</value>
<value>Rakwana</value>
</option>
<option>
<value>7010</value>
<value>782</value>
<value>Rambewa</value>
</option>
<option>
<value>7010</value>
<value>582</value>
<value>Rambukkana</value>
</option>
<option>
<value>7010</value>
<value>398</value>
<value>Ranajayapura</value>
</option>
<option>
<value>7010</value>
<value>767</value>
<value>Ranna</value>
</option>
<option>
<value>7010</value>
<value>259</value>
<value>Rathgama</value>
</option>
<option>
<value>7010</value>
<value>689</value>
<value>Ratmalana</value>
</option>
<option>
<value>7010</value>
<value>31</value>
<value>Ratnapura</value>
</option>
<option>
<value>7010</value>
<value>684</value>
<value>Ratnapura Bazaar</value>
</option>
<option>
<value>7010</value>
<value>315</value>
<value>Ratnapura Hospital</value>
</option>
<option>
<value>7010</value>
<value>639</value>
<value>Rattota</value>
</option>
<option>
<value>7010</value>
<value>627</value>
<value>Regent Soptioneet</value>
</option>
<option>
<value>7010</value>
<value>532</value>
<value>Ridigama</value>
</option>
<option>
<value>7010</value>
<value>167</value>
<value>Rikillagaskada</value>
</option>
<option>
<value>7010</value>
<value>693</value>
<value>Ruhunu Campus</value>
</option>
<option>
<value>7010</value>
<value>585</value>
<value>Ruwanwella</value>
</option>
<option>
<value>7010</value>
<value>288</value>
<value>Sabaragamuwa Provincial Council</value>
</option>
<option>
<value>7010</value>
<value>286</value>
<value>Sabaragamuwa University</value>
</option>
<option>
<value>7010</value>
<value>407</value>
<value>Sainthamarathu</value>
</option>
<option>
<value>7010</value>
<value>814</value>
<value>Saliyawewa</value>
</option>
<option>
<value>7010</value>
<value>440</value>
<value>Samanthurai</value>
</option>
<option>
<value>7010</value>
<value>338</value>
<value>Savalkaddu</value>
</option>
<option>
<value>7010</value>
<value>421</value>
<value>Seeduwa</value>
</option>
<option>
<value>7010</value>
<value>290</value>
<value>Seethawakapura</value>
</option>
<option>
<value>7010</value>
<value>408</value>
<value>Serunuwara</value>
</option>
<option>
<value>7010</value>
<value>399</value>
<value>Sevanapitiya</value>
</option>
<option>
<value>7010</value>
<value>183</value>
<value>Sewagama</value>
</option>
<option>
<value>7010</value>
<value>443</value>
<value>Sigiriya</value>
</option>
<option>
<value>7010</value>
<value>339</value>
<value>Sirupiddy</value>
</option>
<option>
<value>7010</value>
<value>416</value>
<value>Siyambalanduwa</value>
</option>
<option>
<value>7010</value>
<value>520</value>
<value>Sri Jayawardenapura Hospital</value>
</option>
<option>
<value>7010</value>
<value>751</value>
<value>Suriyawewa</value>
</option>
<option>
<value>7010</value>
<value>650</value>
<value>Talatuoya</value>
</option>
<option>
<value>7010</value>
<value>531</value>
<value>Talawakelle</value>
</option>
<option>
<value>7010</value>
<value>596</value>
<value>Talgaswela</value>
</option>
<option>
<value>7010</value>
<value>655</value>
<value>Tambuttegama</value>
</option>
<option>
<value>7010</value>
<value>56</value>
<value>Tangalle</value>
</option>
<option>
<value>7010</value>
<value>747</value>
<value>Taprobane</value>
</option>
<option>
<value>7010</value>
<value>250</value>
<value>Tawalama</value>
</option>
<option>
<value>7010</value>
<value>781</value>
<value>Teldeniya</value>
</option>
<option>
<value>7010</value>
<value>336</value>
<value>Thalaimannar Pier</value>
</option>
<option>
<value>7010</value>
<value>400</value>
<value>Thalawa</value>
</option>
<option>
<value>7010</value>
<value>516</value>
<value>Thalawathugoda</value>
</option>
<option>
<value>7010</value>
<value>798</value>
<value width="327">Thalduwa</value>
</option>
<option>
<value>7010</value>
<value>409</value>
<value>Thambiluvil</value>
</option>
<option>
<value>7010</value>
<value>410</value>
<value>Thampalakamam</value>
</option>
<option>
<value>7010</value>
<value>322</value>
<value>Thanamalwila</value>
</option>
<option>
<value>7010</value>
<value>256</value>
<value>Thanthirimale</value>
</option>
<option>
<value>7010</value>
<value>752</value>
<value>Thihagoda</value>
</option>
<option>
<value>7010</value>
<value>512</value>
<value>Thimbirigasyaya</value>
</option>
<option>
<value>7010</value>
<value>326</value>
<value>Thirumurukandi</value>
</option>
<option>
<value>7010</value>
<value>761</value>
<value>Thirunelvely</value>
</option>
<option>
<value>7010</value>
<value>305</value>
<value>Thoduwawa</value>
</option>
<option>
<value>7010</value>
<value>411</value>
<value>Thoppur</value>
</option>
<option>
<value>7010</value>
<value>157</value>
<value>Tirappane</value>
</option>
<option>
<value>7010</value>
<value>538</value>
<value>Tissamaharama</value>
</option>
<option>
<value>7010</value>
<value>760</value>
<value>optioneasury Division</value>
</option>
<option>
<value>7010</value>
<value>6</value>
<value>optionincomalee</value>
</option>
<option>
<value>7010</value>
<value>624</value>
<value>optionincomalee Bazaar</value>
</option>
<option>
<value>7010</value>
<value>606</value>
<value>Uda Dumbara</value>
</option>
<option>
<value>7010</value>
<value>306</value>
<value>Udappuwa</value>
</option>
<option>
<value>7010</value>
<value>291</value>
<value>Udawalawe</value>
</option>
<option>
<value>7010</value>
<value>753</value>
<value>Udugama</value>
</option>
<option>
<value>7010</value>
<value>413</value>
<value>Uhana</value>
</option>
<option>
<value>7010</value>
<value>444</value>
<value>Ukuwela</value>
</option>
<option>
<value>7010</value>
<value>43</value>
<value>Union Place</value>
</option>
<option>
<value>7010</value>
<value>445</value>
<value>University Of Peradeniya</value>
</option>
<option>
<value>7010</value>
<value>446</value>
<value>Upcott</value>
</option>
<option>
<value>7010</value>
<value>414</value>
<value>Uppuvely</value>
</option>
<option>
<value>7010</value>
<value>748</value>
<value>Uragasmanhandiya</value>
</option>
<option>
<value>7010</value>
<value>298</value>
<value>Urubokka</value>
</option>
<option>
<value>7010</value>
<value>794</value>
<value>Urumpirai</value>
</option>
<option>
<value>7010</value>
<value>343</value>
<value>Uva Paranagama</value>
</option>
<option>
<value>7010</value>
<value>804</value>
<value>Vaddukoddai</value>
</option>
<option>
<value>7010</value>
<value>415</value>
<value>Vakarai</value>
</option>
<option>
<value>7010</value>
<value>626</value>
<value>Valachchenai</value>
</option>
<option>
<value>7010</value>
<value>791</value>
<value>Valvettithurai</value>
</option>
<option>
<value>7010</value>
<value>385</value>
<value>Vavunathivu</value>
</option>
<option>
<value>7010</value>
<value>44</value>
<value>Vavuniya</value>
</option>
<option>
<value>7010</value>
<value>793</value>
<value>Vavuniya City</value>
</option>
<option>
<value>7010</value>
<value>63</value>
<value>Velanai</value>
</option>
<option>
<value>7010</value>
<value>386</value>
<value>Vellaveli</value>
</option>
<option>
<value>7010</value>
<value>682</value>
<value>Veyangoda</value>
</option>
<option>
<value>7010</value>
<value>775</value>
<value>Visakha</value>
</option>
<option>
<value>7010</value>
<value>328</value>
<value>Visuvamadu</value>
</option>
<option>
<value>7010</value>
<value>584</value>
<value>Wadduwa</value>
</option>
<option>
<value>7010</value>
<value>815</value>
<value>Wahalkada</value>
</option>
<option>
<value>7010</value>
<value>558</value>
<value>Waikkal</value>
</option>
<option>
<value>7010</value>
<value>743</value>
<value>Walapane</value>
</option>
<option>
<value>7010</value>
<value>517</value>
<value>Walasmulla</value>
</option>
<option>
<value>7010</value>
<value>744</value>
<value>Walgama</value>
</option>
<option>
<value>7010</value>
<value>800</value>
<value>Wanduramba</value>
</option>
<option>
<value>7010</value>
<value>562</value>
<value>Warakapola</value>
</option>
<option>
<value>7010</value>
<value>733</value>
<value>Warapitiya</value>
</option>
<option>
<value>7010</value>
<value>685</value>
<value>Ward Place</value>
</option>
<option>
<value>7010</value>
<value>379</value>
<value>Wariyapola</value>
</option>
<option>
<value>7010</value>
<value>505</value>
<value>Wattala</value>
</option>
<option>
<value>7010</value>
<value>340</value>
<value>Wattegama</value>
</option>
<option>
<value>7010</value>
<value>307</value>
<value>Wayamba University</value>
</option>
<option>
<value>7010</value>
<value>139</value>
<value>Weeraketiya</value>
</option>
<option>
<value>7010</value>
<value>308</value>
<value>Weerapokuna</value>
</option>
<option>
<value>7010</value>
<value>550</value>
<value>Weligama</value>
</option>
<option>
<value>7010</value>
<value>292</value>
<value>Weligepola</value>
</option>
<option>
<value>7010</value>
<value>817</value>
<value>Welikanda</value>
</option>
<option>
<value>7010</value>
<value>730</value>
<value>Welimada</value>
</option>
<option>
<value>7010</value>
<value>274</value>
<value>Weli-Oya</value>
</option>
<option>
<value>7010</value>
<value>803</value>
<value>Welioya-Sampath Nuwara</value>
</option>
<option>
<value>7010</value>
<value>527</value>
<value>Welisara</value>
</option>
<option>
<value>7010</value>
<value>677</value>
<value>Weliweriya</value>
</option>
<option>
<value>7010</value>
<value>309</value>
<value>Wellawa</value>
</option>
<option>
<value>7010</value>
<value>23</value>
<value>Wellawatte</value>
</option>
<option>
<value>7010</value>
<value>434</value>
<value>Wellawaya</value>
</option>
<option>
<value>7010</value>
<value>104</value>
<value>Welpalla</value>
</option>
<option>
<value>7010</value>
<value>508</value>
<value>Wennappuwa</value>
</option>
<option>
<value>7010</value>
<value>499</value>
<value>Wijerama Junction</value>
</option>
<option>
<value>7010</value>
<value>447</value>
<value>Wilgamuwa</value>
</option>
<option>
<value>7010</value>
<value>769</value>
<value>Yakkala</value>
</option>
<option>
<value>7010</value>
<value>578</value>
<value>Yakkalamulla</value>
</option>
<option>
<value>7010</value>
<value>144</value>
<value>Yatawatte</value>
</option>
<option>
<value>7010</value>
<value>477</value>
<value>Yatiyantota</value>
</option>
            </select>
          </div>
 
          <h4>3. If Mahapola is received fill the following :</h4>
      
          <div class="item">
            <p>Name of the Bank<span class="required"></span></p>
            <input type="text" name="bnkName"/>
            <i class="fas fa-calendar-alt"></i>
          </div>

          <div class="item">
            <p>Name of the Branch<span class="required"></span></p>
            <input type="text" name="bnkBranch" />
            <i class="fas fa-calendar-alt"></i>
          </div>

          <div class="item">
            <p>Account Number<span class="required"></span></p>
            <input type="text" name="accNum" />
            <i class="fas fa-calendar-alt"></i>
          </div>

          <h4>4. If Bursary is received fill the following :</h4>
      
          <div class="item">
            <p>Name of the Bank<span class="required"></span></p>
            <input type="text" name="bnkNameB" />
            <i class="fas fa-calendar-alt"></i>
          </div>

          <div class="item">
            <p>Name of the Branch<span class="required"></span></p>
            <input type="text" name="bnkBranchB" />
            <i class="fas fa-calendar-alt"></i>
          </div>

          <div class="item">
            <p>Account Number<span class="required"></span></p>
            <input type="text" name="accNumB" />
            <i class="fas fa-calendar-alt"></i>
          </div>

            <div class="btn-block">
              <button type="submit" name="submit">Generate PDF</button>
            </div>
      </form>
    </div>


  </body>
</html>