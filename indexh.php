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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    <a href="#navbar" class="go-to-navbar-btn">&#8593; नैविगेशन पर जाएं</a>
</div>
<div id="navbar">
    <nav class="navbar">
        <div class="logo">
            <img src="images\logo.png" alt="लोगो">
            <span>Mangal-Graha Mandir</span>
        </div>
        <ul class="menu">
            <li><a href="#home">होम</a></li>
            <li class="dropdown">
                <a>अभिषेक</a>
                <div class="dropdown-content">
                    <a href="#abhishek-type">अभिषेक प्रकार</a>
                    <a href="#abhishek-form">अभिषेक फॉर्म</a>
                    <a href="#abhishek-schedule">अभिषेक समयसारणी</a>
                </div>
            </li>
            <li><a href="#gallery">गैलरी</a></li>

            <li class="dropdown">
                <a>हमारे बारे में</a>
                <div class="dropdown-content">
                    <a href="#accommodation">आवास</a>
                    <a href="#trustee">ट्रस्टी</a>
                </div>
            </li>
            <li class="dropdown">
                <a>भाषा</a>
                <div class="dropdown-content">
                    <a href="index.php">इंग्लिश</a>
                    <a href="indexh.php">हिंदी</a>
                    <a href="indexm.php">मराठी</a>
                </div>
            </li>
            <li><a href="#location">स्थान</a></li>
            
        </ul>
    </nav>
</div>

  <!-- Sections -->
  <br>
  <section id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <div class="yellow-banner">
    <p class="banner-text">अभिषेक पूजा का समय: सुबह 8:00 से शाम 6:00 बजे तक</p>
</div>
<div class="content">
    <div class="image-with-text">
        <img src="images/murti.png" alt="आपकी छवि" class="animated-image">
        <div class="text-box">
            <p><span class="larger-text">श्री मंगल-ग्रह मंदिर</span></p>
            <p>अमलनेर के श्री मंगल देव मंदिर भारत के सम्पूर्ण देश में सबसे प्राचीन, अत्यंत दुर्लभ, और सबसे 'जीवंत' (एक मंदिर जहां लोग इच्छाएँ और आकांक्षाएँ पूरी होती हैं) मंदिरों में से एक है।</p>
            <p>सार्वजनिक ज्ञान है कि श्री मंगल देव के मंदिर बहुत ही दुर्लभ होते हैं। कौन ने अमलनेर में मंगल देव ग्रह (ग्रह) का मंदिर बनाया और मूर्ति कब स्थापित की गई थी? इसके बारे में कोई प्रमाणिक जानकारी नहीं है। कुछ लोग मानते हैं कि मंदिर को पहली बार 1933 में पुनर्निर्माण किया गया था। 1940 के बाद मंदिर फिर से अनदेखा हो गया और विघटन के चरण तक पहुंच गया। 1999 तक मंदिर के आस-पास का क्षेत्र नगर के कचरे की ढेर के रूप में उपयोग किया जा रहा था। यह नगर के कचरे का ढेर भी था और यह अपराधियों और अन्य असामाजिक गतिविधियों के लिए एक छिपाने की जगह थी। यह तथ्य अविश्वसनीय है लेकिन दुर्भाग्यपूर्ण रूप से सत्य है।</p>
            <p>1999 के बाद के पुनर्निर्माण ने मंदिर और इसके आस-पास में आश्चर्यजनक रूप से सुधार लाया है। पिछले 5 से 7 वर्षों में स्थान और सुविधाओं के विकास की गति में वृद्धि हुई है।</p>
        </div>
    </div>
