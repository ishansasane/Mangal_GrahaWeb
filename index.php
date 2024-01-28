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
  <title>Mangal-Graha Mandir</title>
  <link rel="stylesheet" href="Main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <style>
    .image-grid img {
      display: none;
      align-items: center;
      margin-left: 50%;
      justify-content: center;
      max-width: 100%;
      height: auto;
    }
  </style>
</head>

<body>

  <div class="go-to-navbar">
    <a href="#navbar" class="go-to-navbar-btn">&#8593; Go to Navbar</a>
  </div>
  <div id="navbar">
    <nav class="navbar">
      <div class="logo">
        <img src="images\logo.png" alt="Logo">
        <span>Mangal-Graha Mandir</span>
      </div>
      <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li class="dropdown">
          <a>Abhishek</a>
          <div class="dropdown-content">
            <a href="#abhishek-type">Abhishek Type</a>
            <a href="#abhishek-form">Abhishek Form</a>
            <a href="#abhishek-schedule">Abhishek Schedule</a>
          </div>
        </li>
        <li><a href="#gallery">Gallery</a></li>

        <li class="dropdown">
          <a>About</a>
          <div class="dropdown-content">
            <a href="#accommodation">Accommodation</a>
            <a href="#trustee">Trustee</a>
          </div>
        </li>
        <li class="dropdown">
          <a>language(भाषा)</a>
          <div class="dropdown-content">
            <a href="index.php">English</a>
            <a href="indexh.php">Hindi</a>
            <a href="indexm.php">Marathi</a>
          </div>
        </li>
        <li><a href="#location">Location</a></li>

      </ul>
    </nav>
  </div>
  <!-- Sections -->
  <br>
  <section id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images\image1.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="images\image2.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="images\image3.png" class="d-block w-100">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>
    <div class="yellow-banner">
      <p class="banner-text">Abhishek Pooja Time: 8:00AM to 6:00PM</p>
    </div>
    <div class="content">
      <div class="image-with-text">
        <img src="images/murti.png" alt="Your Image" class="animated-image">
        <div class="text-box">
          <p><span class="larger-text">Shree Mangal-Graha Mandir</span></p>
          <p>Shri Mangal Dev Temple of Amalner is one of the most ancient, most rare and most ‘live’ (a temple where
            people experience fulfillment of wishes and desires) of temples in entire India.</p>
          <p>It is public knowledge that temples of Shri Mangal Dev are very rare. Who constructed the Mangal Dev Grah
            (planet) temple in Amalner and when was the idol established? There is no authentic information regarding
            this. Some believe that the temple was renovated for the first time in 1933. After 1940 the temple once
            again went into oblivion and reached a stage of dilapidation. Till 1999 the surroundings of the temple were
            used as a dumping ground for the town’s waste. It was also a hideout for criminals and other anti-social
            activities. This fact seems unbelievable but is unfortunately true.</p>
          <p>The post 1999 renovation has brought about a miraculously pleasant transformation in the temple and its
            surroundings. In the last 5 to 7 years the pace of development of the place and facilities has increased
            manifold.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="sep">
  </div>


  <section id="gallery">
    <h2 class="gallery-heading">Gallery</h2>
    <div class="image-grid" style="align-items: center; justify-content:center">
      <img src="images/i1.png" alt="Image 1" style="display: block;">
      <img src="images/i2.png" alt="Image 2">
      <img src="images/i3.png" alt="Image 1">
      <img src="images/i4.png" alt="Image 2">
      <img src="images/i5.png" alt="Image 1">
      <img src="images/i6.png" alt="Image 2">
      <img src="images/i7.png" alt="Image 1">
      <img src="images/i8.png" alt="Image 2">
      <img src="images/i9.png" alt="Image 1">
      <img src="images/i10.png" alt="Image 2">
      <img src="images/i11.png" alt="Image 1">
      <img src="images/i12.png" alt="Image 2">
      <img src="images/i13.png" alt="Image 1">
      <img src="images/i14.png" alt="Image 2">
      <img src="images/i15.png" alt="Image 1">
      <img src="images/i16.png" alt="Image 2">
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const imageGrid = document.querySelector(".image-grid");
      const images = imageGrid.querySelectorAll("img");
      let currentIndex = 0;

      function showImage(index) {
        for (let i = 0; i < images.length; i++) {
          images[i].style.display = "none";
        }
        images[index].style.display = "block";
      }

      function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
      }

      setInterval(nextImage, 3000); // Change image every 3 seconds
    });
  </script>


  <div class="sep">
  </div>

  <section id="abhishek">
    <div id="abhishek-type">

      <h2 class="gallery-heading">Abhishek Type</h2>
      <div class="container mt-4">
        <div class="row">

          <div class="card">
            <div class="card-header">
              <h3>Havanatmak Shanti</h3>
            </div>
            <div class="card-body">
              <p>Havan or Yajna holds immense significance in Hindu culture from time immemorial. It is a ritual of
                energy attainment and purification. The worship of Shri Mangal Dev is conducted in the Havan Kund
                through the medium of fire. Invocations are made with powerful mantras, and offerings of Yajna Samidha
                and Havan materials are made. Havanatmak Puja/Shanti of Shri Mangal Dev is performed for the eradication
                of troubles, sorrows, difficulties, or any lingering questions in one's life, as well as for general
                well-being.<br>
                The Havanatmak Shanti Puja includes recitations from the Vedas, worship of Ganesha, Matruka Puja,
                worship of Shri Mangala, worship of the Navagraha Mandal, Rudrakalash Puja, and the actual Havan. <br>
                Interested devotees desiring Havan-Havanatmak Puja should prepare for Abhishek Puja/Shanti under the
                guidance/direction of the main priests in the temple. The family members can also be present during this
                Shanti Puja. It is essential to deposit the necessary fee in the temple's bank account before the
                Abhishek Puja/Shanti or make the payment in person in front of the temple. It is necessary to schedule
                (advance booking) the Havanatmak Abhishek either by coming to the temple or online. <br>
                Coordinate with the temple administration for available dates. <br>
                <span style="font-weight: 700; color: red;">Duration:</span> 3 hours <br>
                <span style="font-weight: 700; color: red;">Fee:</span> ₹6300/
              </p>
            </div>


          </div>

          <div class="card">

            <div class="card-header">
              <h3>Panchamrut Abhishek</h3>
            </div>
            <div class="card-body">
              <p>The Panchamrut Abhishek, performed directly on the self-manifested idol of Shri Mangal Dev in the
                temple, is available exclusively for one family (joint family) at a time. Interested devotees can
                register by visiting the temple or by calling the contact numbers provided by the organization, or by
                booking online. <br>
                Since the Panchamrut Abhishek is conducted only on Tuesdays, it is advisable to book in advance based on
                the registered devotee count. Contact the temple administration 3 to 4 days before the scheduled date to
                get complete information about the puja. Devotees need to make the necessary payment either by
                depositing it into the organization's bank account in advance or in person in front of the temple.
                Scheduling (advance booking) for this abhishek can be done by visiting the temple or online. <br>
                The temple management will contact the registered devotees with further details. Devotees are also
                provided with complete information about the puja. <br>
                For this, it is essential to deposit the required fee in the temple's bank account in advance or to make
                the payment in person in front of the temple. <br>
                The devotees participating in the puja can also be present during the Maha Aarti scheduled at 7:00 AM.
                <br>
                <span><span style="font-weight: 700; color: red;">Day:</span> Tuesday</span> <br>
                <span style="font-weight: 700; color: red;">Timing:</span> 5 AM to 7 AM (2 hours) <br>
                <span style="font-weight: 700; color: red;">Fee:</span> ₹7200/
              </p>
            </div>
            ```
          </div>

        </div>


        <div class="row">

          <div class="card">
            <div class="card-header">
              <h3>Nitya Prabhat Shri Mangal Abhishek</h3>
            </div>
            <div class="card-body">
              <p>The Nitya Prabhat Shri Mangal Abhishek is performed at Shri Mangal Dev's temple every day. Devotees can
                participate in this abhishek by registering their names. To register, they can either visit the temple
                or call the provided contact numbers of the organization. Additionally, online booking is available for
                this abhishek. The abhishek takes place at the sacred self-manifested idol of Shri Mangal Dev in the
                temple. Devotees can deposit the required fee in the temple's bank account in advance or make the
                payment in person in front of the temple. <br>
                The abhishek is conducted early in the morning and is followed by the morning aarti scheduled at 7:00
                AM. <br>
                <span style="font-weight: 700; color: red;">Day:</span> Every day (Monday to Sunday) <br>
                <span style="font-weight: 700; color: red;">Timing:</span> Early morning to 7 AM <br>
                <span style="font-weight: 700; color: red;">Fee:</span> As per the temple's guidelines
              </p>
            </div>

          </div>


          <div class="card">
            <div class="card-header">
              <h3>Abhishek in the Absence of Devotees</h3>
            </div>
            <div class="card-body">
              <p>Due to reasons such as age, illness, employment, or business engagements, some devotees may be unable
                to come to the temple for the abhishek. <br>
                For such individuals, abhishek can be performed at the temple even if they are not physically present.
                <br>
                Devotees who cannot come to the temple for abhishek can prepare a list of their names at their
                convenience every fortnight. On Mangalvar (Tuesday), they can independently resolve through Gurujee to
                perform abhishek in their absence. This includes mentioning the individual's gotra (lineage) and
                personal details. The entire ritual takes about 1 hour and is performed according to the prescribed
                procedures. After the abhishek, prasad is sent to the devotees by post. They also receive a certificate
                of abhishek. Devotees need to deposit the required fee in the organization's bank account in advance or
                make the payment in person in front of the temple. <br>
                If there are specific requests beyond this, abhishek can also be conducted via video calling. However,
                devotees need to inform the temple administration in advance for such arrangements. <br>
                <span style="font-weight: 700; color: red;">Fee -</span> ₹810/- (Per individual)
              </p>
            </div>

          </div>




          <div class="row">

            <div class="card">
              <div class="card-header">
                <h3>Independent (Special) Abhishek</h3>
              </div>
              <div class="card-body">
                <p>Throughout the year, on every Tuesday, there is an Abhishek at Shri Mangal Dev Grah Mandir. There is
                  no cessation of Abhishek on any Tuesday. On Tuesdays, a large number of devotees gather to perform
                  Abhishek, coming from all over India. To accommodate such devotees without any inconvenience, the
                  temple administration organizes a collective Abhishek systematically and efficiently. Devotees
                  participating in the Abhishek need to follow the instructions provided by Gurujis (spiritual leaders)
                  and undergo the collective Abhishek. <br>
                  For those devotees who do not wish to participate in the collective Abhishek, they can opt for an
                  Independent Abhishek as per their preference. The Independent Abhishek is arranged separately for
                  devotees, where one Gurujis conducts the Abhishek for a single devotee at a time. Detailed information
                  about the pooja is provided to the devotee during the Independent Abhishek, including comprehensive
                  details about the worship. Along with the person undergoing the Abhishek, family members can also sit
                  in the front. For this, it is necessary to deposit the required donation in the organization's bank
                  account or submit it directly at the temple. <br>
                  <span style="font-weight: 700; color: red;">Day:</span> Tuesday <br>
                  Time: Approximately 2.5 hours <br>
                  <span style="font-weight: 700; color: red;">Donation -</span> ₹5400/
                </p>
              </div>

            </div>


            <div class="card">
              <div class="card-header">
                <h3>Bhomayag</h3>
              </div>
              <div class="card-body">
                <p>Especially beneficial for those involved in professions related to sand, agriculture, or soil,
                  Bhomayag is considered highly advantageous for individuals such as farmers, civil engineers,
                  architects, builders, developers, and brokers. The statue of the Earth Son (Shri Mangalgrah) and the
                  Earth Mother is exclusively present at the Shri Mangalgrah Mandir in Amalner worldwide. Due to the
                  presence of the Earth Mother and Earth Son at Shri Mangalgrah Mandir in Amalner, the Shri Bhomayag
                  performed there is believed to have a profound impact. Bhomayag is a homa (ritualistic fire ceremony)
                  conducted in a traditional manner. Before performing this ritual, it is necessary to deposit the
                  required donation in the organization's bank account or submit it directly at the temple. Bhomayag
                  cannot be conducted without prior approval from the temple management. <br>
                  <span style="font-weight: 700; color: red;">Day:</span> Contact the temple administration to confirm
                  the date. <br>
                  <span style="font-weight: 700; color: red;">Time:</span> 3 to 4 hours <br>
                  <span style="font-weight: 700; color: red;">Donation -</span> ₹9000/
                </p>
              </div>

            </div>
          </div>
        </div>

      </div>

      <div class="sep">
      </div>
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
                    <input class="form-check-input" type="radio" name="performerType" id="soloPerformer" value="Solo"
                      checked>
                    <label class="form-check-label" for="soloPerformer">Solo</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="performerType" id="couplePerformer"
                      value="Couple">
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
                    <input type="tel" class="form-control" id="mobile" name="mobile" pattern="[0-9]{10}" maxlength="10"
                      title="Please enter a 10-digit mobile number" oninput="restrictInput(this)" required>
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

    <div class="sep">
    </div>



    <div id="abhishek-schedule">
      <h2 class="gallery-heading">Abhishek Schedule</h2>
      <div class="card-container">



        <div class="row">
          <div class="card">
            <div class="card-header">
              <h3>Tuesday - मंगळवार</h3>
            </div>
            <div class="card-body">
              <p><span style="color: red; font-weight: 700;">Morning:</span> 5:00 AM - Panchamrut Abhishek<br>
                <span style="color: red; font-weight: 700;">Morning:</span> 7:00 AM to 11:00 PM - Darshan<br>
                <span style="color: red; font-weight: 700;">Morning:</span> 7:00 AM - Morning Aarti<br>
                <span style="color: red; font-weight: 700;">Morning:</span> 8:00 AM to 6:00 PM - Abhishek Puja (Duration
                - 1 hour)<br>
                <span style="color: red; font-weight: 700;">Afternoon:</span> 12:00 PM - Naivedya (Offerings)<br>
                <span style="color: red; font-weight: 700;">Evening:</span> 5:00 PM - Palakhi (Palanquin)<br>
                <span style="color: red; font-weight: 700;">Evening:</span> 6:00 PM - Evening Aarti<br>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="card">
            <div class="card-header">
              <h3>Other Days - इतर दिवशी</h3>
            </div>
            <div class="card-body">
              <p><span style="color: red; font-weight: 700;">Morning:</span> 5:00 AM - Nitya Prabhat Mangal Abhishek<br>
                <span style="color: red; font-weight: 700;">Morning:</span> 7:00 AM to 11:00 PM - Darshan<br>
                <span style="color: red; font-weight: 700;">Morning:</span> 7:00 AM - Morning Aarti<br>
                <span style="color: red; font-weight: 700;">Morning:</span> 8:00 AM to 6:00 PM - Abhishek Puja (Duration
                - 1 hour)<br>
                <span style="color: red; font-weight: 700;">Afternoon:</span> 12:00 PM - Naivedya (Offerings)<br>
                <span style="color: red; font-weight: 700;">Evening:</span> 6:00 PM - Evening Aarti<br>
              </p>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>


  <div class="sep">
  </div>



  <section id="about">
    <div id="accommodation">
      <h2 class="gallery-heading">Accommodation</h2>
      <div class="accommodation-container">
        <div class="gallery-section">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images\room1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images\room2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images\room3.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="text-section">
          <div class="info-box">
            <p><span style="color: red; font-weight: 700;">Shri Mangal Dev Temple</span> in Amalner is an ancient temple
              on the planet because it is aware of the location and rare and famous. <br><br>

              Temple area has two halls, tulasi garden, water harvesting bunds, fountain, spectacular lighting,
              picturesque places, canteen, children's play area in the Rotary Garden, live rabbits, fish, shellfish,
              devotee accommodations, and all kinds of services and facilities. Due to this, the temple is famous as a
              picnic spot and tourist attraction. <br><br>

              So many schools, colleges, organizations, political parties, associations, clubs, societies, social and
              religious institutions, and various programs come there for trips. They are cooperated by the management.
              However, it is necessary to allow management before any program. The temple area has the right to give or
              not to give permission for any management program. There are two AC rooms, one attached non-AC room, two
              big halls, and an adequate number of washrooms in the temple premises. Accommodation is provided at an
              affordable cost. There are also good lodges in the town.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="sep">
    </div>




    <div id="trustee">
      <h2 class="gallery-heading">Board of Trustee</h2>
      <div class="trustee-cards">
        <div class="card">
          <img src="images\trustee\cropped-Digambar.png" alt="Trustee 1">
          <div class="info">
            <div class="name">Shri. Digambhar Vitthal Mahale</div>
            <div class="post">President</div>
          </div>
        </div>
        <div class="card">
          <img src="images\trustee\cropped-Suresh.png" alt="Trustee 1">
          <div class="info">
            <div class="name">Shri. Suresh Nilkanth Patil</div>
            <div class="post">Vice President</div>
          </div>
        </div>
        <div class="card">
          <img src="images\trustee\cropped-Suresh Sec.png" alt="Trustee 1">
          <div class="info">
            <div class="name">Shri. Suresh Bhagwan Baviskar</div>
            <div class="post">Secretary</div>
          </div>
        </div>
        <div class="card">
          <img src="images\trustee\cropped-Dilip.png" alt="Trustee 1">
          <div class="info">
            <div class="name">Shri. Dilip Atmaram Bahiram</div>
            <div class="post">Joint-Secretary</div>
          </div>
        </div>
        <div class="card">
          <img src="images\trustee\cropped-Girish.png" alt="Trustee 1">
          <div class="info">
            <div class="name">Shri. Girish Vishwanath Kulkarni</div>
            <div class="post">Treasurer</div>
          </div>
        </div>
        <div class="card">
          <img src="images\trustee\cropped-Anil.png" alt="Trustee 1">
          <div class="info">
            <div class="name">Shri. Anil Shridharrao Ahirrao</div>
            <div class="post">Trustee</div>
          </div>
        </div>
        <div class="card">
          <img src="images\trustee\cropped-Jayshree.png" alt="Trustee 1">
          <div class="info">
            <div class="name">Smt. Jayshree Atmaram Sabe</div>
            <div class="post">Trustee</div>
          </div>
        </div>
        <div class="card">
          <img src="images\trustee\cropped-Dangaldas.png" alt="Trustee 1">
          <div class="info">
            <div class="name">Shri Dangaldas Aadhar Sonawane</div>
            <div class="post">Trustee</div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="sep">
  </div>


  <section id="location">
    <h2 class="gallery-heading">Location</h2>

    <div class="location">
      <div class="text-section info-box">
        <h2 style="color: red; font-weight: 700;">About Amalner, India</h2>
        <p>Amalner, India situated on the Bori River bank is a city in Jalgaon district of Maharashtra state and is a
          municipal corporation. Amalner is a Taluka in Jalgaon district.</p>
        <p>Shri Mangal Dev Temple of Amalner is one of the most ancient, rare, and 'live' temples in entire India where
          people experience the fulfillment of wishes and desires. One can reach Amalner via Jalgaon or Dhulia.</p>
        <h4 style="color: red; font-weight: 700;">By Bus:</h3>
          <ul>
            <li>Jalgaon To Mangal Graha Temple, Amalner: 55Km To 60 Km</li>
            <li>Dhule To Amalner: 35Km</li>
            <li>Pune TO Amalner: 100 Km</li>
          </ul>
          <h4 style="color: red; font-weight: 700;">By Train:</h3>
            <ul>
              <li>Jalgaon To Mangal Graha Temple, Amalner: Schedule for Train Timetable</li>
              <li>Dhule To Amalner: Schedule for Train Timetable</li>
            </ul>
      </div>
      <div class="map-section">
        <iframe
          src="https://maps.google.com/maps?q=Mangal%20graha%20mandir&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
          frameborder="0" scrolling="no"></iframe>
      </div>
    </div>
  </section>
  <div class="sep">
  </div>

  <footer>
    <div class="footer-content">

      <p><span style="color: red;">Postal Address:</span> Chopda road, Dhangar Nagar, Amalner 425401, Dist Jalgaon,
        Maharashtra <br>
        <span style="color: red;">Phone:</span> +91-8348606060, +91-8348707070, +91-8348808080 <br>
        <span style="color: red;">Email:</span> mangalgrahamandir@gmail.com <br>
        © Copyright 2024 Mangal Graha Seva Sanstha, Amalner | Developed by: Sanjivani College Engineering <img
          src="images\SCOElogo.png" alt="" style="height: 50px; width: 50px;">
      </p>

    </div>
    <a href="admin\privacy.html" style="color: white;">Privacy |</a>
    <a href="admin\SandD.html" style="color: white;">Shipping and Delivery |</a>
    <a href="admin\TandC.html" style="color: white;">Terms & Conditions |</a>
    <a href="admin\CandR.html" style="color: white;">Cancellation,Return & Refund |</a>
  </footer>



  <!-- Include JavaScript if needed -->
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