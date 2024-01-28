<?php
if(isset($_POST['btn_submit']))
{
    $con = mysqli_connect('localhost', 'mangalgr_user1', 'Pratham@#54321', 'mangalgr_db1');

 extract($_POST);
    // Insert data into the database
    $sql = "INSERT INTO `registerdata` (`id`, `name`, `dob`, `mobile`, `country`, `state`, `city`, `address`, `performer`, `abhishekDate`, `abhishekType`, `batchTime`, `partnerName`, `partnerDob`)
            VALUES (NULL, '$name', '$dob', '$mobile', '$country', '$state', '$city', '$address', '$performer', '$abhishekDate', '$abhishekType', '$batchTime','$partnerName','$partnerDob')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Thanks for the Abhishek Form'); </script>";
    } else {
        echo "<script>alert('Failed to save the Abhishek Form');</script>";
    }
    
//    print_r($_POST);
  //  echo "Buttion Hit zala";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div id="abhishek-form"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
    <div class="form-box">
      
        
          <h2 class="gallery-heading">Abhishek Form</h2><br>
          <form id="abhishekForm" action="#" method="post">




          <div class="mb-3">
              <label class="form-label">Select Abhishek Performer Type:</label>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="performerType" id="soloPerformer" value="Solo" checked>
                  <label class="form-check-label" for="soloPerformer">Solo</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="performerType" id="couplePerformer" value="Couple">
                  <label class="form-check-label" for="couplePerformer">Couple</label>
              </div>
          </div>




            <div class="col-md">
              <label for="name" class="form-label">Name:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
              </div>
              <div class="col-md-6">
              
    <label for="mobile" class="form-label">Mobile Number:</label>
    <input type="tel" class="form-control" id="mobile" name="mobile" pattern="[0-9]{10}" maxlength="10" title="Please enter a 10-digit mobile number" oninput="restrictInput(this)" required>
</div>

<script>
    function restrictInput(input) {
        // Remove any non-numeric characters
        input.value = input.value.replace(/[^0-9]/g, '');

        // Ensure the length is not more than 10 characters
        if (input.value.length > 10) {
            input.value = input.value.slice(0, 10);
        }
    }
</script>

            </div>
              <div class="row mb-3">




            <div id="partnerFields" style="display:none;">
                <div class="row">
                    <div class="col-md-6">
                        <label for="partnerName" class="form-label">Partner's Name:</label>
                        <input type="text" class="form-control" id="partnerName" name="partnerName" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="partnerDob" class="form-label">Partner's Date of Birth:</label>
                        <input type="date" class="form-control" id="partnerDob" name="partnerDob" disabled>
                    </div>
                </div>
            </div>




              
            <div class="row mb-3">
            <div class="col-md-6">
    <label for="country" class="form-label">Country:</label>
    <select class="form-control" id="country" name="country" required>
        <option value="" disabled selected>Select your country</option>
    </select>
</div>

<script>
    // Array of countries
    const countries = [
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia",
    "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium",
    "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria",
    "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad",
    "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia", "Cuba", "Cyprus",
    "Czechia (Czech Republic)", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt",
    "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini ", "Ethiopia", "Fiji",
    "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea",
    "Guinea-Bissau", "Guyana", "Haiti", "Holy See", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran",
    "Iraq", "Ireland", "Israel", "Italy", "Ivory Coast", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya",
    "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein",
    "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
    "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco",
    "Mozambique", "Myanmar (formerly Burma)", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua",
    "Niger", "Nigeria", "North Korea", "North Macedonia (formerly Macedonia)", "Norway", "Oman", "Pakistan", "Palau",
    "Palestine State", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar",
    "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa",
    "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore",
    "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka",
    "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo",
    "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates",
    "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
];


    // Get the select element
    const countrySelect = document.getElementById("country");

    // Populate the dropdown with countries
    countries.forEach(country => {
        const option = document.createElement("option");
        option.value = country;
        option.text = country;
        countrySelect.appendChild(option);
    });
</script>

              <div class="col-md-6">
                <label for="state" class="form-label">State:</label>
                <input type="text" class="form-control" id="state" name="state" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="city" class="form-label">City:</label>
                <input type="text" class="form-control" id="city" name="city" required>
              </div>
              <div class="col-md-6">
                <label for="address" class="form-label">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="performer" class="form-label">Abhishek Performer:</label>
                <select class="form-select" id="performer" name="performer" required>
                    <option value="" disabled selected>Select Abhishke Performer</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>

                </select>
              </div>
              <div class="col-md-6">
                <label for="abhishekDate" class="form-label">Abhishek Date:</label>
                <input type="date" class="form-control" id="abhishekDate" name="abhishekDate" required>
              </div>
              
<script>
    // Get the current date
    var currentDate = new Date();
    
    // Format current date as 'YYYY-MM-DD'
    var formattedDate = currentDate.toISOString().split('T')[0];

    // Set the minimum attribute of the date input to the current date
    document.getElementById('abhishekDate').setAttribute('min', formattedDate);
</script>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="abhishekType" class="form-label">Abhishek Type:</label>
                <select class="form-select" id="abhishekType" name="abhishekType" required>
    <option value="" disabled selected>Select Abhishek Type</option>
    <option value="Havanatmak Shanti">Havanatmak Shanti </option>
    <option value="Panchamrut Abhishek">Panchamrut Abhishek</option>
    <option value="Nitya Prabhata Shri Mangalabhishek">Nitya Prabhata Shri Mangalabhishek</option>
    <option value="Abhishek in the Absence of Devotees">Abhishek in the Absence of Devotees</option>
    <option value="Swatantra (Special) Abhishek">Swatantra (Special) Abhishek</option>
    <option value="Bhomayag">Bhomayag</option>
</select>

              </div>
              <div class="col-md-6">
                <label for="batchTime" class="form-label">Abhishek Batch Time:</label>
                <select class="form-select" id="batchTime" name="batchTime" required>
                    <option value="" disabled selected>Select Batch Time</option>
                    <option value="8 AM to 10 AM">8 AM to 10 AM</option>
                    <option value="10 AM to 12 PM">10 AM to 12 PM</option>
                    <option value="12 PM to 3 PM">12 PM to 3 PM</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <script>
    // Add event listener to the radio button for Solo/Couple selection
    document.querySelectorAll('input[name="performerType"]').forEach(function (radio) {
        radio.addEventListener('change', function () {
            // Get the value of the selected option
            var selectedValue = this.value;

            // Get the partner fields container
            var partnerFields = document.getElementById('partnerFields');

            // Enable or disable partner fields based on the selection
            if (selectedValue === 'Couple') {
                partnerFields.style.display = 'block';
                // Enable the partner fields
                document.getElementById('partnerName').disabled = false;
                document.getElementById('partnerDob').disabled = false;
            } else {
                partnerFields.style.display = 'none';
                // Disable and clear the partner fields
                document.getElementById('partnerName').disabled = true;
                document.getElementById('partnerName').value = '';
                document.getElementById('partnerDob').disabled = true;
                document.getElementById('partnerDob').value = '';
            }
        });
    });
</script>
      
</body>
</html>