</div>

      </div>
  </section>

  <div class="sep">
  </div>


  <section id="gallery">
  <h2 class="gallery-heading">गॅलरी</h2>
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
                <h3>हवनात्मक शांति</h3>
            </div>
            <div class="card-body">
                <p>हवन या यज्ञ हिन्दू सांस्कृतिक में बहुत महत्वपूर्ण है, यह समय से समय की अदिभूत सांस्कृतिक परंपरा है। यह ऊर्जा प्राप्ति और शुद्धि का एक अनुष्ठान है। श्री मंगल देव की पूजा हवन कुण्ड के माध्यम से आग के साथ की जाती है। शक्तिशाली मंत्रों के साथ आवाहन किया जाता है, और यज्ञ समिधा और हवन सामग्री की बलियाँ चढ़ाई जाती हैं। श्री मंगल देव की हवनात्मक पूजा/शांति का कारण समस्याओं, दुखों, कठिनाईयों या जीवन में किसी भी लंगरिंग प्रश्न के उन्मूलन के लिए, साथ ही सामान्य भलाइयों के लिए की जाती है।<br>
                    हवनात्मक शांति पूजा में वेदों के पाठ, गणेश की पूजा, मातृका पूजा, श्री मंगल की पूजा, नवग्रह मंडल की पूजा, रुद्रकलश पूजा, और वास्तविक हवन शामिल है।<br>
                    हवन-हवनात्मक पूजा की इच्छा रखने वाले उत्सुक भक्तों को मुख्य पुजारियों के मार्गदर्शन/निर्देश के तहत अभिषेक पूजा/शांति के लिए तैयारी करनी चाहिए। परिवार के सदस्य इस शांति पूजा के दौरान भी मौजूद हो सकते हैं। अभिषेक पूजा/शांति से पहले आवश्यक शुल्क को मंदिर के बैंक खाते में जमा करना आवश्यक है या मंदिर के सामने व्यक्तिगत रूप से भुगतान करना होगा। हवनात्मक अभिषेक को आगे की तिथि के लिए (अग्रिम बुकिंग) मंदिर आने या ऑनलाइन बुक करना आवश्यक है।<br>
                    उपलब्ध तिथियों के लिए मंदिर प्रशासन के साथ समन्वय करें।<br>
                    <span style="font-weight: 700; color: red;">अवधि:</span> 3 घंटे <br>
                    <span style="font-weight: 700; color: red;">शुल्क:</span> ₹6300/
                </p>
            </div>

      
    </div>
      
      <div class="card">
    
      <div class="card-header">
    <h3>पंचामृत अभिषेक</h3>
</div>
<div class="card-body">
    <p>पंचामृत अभिषेक, जो मंदिर में श्री मंगल देव की स्वयं प्रतिष्ठित मूर्ति पर सीधे किया जाता है, यह केवल एक परिवार (संयुक्त परिवार) के लिए एक ही समय में उपलब्ध है। इच्छुक भक्त विशेषज्ञ द्वारा प्रदान किए गए संपर्क नंबरों को कॉल करके या ऑनलाइन बुक करके मंदिर का दौरा करके रजिस्टर कर सकते हैं। <br>
        क्योंकि पंचामृत अभिषेक केवल मंगलवार को होता है, इसलिए पंजीकृत भक्तों की संख्या के आधार पर पहले से ही बुक करना सुझावित है। योजित तिथि से 3 से 4 दिन पहले मंदिर प्रशासन से पूजा के बारे में पूरी जानकारी प्राप्त करने के लिए संपर्क करें। भक्तों को पूर्व-सूचित भक्त संख्या के आधार पर आवश्यक भुगतान या मंदिर के सामने व्यक्तिगत रूप से करना होगा। इस अभिषेक के लिए अग्रिम बुकिंग (अवधि) को आने या ऑनलाइन करने के लिए करना आवश्यक है। <br>
        मंदिर प्रबंधन पंजीकृत भक्तों से और विवरण के साथ संपर्क करेगा। भक्तों को पूजा के बारे में पूरी जानकारी भी प्रदान की जाएगी। <br>
        इसके लिए मंदिर के बैंक खाते में आवश्यक शुल्क को पहले ही जमा करना आवश्यक है या मंदिर के सामने व्यक्तिगत रूप से भुगतान करना होगा। <br>
        पूजा में भाग लेने वाले भक्त भी सुबह 7:00 बजे की महा आरती के दौरान मौजूद हो सकते हैं। <br>
        <span><span style="font-weight: 700; color: red;">दिन:</span> मंगलवार</span> <br>
        <span style="font-weight: 700; color: red;">समय:</span> सुबह 5 बजे से 7 बजे तक (2 घंटे) <br>
        <span style="font-weight: 700; color: red;">शुल्क:</span> ₹7200/
    </p>
