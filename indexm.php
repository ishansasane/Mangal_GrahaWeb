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
    <a href="#navbar" class="go-to-navbar-btn">&#8593; नॅव्हबारला जा</a>
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
                    <a href="#abhishek-schedule">अभिषेक कार्यक्रम</a>
                </div>
            </li>
            <li><a href="#gallery">गॅलरी</a></li>

            <li class="dropdown">
                <a>आमच्याबद्दल</a>
                <div class="dropdown-content">
                    <a href="#accommodation">आवास</a>
                    <a href="#trustee">ट्रस्टी</a>
                </div>
            </li>
            <li class="dropdown">
                <a>भाषा</a>
                <div class="dropdown-content">
                    <a href="index.php">इंग्रजी</a>
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
      <p class="banner-text">अभिषेक पूजा वेळ: सकाळ 8:00 ते संध्याकाळ 6:00</p>
      </div>
      <div class="content">
        <div class="image-with-text">
          <img src="images/murti.png" alt="Your Image" class="animated-image">
          <div class="text-box">
            <p><span class="larger-text">श्री मंगळ-ग्रह मंदिर</span></p>
            <p>अमलनेरचे श्री मंगळ देव मंदिर भारतातील सर्वात प्राचीन, अत्यंत विषम आणि सर्वात ‘जिवंत’ (त्यात लोकांना इच्छांची आणि कामनांची पूर्ती होऊन जाते असे एक मंदिर) मंदिरांपैकी एक आहे.</p>
            <p>श्री मंगळ देवाचे मंदिर अत्यंत दुर्लभ असते हे सार्वजनिक ज्ञान आहे. अमलनेरमध्ये मंगळ देव ग्रहाचं (ग्रह) मंदिर कोणत्याही किंवा कोणत्याही वेळी निर्मित करणारे व किधंचित प्रतिष्ठापित करणारे हे कोणत्याही अधिकृत माहितीस नाही. काहींचे म्हणतात की 1933 मध्ये पहिले वेळेला मंदिराचे पुनर्निर्माण केले. 1940 नंतर मंदिर पुन्हा लक्षात न घेतले आणि विघ्ननाशक स्थितीला पोहोचले. 1999 पर्यंत मंदिराच्या आसपासाचा ठीकचा जागा तपासात घेतला जातला आणि त्यातली सार्वजनिक कचरा यानचे उपयोग केले जातले. हे तत्व अविश्वसनीय आहे परंतु दुर्दैवाने सत्य आहे.</p>
            <p>1999 नंतरचा पुनर्निर्माण मंदिर आणि त्याच्या आसपासाचं अद्भुत बदल आणलं. शेवटी 5 ते 7 वर्षांतचं ठिकाण आणि सुविधांचं विकास अनेकगुण होईलं.</p>
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
      
      <h2 class="gallery-heading">अभिषेक प्रकार</h2>
      <div class="container mt-4">
        <div class="row">
          
      <div class="card">
        <div class="card-header">
          <h3>हवनात्मक शांती</h3>
        </div>
        <div class="card-body">
          <p>हवन किंवा यज्ञाला आपल्या हिंदू संस्कृतीत अनादी-अनंतकाळापासून अनन्यसाधारण महत्त्व आहे. हा उर्जाप्राप्ती व शुद्धीकरणाचा विधी आहे. हवन कुंडात अग्नीद्वारे श्री मंगळदेवाची पूजा केली जाते. अमोघ मंत्रोच्चारांसह यज्ञ समिधा व हवनात्मक सामग्रींची आहुती दिली जाते. आपल्या आयुष्यातील दुःख, कष्ट, संकटे किंवा प्रलंबित प्रश्न आदींच्या निर्मूलनासाठी व भरभराटीसाठी श्री मंगळदेवाची हवनात्मक पूजा/शांती केली जाते. <br> हवनात्मक शांतीपूजेत ५ चौरंग मांडून त्यात गणपती पुण्याहवाचन, मातृका पूजन, श्री मंगळाचे पूजन, नवग्रह मंडलाचे पूजन, रुद्रकलश पूजन तसेच हवन केला जातो. <br>होम-हवनात्मक पुजेसाठी इच्छुक भाविकांनी मंदिरातील मुख्य पुरोहितांच्या मार्गदर्शनाने / नियोजनाने अभिषेक पूजेची / शांतीची तयारी करावी. ही शांतीपूजा करताना कुटुंबातील व्यक्तीही पुजेला उपस्थित राहू शकतात. यासाठी लागणारी दक्षिणा प्रत्यक्ष हवनात्मक अभिषेकापूर्वी संस्थेच्या बँक खात्यात जमा करणे अत्यावश्यक आहे किंवा मंदिरात समक्ष येऊन देणे आवश्यक आहे. मंदिरात समक्ष येऊन अथवा ऑनलाईन पद्धतीने या अभिषेकासाठी वेळ नोंदणी (अॅडव्हान्स बुकिंग) करावी लागते. <br> बार मंदिर व्यवस्थापनाशी संपर्क साधून तारीख मिळवावी. <br> <span style="font-weight: 700; color: red;">वेळ :</span> ३ तास <br><span style="font-weight: 700; color: red;">दक्षिणा :</span> ₹६३००/</p>
        </div>
      
    </div>
      
      <div class="card">
        <div class="card-header">
          <h3>पंचामृत अभिषेक</h3>
        </div>
        <div class="card-body">
          <p>दर मंगळवारी श्री मंगळदेवाच्या मंदिरात प्रत्यक्ष देवाच्या मूर्तीजवळ बसून श्री मंगळदेवाच्या स्वयंभूमूर्तीवर होणाऱ्या पंचामृत अभिषेकाचा मान एकावेळी फक्त एकालाच (सहकुटुंब) मिळतो. मंदिरात समक्ष येऊन, संस्थेच्या मोबाईल क्रमांकांवर कॉल करुन अथवा ऑनलाईन पद्धतीने या अभिषेकासाठी वेळ नोंदणी (अॅडव्हान्स बुकिंग) करावी लागते. <br>
            पंचामृत अभिषेक फक्त दर मंगळवारीच होत असल्याने नोंदणी केलेल्या भाविकांच्या संख्येनुसार अभिषेकासाठी आपला क्रमांक लागत असतो. मंदिर व्यवस्थापनाकडून साधारण ३ ते ४ दिवस आधी नोंदणीकृत भाविकांशी संपर्क साधला जातो. भाविकांना पूजेची संपूर्ण माहिती दिली जाते. यासाठी लागणारी दक्षिणा प्रत्यक्ष अभिषेकापूर्वी संस्थेच्या बँक खात्यात जमा करणे किंवा मंदिरात समक्ष येऊन देणे आवश्यक आहे. <br>
            सकाळी ७ वाजता होणाऱ्या महाआरतीचा मानही पंचामृत अभिषेक करणाऱ्या भाविकालाच मिळतो. <br>
            <span><span style="font-weight: 700; color: red;">वार :</span></span> मंगळवार <br>
            <span style="font-weight: 700; color: red;">वेळ :</span> पहाटे ५ ते सकाळी ७ वाजेपर्यंत (२ तास) <br>
            <span style="font-weight: 700; color: red;">दक्षिणा -</span> ₹७२००/</p>
        </div>
      </div>
    
    </div>
    

    <div class="row">
      
      <div class="card">
        <div class="card-header">
          <h3>नित्यप्रभात श्री मंगलाभिषेक</h3>
        </div>
        <div class="card-body">
          <p>मंगळवार सोडून (सोमवार, बुधवार, गुरुवार, शुक्रवार, शनिवार, रविवार) या दिवशी श्री मंगळदेवाच्या मंदिरात प्रत्यक्ष देवाच्या मूर्तीजवळ बसून मंगळदेवाच्या स्वयंभू मूर्तीवर होणाऱ्या नित्यप्रभात मंगलाभिषेकाचा मान एकावेळी ५ क एकाच कुटुंबाला मिळतो. मंदिरात येऊन किंवा संस्थेच्या मोबाई न क्रमांकावर कॉल करुन अथवा ऑनलाईन पद्धतीने या अभिषेकासाठी वेळ नोंदणी (अॅडव्हान्स बुकिंग) करावी लागते. <br>
            मंगळवारी होणाऱ्या पंचामृत अभिषेकाप्रमाणेच ही पूजा होते. प्रतीक्षेत असलेल्या भाविकांच्या संख्येनुसार अभिषेकासाठी आपला क्रमांक लागतो व त्यांच्याकडून अभिषेक करवून घेतला जातो. मंगळवारी पंचामृत अभिषेक करण्याची अनेक भाविकांची मनस्वी इच्छा असते. मात्र, त्यासाठी मोठी वेटिंग (प्रतीक्षा) असते व थोडी जास्त दक्षिणा लागते. त्यामुळे ज्या भाविकांना मंगळवारी पंचामृत अभिषेक करणे शक्य नसेल त्यांच्यासाठी नित्यप्रभात मंगलाभिषेक उत्तम पर्याय आहे. यासाठी लागणारी दक्षिणा प्रत्यक्ष अभिषेकापूर्वी संस्थेच्या बँक खात्यात जमा करणे किंवा मंदिरात समक्ष येऊन देणे आवश्यक आहे. <br>
            नित्यप्रभात मंगलाभिषेकानंतर सकाळी ७ वाजता होणाऱ्या आरतीचा मानही अभिषेक करणाऱ्या भाविकालाच मिळतो. <br>
            <span style="font-weight: 700; color: red;">वार :</span> सोमवार, बुधवार, गुरुवार, शुक्रवार, शनिवार, रविवार <br>
            <span style="font-weight: 700; color: red;">वेळ :</span> पहाटे ५ ते सकाळी ७ (२ तास) <br>
            <span style="font-weight: 700; color: red;">दक्षिणा -</span> ₹५४००/</p>
        </div>
      </div>
    
      
      <div class="card">
        <div class="card-header">
          <h3>भाविकांच्या अनुपस्थितीत होणारे अभिषेक</h3>
        </div>
        <div class="card-body">
          <p>काही भाविकांना त्यांचे वयोमान, आजारपण, नोकरी अथवा व्यावसायिक व्यस्तता इत्यादी कारणांमुळे प्रत्यक्ष मंदिरात येऊन अभिषेक करणे शक्य होत नाही. <br>
            अशांना त्यांच्या इच्छेनुसार स्वतः मंदिरात न येताही मंदिरामार्फत अभिषेक करवून घेता येतात. <br>
            मंदिरात अभिषेकासाठी न येऊ शकणाऱ्या भाविकांची दर आठवड्याला स्वतंत्र यादी तयार करण्यात येते. श्री मंगळदेव ग्रहांचा वार असलेल्या मंगळवारी स्वतंत्रपणे गुरुजींमार्फत अशा भाविकांच्या नावाचा संकल्प सोडून त्या व्यक्तींच्या गोत्राचा व नावाचा व्यक्तिगत उल्लेख करण्यात येतो. १ तास चालणाऱ्या अभिषेकात पूर्णतः विधिवतरीत्या ही प्रक्रिया होते. अभिषेक झाल्यानंतर भाविकांना रजिस्टर पोस्टाद्वारे प्रसाद पाठविण्यात येतो. सोबत त्यांना अभिषेकाची पावतीही पाठविण्यात येते. यासाठी लागणारी दक्षिणा संस्थेच्या बँक खात्यात जमा करणे किंवा मंदिरात समक्ष येऊन देणे आवश्यक आहे. <br>
            या व्यतिरिक्त भाविकांची इच्छा असेल तर व्हिडिओ कॉलिंगवर सुद्धा अभिषेक केले जातात. यासाठी भाविकांनी आधी मंदिर प्रशासनाला कळविणे गरजेचे आहे. <br>
            <span style="font-weight: 700; color: red;">दक्षिणा -</span> ₹८१०/- (प्रतिव्यक्ती)</p>
        </div>
      </div>
    </div>
    


    <div class="row">
      
      <div class="card">
        <div class="card-header">
          <h3>स्वतंत्र (स्पेशल) अभिषेक</h3>
        </div>
        <div class="card-body">
          <p>वर्षभर दर मंगळवारी श्री मंगळदेव ग्रह मंदिरात अभिषेक होतातच. कोणत्याही मंगळवारी अभिषेक बंद नसतात. मंगळवारी मोठ्या संख्येने भाविक संपूर्ण भारतातून अभिषेक करण्यासाठी जमतात. परिणामी अशा भाविकांची गैरसोय होऊ नये, यासाठी मंदिर प्रशासनाकडून नियोजनपूर्वक व शिस्तबद्धपणे सामूहिक पद्धतीने अभिषेक केले जातात. अभिषेक करणाऱ्यांना उपस्थित भाविकांसोबत गुरुजींच्या सूचनांचे पालन करुन सामूहिक अभिषेक करवून घ्यावा लागतो. <br>
            ज्या भाविकांना सामूहिक पद्धतीने अभिषेक करण्याची इच्छा नसते, असे भाविक त्यांच्या इच्छेनुसार स्वतंत्र अभिषेक करवून घेऊ शकतात. स्वतंत्र अभिषेक पूजेत भाविकांसाठी स्वतंत्र व्यवस्था केली जाते. त्यात एक गुरुजी एकावेळी एकाच भाविकाचा अभिषेक करवून घेतात. ज्यात त्या भाविकाला पूजेबद्दल संपूर्ण माहिती दिली जाते. अभिषेक करणाऱ्यासोबत त्या भाविकाच्या कुटुंबातील सदस्य मागे बसतात. यासाठी लागणारी दक्षिणा अभिषेकापूर्वी संस्थेच्या बँक खात्यात जमा करणे किंवा मंदिरात समक्ष येऊन देणे आवश्यक आहे. <br>
            <span style="font-weight: 700; color: red;">वार :</span> मंगळवार <br>
            वेळ सुमारे सव्वा तास <br>
            <span style="font-weight: 700; color: red;">दक्षिणा -</span> ₹ ५४००/
            </p>
        </div>
      </div>
    
      
      <div class="card">
        <div class="card-header">
          <h3>भोमयाग</h3>
        </div>
        <div class="card-body">
          <p>खास करुन ज्याचा व्यावसायिक संबंध रेती, शेती किंवा मातीशी असतो असे भाविक म्हणजेच शेतकरी, सिव्हिल इंजिनिअर, आर्किटेक्ट, बिल्डर, डेव्हलपर व ब्रोकर यांच्यासाठी भोमयाग खूप फायदेशीर असल्याचे मानले जाते. संपूर्ण विश्वात भूमिपुत्र (श्री मंगळग्रह) व भूमीमाता यांच्या मूर्ती एकाच ठिकाणी फक्त आणि फक्त अमळनेर येथील श्री मंगळग्रह मंदिरातच आहे. त्यामुळे भूमीमाता व भूमिपुत्र यांच्या सान्निध्यातील अमळनेर येथील श्री मंगळग्रह मंदिरात होणारा श्री भोमयाग प्रचंड प्रभावी ठरण्याची भाविकांची श्रद्धा आहे. भोमयाग हवनात्मक पद्धतीने होतो. हा याग करण्यापूर्वी संस्थेच्या बँक खात्यात दक्षिणा जमा करणे किंवा मंदिरात समक्ष येऊन देणे आवश्यक आहे. भोमयाग मंदिर व्यवस्थापनेच्या पूर्वपरवानगीशिवाय होत नाही. <br>
            <span style="font-weight: 700; color: red;">वार :</span> मंदिर व्यवस्थापनाशी संपर्क साधून तारीख मिळवावी. <br>
            <span style="font-weight: 700; color: red;">वेळ :</span> ३ ते ४ तास <br>
            <span style="font-weight: 700; color: red;">दक्षिणा -</span> ₹९०००/</p>
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
              <label class="form-label">अभिषेक प्रदर्शनकर्ता प्रकार निवडा:</label>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="performerType" id="soloPerformer" value="Solo" checked>
                  <label class="form-check-label" for="soloPerformer">एकटे</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="performerType" id="couplePerformer" value="Couple">
                  <label class="form-check-label" for="couplePerformer">जोडी</label>
              </div>
          </div>




            <div class="col-md">
              <label for="name" class="form-label">नाव :</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="dob" class="form-label">जन्मतारीख :</label>
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
                    <label for="partnerName" class="form-label">साथीचं नाव:</label>
                        <input type="text" class="form-control" id="partnerName" name="partnerName" disabled>
                    </div>
                    <div class="col-md-6">
                    <label for="partnerDob" class="form-label">साथीची जन्मतारीख:</label>
                        <input type="date" class="form-control" id="partnerDob" name="partnerDob" disabled>
                    </div>
                </div>
            </div>




              
            <div class="row mb-3">
            <div class="col-md-6">
    <label for="country" class="form-label">देश:</label>
    <select class="form-control" id="country" name="country" required>
        <option value="" disabled selected>आपला देश निवाडा</option>
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
              <label for="address" class="form-label">पत्ता:</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
              <label for="performer" class="form-label">अभिषेक प्रदर्शक:</label>
                <select class="form-select" id="performer" name="performer" required>
                    <option value="" disabled selected>अभिषेक प्रदर्शक निवडा</option>
                    <option value="Male">पुरुष</option>
                    <option value="Female">स्त्री</option>

                </select>
              </div>
              <div class="col-md-6">
                <label for="abhishekDate" class="form-label">अभिषेक तारीख:</label>
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
                    <option value="" disabled selected>अभिषेक प्रकार निवडा</option>
                    <option value="Havanatmak Shanti">हवनात्मक शांती</option>
                    <option value="Panchamrut Abhishek">पंचामृत अभिषेक</option>
                    <option value="Nitya Prabhata Shri Mangalabhishek">नित्यप्रभात श्री मंगलाभिषेक</option>
                    <option value="Abhishek in the Absence of Devotees">भाविकांच्या अनुपस्थितीत होणारे अभिषेक</option>
                    <option value="Swatantra (Special) Abhishek">स्वतंत्र (स्पेशल) अभिषेक</option>
                    <option value="Bhomayag">भोमयाग</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="batchTime" class="form-label">अभिषेक वेळ स्लॉट:</label>
                <select class="form-select" id="batchTime" name="batchTime" required>
                    <option value="" disabled selected>वेळ स्लॉट निवडा</option>
                    <option value="8 AM to 10 AM">सकाळ 8 वाजता ते 10 वाजता</option>
                    <option value="10 AM to 12 PM">सकाळ 10 वाजता ते दुपार 12 वाजता</option>
                    <option value="12 PM to 3 PM">दुपार 12 वाजता ते संध्याकाळ 3 वाजता</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary" name="btn_submit">सबमिट करा</button>
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
        <h2 class="gallery-heading">अभिषेक वेळापत्रक</h2>
        <div class="card-container">
    


        <div class="row">
          <div class="card">
            <div class="card-header">
              <h3>Tuesday - मंगळवार</h3>
            </div>
            <div class="card-body">
              <p><span style="color: red; font-weight: 700;">सकाळी</span> ५:०० पंचामृत अभिषेक<br>
                <span style="color: red; font-weight: 700;">सकाळी</span> ७:०० ते रात्री ११:०० दर्शन<br>
                <span style="color: red; font-weight: 700;">सकाळी</span> ७:०० सकाळची महाआरती<br>
                <span style="color: red; font-weight: 700;">सकाळी</span> ८:०० ते १८:०० अभिषेक पूजा ( कालावधी- १ तास )<br>
                <span style="color: red; font-weight: 700;">दुपारी</span> १२:०० नैवेद्य<br>
                <span style="color: red; font-weight: 700;">सायंकाळी</span> ५:०० पालखी<br>
                <span style="color: red; font-weight: 700;">सायंकाळी</span> ६:०० सायंकाळची महाआरती<br>
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
              <p><span style="color: red; font-weight: 700;">सकाळी</span> ५:०० नित्यप्रभात मंगल अभिषेक<br>
                <span style="color: red; font-weight: 700;">सकाळी</span> ७:०० ते रात्री ११:०० दर्शन<br>
                <span style="color: red; font-weight: 700;">सकाळी</span> ७:०० सकाळची महाआरती<br>
                <span style="color: red; font-weight: 700;">सकाळी</span> ८:०० ते १८:०० अभिषेक पूजा ( कालावधी- १ तास ) <br>
                <span style="color: red; font-weight: 700;">दुपारी</span> १२:०० नैवेद्य<br>
                <span style="color: red; font-weight: 700;">सायंकाळी</span> ६:०० सायंकाळची महाआरती <br>
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
      <h2 class="gallery-heading">निवास</h2>
      <div class="accommodation-container">
        <div class="gallery-section">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        </div>
        <div class="text-section">
        <div class="info-box">
    <p><span style="color: red; font-weight: 700;">श्री मंगल देव मंदिर</span> अमळणेरमध्ये स्थित असलेलं एक प्राचीन मंदिर आहे, याची विशेषता त्याच्या स्थानाच्या जागा आणि दुर्लक्ष आहे. <br><br>

    मंदिराचं क्षेत्र दोन हॉल, तुळशी उद्यान, पाणीसंग्रह बंध, फाऊंटन, अद्भुत प्रकाशन, चित्रस्थानं, कॅंटीन, रोटरी उद्यानातील बालगृह, लाइव खरगोश, मासे, भक्तांच्या रहिवास, आणि सर्व प्रकारची सेवा आणि सुविधा आहेत. ह्यामुळे मंदिराला पिकनिक स्थल आणि पर्यटनाचं खूप लोकप्रिय आहे. <br><br>

    खूप स्कूल, कॉलेज, संस्था, राजकीय पक्ष, संघ, क्लब, सोसायटी, सामाजिक आणि धार्मिक संस्थाने विविध कार्यक्रमासाठी येतात. त्यांना प्रबंधनाने सहकार्य केले जाते. परंतु कोणत्याही कार्यक्रमासाठी केलंय, प्रबंधनला परवानगी देणं आवश्यक आहे. मंदिराच्या क्षेत्राला कोणत्याही प्रबंधन कार्यक्रमासाठी परवानगी देणे किंवा न देणे हे अधिकार आहे. मंदिरात दोन AC कोठे, एक लगेची नॉन-AC कोठा, दोन मोठे हॉल, आणि पुरेसा वापरायचं शौचालय आहेत. रहिवास विलासी खर्चात पुरविता येतं. नगरात उत्तम लॉजेस असतात.</p>
