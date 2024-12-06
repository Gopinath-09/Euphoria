
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION FORM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/78ce76f482.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <style><?php include './registerform.css'; ?>
    </style>
</head>
<body>
    <header>
      <nav>
        <div class="clg-logo"><img src="https://kalasalingam.ac.in/wp-content/uploads/2022/02/Logo.png" alt=""></div>
        <hr>
        <input type="checkbox" name="" id="navopen">
        <label class="tonavbar" for="navopen"><i class="fa-solid fa-bars"></i></label>
        <div class="nav-links">
          <li><a href="../../index.html">SCHOOLS</a></li>
          <li><a href="./registerform.php">REGISTER</a></li>
          <li><a href="../contact.html">CONTACT</a></li>
        </div>
        <label class="tonavbarx" for="navopen"><i class="fa-solid fa-x"></i></label>
        <hr>
      </nav>
    </header>
    <div class="regform">
        <form action="./db/register.php" method="post">

            <div class="inputsdata">
                <label for="par_name">Name:</label>
                <input class="form-control" type="text" name="par_name" id="par_name" placeholder="NAME + INITIAL" required>
            </div>
            
            <div class="inputsdata">
                <label for="par_regno">Your Register No:</label>
                <input class="form-control" type="text" name="par_regno" id="par_regno" required>
            </div>
    
            <div class="inputsdata">
                <label for="par_college">Your College Name:</label>
                <input class="form-control" type="text" name="par_college" id="par_college" required>
            </div>

            <div class="inputsdata">
                <label for="par_city">City:</label>
                <input class="form-control" type="text" name="par_city" id="par_city" required>
            </div>
    
            <div class="inputsdata">
                <label for="par_email">Your Email:</label>
                <input class="form-control" type="text" name="par_email" id="par_email" required>
            </div>
    
            <div class="inputsdata">
                <label for="par_phno">Your Phone No:</label>
                <input class="form-control" type="text" name="par_phno" id="par_phno" minlength="10" maxlength="10" required>
            </div>
    
            <div class="inputsdata">
                <label for="par_department">Your Department:</label>
                <input class="form-control" type="text" name="par_department" id="par_department" required>
            </div>
            <div class="inputsdata">
                <label for="par_gender">Select Your Gender:</label>
                <select class="form-control" name="par_gender" id="par_gender" required>
                    <option value="">-Select-</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="inputsdata">
                <label for="par_year">Select Your Year:</label>
                <select class="form-control" name="par_year" id="par_year" required>
                    <option value="">-Select-</option>
                    <option value="I Year">I Year</option>
                    <option value="II Year">II Year</option>
                    <option value="III Year">III Year</option>
                    <option value="IV Year">IV Year</option>
                    <option value="V Year">V Year</option>
                </select>
            </div>
            <div class="noofevent">
                <label>Select No. of Events</label>
                <div>
                    <li><input onclick="eventCountSelect()" type="radio" name="noofevents" value="3" id="noofeventcount3"><label id="noofevent3content" for=""> 3 Events</label></li>
                    <li><input onclick="eventCountSelect()" type="radio" name="noofevents" value="5" id="noofeventcount5"><label id="noofevent5content" for=""> 5 Events</label></li>
                </div>
            </div>
            <div id="registercount3" class="registercount3">
                <input type="checkbox" name="" id="closeeventselectionr3">
                <h3 id="secure">Your Selected Events are Noted. Verify your above Details and click Submit</h3>
                <ol class="rules">
                    <h3>Students before registering for event check the event timing . </h3>
                </ol>
                <div class="eventcloseall">
                    <div class="eventslect">
                        <label for="se1r3">Event One:</label>
                        <select name="se1" id="se1r3" onchange="getselectvalue(this.value);">
                            <option value="">Not Selected</option>
                            <!---->
                            <option value="Business Simulation">Business Simulation</option>
                            <option value="Biz Brain Battle">Biz Brain Battle</option>
                            <option value="Pitch Parade">Pitch Parade</option>
                            <option value="Trading Thunder clap">Trading Thunder clap</option>
                            <option value="Entrepreneurial Endeavor Expo">Entrepreneurial Endeavor Expo</option>
                            <option value="Solution Sprint Summit / Odyssey Analytical Quest">Solution Sprint Summit / Odyssey Analytical Quest</option>
                            <option value="ACCFINTHON">ACCFINTHON</option>
                            <option value="Finance Fiesta">Finance Fiesta</option>
                            <option value="Chit Chat Society">Chit Chat Society</option>
                            <option value="Miniature Art">Miniature Art</option>
                            <option value="Change-Maker Challenge / Social Work Quiz">Change-Maker Challenge / Social Work Quiz</option>
                            <option value="Silent Advocacy Expressions / Mime Activity">Silent Advocacy Expressions / Mime Activity</option>
                            <!---->
                            <option value="Rocketry">Rocketry</option>
                            <option value="Mind Math Creater">Mind Math Creater</option>
                            <option value="CircuitCraft Challenge: Unleashing Innovation in Electronic Design">CircuitCraft Challenge: Unleashing Innovation in Electronic Design</option>
                            <!---->
                            <option value="CRANIAL CLASH">CRANIAL CLASH</option>
                            <option value="PHYSBET & GET">PHYSBET & GET</option>
                            <option value="Minds in Motion">Minds in Motion</option>
                            <option value="ChemWizard">ChemWizard</option>
                            <option value="MATH CODE - SIMULATHON">MATH CODE - SIMULATHON</option>
                            <option value="ΣUMS - Math Re∫ay">ΣUMS - Math Re∫ay</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <!---->
                            <option value="SPICETRON - Good health and Well being">SPICETRON - Good health and Well being</option>
                            <option value="Electromaker - Industry, Innovation and Infrastructure">Electromaker - Industry, Innovation and Infrastructure</option>
                            <option value="MATLAB Mania - Sustainable Transport in Smart cities">MATLAB Mania - Sustainable Transport in Smart cities</option>
                            <option value="IoTronz Hack - Sustainable Life on Land ">IoTronz Hack - Sustainable Life on Land </option>
                            <option value="Elecsphere Odyssey - Hackathon - Clean Energy">Elecsphere Odyssey - Hackathon - Clean Energy</option>
                            <option value="Predikathon - AI based Electrical Maintenance (Codeathon)">Predikathon - AI based Electrical Maintenance (Codeathon)</option>
                            <option value="Energion - Energy Conservation (Competition)">Energion - Energy Conservation (Competition)</option>
                            <option value="FarmTech HackFest - Sustainable Agricluture">FarmTech HackFest - Sustainable Agricluture</option>
                            <option value="ReneW - Renewable Energy">ReneW - Renewable Energy</option>
                            <option value="NIMDHA-2024 - Modern Healthcare">NIMDHA-2024 - Modern Healthcare</option>
                            <option value="Medi Robot - Emerging Technologies in Medicine">Medi Robot - Emerging Technologies in Medicine</option>
                            <option value="MedCode Quest: Healing with Algorithms">MedCode Quest: Healing with Algorithms</option>
                            <!---->
                            <option value="Junk Millionaires">Junk Millionaires</option>
                            <option value="Decode the myth">Decode the myth</option>
                            <option value="Bio X ML Hackathon">Bio X ML Hackathon</option>
                            <option value="Food processing Hackathon">Food processing Hackathon</option>
                            <option value="Make Over">Make Over</option>
                            <option value="Hackathon-Challenging Minds For Innovative Solutions">Hackathon-Challenging Minds For Innovative Solutions</option>
                            <option value="Exploring sustainable goals">Exploring sustainable goals</option>
                            <option value="3-D modeling and simulation of Agricultural Machineries">3-D modeling and simulation of Agricultural Machineries</option>
                            <option value="App challenges in agri sector">App challenges in agri sector</option>
                            <!---->
                            <option value="Wheeled Mobile Robotics - Robo War  & Robo Maze Robot">Wheeled Mobile Robotics - Robo War  & Robo Maze Robot</option>
                            <option value="Wheeled Mobile Robotics - Robo Soccer Robot">Wheeled Mobile Robotics - Robo Soccer Robot</option>
                            <option value="Wheeled Mobile Robotics -  Robo Race Robot">Wheeled Mobile Robotics -  Robo Race Robot</option>
                            <option value="Freelance CAD Design & 3D Modelling">Freelance CAD Design & 3D Modelling</option>
                            <option value="COPTOTHON - 2K24">COPTOTHON - 2K24</option>
                            <option value="Structural Light weight Concrete Challenge Contest">Structural Light weight Concrete Challenge Contest</option>
                            <option value="Current Environmental Challenges towards Sustainability">Current Environmental Challenges towards Sustainability</option>
                            <!---->
                            <option value="REGALIA">REGALIA</option>
                            <option value="PANOPLY">PANOPLY</option>
                            <option value="MASQUERADE">MASQUERADE</option>
                            <option value="Pantomimist">Pantomimist</option>
                            <option value="PALATE PALOOZA Cooking Competition ">PALATE PALOOZA Cooking Competition </option>
                            <option value="FLAVOUR FIESTA Mocktail Competition ">FLAVOUR FIESTA Mocktail Competition </option>
                            <option value="WINTER WONDER Towel Art">WINTER WONDER Towel Art</option>
                            <option value="Short Film Making Competition">Short Film Making Competition</option>
                            <option value="Photography Competition">Photography Competition</option>
                            <option value="Insta Reel Making">Insta Reel Making</option>
                            <option value="Advertisemnt Making">Advertisemnt Making</option>
                            <!---->
                            <option value="Codeathon">Codeathon</option>
                            <option value="Botathon">Botathon</option>
                            <option value="Makeathon">Makeathon</option>
                            <option value="Code test">Code test</option>
                            <option value="Solution Challenge - Google">Solution Challenge - Google</option>
                            <option value="Wonders of AI">Wonders of AI</option>
                            <option value="REPIT">REPIT</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="AR/VR challenge">AR/VR challenge</option>
                            <option value="SQL Knight">SQL Knight</option>
                            <option value="Hack Odyssey 24">Hack Odyssey 24</option>
                            <option value="Designthon">Designthon</option>
                            <option value="Ethical Hacking">Ethical Hacking</option>
                            <option value="Multimedia Contest">Multimedia Contest</option>
                            <option value="Debugging">Debugging</option>
                            <option value="Coding Ninja">Coding Ninja</option>
                            <option value="Logo design and Animation">Logo design and Animation</option>
                            <option value="GaMeister">GaMeister</option>
                            <option value="Programming puzzle hunt">Programming puzzle hunt</option>
                            <!---->
                            <option value="Architecture AI">Architecture AI</option>
                            <option value="Make IT">Make IT</option>
                            <option value="Overpass">Overpass</option>
                            <!---->
                            <option value="Art from crop Waste">Art from crop Waste</option>
                            <option value="Plan your Farm">Plan your Farm</option>
                            <option value="Floral Decoration">Floral Decoration</option>
                            <option value="Carve it ">Carve it</option>
                        </select>
                    </div>

                    <div class="eventslect">
                        <label for="se2r3">Event Two:</label>
                        <select name="se2" id="se2r3" onchange="getselectvaluetwo(this.value);">
                            <option value="">Not Selected</option>
                            <!---->
                            <option value="Business Simulation">Business Simulation</option>
                            <option value="Biz Brain Battle">Biz Brain Battle</option>
                            <option value="Pitch Parade">Pitch Parade</option>
                            <option value="Trading Thunder clap">Trading Thunder clap</option>
                            <option value="Entrepreneurial Endeavor Expo">Entrepreneurial Endeavor Expo</option>
                            <option value="Solution Sprint Summit / Odyssey Analytical Quest">Solution Sprint Summit / Odyssey Analytical Quest</option>
                            <option value="ACCFINTHON">ACCFINTHON</option>
                            <option value="Finance Fiesta">Finance Fiesta</option>
                            <option value="Chit Chat Society">Chit Chat Society</option>
                            <option value="Miniature Art">Miniature Art</option>
                            <option value="Change-Maker Challenge / Social Work Quiz">Change-Maker Challenge / Social Work Quiz</option>
                            <option value="Silent Advocacy Expressions / Mime Activity">Silent Advocacy Expressions / Mime Activity</option>
                            <!---->
                            <option value="Rocketry">Rocketry</option>
                            <option value="Mind Math Creater">Mind Math Creater</option>
                            <option value="CircuitCraft Challenge: Unleashing Innovation in Electronic Design">CircuitCraft Challenge: Unleashing Innovation in Electronic Design</option>
                            <!---->
                            <option value="CRANIAL CLASH">CRANIAL CLASH</option>
                            <option value="PHYSBET & GET">PHYSBET & GET</option>
                            <option value="Minds in Motion">Minds in Motion</option>
                            <option value="ChemWizard">ChemWizard</option>
                            <option value="MATH CODE - SIMULATHON">MATH CODE - SIMULATHON</option>
                            <option value="ΣUMS - Math Re∫ay">ΣUMS - Math Re∫ay</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <!---->
                            <option value="SPICETRON - Good health and Well being">SPICETRON - Good health and Well being</option>
                            <option value="Electromaker - Industry, Innovation and Infrastructure">Electromaker - Industry, Innovation and Infrastructure</option>
                            <option value="MATLAB Mania - Sustainable Transport in Smart cities">MATLAB Mania - Sustainable Transport in Smart cities</option>
                            <option value="IoTronz Hack - Sustainable Life on Land ">IoTronz Hack - Sustainable Life on Land </option>
                            <option value="Elecsphere Odyssey - Hackathon - Clean Energy">Elecsphere Odyssey - Hackathon - Clean Energy</option>
                            <option value="Predikathon - AI based Electrical Maintenance (Codeathon)">Predikathon - AI based Electrical Maintenance (Codeathon)</option>
                            <option value="Energion - Energy Conservation (Competition)">Energion - Energy Conservation (Competition)</option>
                            <option value="FarmTech HackFest - Sustainable Agricluture">FarmTech HackFest - Sustainable Agricluture</option>
                            <option value="ReneW - Renewable Energy">ReneW - Renewable Energy</option>
                            <option value="NIMDHA-2024 - Modern Healthcare">NIMDHA-2024 - Modern Healthcare</option>
                            <option value="Medi Robot - Emerging Technologies in Medicine">Medi Robot - Emerging Technologies in Medicine</option>
                            <option value="MedCode Quest: Healing with Algorithms">MedCode Quest: Healing with Algorithms</option>
                            <!---->
                            <option value="Junk Millionaires">Junk Millionaires</option>
                            <option value="Decode the myth">Decode the myth</option>
                            <option value="Bio X ML Hackathon">Bio X ML Hackathon</option>
                            <option value="Food processing Hackathon">Food processing Hackathon</option>
                            <option value="Make Over">Make Over</option>
                            <option value="Hackathon-Challenging Minds For Innovative Solutions">Hackathon-Challenging Minds For Innovative Solutions</option>
                            <option value="Exploring sustainable goals">Exploring sustainable goals</option>
                            <option value="3-D modeling and simulation of Agricultural Machineries">3-D modeling and simulation of Agricultural Machineries</option>
                            <option value="App challenges in agri sector">App challenges in agri sector</option>
                            <!---->
                            <option value="Wheeled Mobile Robotics - Robo War  & Robo Maze Robot">Wheeled Mobile Robotics - Robo War  & Robo Maze Robot</option>
                            <option value="Wheeled Mobile Robotics - Robo Soccer Robot">Wheeled Mobile Robotics - Robo Soccer Robot</option>
                            <option value="Wheeled Mobile Robotics -  Robo Race Robot">Wheeled Mobile Robotics -  Robo Race Robot</option>
                            <option value="Freelance CAD Design & 3D Modelling">Freelance CAD Design & 3D Modelling</option>
                            <option value="COPTOTHON - 2K24">COPTOTHON - 2K24</option>
                            <option value="Structural Light weight Concrete Challenge Contest">Structural Light weight Concrete Challenge Contest</option>
                            <option value="Current Environmental Challenges towards Sustainability">Current Environmental Challenges towards Sustainability</option>
                            <!---->
                            <option value="REGALIA">REGALIA</option>
                            <option value="PANOPLY">PANOPLY</option>
                            <option value="MASQUERADE">MASQUERADE</option>
                            <option value="Pantomimist">Pantomimist</option>
                            <option value="PALATE PALOOZA Cooking Competition ">PALATE PALOOZA Cooking Competition </option>
                            <option value="FLAVOUR FIESTA Mocktail Competition ">FLAVOUR FIESTA Mocktail Competition </option>
                            <option value="WINTER WONDER Towel Art">WINTER WONDER Towel Art</option>
                            <option value="Short Film Making Competition">Short Film Making Competition</option>
                            <option value="Photography Competition">Photography Competition</option>
                            <option value="Insta Reel Making">Insta Reel Making</option>
                            <option value="Advertisemnt Making">Advertisemnt Making</option>
                            <!---->
                            <option value="Codeathon">Codeathon</option>
                            <option value="Botathon">Botathon</option>
                            <option value="Makeathon">Makeathon</option>
                            <option value="Code test">Code test</option>
                            <option value="Solution Challenge - Google">Solution Challenge - Google</option>
                            <option value="Wonders of AI">Wonders of AI</option>
                            <option value="REPIT">REPIT</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="AR/VR challenge">AR/VR challenge</option>
                            <option value="SQL Knight">SQL Knight</option>
                            <option value="Hack Odyssey 24">Hack Odyssey 24</option>
                            <option value="Designthon">Designthon</option>
                            <option value="Ethical Hacking">Ethical Hacking</option>
                            <option value="Multimedia Contest">Multimedia Contest</option>
                            <option value="Debugging">Debugging</option>
                            <option value="Coding Ninja">Coding Ninja</option>
                            <option value="Logo design and Animation">Logo design and Animation</option>
                            <option value="GaMeister">GaMeister</option>
                            <option value="Programming puzzle hunt">Programming puzzle hunt</option>
                            <!---->
                            <option value="Architecture AI">Architecture AI</option>
                            <option value="Make IT">Make IT</option>
                            <option value="Overpass">Overpass</option>
                            <!---->
                            <option value="Art from crop Waste">Art from crop Waste</option>
                            <option value="Plan your Farm">Plan your Farm</option>
                            <option value="Floral Decoration">Floral Decoration</option>
                            <option value="Carve it ">Carve it</option>
                        </select>
                    </div>
            
                    <div class="eventslect">
                        <label for="se3r3">Event Three:</label>
                        <select name="se3" id="se3r3" onchange="getselectvaluethree(this.value);">
                            <option value="">Not Selected</option>
                            <!---->
                            <option value="Business Simulation">Business Simulation</option>
                            <option value="Biz Brain Battle">Biz Brain Battle</option>
                            <option value="Pitch Parade">Pitch Parade</option>
                            <option value="Trading Thunder clap">Trading Thunder clap</option>
                            <option value="Entrepreneurial Endeavor Expo">Entrepreneurial Endeavor Expo</option>
                            <option value="Solution Sprint Summit / Odyssey Analytical Quest">Solution Sprint Summit / Odyssey Analytical Quest</option>
                            <option value="ACCFINTHON">ACCFINTHON</option>
                            <option value="Finance Fiesta">Finance Fiesta</option>
                            <option value="Chit Chat Society">Chit Chat Society</option>
                            <option value="Miniature Art">Miniature Art</option>
                            <option value="Change-Maker Challenge / Social Work Quiz">Change-Maker Challenge / Social Work Quiz</option>
                            <option value="Silent Advocacy Expressions / Mime Activity">Silent Advocacy Expressions / Mime Activity</option>
                            <!---->
                            <option value="Rocketry">Rocketry</option>
                            <option value="Mind Math Creater">Mind Math Creater</option>
                            <option value="CircuitCraft Challenge: Unleashing Innovation in Electronic Design">CircuitCraft Challenge: Unleashing Innovation in Electronic Design</option>
                            <!---->
                            <option value="CRANIAL CLASH">CRANIAL CLASH</option>
                            <option value="PHYSBET & GET">PHYSBET & GET</option>
                            <option value="Minds in Motion">Minds in Motion</option>
                            <option value="ChemWizard">ChemWizard</option>
                            <option value="MATH CODE - SIMULATHON">MATH CODE - SIMULATHON</option>
                            <option value="ΣUMS - Math Re∫ay">ΣUMS - Math Re∫ay</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <!---->
                            <option value="SPICETRON - Good health and Well being">SPICETRON - Good health and Well being</option>
                            <option value="Electromaker - Industry, Innovation and Infrastructure">Electromaker - Industry, Innovation and Infrastructure</option>
                            <option value="MATLAB Mania - Sustainable Transport in Smart cities">MATLAB Mania - Sustainable Transport in Smart cities</option>
                            <option value="IoTronz Hack - Sustainable Life on Land ">IoTronz Hack - Sustainable Life on Land </option>
                            <option value="Elecsphere Odyssey - Hackathon - Clean Energy">Elecsphere Odyssey - Hackathon - Clean Energy</option>
                            <option value="Predikathon - AI based Electrical Maintenance (Codeathon)">Predikathon - AI based Electrical Maintenance (Codeathon)</option>
                            <option value="Energion - Energy Conservation (Competition)">Energion - Energy Conservation (Competition)</option>
                            <option value="FarmTech HackFest - Sustainable Agricluture">FarmTech HackFest - Sustainable Agricluture</option>
                            <option value="ReneW - Renewable Energy">ReneW - Renewable Energy</option>
                            <option value="NIMDHA-2024 - Modern Healthcare">NIMDHA-2024 - Modern Healthcare</option>
                            <option value="Medi Robot - Emerging Technologies in Medicine">Medi Robot - Emerging Technologies in Medicine</option>
                            <option value="MedCode Quest: Healing with Algorithms">MedCode Quest: Healing with Algorithms</option>
                            <!---->
                            <option value="Junk Millionaires">Junk Millionaires</option>
                            <option value="Decode the myth">Decode the myth</option>
                            <option value="Bio X ML Hackathon">Bio X ML Hackathon</option>
                            <option value="Food processing Hackathon">Food processing Hackathon</option>
                            <option value="Make Over">Make Over</option>
                            <option value="Hackathon-Challenging Minds For Innovative Solutions">Hackathon-Challenging Minds For Innovative Solutions</option>
                            <option value="Exploring sustainable goals">Exploring sustainable goals</option>
                            <option value="3-D modeling and simulation of Agricultural Machineries">3-D modeling and simulation of Agricultural Machineries</option>
                            <option value="App challenges in agri sector">App challenges in agri sector</option>
                            <!---->
                            <option value="Wheeled Mobile Robotics - Robo War  & Robo Maze Robot">Wheeled Mobile Robotics - Robo War  & Robo Maze Robot</option>
                            <option value="Wheeled Mobile Robotics - Robo Soccer Robot">Wheeled Mobile Robotics - Robo Soccer Robot</option>
                            <option value="Wheeled Mobile Robotics -  Robo Race Robot">Wheeled Mobile Robotics -  Robo Race Robot</option>
                            <option value="Freelance CAD Design & 3D Modelling">Freelance CAD Design & 3D Modelling</option>
                            <option value="COPTOTHON - 2K24">COPTOTHON - 2K24</option>
                            <option value="Structural Light weight Concrete Challenge Contest">Structural Light weight Concrete Challenge Contest</option>
                            <option value="Current Environmental Challenges towards Sustainability">Current Environmental Challenges towards Sustainability</option>
                            <!---->
                            <option value="REGALIA">REGALIA</option>
                            <option value="PANOPLY">PANOPLY</option>
                            <option value="MASQUERADE">MASQUERADE</option>
                            <option value="Pantomimist">Pantomimist</option>
                            <option value="PALATE PALOOZA Cooking Competition ">PALATE PALOOZA Cooking Competition </option>
                            <option value="FLAVOUR FIESTA Mocktail Competition ">FLAVOUR FIESTA Mocktail Competition </option>
                            <option value="WINTER WONDER Towel Art">WINTER WONDER Towel Art</option>
                            <option value="Short Film Making Competition">Short Film Making Competition</option>
                            <option value="Photography Competition">Photography Competition</option>
                            <option value="Insta Reel Making">Insta Reel Making</option>
                            <option value="Advertisemnt Making">Advertisemnt Making</option>
                            <!---->
                            <option value="Codeathon">Codeathon</option>
                            <option value="Botathon">Botathon</option>
                            <option value="Makeathon">Makeathon</option>
                            <option value="Code test">Code test</option>
                            <option value="Solution Challenge - Google">Solution Challenge - Google</option>
                            <option value="Wonders of AI">Wonders of AI</option>
                            <option value="REPIT">REPIT</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="AR/VR challenge">AR/VR challenge</option>
                            <option value="SQL Knight">SQL Knight</option>
                            <option value="Hack Odyssey 24">Hack Odyssey 24</option>
                            <option value="Designthon">Designthon</option>
                            <option value="Ethical Hacking">Ethical Hacking</option>
                            <option value="Multimedia Contest">Multimedia Contest</option>
                            <option value="Debugging">Debugging</option>
                            <option value="Coding Ninja">Coding Ninja</option>
                            <option value="Logo design and Animation">Logo design and Animation</option>
                            <option value="GaMeister">GaMeister</option>
                            <option value="Programming puzzle hunt">Programming puzzle hunt</option>
                            <!---->
                            <option value="Architecture AI">Architecture AI</option>
                            <option value="Make IT">Make IT</option>
                            <option value="Overpass">Overpass</option>
                            <!---->
                            <option value="Art from crop Waste">Art from crop Waste</option>
                            <option value="Plan your Farm">Plan your Farm</option>
                            <option value="Floral Decoration">Floral Decoration</option>
                            <option value="Carve it ">Carve it</option>
                        </select>
                    </div>
                </div>
                <div id="button">
                    <input type="checkbox" name="" id="validateboxr3">
                    <input id="checkall" type="button" onclick="checkallregis3()" value="VALIDATE"/>
                    <input class="validated" type="button" value="VALIDATION SUCCESS"/>
                    <p>Click Here to Submit...</p>
                    <button>SUBMIT</button>
                </div>
            </div>
            <div id="registercount5" class="registercount5">
                <input type="checkbox" name="" id="closeeventselectionr5">
                <h3 id="secure">Your Selected Events are Noted. Verify your above Details and click Submit</h3>
                <ol class="rules">
                    <h3>Students before registering for event check the event timing . </h3>
                </ol>
                <div class="eventcloseall">
                    <div class="eventslect">
                        <label for="se1r5">Event One:</label>
                        <select name="se1r5" id="se1r5" onchange="getselectvalue(this.value);">
                            <option value="">Not Selected</option>
                            <!---->
                            <option value="Business Simulation">Business Simulation</option>
                            <option value="Biz Brain Battle">Biz Brain Battle</option>
                            <option value="Pitch Parade">Pitch Parade</option>
                            <option value="Trading Thunder clap">Trading Thunder clap</option>
                            <option value="Entrepreneurial Endeavor Expo">Entrepreneurial Endeavor Expo</option>
                            <option value="Solution Sprint Summit / Odyssey Analytical Quest">Solution Sprint Summit / Odyssey Analytical Quest</option>
                            <option value="ACCFINTHON">ACCFINTHON</option>
                            <option value="Finance Fiesta">Finance Fiesta</option>
                            <option value="Chit Chat Society">Chit Chat Society</option>
                            <option value="Miniature Art">Miniature Art</option>
                            <option value="Change-Maker Challenge / Social Work Quiz">Change-Maker Challenge / Social Work Quiz</option>
                            <option value="Silent Advocacy Expressions / Mime Activity">Silent Advocacy Expressions / Mime Activity</option>
                            <!---->
                            <option value="Rocketry">Rocketry</option>
                            <option value="Mind Math Creater">Mind Math Creater</option>
                            <option value="CircuitCraft Challenge: Unleashing Innovation in Electronic Design">CircuitCraft Challenge: Unleashing Innovation in Electronic Design</option>
                            <!---->
                            <option value="CRANIAL CLASH">CRANIAL CLASH</option>
                            <option value="PHYSBET & GET">PHYSBET & GET</option>
                            <option value="Minds in Motion">Minds in Motion</option>
                            <option value="ChemWizard">ChemWizard</option>
                            <option value="MATH CODE - SIMULATHON">MATH CODE - SIMULATHON</option>
                            <option value="ΣUMS - Math Re∫ay">ΣUMS - Math Re∫ay</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <!---->
                            <option value="SPICETRON - Good health and Well being">SPICETRON - Good health and Well being</option>
                            <option value="Electromaker - Industry, Innovation and Infrastructure">Electromaker - Industry, Innovation and Infrastructure</option>
                            <option value="MATLAB Mania - Sustainable Transport in Smart cities">MATLAB Mania - Sustainable Transport in Smart cities</option>
                            <option value="IoTronz Hack - Sustainable Life on Land ">IoTronz Hack - Sustainable Life on Land </option>
                            <option value="Elecsphere Odyssey - Hackathon - Clean Energy">Elecsphere Odyssey - Hackathon - Clean Energy</option>
                            <option value="Predikathon - AI based Electrical Maintenance (Codeathon)">Predikathon - AI based Electrical Maintenance (Codeathon)</option>
                            <option value="Energion - Energy Conservation (Competition)">Energion - Energy Conservation (Competition)</option>
                            <option value="FarmTech HackFest - Sustainable Agricluture">FarmTech HackFest - Sustainable Agricluture</option>
                            <option value="ReneW - Renewable Energy">ReneW - Renewable Energy</option>
                            <option value="NIMDHA-2024 - Modern Healthcare">NIMDHA-2024 - Modern Healthcare</option>
                            <option value="Medi Robot - Emerging Technologies in Medicine">Medi Robot - Emerging Technologies in Medicine</option>
                            <option value="MedCode Quest: Healing with Algorithms">MedCode Quest: Healing with Algorithms</option>
                            <!---->
                            <option value="Junk Millionaires">Junk Millionaires</option>
                            <option value="Decode the myth">Decode the myth</option>
                            <option value="Bio X ML Hackathon">Bio X ML Hackathon</option>
                            <option value="Food processing Hackathon">Food processing Hackathon</option>
                            <option value="Make Over">Make Over</option>
                            <option value="Hackathon-Challenging Minds For Innovative Solutions">Hackathon-Challenging Minds For Innovative Solutions</option>
                            <option value="Exploring sustainable goals">Exploring sustainable goals</option>
                            <option value="3-D modeling and simulation of Agricultural Machineries">3-D modeling and simulation of Agricultural Machineries</option>
                            <option value="App challenges in agri sector">App challenges in agri sector</option>
                            <!---->
                            <option value="Wheeled Mobile Robotics - Robo War  & Robo Maze Robot">Wheeled Mobile Robotics - Robo War  & Robo Maze Robot</option>
                            <option value="Wheeled Mobile Robotics - Robo Soccer Robot">Wheeled Mobile Robotics - Robo Soccer Robot</option>
                            <option value="Wheeled Mobile Robotics -  Robo Race Robot">Wheeled Mobile Robotics -  Robo Race Robot</option>
                            <option value="Freelance CAD Design & 3D Modelling">Freelance CAD Design & 3D Modelling</option>
                            <option value="COPTOTHON - 2K24">COPTOTHON - 2K24</option>
                            <option value="Structural Light weight Concrete Challenge Contest">Structural Light weight Concrete Challenge Contest</option>
                            <option value="Current Environmental Challenges towards Sustainability">Current Environmental Challenges towards Sustainability</option>
                            <!---->
                            <option value="REGALIA">REGALIA</option>
                            <option value="PANOPLY">PANOPLY</option>
                            <option value="MASQUERADE">MASQUERADE</option>
                            <option value="Pantomimist">Pantomimist</option>
                            <option value="PALATE PALOOZA Cooking Competition ">PALATE PALOOZA Cooking Competition </option>
                            <option value="FLAVOUR FIESTA Mocktail Competition ">FLAVOUR FIESTA Mocktail Competition </option>
                            <option value="WINTER WONDER Towel Art">WINTER WONDER Towel Art</option>
                            <option value="Short Film Making Competition">Short Film Making Competition</option>
                            <option value="Photography Competition">Photography Competition</option>
                            <option value="Insta Reel Making">Insta Reel Making</option>
                            <option value="Advertisemnt Making">Advertisemnt Making</option>
                            <!---->
                            <option value="Codeathon">Codeathon</option>
                            <option value="Botathon">Botathon</option>
                            <option value="Makeathon">Makeathon</option>
                            <option value="Code test">Code test</option>
                            <option value="Solution Challenge - Google">Solution Challenge - Google</option>
                            <option value="Wonders of AI">Wonders of AI</option>
                            <option value="REPIT">REPIT</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="AR/VR challenge">AR/VR challenge</option>
                            <option value="SQL Knight">SQL Knight</option>
                            <option value="Hack Odyssey 24">Hack Odyssey 24</option>
                            <option value="Designthon">Designthon</option>
                            <option value="Ethical Hacking">Ethical Hacking</option>
                            <option value="Multimedia Contest">Multimedia Contest</option>
                            <option value="Debugging">Debugging</option>
                            <option value="Coding Ninja">Coding Ninja</option>
                            <option value="Logo design and Animation">Logo design and Animation</option>
                            <option value="GaMeister">GaMeister</option>
                            <option value="Programming puzzle hunt">Programming puzzle hunt</option>
                            <!---->
                            <option value="Architecture AI">Architecture AI</option>
                            <option value="Make IT">Make IT</option>
                            <option value="Overpass">Overpass</option>
                            <!---->
                            <option value="Art from crop Waste">Art from crop Waste</option>
                            <option value="Plan your Farm">Plan your Farm</option>
                            <option value="Floral Decoration">Floral Decoration</option>
                            <option value="Carve it ">Carve it</option>
                        </select>
                    </div>

                    <div class="eventslect">
                        <label for="se2r5">Event Two:</label>
                        <select name="se2r5" id="se2r5" onchange="getselectvaluetwo(this.value);">
                            <option value="">Not Selected</option>
                            <!---->
                            <option value="Business Simulation">Business Simulation</option>
                            <option value="Biz Brain Battle">Biz Brain Battle</option>
                            <option value="Pitch Parade">Pitch Parade</option>
                            <option value="Trading Thunder clap">Trading Thunder clap</option>
                            <option value="Entrepreneurial Endeavor Expo">Entrepreneurial Endeavor Expo</option>
                            <option value="Solution Sprint Summit / Odyssey Analytical Quest">Solution Sprint Summit / Odyssey Analytical Quest</option>
                            <option value="ACCFINTHON">ACCFINTHON</option>
                            <option value="Finance Fiesta">Finance Fiesta</option>
                            <option value="Chit Chat Society">Chit Chat Society</option>
                            <option value="Miniature Art">Miniature Art</option>
                            <option value="Change-Maker Challenge / Social Work Quiz">Change-Maker Challenge / Social Work Quiz</option>
                            <option value="Silent Advocacy Expressions / Mime Activity">Silent Advocacy Expressions / Mime Activity</option>
                            <!---->
                            <option value="Rocketry">Rocketry</option>
                            <option value="Mind Math Creater">Mind Math Creater</option>
                            <option value="CircuitCraft Challenge: Unleashing Innovation in Electronic Design">CircuitCraft Challenge: Unleashing Innovation in Electronic Design</option>
                            <!---->
                            <option value="CRANIAL CLASH">CRANIAL CLASH</option>
                            <option value="PHYSBET & GET">PHYSBET & GET</option>
                            <option value="Minds in Motion">Minds in Motion</option>
                            <option value="ChemWizard">ChemWizard</option>
                            <option value="MATH CODE - SIMULATHON">MATH CODE - SIMULATHON</option>
                            <option value="ΣUMS - Math Re∫ay">ΣUMS - Math Re∫ay</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <!---->
                            <option value="SPICETRON - Good health and Well being">SPICETRON - Good health and Well being</option>
                            <option value="Electromaker - Industry, Innovation and Infrastructure">Electromaker - Industry, Innovation and Infrastructure</option>
                            <option value="MATLAB Mania - Sustainable Transport in Smart cities">MATLAB Mania - Sustainable Transport in Smart cities</option>
                            <option value="IoTronz Hack - Sustainable Life on Land ">IoTronz Hack - Sustainable Life on Land </option>
                            <option value="Elecsphere Odyssey - Hackathon - Clean Energy">Elecsphere Odyssey - Hackathon - Clean Energy</option>
                            <option value="Predikathon - AI based Electrical Maintenance (Codeathon)">Predikathon - AI based Electrical Maintenance (Codeathon)</option>
                            <option value="Energion - Energy Conservation (Competition)">Energion - Energy Conservation (Competition)</option>
                            <option value="FarmTech HackFest - Sustainable Agricluture">FarmTech HackFest - Sustainable Agricluture</option>
                            <option value="ReneW - Renewable Energy">ReneW - Renewable Energy</option>
                            <option value="NIMDHA-2024 - Modern Healthcare">NIMDHA-2024 - Modern Healthcare</option>
                            <option value="Medi Robot - Emerging Technologies in Medicine">Medi Robot - Emerging Technologies in Medicine</option>
                            <option value="MedCode Quest: Healing with Algorithms">MedCode Quest: Healing with Algorithms</option>
                            <!---->
                            <option value="Junk Millionaires">Junk Millionaires</option>
                            <option value="Decode the myth">Decode the myth</option>
                            <option value="Bio X ML Hackathon">Bio X ML Hackathon</option>
                            <option value="Food processing Hackathon">Food processing Hackathon</option>
                            <option value="Make Over">Make Over</option>
                            <option value="Hackathon-Challenging Minds For Innovative Solutions">Hackathon-Challenging Minds For Innovative Solutions</option>
                            <option value="Exploring sustainable goals">Exploring sustainable goals</option>
                            <option value="3-D modeling and simulation of Agricultural Machineries">3-D modeling and simulation of Agricultural Machineries</option>
                            <option value="App challenges in agri sector">App challenges in agri sector</option>
                            <!---->
                            <option value="Wheeled Mobile Robotics - Robo War  & Robo Maze Robot">Wheeled Mobile Robotics - Robo War  & Robo Maze Robot</option>
                            <option value="Wheeled Mobile Robotics - Robo Soccer Robot">Wheeled Mobile Robotics - Robo Soccer Robot</option>
                            <option value="Wheeled Mobile Robotics -  Robo Race Robot">Wheeled Mobile Robotics -  Robo Race Robot</option>
                            <option value="Freelance CAD Design & 3D Modelling">Freelance CAD Design & 3D Modelling</option>
                            <option value="COPTOTHON - 2K24">COPTOTHON - 2K24</option>
                            <option value="Structural Light weight Concrete Challenge Contest">Structural Light weight Concrete Challenge Contest</option>
                            <option value="Current Environmental Challenges towards Sustainability">Current Environmental Challenges towards Sustainability</option>
                            <!---->
                            <option value="REGALIA">REGALIA</option>
                            <option value="PANOPLY">PANOPLY</option>
                            <option value="MASQUERADE">MASQUERADE</option>
                            <option value="Pantomimist">Pantomimist</option>
                            <option value="PALATE PALOOZA Cooking Competition ">PALATE PALOOZA Cooking Competition </option>
                            <option value="FLAVOUR FIESTA Mocktail Competition ">FLAVOUR FIESTA Mocktail Competition </option>
                            <option value="WINTER WONDER Towel Art">WINTER WONDER Towel Art</option>
                            <option value="Short Film Making Competition">Short Film Making Competition</option>
                            <option value="Photography Competition">Photography Competition</option>
                            <option value="Insta Reel Making">Insta Reel Making</option>
                            <option value="Advertisemnt Making">Advertisemnt Making</option>
                            <!---->
                            <option value="Codeathon">Codeathon</option>
                            <option value="Botathon">Botathon</option>
                            <option value="Makeathon">Makeathon</option>
                            <option value="Code test">Code test</option>
                            <option value="Solution Challenge - Google">Solution Challenge - Google</option>
                            <option value="Wonders of AI">Wonders of AI</option>
                            <option value="REPIT">REPIT</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="AR/VR challenge">AR/VR challenge</option>
                            <option value="SQL Knight">SQL Knight</option>
                            <option value="Hack Odyssey 24">Hack Odyssey 24</option>
                            <option value="Designthon">Designthon</option>
                            <option value="Ethical Hacking">Ethical Hacking</option>
                            <option value="Multimedia Contest">Multimedia Contest</option>
                            <option value="Debugging">Debugging</option>
                            <option value="Coding Ninja">Coding Ninja</option>
                            <option value="Logo design and Animation">Logo design and Animation</option>
                            <option value="GaMeister">GaMeister</option>
                            <option value="Programming puzzle hunt">Programming puzzle hunt</option>
                            <!---->
                            <option value="Architecture AI">Architecture AI</option>
                            <option value="Make IT">Make IT</option>
                            <option value="Overpass">Overpass</option>
                            <!---->
                            <option value="Art from crop Waste">Art from crop Waste</option>
                            <option value="Plan your Farm">Plan your Farm</option>
                            <option value="Floral Decoration">Floral Decoration</option>
                            <option value="Carve it ">Carve it</option>
                        </select>
                    </div>
            
                    <div class="eventslect">
                        <label for="se3r5">Event Three:</label>
                        <select name="se3r5" id="se3r5" onchange="getselectvaluethree(this.value);">
                            <option value="">Not Selected</option>
                            <!---->
                            <option value="Business Simulation">Business Simulation</option>
                            <option value="Biz Brain Battle">Biz Brain Battle</option>
                            <option value="Pitch Parade">Pitch Parade</option>
                            <option value="Trading Thunder clap">Trading Thunder clap</option>
                            <option value="Entrepreneurial Endeavor Expo">Entrepreneurial Endeavor Expo</option>
                            <option value="Solution Sprint Summit / Odyssey Analytical Quest">Solution Sprint Summit / Odyssey Analytical Quest</option>
                            <option value="ACCFINTHON">ACCFINTHON</option>
                            <option value="Finance Fiesta">Finance Fiesta</option>
                            <option value="Chit Chat Society">Chit Chat Society</option>
                            <option value="Miniature Art">Miniature Art</option>
                            <option value="Change-Maker Challenge / Social Work Quiz">Change-Maker Challenge / Social Work Quiz</option>
                            <option value="Silent Advocacy Expressions / Mime Activity">Silent Advocacy Expressions / Mime Activity</option>
                            <!---->
                            <option value="Rocketry">Rocketry</option>
                            <option value="Mind Math Creater">Mind Math Creater</option>
                            <option value="CircuitCraft Challenge: Unleashing Innovation in Electronic Design">CircuitCraft Challenge: Unleashing Innovation in Electronic Design</option>
                            <!---->
                            <option value="CRANIAL CLASH">CRANIAL CLASH</option>
                            <option value="PHYSBET & GET">PHYSBET & GET</option>
                            <option value="Minds in Motion">Minds in Motion</option>
                            <option value="ChemWizard">ChemWizard</option>
                            <option value="MATH CODE - SIMULATHON">MATH CODE - SIMULATHON</option>
                            <option value="ΣUMS - Math Re∫ay">ΣUMS - Math Re∫ay</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <!---->
                            <option value="SPICETRON - Good health and Well being">SPICETRON - Good health and Well being</option>
                            <option value="Electromaker - Industry, Innovation and Infrastructure">Electromaker - Industry, Innovation and Infrastructure</option>
                            <option value="MATLAB Mania - Sustainable Transport in Smart cities">MATLAB Mania - Sustainable Transport in Smart cities</option>
                            <option value="IoTronz Hack - Sustainable Life on Land ">IoTronz Hack - Sustainable Life on Land </option>
                            <option value="Elecsphere Odyssey - Hackathon - Clean Energy">Elecsphere Odyssey - Hackathon - Clean Energy</option>
                            <option value="Predikathon - AI based Electrical Maintenance (Codeathon)">Predikathon - AI based Electrical Maintenance (Codeathon)</option>
                            <option value="Energion - Energy Conservation (Competition)">Energion - Energy Conservation (Competition)</option>
                            <option value="FarmTech HackFest - Sustainable Agricluture">FarmTech HackFest - Sustainable Agricluture</option>
                            <option value="ReneW - Renewable Energy">ReneW - Renewable Energy</option>
                            <option value="NIMDHA-2024 - Modern Healthcare">NIMDHA-2024 - Modern Healthcare</option>
                            <option value="Medi Robot - Emerging Technologies in Medicine">Medi Robot - Emerging Technologies in Medicine</option>
                            <option value="MedCode Quest: Healing with Algorithms">MedCode Quest: Healing with Algorithms</option>
                            <!---->
                            <option value="Junk Millionaires">Junk Millionaires</option>
                            <option value="Decode the myth">Decode the myth</option>
                            <option value="Bio X ML Hackathon">Bio X ML Hackathon</option>
                            <option value="Food processing Hackathon">Food processing Hackathon</option>
                            <option value="Make Over">Make Over</option>
                            <option value="Hackathon-Challenging Minds For Innovative Solutions">Hackathon-Challenging Minds For Innovative Solutions</option>
                            <option value="Exploring sustainable goals">Exploring sustainable goals</option>
                            <option value="3-D modeling and simulation of Agricultural Machineries">3-D modeling and simulation of Agricultural Machineries</option>
                            <option value="App challenges in agri sector">App challenges in agri sector</option>
                            <!---->
                            <option value="Wheeled Mobile Robotics - Robo War  & Robo Maze Robot">Wheeled Mobile Robotics - Robo War  & Robo Maze Robot</option>
                            <option value="Wheeled Mobile Robotics - Robo Soccer Robot">Wheeled Mobile Robotics - Robo Soccer Robot</option>
                            <option value="Wheeled Mobile Robotics -  Robo Race Robot">Wheeled Mobile Robotics -  Robo Race Robot</option>
                            <option value="Freelance CAD Design & 3D Modelling">Freelance CAD Design & 3D Modelling</option>
                            <option value="COPTOTHON - 2K24">COPTOTHON - 2K24</option>
                            <option value="Structural Light weight Concrete Challenge Contest">Structural Light weight Concrete Challenge Contest</option>
                            <option value="Current Environmental Challenges towards Sustainability">Current Environmental Challenges towards Sustainability</option>
                            <!---->
                            <option value="REGALIA">REGALIA</option>
                            <option value="PANOPLY">PANOPLY</option>
                            <option value="MASQUERADE">MASQUERADE</option>
                            <option value="Pantomimist">Pantomimist</option>
                            <option value="PALATE PALOOZA Cooking Competition ">PALATE PALOOZA Cooking Competition </option>
                            <option value="FLAVOUR FIESTA Mocktail Competition ">FLAVOUR FIESTA Mocktail Competition </option>
                            <option value="WINTER WONDER Towel Art">WINTER WONDER Towel Art</option>
                            <option value="Short Film Making Competition">Short Film Making Competition</option>
                            <option value="Photography Competition">Photography Competition</option>
                            <option value="Insta Reel Making">Insta Reel Making</option>
                            <option value="Advertisemnt Making">Advertisemnt Making</option>
                            <!---->
                            <option value="Codeathon">Codeathon</option>
                            <option value="Botathon">Botathon</option>
                            <option value="Makeathon">Makeathon</option>
                            <option value="Code test">Code test</option>
                            <option value="Solution Challenge - Google">Solution Challenge - Google</option>
                            <option value="Wonders of AI">Wonders of AI</option>
                            <option value="REPIT">REPIT</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="AR/VR challenge">AR/VR challenge</option>
                            <option value="SQL Knight">SQL Knight</option>
                            <option value="Hack Odyssey 24">Hack Odyssey 24</option>
                            <option value="Designthon">Designthon</option>
                            <option value="Ethical Hacking">Ethical Hacking</option>
                            <option value="Multimedia Contest">Multimedia Contest</option>
                            <option value="Debugging">Debugging</option>
                            <option value="Coding Ninja">Coding Ninja</option>
                            <option value="Logo design and Animation">Logo design and Animation</option>
                            <option value="GaMeister">GaMeister</option>
                            <option value="Programming puzzle hunt">Programming puzzle hunt</option>
                            <!---->
                            <option value="Architecture AI">Architecture AI</option>
                            <option value="Make IT">Make IT</option>
                            <option value="Overpass">Overpass</option>
                            <!---->
                            <option value="Art from crop Waste">Art from crop Waste</option>
                            <option value="Plan your Farm">Plan your Farm</option>
                            <option value="Floral Decoration">Floral Decoration</option>
                            <option value="Carve it ">Carve it</option>
                        </select>
                    </div>

                    
            
                    <div class="eventslect">
                        <label for="se4r5">Event Four:</label>
                        <select name="se4r5" id="se4r5" onchange="getselectvaluethree(this.value);">
                            <option value="">Not Selected</option>
                            <!---->
                            <option value="Business Simulation">Business Simulation</option>
                            <option value="Biz Brain Battle">Biz Brain Battle</option>
                            <option value="Pitch Parade">Pitch Parade</option>
                            <option value="Trading Thunder clap">Trading Thunder clap</option>
                            <option value="Entrepreneurial Endeavor Expo">Entrepreneurial Endeavor Expo</option>
                            <option value="Solution Sprint Summit / Odyssey Analytical Quest">Solution Sprint Summit / Odyssey Analytical Quest</option>
                            <option value="ACCFINTHON">ACCFINTHON</option>
                            <option value="Finance Fiesta">Finance Fiesta</option>
                            <option value="Chit Chat Society">Chit Chat Society</option>
                            <option value="Miniature Art">Miniature Art</option>
                            <option value="Change-Maker Challenge / Social Work Quiz">Change-Maker Challenge / Social Work Quiz</option>
                            <option value="Silent Advocacy Expressions / Mime Activity">Silent Advocacy Expressions / Mime Activity</option>
                            <!---->
                            <option value="Rocketry">Rocketry</option>
                            <option value="Mind Math Creater">Mind Math Creater</option>
                            <option value="CircuitCraft Challenge: Unleashing Innovation in Electronic Design">CircuitCraft Challenge: Unleashing Innovation in Electronic Design</option>
                            <!---->
                            <option value="CRANIAL CLASH">CRANIAL CLASH</option>
                            <option value="PHYSBET & GET">PHYSBET & GET</option>
                            <option value="Minds in Motion">Minds in Motion</option>
                            <option value="ChemWizard">ChemWizard</option>
                            <option value="MATH CODE - SIMULATHON">MATH CODE - SIMULATHON</option>
                            <option value="ΣUMS - Math Re∫ay">ΣUMS - Math Re∫ay</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <!---->
                            <option value="SPICETRON - Good health and Well being">SPICETRON - Good health and Well being</option>
                            <option value="Electromaker - Industry, Innovation and Infrastructure">Electromaker - Industry, Innovation and Infrastructure</option>
                            <option value="MATLAB Mania - Sustainable Transport in Smart cities">MATLAB Mania - Sustainable Transport in Smart cities</option>
                            <option value="IoTronz Hack - Sustainable Life on Land ">IoTronz Hack - Sustainable Life on Land </option>
                            <option value="Elecsphere Odyssey - Hackathon - Clean Energy">Elecsphere Odyssey - Hackathon - Clean Energy</option>
                            <option value="Predikathon - AI based Electrical Maintenance (Codeathon)">Predikathon - AI based Electrical Maintenance (Codeathon)</option>
                            <option value="Energion - Energy Conservation (Competition)">Energion - Energy Conservation (Competition)</option>
                            <option value="FarmTech HackFest - Sustainable Agricluture">FarmTech HackFest - Sustainable Agricluture</option>
                            <option value="ReneW - Renewable Energy">ReneW - Renewable Energy</option>
                            <option value="NIMDHA-2024 - Modern Healthcare">NIMDHA-2024 - Modern Healthcare</option>
                            <option value="Medi Robot - Emerging Technologies in Medicine">Medi Robot - Emerging Technologies in Medicine</option>
                            <option value="MedCode Quest: Healing with Algorithms">MedCode Quest: Healing with Algorithms</option>
                            <!---->
                            <option value="Junk Millionaires">Junk Millionaires</option>
                            <option value="Decode the myth">Decode the myth</option>
                            <option value="Bio X ML Hackathon">Bio X ML Hackathon</option>
                            <option value="Food processing Hackathon">Food processing Hackathon</option>
                            <option value="Make Over">Make Over</option>
                            <option value="Hackathon-Challenging Minds For Innovative Solutions">Hackathon-Challenging Minds For Innovative Solutions</option>
                            <option value="Exploring sustainable goals">Exploring sustainable goals</option>
                            <option value="3-D modeling and simulation of Agricultural Machineries">3-D modeling and simulation of Agricultural Machineries</option>
                            <option value="App challenges in agri sector">App challenges in agri sector</option>
                            <!---->
                            <option value="Wheeled Mobile Robotics - Robo War  & Robo Maze Robot">Wheeled Mobile Robotics - Robo War  & Robo Maze Robot</option>
                            <option value="Wheeled Mobile Robotics - Robo Soccer Robot">Wheeled Mobile Robotics - Robo Soccer Robot</option>
                            <option value="Wheeled Mobile Robotics -  Robo Race Robot">Wheeled Mobile Robotics -  Robo Race Robot</option>
                            <option value="Freelance CAD Design & 3D Modelling">Freelance CAD Design & 3D Modelling</option>
                            <option value="COPTOTHON - 2K24">COPTOTHON - 2K24</option>
                            <option value="Structural Light weight Concrete Challenge Contest">Structural Light weight Concrete Challenge Contest</option>
                            <option value="Current Environmental Challenges towards Sustainability">Current Environmental Challenges towards Sustainability</option>
                            <!---->
                            <option value="REGALIA">REGALIA</option>
                            <option value="PANOPLY">PANOPLY</option>
                            <option value="MASQUERADE">MASQUERADE</option>
                            <option value="Pantomimist">Pantomimist</option>
                            <option value="PALATE PALOOZA Cooking Competition ">PALATE PALOOZA Cooking Competition </option>
                            <option value="FLAVOUR FIESTA Mocktail Competition ">FLAVOUR FIESTA Mocktail Competition </option>
                            <option value="WINTER WONDER Towel Art">WINTER WONDER Towel Art</option>
                            <option value="Short Film Making Competition">Short Film Making Competition</option>
                            <option value="Photography Competition">Photography Competition</option>
                            <option value="Insta Reel Making">Insta Reel Making</option>
                            <option value="Advertisemnt Making">Advertisemnt Making</option>
                            <!---->
                            <option value="Codeathon">Codeathon</option>
                            <option value="Botathon">Botathon</option>
                            <option value="Makeathon">Makeathon</option>
                            <option value="Code test">Code test</option>
                            <option value="Solution Challenge - Google">Solution Challenge - Google</option>
                            <option value="Wonders of AI">Wonders of AI</option>
                            <option value="REPIT">REPIT</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="AR/VR challenge">AR/VR challenge</option>
                            <option value="SQL Knight">SQL Knight</option>
                            <option value="Hack Odyssey 24">Hack Odyssey 24</option>
                            <option value="Designthon">Designthon</option>
                            <option value="Ethical Hacking">Ethical Hacking</option>
                            <option value="Multimedia Contest">Multimedia Contest</option>
                            <option value="Debugging">Debugging</option>
                            <option value="Coding Ninja">Coding Ninja</option>
                            <option value="Logo design and Animation">Logo design and Animation</option>
                            <option value="GaMeister">GaMeister</option>
                            <option value="Programming puzzle hunt">Programming puzzle hunt</option>
                            <!---->
                            <option value="Architecture AI">Architecture AI</option>
                            <option value="Make IT">Make IT</option>
                            <option value="Overpass">Overpass</option>
                            <!---->
                            <option value="Art from crop Waste">Art from crop Waste</option>
                            <option value="Plan your Farm">Plan your Farm</option>
                            <option value="Floral Decoration">Floral Decoration</option>
                            <option value="Carve it ">Carve it</option>
                        </select>
                    </div>

                    <div class="eventslect">
                        <label for="se5r5">Event Five:</label>
                        <select name="se5r5" id="se5r5" onchange="getselectvaluethree(this.value);">
                            <option value="">Not Selected</option>
                            <!---->
                            <option value="Business Simulation">Business Simulation</option>
                            <option value="Biz Brain Battle">Biz Brain Battle</option>
                            <option value="Pitch Parade">Pitch Parade</option>
                            <option value="Trading Thunder clap">Trading Thunder clap</option>
                            <option value="Entrepreneurial Endeavor Expo">Entrepreneurial Endeavor Expo</option>
                            <option value="Solution Sprint Summit / Odyssey Analytical Quest">Solution Sprint Summit / Odyssey Analytical Quest</option>
                            <option value="ACCFINTHON">ACCFINTHON</option>
                            <option value="Finance Fiesta">Finance Fiesta</option>
                            <option value="Chit Chat Society">Chit Chat Society</option>
                            <option value="Miniature Art">Miniature Art</option>
                            <option value="Change-Maker Challenge / Social Work Quiz">Change-Maker Challenge / Social Work Quiz</option>
                            <option value="Silent Advocacy Expressions / Mime Activity">Silent Advocacy Expressions / Mime Activity</option>
                            <!---->
                            <option value="Rocketry">Rocketry</option>
                            <option value="Mind Math Creater">Mind Math Creater</option>
                            <option value="CircuitCraft Challenge: Unleashing Innovation in Electronic Design">CircuitCraft Challenge: Unleashing Innovation in Electronic Design</option>
                            <!---->
                            <option value="CRANIAL CLASH">CRANIAL CLASH</option>
                            <option value="PHYSBET & GET">PHYSBET & GET</option>
                            <option value="Minds in Motion">Minds in Motion</option>
                            <option value="ChemWizard">ChemWizard</option>
                            <option value="MATH CODE - SIMULATHON">MATH CODE - SIMULATHON</option>
                            <option value="ΣUMS - Math Re∫ay">ΣUMS - Math Re∫ay</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <option value="Forensic Science">Forensic Science</option>
                            <!---->
                            <option value="SPICETRON - Good health and Well being">SPICETRON - Good health and Well being</option>
                            <option value="Electromaker - Industry, Innovation and Infrastructure">Electromaker - Industry, Innovation and Infrastructure</option>
                            <option value="MATLAB Mania - Sustainable Transport in Smart cities">MATLAB Mania - Sustainable Transport in Smart cities</option>
                            <option value="IoTronz Hack - Sustainable Life on Land ">IoTronz Hack - Sustainable Life on Land </option>
                            <option value="Elecsphere Odyssey - Hackathon - Clean Energy">Elecsphere Odyssey - Hackathon - Clean Energy</option>
                            <option value="Predikathon - AI based Electrical Maintenance (Codeathon)">Predikathon - AI based Electrical Maintenance (Codeathon)</option>
                            <option value="Energion - Energy Conservation (Competition)">Energion - Energy Conservation (Competition)</option>
                            <option value="FarmTech HackFest - Sustainable Agricluture">FarmTech HackFest - Sustainable Agricluture</option>
                            <option value="ReneW - Renewable Energy">ReneW - Renewable Energy</option>
                            <option value="NIMDHA-2024 - Modern Healthcare">NIMDHA-2024 - Modern Healthcare</option>
                            <option value="Medi Robot - Emerging Technologies in Medicine">Medi Robot - Emerging Technologies in Medicine</option>
                            <option value="MedCode Quest: Healing with Algorithms">MedCode Quest: Healing with Algorithms</option>
                            <!---->
                            <option value="Junk Millionaires">Junk Millionaires</option>
                            <option value="Decode the myth">Decode the myth</option>
                            <option value="Bio X ML Hackathon">Bio X ML Hackathon</option>
                            <option value="Food processing Hackathon">Food processing Hackathon</option>
                            <option value="Make Over">Make Over</option>
                            <option value="Hackathon-Challenging Minds For Innovative Solutions">Hackathon-Challenging Minds For Innovative Solutions</option>
                            <option value="Exploring sustainable goals">Exploring sustainable goals</option>
                            <option value="3-D modeling and simulation of Agricultural Machineries">3-D modeling and simulation of Agricultural Machineries</option>
                            <option value="App challenges in agri sector">App challenges in agri sector</option>
                            <!---->
                            <option value="Wheeled Mobile Robotics - Robo War  & Robo Maze Robot">Wheeled Mobile Robotics - Robo War  & Robo Maze Robot</option>
                            <option value="Wheeled Mobile Robotics - Robo Soccer Robot">Wheeled Mobile Robotics - Robo Soccer Robot</option>
                            <option value="Wheeled Mobile Robotics -  Robo Race Robot">Wheeled Mobile Robotics -  Robo Race Robot</option>
                            <option value="Freelance CAD Design & 3D Modelling">Freelance CAD Design & 3D Modelling</option>
                            <option value="COPTOTHON - 2K24">COPTOTHON - 2K24</option>
                            <option value="Structural Light weight Concrete Challenge Contest">Structural Light weight Concrete Challenge Contest</option>
                            <option value="Current Environmental Challenges towards Sustainability">Current Environmental Challenges towards Sustainability</option>
                            <!---->
                            <option value="REGALIA">REGALIA</option>
                            <option value="PANOPLY">PANOPLY</option>
                            <option value="MASQUERADE">MASQUERADE</option>
                            <option value="Pantomimist">Pantomimist</option>
                            <option value="PALATE PALOOZA Cooking Competition ">PALATE PALOOZA Cooking Competition </option>
                            <option value="FLAVOUR FIESTA Mocktail Competition ">FLAVOUR FIESTA Mocktail Competition </option>
                            <option value="WINTER WONDER Towel Art">WINTER WONDER Towel Art</option>
                            <option value="Short Film Making Competition">Short Film Making Competition</option>
                            <option value="Photography Competition">Photography Competition</option>
                            <option value="Insta Reel Making">Insta Reel Making</option>
                            <option value="Advertisemnt Making">Advertisemnt Making</option>
                            <!---->
                            <option value="Codeathon">Codeathon</option>
                            <option value="Botathon">Botathon</option>
                            <option value="Makeathon">Makeathon</option>
                            <option value="Code test">Code test</option>
                            <option value="Solution Challenge - Google">Solution Challenge - Google</option>
                            <option value="Wonders of AI">Wonders of AI</option>
                            <option value="REPIT">REPIT</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="AR/VR challenge">AR/VR challenge</option>
                            <option value="SQL Knight">SQL Knight</option>
                            <option value="Hack Odyssey 24">Hack Odyssey 24</option>
                            <option value="Designthon">Designthon</option>
                            <option value="Ethical Hacking">Ethical Hacking</option>
                            <option value="Multimedia Contest">Multimedia Contest</option>
                            <option value="Debugging">Debugging</option>
                            <option value="Coding Ninja">Coding Ninja</option>
                            <option value="Logo design and Animation">Logo design and Animation</option>
                            <option value="GaMeister">GaMeister</option>
                            <option value="Programming puzzle hunt">Programming puzzle hunt</option>
                            <!---->
                            <option value="Architecture AI">Architecture AI</option>
                            <option value="Make IT">Make IT</option>
                            <option value="Overpass">Overpass</option>
                            <!---->
                            <option value="Art from crop Waste">Art from crop Waste</option>
                            <option value="Plan your Farm">Plan your Farm</option>
                            <option value="Floral Decoration">Floral Decoration</option>
                            <option value="Carve it ">Carve it</option>
                        </select>
                    </div>
                </div>
                <div id="button">
                    <input type="checkbox" name="" id="validateboxr5">
                    <input id="checkall" type="button" onclick="checkallregis5()" value="VALIDATE"/>
                    <input class="validated" type="button" value="VALIDATION SUCCESS"/>
                    <p>Click Here to Submit...</p>
                    <button>SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        function eventCountSelect(){
            const checkCount3 = document.getElementById('noofeventcount3').checked;
            const checkCount5 = document.getElementById('noofeventcount5').checked;

            //oOc open or close
            const oOcregcount3 =document.getElementById('registercount3')
            const oOcregcount5 =document.getElementById('registercount5')
            
            if(checkCount3){
                document.getElementById('noofeventcount5').style.display="none";
                document.getElementById('noofevent5content').style.display="none";
                oOcregcount5.style.display="none";
                oOcregcount3.style.display="block";
            }
            else if(checkCount5){
                document.getElementById('noofeventcount3').style.display="none";
                document.getElementById('noofevent3content').style.display="none";
                oOcregcount3.style.display="none";
                oOcregcount5.style.display="block";
            }
        }


        //event selection dropdowns registercount3
        function getselectvalue(se1r3){
            if(se1r3!=""){
                $("#se2r3 option[value='"+se1r3+"']").hide();
                $("#se2r3 option[value!='"+se1r3+"']").show();
                $("#se3r3 option[value='"+se1r3+"']").hide();
                $("#se3r3 option[value!='"+se1r3+"']").show();
                $("#se5r3 option[value='"+se1r3+"']").hide();
                $("#se5r3 option[value!='"+se1r3+"']").show();
            }
        }
        function getselectvaluetwo(se2r3){
            if(se2r3!=""){
                $("#se3r3 option[value='"+se2r3+"']").hide();
                $("#se3r3 option[value!='"+se2r3+"']").show();
                $("#se5r3 option[value='"+se2r3+"']").hide();
                $("#se5r3 option[value!='"+se2r3+"']").show();
            }
        }

        //event selection dropdowns registercount5
        function getselectvalue(se1r5){
            if(se1r5!=""){
                $("#se2r5 option[value='"+se1r5+"']").hide();
                $("#se2r5 option[value!='"+se1r5+"']").show();
                $("#se3r5 option[value='"+se1r5+"']").hide();
                $("#se3r5 option[value!='"+se1r5+"']").show();
                $("#se5r5 option[value='"+se1r5+"']").hide();
                $("#se5r5 option[value!='"+se1r5+"']").show();
            }
        }
        function getselectvaluetwo(se2r5){
            if(se2r5!=""){
                $("#se3r5 option[value='"+se2r5+"']").hide();
                $("#se3r5 option[value!='"+se2r5+"']").show();
                $("#se5r5 option[value='"+se2r5+"']").hide();
                $("#se5r5 option[value!='"+se2r5+"']").show();
            }
        }
        function getselectvaluetwo(se3r5){
            if(se3r5!=""){
                $("#se5r5 option[value='"+se2r5+"']").hide();
                $("#se5r5 option[value!='"+se2r5+"']").show();
            }
        }

        //check all not equal in registercount3
        function checkallregis3(){
            var sev1 =document.getElementById('se1r3');
            var sev2 =document.getElementById('se2r3');
            var sev3 =document.getElementById('se3r3');
            var tick =document.getElementById('validateboxr3')
            var closeeventslection =document.getElementById('closeeventselectionr3')
            if((sev1.value == sev2.value) || (sev1.value==sev3.value) || (sev2.value==sev3.value)){
                alert("Don't Select the same Events")
            }
            else{
                alert("Your Entered Details are Validated Sucessfully... Click OK and then SUBMIT THIS FORM!")
                tick.checked = true;
                closeeventslection.checked =true;
            }
        }

        //check all not equal in registercount5
        function checkallregis5(){
            var sev1 =document.getElementById('se1r5');
            var sev2 =document.getElementById('se2r5');
            var sev3 =document.getElementById('se3r5');
            var sev4 =document.getElementById('se4r5');
            var sev5 =document.getElementById('se5r5');
            var tick =document.getElementById('validateboxr5')
            var closeeventslection =document.getElementById('closeeventselectionr5')
            if((sev1.value == sev2.value) || (sev1.value==sev3.value) || (sev1.value==sev4.value) || (sev1.value==sev5.value) || (sev2.value==sev3.value)|| (sev2.value==sev4.value) || (sev2.value==sev5.value)|| (sev3.value==sev4.value) || (sev3.value==sev5.value)|| (sev4.value==sev5.value)){
                alert("Don't Select the same Events")
            }
            else{
                alert("Your Entered Details are Validated Sucessfully... Click OK and then SUBMIT THIS FORM!")
                tick.checked = true;
                closeeventslection.checked =true;
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
</body>
</html>