</div>


      </div>
    
    </div>
    

    <div class="row">
      
      <div class="card">
      <div class="card-header">
    <h3>नित्य प्रभात श्री मंगल अभिषेक</h3>
</div>
<div class="card-body">
    <p>नित्य प्रभात श्री मंगल अभिषेक हर दिन श्री मंगल देव के मंदिर में किया जाता है। भक्त अपने नामों को पंजीकृत करके इस अभिषेक में भाग ले सकते हैं। पंजीकरण के लिए, वे या तो मंदिर का दौरा कर सकते हैं या संगठन के प्रदान किए गए संपर्क नंबरों पर कॉल कर सकते हैं। इसके अलावा, इस अभिषेक के लिए ऑनलाइन बुकिंग भी उपलब्ध है। अभिषेक श्री मंगल देव की मंदिर में स्वयं प्रतिष्ठित मूर्ति पर होता है। भक्त आवश्यक शुल्क को मंदिर के बैंक खाते में पहले ही जमा कर सकते हैं या मंदिर के सामने व्यक्तिगत रूप से भुगतान कर सकते हैं। <br>
        यह अभिषेक सुबह की शुरुआत में होता है और इसे सुबह 7:00 बजे की सुबह आरती के साथ अनुसरण किया जाता है। <br>
        <span style="font-weight: 700; color: red;">दिन:</span> प्रतिदिन (सोमवार से रविवार) <br>
        <span style="font-weight: 700; color: red;">समय:</span> सुबह का समय सुबह 7 बजे तक <br>
        <span style="font-weight: 700; color: red;">शुल्क:</span> मंदिर के निर्देशों के अनुसार
    </p>
</div>


      </div>
    
      
      <div class="card">
      <div class="card-header">
    <h3>भक्तों की अनुपस्थिति में अभिषेक</h3>
</div>
<div class="card-body">
    <p>ऐसे कारणों के चलते जैसे बुढ़ापे, बीमारी, रोजगार, या व्यापारिक व्यस्तताएँ, कुछ भक्त अभिषेक के लिए मंदिर आने में असमर्थ हो सकते हैं। <br>
        इस प्रकार के व्यक्तियों के लिए, अभिषेक को मंदिर में उपस्थित नहीं होते हुए भी किया जा सकता है। <br>
        जो भक्त मंदिर आने के लिए असमर्थ हैं, वे हर पखवाड़े में अपने नामों की सूची तैयार कर सकते हैं। मंगलवार (मंगलवार) को, वे अपने अभिषेक को अपनी अनुपस्थिति में करने का संकल्प कर सकते हैं। इसमें व्यक्ति के गोत्र (वंश) और व्यक्तिगत विवरणों का उल्लेख शामिल है। पूरा अनुष्ठान लगभग 1 घंटा का है और निर्धारित प्रक्रियाओं के अनुसार किया जाता है। अभिषेक के बाद, प्रसाद भक्तों को डाक द्वारा भेजा जाता है। उन्हें अभिषेक का प्रमाणपत्र भी मिलता है। भक्तों को आगे के लिए आवश्यक शुल्क को संगठन के बैंक खाते में पहले ही जमा करना होगा या मंदिर के सामने व्यक्तिगत रूप से भुगतान करना होगा। <br>
        इसके पारे में विशेष अनुरोध हो, तो अभिषेक को वीडियो कॉलिंग के माध्यम से भी किया जा सकता है। हालांकि, इस प्रकार की व्यवस्था के लिए भक्तों को पहले ही मंदिर प्रशासन को सूचित करना होगा। <br>
        <span style="font-weight: 700; color: red;">शुल्क -</span> ₹810/- (प्रति व्यक्ति)
    </p>
</div>

      </div>
    
    


    <div class="row">
      
      <div class="card">
      <div class="card-header">
    <h3>स्वतंत्र (विशेष) अभिषेक</h3>