</div>

        </div>
      </div>
    </div>


    <div class="sep">
    </div>
  
    

    <section>
    <div id="trustee">
        <h2 class="gallery-heading">ट्रस्टी समिती</h2>
        <div class="trustee-cards">
            <div class="card">
                <img src="images\trustee\cropped-Digambar.png" alt="Trustee 1">
                <div class="info">
                    <div class="name">श्री. दिगंबर विठ्ठल महाळे</div>
                    <div class="post">प्रमुख</div>
                </div>
            </div>
            <div class="card">
                <img src="images\trustee\cropped-Suresh.png" alt="Trustee 1">
                <div class="info">
                    <div class="name">श्री. सुरेश निलकंठ पाटील</div>
                    <div class="post">उपप्रमुख</div>
                </div>
            </div>
            <div class="card">
                <img src="images\trustee\cropped-Suresh Sec.png" alt="Trustee 1">
                <div class="info">
                    <div class="name">श्री. सुरेश भगवान बविस्कर</div>
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
                    <div class="post">खजिना</div>
                </div>
            </div>
            <div class="card">
                <img src="images\trustee\cropped-Anil.png" alt="Trustee 1">
                <div class="info">
                    <div class="name">श्री. अनिल श्रीधरराव आहिराव</div>
                    <div class="post">ट्रस्टी</div>
                </div>
            </div>
            <div class="card">
                <img src="images\trustee\cropped-Jayshree.png" alt="Trustee 1">
                <div class="info">
                    <div class="name">सुमति अमोल मोरे</div>
                    <div class="post">ट्रस्टी</div>
                </div>
            </div>
            <div class="card">
                <img src="images\trustee\cropped-Dangaldas.png" alt="Trustee 1">
                <div class="info">
                    <div class="name">श्री. डंगलदास आधार सोनवणे</div>
                    <div class="post">ट्रस्टी</div>
                </div>
            </div>
        </div>
    </div>
