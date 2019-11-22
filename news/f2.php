<!-- When you try, to create data in the differents platforms; I recommend you review how to do in the demo and the live account forms.  -->



<!-- The next PHP only sent 2 UserNames one to a customer and the last one to CLMForex Accounts
https://clmmultisites.wpengine.com/join-our-affiliate-program/
 
 -->
<?php 
if(isset($_POST['submit'])){
    $to = "danycan31416@gmail.com"; // this is your UserName address
    //$to = "support@clmforex.com"; // this is your UserName address    
    $individual_first_name = $_POST['individual-first-name'];
    $individual_last_name = $_POST['individual-last-name'];
    $from = $_POST['UserName']; // this is the sender's UserName address
    $country = $_POST['country'];



    $subject = "Form [Pass from demo to live account]";
    // $message = $individual-first-name . " " . $country . " wrote the following:" . "\n\n" . $_POST['message'];
    // $message = $individual-first-name . "  wrote the following:" . "\n\n" . $_POST['message'];
    //$message = $individual-first-name . "  wrote the following:" 
    
    // Concat first & last name
    $message = $individual_first_name.' '.$individual_last_name . "  starts with the following data:" 

    //. "\n\n" . "Full name: " . $_POST['individual-first-name']

    // Concat first & last name
    . "\n\n" . "Full name: " . $_POST['individual-first-name'].' '.$_POST['individual-last-name']   
    . "\n\n" . "UserName: " . $_POST['UserName']
    . "\n\n" . "Country: " . $_POST['country'];
    //. "\n\n" . "Message: " . $_POST['message'];
    

// Here I'm working Thursday 09/19/2019, stand by; because I started to work in API method payments between Current Desk and Accent Pay.

    /* Send copy */
    /*
    $subject2 = "Copy of your form submission";   
    $message2 = "Here is a copy of your message " . $individual-first-name.' '.$individual-last-name
    . "\n\n" . $_POST['UserName']
    . "\n\n" . $_POST['company']
    . "\n\n" . $_POST['website']
    . "\n\n" . $_POST['country']
    . "\n\n" . $_POST['phone']
    . "\n\n" . $_POST['skype']
    . "\n\n" . $_POST['ClientsFrom']
    . "\n\n" . $_POST['PromoteServices']
    . "\n\n" . $_POST['hmcwyrpm']
    . "\n\n" . $_POST['ProductsYouPromote']
    . "\n\n" . $_POST['ClientsTradeUsingAnEa'];
*/
    

    $headers = "From:" . $from;
    /* Send copy */
    //$headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    /* Send copy */
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $individual-first-name . ", we will contact you shortly.";
    //echo "Thank you for contacting us!" . "\n" . "You will receive a response within the next few hours.";


    //delete
    $m1 = 'Thank you for contacting us!';
    $m2 = 'You will receive a response within the next few hours.';

    //delete
    header('Location: /thank-you-partnerships/'); // to redirect to another page.
    }
?>

<html>
<head>
    <title>Live Account Login - Core Liquidity Markets</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


     <script src="https://makitweb.com/demo/jquery.js" type="text/javascript"></script>

    <!-- select2 css -->
    <link href="https://makitweb.com/demo/dropdown_image/select2.min.css" rel="stylesheet" type="text/css">

    <!-- select2 script -->
    <script src="https://makitweb.com/demo/dropdown_image/select2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">



  <style id="compiled-css" type="text/css">
    /* Library for show / hide password input */
      @import url("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");

/* form { margin:50px auto;max-width:560px;}    */
  </style>


    <style type="text/css">
        @font-face {
          font-family: avenir-regular;
          src: url(https://clmmultisites.wpengine.com/wp-content/uploads/2019/04/AvenirNextLTPro-Regular-1.woff;)
          /* background-color: #4281c6; */
        }

       

    div .formStyle {
      border-radius: 5px;
      background-color: #f4f6f8 !important;
    
      position: relative;
      height: 413px;
      margin: auto;
      top:25%;
    }

    /* Responsive rules */
    @media only screen and (max-width: 375px) {
      div .formStyle {
      border-radius: 5px;      
      background-color: #f4f6f8 !important;       
      /* padding: 20px; */
      padding-left: 20px;
      padding-right: 20px;
      padding-bottom: 9px;
      padding-top: 35px;
      position: relative;
      max-width: 500px;
      height: 560px;
      margin: auto;
      top:25%;
      }
    }


    #header {
      min-height:100%;
      display:block; 
      background-color: #eef1f4; 
      background-repeat:no-repeat; 
      background-size: cover; 
    }

    .white{
      padding: 15px 0
    } 