</div>
<div class="card-body">
    <p>पूरे वर्ष, हर मंगलवार को श्री मंगल देव ग्रह मंदिर में एक अभिषेक होता है। किसी भी मंगलवार को अभिषेक का कोई विराम नहीं होता है। मंगलवार को, भारत के सभी क्षेत्रों से आने वाले अनेक भक्त अभिषेक करने के लिए एकत्र होते हैं। इस प्रकार के भक्तों को किसी भी असुविधा के बिना समर्थन के लिए, मंदिर प्रशासन व्यवस्थित और कुशलता से सामूहिक अभिषेक का आयोजन करता है। अभिषेक में भाग लेने वाले भक्तों को गुरुजीओं (आध्यात्मिक नेता) द्वारा प्रदान की जाने वाली निर्देशों का पालन करना होगा और सामूहिक अभिषेक को अनुभव करना होगा। <br>
        उन भक्तों के लिए जो सामूहिक अभिषेक में भाग नहीं लेना चाहते हैं, वे अपनी पसंद के अनुसार एक स्वतंत्र अभिषेक का चयन कर सकते हैं। स्वतंत्र अभिषेक भक्तों के लिए अलग से आयोजित किया जाता है, जहां एक गुरुजी एक समय में एक ही भक्त के लिए अभिषेक करते हैं। स्वतंत्र अभिषेक के दौरान, भक्त को पूजा के विस्तृत विवरण के साथ विस्तृत जानकारी प्रदान की जाती है। अभिषेक का सामूहिक अनुभव करने वाले व्यक्ति के साथ, परिवार के सदस्य भी आगे बैठ सकते हैं। इसके लिए आवश्यक है कि आवश्यक दान को संगठन के बैंक खाते में जमा करें या मंदिर के सामने सीधे जमा करें। <br>
        <span style="font-weight: 700; color: red;">दिन:</span> मंगलवार <br>
        <span style="font-weight: 700; color: red;">समय:</span> लगभग 2.5 घंटे <br>
        <span style="font-weight: 700; color: red;">दान -</span> ₹5400/
    </p>
</div>

      </div>
    
      
      <div class="card">
      <div class="card-header">
    <h3>भूमयाग</h3>
</div>
<div class="card-body">
    <p>विशेष रूप से उन व्यक्तियों के लिए जो रेत, कृषि, या मृदा से संबंधित व्यापारों में शामिल हैं, भूमयाग को किसानों, सिविल इंजीनियर्स, स्थापत्यकार, निर्माता, विकसक, और दलालों जैसे व्यक्तियों के लिए उत्कृष्ट माना जाता है। पृथ्वी पुत्र (श्री मंगलग्रह) और पृथ्वी माता की मूर्ति विशेष रूप से श्री मंगलग्रह मंदिर में अमलनेर के लिए विश्वभर में है। श्री मंगलग्रह मंदिर में पृथ्वी माता और पृथ्वी पुत्र के उपस्थित होने के कारण, वहां किया जाने वाला श्री भूमयाग का गहरा प्रभाव माना जाता है। भूमयाग एक पारंपरिक तरीके से किए जाने वाले होमा (धार्मिक अग्नि क्रिया) है। इस अनुष्ठान को करने से पहले, आवश्यक दान को संगठन के बैंक खाते में जमा करना होगा या इसे सीधे मंदिर में सबमिट करना होगा। भूमयाग को मंदिर प्रबंधन की पूर्व-मंजूरी के बिना नहीं किया जा सकता है। <br>
        <span style="font-weight: 700; color: red;">दिन:</span> तिथि की पुष्टि के लिए मंदिर प्रबंधन से संपर्क करें। <br>
        <span style="font-weight: 700; color: red;">समय:</span> 3 से 4 घंटे <br>
        <span style="font-weight: 700; color: red;">दान -</span> ₹9000/
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
      
        
    <h2 class="gallery-heading">अभिषेक फॉर्म</h2><br>