</section>



  <div class="sep">
  </div>


  ```html
<section id="location">
    <h2 class="gallery-heading">स्थान</h2>

    <div class="location">
        <div class="text-section info-box">
            <h2 style="color: red; font-weight: 700;">अमळणेर, भारत के बारे में</h2>
            <p>बोरी नदी के किनारे स्थित अमळणेर, भारत महाराष्ट्र राज्य के जळगाव जिले में एक नगर पालिका है और यह एक नगर निगम है। अमळणेर जळगाव जिले का तालुका है।</p>
            <p>अमळणेर का श्री मंगल देव मंदिर भारत के सभी मंदिरों में सबसे प्राचीन, दुर्लभ और 'जीवंत' मंदिरों में से एक है, जहां लोग अपनी इच्छाएं और अभिलाषाएं पूरी होती हैं। आप अमळणेर को जळगाव या धुलिया के माध्यम से पहुंच सकते हैं।</p>
            <h4 style="color: red; font-weight: 700;">बस से:</h4>
            <ul>
                <li>जळगाव से मंगल ग्रह मंदिर, अमळणेर: 55 किलोमीटर से 60 किलोमीटर</li>
                <li>धुले से अमळणेर: 35 किलोमीटर</li>
                <li>पुणे से अमळणेर: 100 किलोमीटर</li>
            </ul>
            <h4 style="color: red; font-weight: 700;">रेल से:</h4>
            <ul>
                <li>जळगाव से मंगल ग्रह मंदिर, अमळणेर: ट्रेन की समय सारणी के लिए समय सारणी</li>
                <li>धुले से अमळणेर: ट्रेन की समय सारणी के लिए समय सारणी</li>
            </ul>
        </div>
        <div class="map-section">
            <iframe src="https://maps.google.com/maps?q=Mangal%20graha%20mandir&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
</section>
```
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