</style>

    <!-- mixing, adding styles -->
    <style type="text/css">
        .error {
            color:red;
        }

        .success {
            color:green;
        }
    </style>


    <style type="text/css">
      .btn:not([class*=btn-outline-]) {    
      background-color: #fff !important;
      color: black;  
      border: 1px solid #ccc;

      -webkit-box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0) !important; 
      box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0) !important;

      }

      .btn.btn-primary {
          background-color: #1062bc !important;
          width: 49% !important;
      }

      .btn.btn-success {
          background-color: #2cc482 !important;
          width: 49% !important;
      }


    </style>

<!-- Error because the fetch API is not working.  -->

<!-- <script type="text/javascript">
            (async() => {
              const res = await fetch("https://freegeoip.app/json/");
              const res = await fetch("http://free.ipwhois.io/json/");
              const json = await res.json();
              document.getElementById("country").value = json.country_code;             
              $("#country").select2({
                templateResult: formatOptions,
                templateSelection: formatOptions
              });
            })();
</script> -->


<script type="text/javascript">
            (async() => {
              const res = await fetch("https://freegeoip.app/json/");
              const json = await res.json();
             document.getElementById("country").value = json.country_code;
              //$("#social").select2();
              $("#country").select2({
                templateResult: formatOptions,
                templateSelection: formatOptions
              });
            })();
</script>


        <style type="text/css">
            .img-flag  {
                width: 35px !important;
                height: 35px !important;
                border-radius: 100% !important;
                background: #eee no-repeat center !important;
                background-size: cover !important;
              }
        </style>


        <script type="text/javascript">  
        function formatOptions (state) {
            if (!state.id) {
             return state.text; 
         }


             var baseUrl = "https://clmmultisites.wpengine.com/wp-content/uploads/2019/06";

             var $state = $(
                '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.svg" class="img-flag" /> ' + state.text + '</span>'
              );
              return $state;
        }
        </script>
<!-- -->