<form id="abhishekForm" action="#" method="post">
    <div class="mb-3">
        <label class="form-label">अभिषेक करने वाले का प्रकार चुनें:</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="performerType" id="soloPerformer" value="Solo" checked>
            <label class="form-check-label" for="soloPerformer">एकल</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="performerType" id="couplePerformer" value="Couple">
            <label class="form-check-label" for="couplePerformer">जोड़ी</label>
        </div>
    </div>
    <div class="col-md">
        <label for="name" class="form-label">नाम:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="dob" class="form-label">जन्म तिथि:</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="col-md-6">
            <label for="mobile" class="form-label">मोबाइल नंबर:</label>
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
                    <label for="partnerName" class="form-label">संगी का नाम:</label>
                    <input type="text" class="form-control" id="partnerName" name="partnerName" disabled>
                </div>
                <div class="col-md-6">
                    <label for="partnerDob" class="form-label">संगी की जन्म तिथि:</label>
                    <input type="date" class="form-control" id="partnerDob" name="partnerDob" disabled>
                </div>
            </div>
        </div>
        <div class="row mb-3">
        <div class="col-md-6">
    <label for="country" class="form-label">देश:</label>
    <select class="form-control" id="country" name="country" required>
        <option value="" disabled selected>अपना देश चुनें</option>
    </select>
</div>

<script>
    // देशों का सरणी
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


    // सेलेक्ट तत्व प्राप्त करें
    const countrySelect = document.getElementById("country");

    // देशों से ड्रॉपडाउन बनाएं
    countries.forEach(country => {
        const option = document.createElement("option");
        option.value = country;
        option.text = country;
        countrySelect.appendChild(option);
    });
</script>

            <div class="col-md-6">
                <label for="state" class="form-label">राज्य:</label>
                <input type="text" class="form-control" id="state" name="state" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="city" class="form-label">शहर:</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="col-md-6">
                <label for="address" class="form-label">पता:</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="performer" class="form-label">अभिषेक करने वाला:</label>
                <select class="form-select" id="performer" name="performer" required>
                    <option value="" disabled selected>अभिषेक करने वाला चयन करें</option>
                    <option value="Male">पुरुष</option>
                    <option value="Female">महिला</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="abhishekDate" class="form-label">अभिषेक तिथि:</label>
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
                <label for="abhishekType" class="form-label">अभिषेक प्रकार:</label>
                <select class="form-select" id="abhishekType" name="abhishekType" required>
                    <option value="" disabled selected>अभिषेक प्रकार का चयन करें</option>
                    <option value="Havanatmak Shanti">हवनात्मक शांती</option>
                    <option value="Panchamrut Abhishek">पंचामृत अभिषेक</option>
                    <option value="Nitya Prabhata Shri Mangalabhishek">नित्यप्रभात श्री मंगलाभिषेक</option>
                    <option value="Abhishek in the Absence of Devotees">भक्तों की अनुपस्थिति में अभिषेक</option>
                    <option value="Swatantra (Special) Abhishek">स्वतंत्र (स्पेशल) अभिषेक</option>
                    <option value="Bhomayag">भोमयाग</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="batchTime" class="form-label">अभिषेक बैच समय:</label>
                <select class="form-select" id="batchTime" name="batchTime" required>
                    <option value="" disabled selected>बैच समय का चयन करें</option>
                    <option value="8 AM to 10 AM">8 AM से 10 AM</option>
                    <option value="10 AM to 12 PM">10 AM से 12 PM</option>
                    <option value="12 PM to 3 PM">12 PM से 3 PM</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" name="btn_submit">सबमिट करें</button>
            </div>
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
    <h2 class="gallery-heading">अभिषेक कार्यक्रम</h2>
<div class="card-container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3>मंगलवार - Tuesday</h3>
            </div>
            <div class="card-body">
                <p><span style="color: red; font-weight: 700;">सुबह:</span> 5:00 AM - पंचामृत अभिषेक<br>
                    <span style="color: red; font-weight: 700;">सुबह:</span> 7:00 AM से 11:00 PM - दर्शन<br>
                    <span style="color: red; font-weight: 700;">सुबह:</span> 7:00 AM - सुबह की आरती<br>
                    <span style="color: red; font-weight: 700;">सुबह:</span> 8:00 AM से 6:00 PM - अभिषेक पूजा (अवधि - 1 घंटा)<br>
                    <span style="color: red; font-weight: 700;">दोपहर:</span> 12:00 PM - नैवेद्य (अर्पण)<br>
                    <span style="color: red; font-weight: 700;">शाम:</span> 5:00 PM - पालकी (पालकी)<br>
                    <span style="color: red; font-weight: 700;">शाम:</span> 6:00 PM - शाम की आरती<br>
                </p>
            </div>
        </div>
    </div>


    <div class="row">
    <div class="card">
        <div class="card-header">
            <h3>दूसरे दिन - Other Days</h3>
        </div>
        <div class="card-body">
            <p><span style="color: red; font-weight: 700;">सुबह:</span> 5:00 AM - नित्य प्रभात मंगल अभिषेक<br>
                <span style="color: red; font-weight: 700;">सुबह:</span> 7:00 AM से 11:00 PM - दर्शन<br>
                <span style="color: red; font-weight: 700;">सुबह:</span> 7:00 AM - सुबह की आरती<br>
                <span style="color: red; font-weight: 700;">सुबह:</span> 8:00 AM से 6:00 PM - अभिषेक पूजा (अवधि - 1 घंटा)<br>
                <span style="color: red; font-weight: 700;">दोपहर:</span> 12:00 PM - नैवेद्य (अर्पण)<br>
                <span style="color: red; font-weight: 700;">शाम:</span> 6:00 PM - शाम की आरती<br>
            </p>
        </div>
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
        <h2 class="gallery-heading">आवास</h2>
        <div class="accommodation-container">
            <div class="gallery-section">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
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
                        <span class="visually-hidden">पिछला</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">आगामी</span>
                    </button>
                </div>
            </div>
            <div class="text-section">
                <div class="info-box">
                    <p><span style="color: red; font-weight: 700;">श्री मंगल देव मंदिर</span> अमलनेर में एक प्राचीन
                        मंदिर है जो जगह और दुर्लभ और प्रसिद्ध होने के कारण ग्रह पर एक प्राचीन मंदिर है। <br><br>

                        मंदिर क्षेत्र में दो हॉल, तुलसी बगिचा, जल संग्रहण बंध, फव्वारा, आकर्षक लाइटिंग, चित्रस्थल,
                        कैंटीन, रोटरी गार्डन में बच्चों का खेल क्षेत्र, जीवंत खरगोश, मछली, शंख, भक्तों के आवास,
                        और सभी प्रकार की सेवाएं और सुविधाएं हैं। इसके कारण, मंदिर को पिकनिक स्थल और पर्यटन आकर्षण के
                        रूप में मशहूर है। <br><br>

                        इसलिए कई स्कूल, कॉलेज, संगठन, राजनीतिक पार्टियां, संघ, क्लब, सोसायटी, सामाजिक और धार्मिक
                        संस्थान, और विभिन्न कार्यक्रम वहाँ यात्रा के लिए आते हैं। उन्हें प्रबंधन द्वारा सहयोग मिलता
                        है। हालांकि, किसी भी कार्यक्रम के लिए पहले प्रबंधन को अनुमति देना आवश्यक है। मंदिर क्षेत्र को
                        किसी भी प्रबंधन कार्यक्रम की अनुमति देने या न देने का अधिकार है। मंदिर के परिसर में दो AC
                        कमरें, एक लगी हुई non-AC कमरा, दो बड़ी हॉल और पर्याप्त संख्या की शौचालय हैं। आवास को
                        उचित मूल्य पर प्रदान किया जाता है। शहर में भी अच्छे लॉज हैं।</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="sep">
    </div>
  
    

    
    <section id="trustee">
    <h2 class="gallery-heading">प्रशासक मंडळ</h2>
    <div class="trustee-cards">
        <div class="card">
            <img src="images\trustee\cropped-Digambar.png" alt="Trustee 1">
            <div class="info">
                <div class="name">श्री. दिगंबर विठ्ठल महाले</div>
                <div class="post">प्रमुख</div>
            </div>
        </div>
        <div class="card">
            <img src="images\trustee\cropped-Suresh.png" alt="Trustee 1">
            <div class="info">
                <div class="name">श्री. सुरेश निलकंठ पाटील</div>
                <div class="post">उप-प्रमुख</div>
            </div>
        </div>
        <div class="card">
            <img src="images\trustee\cropped-Suresh Sec.png" alt="Trustee 1">
            <div class="info">
                <div class="name">श्री. सुरेश भगवान बाविस्कर</div>
                <div class="post">सचिव</div>
            </div>
        </div>
        <div class="card">
            <img src="images\trustee\cropped-Dilip.png" alt="Trustee 1">
            <div class="info">
                <div class="name">श्री. दिलीप आत्माराम बहिराम</div>
                <div class="post">संयुक्त सचिव</div>
            </div>
        </div>
        <div class="card">
            <img src="images\trustee\cropped-Girish.png" alt="Trustee 1">
            <div class="info">
                <div class="name">श्री. गिरीश विश्वनाथ कुलकर्णी</div>
                <div class="post">खजानेदार</div>
            </div>
        </div>
        <div class="card">
            <img src="images\trustee\cropped-Anil.png" alt="Trustee 1">
            <div class="info">
                <div class="name">श्री. अनिल श्रीधरराव आहिर्राव</div>
                <div class="post">ट्रस्टी</div>
            </div>
        </div>
        <div class="card">
            <img src="images\trustee\cropped-Jayshree.png" alt="Trustee 1">
            <div class="info">
                <div class="name">सुश्रीमती. जयश्री आत्माराम साबे</div>
                <div class="post">ट्रस्टी</div>
            </div>
        </div>
        <div class="card">
            <img src="images\trustee\cropped-Dangaldas.png" alt="Trustee 1">
            <div class="info">
                <div class="name">श्री दंगलदास आधार सोनवणे</div>
                <div class="post">ट्रस्टी</div>
            </div>
        </div>
    </div>