<!-- input height & border colors -->
<style type="text/css">
  a:focus, a:active, input, input:hover, input:focus, input:active, textarea, textarea:hover, textarea:focus, textarea:active {
    -moz-outline: none;
    outline: none;
    height: 50px !important;
    border-color: #dbdbdb !important;
</style>


<style type="text/css">
/* heigh, select country flags */
  .select2-container .select2-selection--single {    
    height: 50px !important;
    border-color: #dbdbdb !important;

}

/* height center country name and flag. */
  .select2-container .select2-selection--single .select2-selection__rendered {
    padding-top: 6px !important;
}

/* Center arrow in dropdown*/
  .select2-container--default .select2-selection--single .select2-selection__arrow b {
      margin-top: 8px;
  }

/* Disclaimer */

  .chk, input[type='checkbox']{
      height: 10px !important; 
      font-weight: 500;
  }

  input.xyz  { 
      width: 17px !important; 
      height: 17px !important; 
  } 
/* height: 50px !important; */


</style>

</head>


<body id="header">
<!-- <center><h1 style="color:#fff">Create your account</h1></center> -->
    <div class="formStyle">
        
      <form action="" method="POST">
        <input id="redirect_url" type="hidden" name="redirect_url" value="https://www.clmforex.com/demo-account-thank-you"; />
                            
                           <div class="col-md-5" style="padding-right: 5px; padding-left: 10px;">  
                                <div class="form-group">
                                    <input onkeyup="javascript:capitalize(this);" id="individual-first-name" type="text" name="individual-first-name" class="form-control" placeholder="First name*" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <script type="text/javascript">
                                function capitalize(obj) {
                                  str = obj.value;
                                  obj.value = str.replace(/\w\S*/g, function(txt) {          
                                    return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();            
                                  });
                                }
                            </script>

                            <div class="col-md-5" style="padding-left: 5px;">
                                <div class="form-group">
                                    <input onkeyup="javascript:capitalize(this);" id="individual-last-name" type="text" name="individual-last-name" class="form-control" placeholder="Last name*" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input oninput="this.value=this.value.toLowerCase()" id="UserName" type="UserName" name="UserName" class="form-control" placeholder="UserName address*" required="required" data-error="Valid UserName is required." value="<?php if (isset($UserName)) echo $UserNameError ?>">
                                    <span class="error"><?php if (isset($UserNameError)) echo $UserNameError ?></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                element.addEventListener('input',function(){this.value=this.value.toLowerCase()});​

                            </script>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <!-- <label for="country">Country *</label><br /> -->
                                    <select class="country" id="country" name="country" style="width: 100%;" >
                                      <option value="AF">Afghanistan</option>
                                      <option value="AX">Åland Islands</option>
                                      <option value="AL">Albania</option>
                                      <option value="DZ">Algeria</option>
                                      <option value="AS">American Samoa</option>
                                      <option value="AD">Andorra</option>
                                      <option value="AO">Angola</option>
                                      <option value="AI">Anguilla</option>
                                      <option value="AQ">Antarctica</option>
                                      <option value="AG">Antigua and Barbuda</option>
                                      <option value="AR">Argentina</option>
                                      <option value="AM">Armenia</option>
                                      <option value="AW">Aruba</option>
                                      <option value="AU">Australia</option>
                                      <option value="AT">Austria</option>
                                      <option value="AZ">Azerbaijan</option>
                                      <option value="BS">Bahamas</option>
                                      <option value="BH">Bahrain</option>
                                      <option value="BD">Bangladesh</option>
                                      <option value="BB">Barbados</option>
                                      <option value="BY">Belarus</option>
                                      <option value="BE">Belgium</option>
                                      <option value="BZ">Belize</option>
                                      <option value="BJ">Benin</option>
                                      <option value="BM">Bermuda</option>
                                      <option value="BT">Bhutan</option>
                                      <option value="BO">Bolivia, Plurinational State of</option>
                                      <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                      <option value="BA">Bosnia and Herzegovina</option>
                                      <option value="BW">Botswana</option>
                                      <option value="BV">Bouvet Island</option>
                                      <option value="BR">Brazil</option>
                                      <option value="IO">British Indian Ocean Territory</option>
                                      <option value="BN">Brunei Darussalam</option>
                                      <option value="BG">Bulgaria</option>
                                      <option value="BF">Burkina Faso</option>
                                      <option value="BI">Burundi</option>
                                      <option value="KH">Cambodia</option>
                                      <option value="CM">Cameroon</option>
                                      <option value="CA">Canada</option>
                                      <option value="CV">Cape Verde</option>
                                      <option value="KY">Cayman Islands</option>
                                      <option value="CF">Central African Republic</option>
                                      <option value="TD">Chad</option>
                                      <option value="CL">Chile</option>
                                      <option value="CN">China</option>
                                      <option value="CX">Christmas Island</option>
                                      <option value="CC">Cocos (Keeling) Islands</option>
                                      <option value="CO">Colombia</option>
                                      <option value="KM">Comoros</option>
                                      <option value="CG">Congo</option>
                                      <option value="CD">Congo, the Democratic Republic of the</option>
                                      <option value="CK">Cook Islands</option>
                                      <option value="CR">Costa Rica</option>
                                      <option value="CI">Côte d'Ivoire</option>
                                      <option value="HR">Croatia</option>
                                      <option value="CU">Cuba</option>
                                      <option value="CW">Curaçao</option>
                                      <option value="CY">Cyprus</option>
                                      <option value="CZ">Czech Republic</option>
                                      <option value="DK">Denmark</option>
                                      <option value="DJ">Djibouti</option>
                                      <option value="DM">Dominica</option>
                                      <option value="DO">Dominican Republic</option>
                                      <option value="EC">Ecuador</option>
                                      <option value="EG">Egypt</option>
                                      <option value="SV">El Salvador</option>
                                      <option value="GQ">Equatorial Guinea</option>
                                      <option value="ER">Eritrea</option>
                                      <option value="EE">Estonia</option>
                                      <option value="ET">Ethiopia</option>
                                      <option value="FK">Falkland Islands (Malvinas)</option>
                                      <option value="FO">Faroe Islands</option>
                                      <option value="FJ">Fiji</option>
                                      <option value="FI">Finland</option>
                                      <option value="FR">France</option>
                                      <option value="GF">French Guiana</option>
                                      <option value="PF">French Polynesia</option>
                                      <option value="TF">French Southern Territories</option>
                                      <option value="GA">Gabon</option>
                                      <option value="GM">Gambia</option>
                                      <option value="GE">Georgia</option>
                                      <option value="DE">Germany</option>
                                      <option value="GH">Ghana</option>
                                      <option value="GI">Gibraltar</option>
                                      <option value="GR">Greece</option>
                                      <option value="GL">Greenland</option>
                                      <option value="GD">Grenada</option>
                                      <option value="GP">Guadeloupe</option>
                                      <option value="GU">Guam</option>
                                      <option value="GT">Guatemala</option>
                                      <option value="GG">Guernsey</option>
                                      <option value="GN">Guinea</option>
                                      <option value="GW">Guinea-Bissau</option>
                                      <option value="GY">Guyana</option>
                                      <option value="HT">Haiti</option>
                                      <option value="HM">Heard Island and McDonald Islands</option>
                                      <option value="VA">Holy See (Vatican City State)</option>
                                      <option value="HN">Honduras</option>
                                      <option value="HK">Hong Kong</option>
                                      <option value="HU">Hungary</option>
                                      <option value="IS">Iceland</option>
                                      <option value="IN">India</option>
                                      <option value="ID">Indonesia</option>
                                      <option value="IR">Iran, Islamic Republic of</option>
                                      <option value="IQ">Iraq</option>
                                      <option value="IE">Ireland</option>
                                      <option value="IM">Isle of Man</option>
                                      <option value="IL">Israel</option>
                                      <option value="IT">Italy</option>
                                      <option value="JM">Jamaica</option>
                                      <option value="JP">Japan</option>
                                      <option value="JE">Jersey</option>
                                      <option value="JO">Jordan</option>
                                      <option value="KZ">Kazakhstan</option>
                                      <option value="KE">Kenya</option>
                                      <option value="KI">Kiribati</option>
                                      <option value="KP">Korea, Democratic People's Republic of</option>
                                      <option value="KR">Korea, Republic of</option>
                                      <option value="KW">Kuwait</option>
                                      <option value="KG">Kyrgyzstan</option>
                                      <option value="LA">Lao People's Democratic Republic</option>
                                      <option value="LV">Latvia</option>
                                      <option value="LB">Lebanon</option>
                                      <option value="LS">Lesotho</option>
                                      <option value="LR">Liberia</option>
                                      <option value="LY">Libya</option>
                                      <option value="LI">Liechtenstein</option>
                                      <option value="LT">Lithuania</option>
                                      <option value="LU">Luxembourg</option>
                                      <option value="MO">Macao</option>
                                      <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                      <option value="MG">Madagascar</option>
                                      <option value="MW">Malawi</option>
                                      <option value="MY">Malaysia</option>
                                      <option value="MV">Maldives</option>
                                      <option value="ML">Mali</option>
                                      <option value="MT">Malta</option>
                                      <option value="MH">Marshall Islands</option>
                                      <option value="MQ">Martinique</option>
                                      <option value="MR">Mauritania</option>
                                      <option value="MU">Mauritius</option>
                                      <option value="YT">Mayotte</option>
                                      <option value="MX">Mexico</option>
                                      <option value="FM">Micronesia, Federated States of</option>
                                      <option value="MD">Moldova, Republic of</option>
                                      <option value="MC">Monaco</option>
                                      <option value="MN">Mongolia</option>
                                      <option value="ME">Montenegro</option>
                                      <option value="MS">Montserrat</option>
                                      <option value="MA">Morocco</option>
                                      <option value="MZ">Mozambique</option>
                                      <option value="MM">Myanmar</option>
                                      <option value="NA">Namibia</option>
                                      <option value="NR">Nauru</option>
                                      <option value="NP">Nepal</option>
                                      <option value="NL">Netherlands</option>
                                      <option value="NC">New Caledonia</option>
                                      <option value="NZ">New Zealand</option>
                                      <option value="NI">Nicaragua</option>
                                      <option value="NE">Niger</option>
                                      <option value="NG">Nigeria</option>
                                      <option value="NU">Niue</option>
                                      <option value="NF">Norfolk Island</option>
                                      <option value="MP">Northern Mariana Islands</option>
                                      <option value="NO">Norway</option>
                                      <option value="OM">Oman</option>
                                      <option value="PK">Pakistan</option>
                                      <option value="PW">Palau</option>
                                      <option value="PS">Palestinian Territory, Occupied</option>
                                      <option value="PA">Panama</option>
                                      <option value="PG">Papua New Guinea</option>
                                      <option value="PY">Paraguay</option>
                                      <option value="PE">Peru</option>
                                      <option value="PH">Philippines</option>
                                      <option value="PN">Pitcairn</option>
                                      <option value="PL">Poland</option>
                                      <option value="PT">Portugal</option>
                                      <option value="PR">Puerto Rico</option>
                                      <option value="QA">Qatar</option>
                                      <option value="RE">Réunion</option>
                                      <option value="RO">Romania</option>
                                      <option value="RU">Russian Federation</option>
                                      <option value="RW">Rwanda</option>
                                      <option value="BL">Saint Barthélemy</option>
                                      <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                      <option value="KN">Saint Kitts and Nevis</option>
                                      <option value="LC">Saint Lucia</option>
                                      <option value="MF">Saint Martin (French part)</option>
                                      <option value="PM">Saint Pierre and Miquelon</option>
                                      <option value="VC">Saint Vincent and the Grenadines</option>
                                      <option value="WS">Samoa</option>
                                      <option value="SM">San Marino</option>
                                      <option value="ST">Sao Tome and Principe</option>
                                      <option value="SA">Saudi Arabia</option>
                                      <option value="SN">Senegal</option>
                                      <option value="RS">Serbia</option>
                                      <option value="SC">Seychelles</option>
                                      <option value="SL">Sierra Leone</option>
                                      <option value="SG">Singapore</option>
                                      <option value="SX">Sint Maarten (Dutch part)</option>
                                      <option value="SK">Slovakia</option>
                                      <option value="SI">Slovenia</option>
                                      <option value="SB">Solomon Islands</option>
                                      <option value="SO">Somalia</option>
                                      <option value="ZA">South Africa</option>
                                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                                      <option value="SS">South Sudan</option>
                                      <option value="ES">Spain</option>
                                      <option value="LK">Sri Lanka</option>
                                      <option value="SD">Sudan</option>
                                      <option value="SR">Suriname</option>
                                      <option value="SJ">Svalbard and Jan Mayen</option>
                                      <option value="SZ">Swaziland</option>
                                      <option value="SE">Sweden</option>
                                      <option value="CH">Switzerland</option>
                                      <option value="SY">Syrian Arab Republic</option>
                                      <option value="TW">Taiwan, Province of China</option>
                                      <option value="TJ">Tajikistan</option>
                                      <option value="TZ">Tanzania, United Republic of</option>
                                      <option value="TH">Thailand</option>
                                      <option value="TL">Timor-Leste</option>
                                      <option value="TG">Togo</option>
                                      <option value="TK">Tokelau</option>
                                      <option value="TO">Tonga</option>
                                      <option value="TT">Trinidad and Tobago</option>
                                      <option value="TN">Tunisia</option>
                                      <option value="TR">Turkey</option>
                                      <option value="TM">Turkmenistan</option>
                                      <option value="TC">Turks and Caicos Islands</option>
                                      <option value="TV">Tuvalu</option>
                                      <option value="UG">Uganda</option>
                                      <option value="UA">Ukraine</option>
                                      <option value="AE">United Arab Emirates</option>
                                      <option value="GB">United Kingdom</option>
                                      <option value="US">United States</option>
                                      <option value="UM">United States Minor Outlying Islands</option>
                                      <option value="UY">Uruguay</option>
                                      <option value="UZ">Uzbekistan</option>
                                      <option value="VU">Vanuatu</option>
                                      <option value="VE">Venezuela, Bolivarian Republic of</option>
                                      <option value="VN">Viet Nam</option>
                                      <option value="VG">Virgin Islands, British</option>
                                      <option value="VI">Virgin Islands, U.S.</option>
                                      <option value="WF">Wallis and Futuna</option>
                                      <option value="EH">Western Sahara</option>
                                      <option value="YE">Yemen</option>
                                      <option value="ZM">Zambia</option>
                                      <option value="ZW">Zimbabwe</option>
                                  </select>
                                    <!-- <div class="help-block with-errors"></div> -->
                                </div>
                            </div>


<!-- Message:<br><textarea rows="5" name="message" cols="30"><br>                             -->

                            <div class="col-md-12">
                                <input style="float: right; color: #fff; font-family: avenir-regular; font-weight: 500;  font-size: 18px; border-radius: 8px;" type="submit" name="submit" class="btn btn-success btn-send" value="Submit">     
                            </div>
                            
      </form>
</body>
</html>