</section>



  <div class="sep">
  </div>


  <section id="location">
    <h2 class="gallery-heading">स्थान</h2>

    <div class="location">
        <div class="text-section info-box">
            <h2 style="color: red; font-weight: 700;">अमळलने, भारत के बारे में</h2>
            <p>अमळने, भारत जो कि बोरी नदी के किनारे स्थित है, महाराष्ट्र राज्य के जळगाव जिले में एक नगरपालिका है और यह एक महत्ताकार है। अमळने जळगाव जिले में एक तालुका है।</p>
            <p>अमळने का श्री मंगल देव मंदिर भारत के सम्पूर्ण में एक प्राचीन, दुर्लभ और 'जीवंत' मंदिरों में से एक है जहां लोग अपनी इच्छाएं और इच्छाएं पूरी करने का अनुभव करते हैं। अमळने को जळगाव या धुलिया के माध्यम से पहुंच सकते हैं।</p>
            <h4 style="color: red; font-weight: 700;">बस के द्वारा:</h3>
                <ul>
                    <li>जळगाव से मंगल ग्रह मंदिर, अमळने: 55 किमी से 60 किमी</li>
                    <li>धुले से अमळने: 35 किमी</li>
                    <li>पुणे से अमळने: 100 किमी</li>
                </ul>
                <h4 style="color: red; font-weight: 700;">रेलवे के द्वारा:</h3>
                    <ul>
                        <li>जळगाव से मंगल ग्रह मंदिर, अमळने: ट्रेन समयसारणी के लिए समय सारणी</li>
                        <li>धुले से अमळने: ट्रेन समयसारणी के लिए समय सारणी</li>
                    </ul>
        </div>
        <div class="map-section">
            <iframe src="https://maps.google.com/maps?q=Mangal%20graha%20mandir&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
</section>

  <div class="sep">
  </div>

  <footer>
    <div class="footer-content">
      
        <p><span style="color: red;">Postal Address:</span> Chopda road, Dhangar Nagar, Amalner 425401, Dist Jalgaon, Maharashtra <br>
        <span style="color: red;">Phone:</span> +91-8348606060, +91-8348707070, +91-8348808080 <br>
        <span style="color: red;">Email:</span> mangalgrahamandir@gmail.com <br>
        © Copyright 2024 Mangal Graha Seva Sanstha, Amalner | Developed by: Sanjivani College Engineering <img src="images\SCOElogo.png" alt="" style="height: 50px; width: 50px;"></p>
        
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

