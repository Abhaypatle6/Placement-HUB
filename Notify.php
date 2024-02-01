<!DOCTYPE html>
<html>
<head>
  <title>Landing Page</title>
  <!-- <link rel="stylesheet" type="text/css" href="notify.css"> -->
</head>
<style>
        .AppFormTableWithOutBorder{
            width: 20%;
            padding: 0 3px;
            font-size: 14px;
            letter-spacing: 0.08em;
            /* font-weight: bold; */
            border: 0px solid #c8c8c8;
            background-color: #FFFFFF;
            color: #000000;
            border-collapse: collapse;
            border-width: 0vh;
            line-height: 3vh;
        }
        
        .panel-head {
            margin: 0px;
            padding: 10px 15px;
            display: block;
            position: relative;
            text-align: center;
            width: 30vw;
            font-weight: 700;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            align-items: center;
            /* background-image: url("head_background.jpg"); */
            background-color: #164B60;
            color: #EEEEEE;
            /* border-top-left-radius: 10px; */
            /* border-top-right-radius: 10px; */
            box-shadow: 0px 0px 3px #9a9a9a;
        }
        
        * {
            margin: 0px;
            padding: 0px;
        }
        
        .blink {
            margin-left: 1vw;
            font-size: larger;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 600;
            animation: blink-animation 1s steps(5, start) infinite;
            -webkit-animation: blink-animation 1s steps(5, start) infinite;
          }
          @keyframes blink-animation {
            to {
              visibility: hidden;
            }
          }
          @-webkit-keyframes blink-animation {
            to {
              visibility: hidden;
            }
        }
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url("notification.jpg");
    /* background-color: #EEEEEE; */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
  
  header {
    color: #daba30;
    padding: 20px;
    text-align: center;
  }
  nav .img{
    margin: 15px;
    padding: 20px;
    height: 10px;
    width: auto;
    max-width: 23px;
  }
  
  nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  
  nav ul li {
    display: inline-flex;
    margin-right: 10px;
  }
  
  nav ul li a {
    color: #687583;
    text-decoration: none;
    padding: 10px;
    border-radius: 10px;
    transition: all 0.3s ease;
  }
  
  nav ul li a:hover {
    background-color: #27a868;
  }
  
  .leftSection {
    font-size: 2rem;

}
.leftSection .buttons{
    padding: 25px 0;
    color: #fff;
}
.leftSection .btn {
    padding: 10px;
    background: rgb(2, 44, 18);
    color: rgb(145, 212, 195);
    border: 2px solid rgb(238, 239, 240);
    border-radius: 10px;
    font-size: 15px;
    cursor: pointer;

}
  
  h2 {
    margin-bottom: 20px;
    /* color: #333; */
  }
  
  #search-container {
    margin-bottom: 20px;
  }
  
  #search-input {
    padding: 10px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  #search-button {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  #results-list {
    list-style-type: none;
    padding: 0;
  }
  
  #post-container {
    margin-bottom: 20px;
  }
  
  #post-text {
    width: 100%;
    height: 120px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  #post-button {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  
  /* Additional styles for an attractive landing page */
  h1 {
    margin-top: 0;
    font-size: 32px;
  }
  
  nav {
    margin-top: 20px;
  }
  
  a {
    transition: all 0.3s ease;
  }
  
  a:hover {
    background-color: #ff7f50;
  }
  
  button {
    cursor: pointer;
  }
  
  /* Color variations */
  #search-button:hover,
  #post-button:hover {
    background-color: #ff7f50;
  }
  

  .back:hover{
    background-color: #fff !important;
  }

  p{
    margin: 5px;
  }
  
    </style>
<body>
  <header>
    
    <nav>
      <div>
      <img src="placement.png" alt="" style='width : 350px; margin-top: -5vh;'/>
      <h2 style='margin-top: -5vh;'>Welcome to the Search and Notification Page</h2>
</div>
        <!-- <li><a href="#search">Search</a></li> -->
        <!-- <li><a href="#post">Post</a></li> -->
    </nav>
    <div class="leftSection">
      <div style='margin-bottom: 2vh;'>Latest Updates</div>
      <center>
      <table class="AppFormTableWithOutBorder">
            <tbody><tr>
                <td style="width: 33%;">
                    <div class="row">
                        <div class="col">
                            <span id="rightContainer_ContentTable2_lblPanel3" class="panel-head">Notifications</span>
                            <div class="green-box-area">
                                <div style="width: 100%; height: 355px;">
                                    <marquee id="rightContainer_ContentTable2_panel3" align="justify" direction="up" onmouseout="this.start()" height="350px" onmouseover="this.stop()" scrollamount="1" scrolldelay="60">
                                        <p align="justify"><a target="_blank" href="https://admissions20.blob.core.windows.net/mhtcet2023/dtefiles/files/93.pdf?did=12387"><lang key="D12387">Press Note regarding MHT-CET 2023 Result</lang></a><span class="blink">NEW</span></p>
                                        <p align="justify"><a target="_blank" href="https://admissions20.blob.core.windows.net/mhtcet2023/dtefiles/files/90.pdf?did=12386"><lang key="D12386">MHT-CET-2023: Document on Normalization</lang></a><span class="blink">NEW</span></p>
                                        <p align="justify"><a target="_blank" href="https://admissions20.blob.core.windows.net/mhtcet2023/dtefiles/files/91.pdf?did=12385"><lang key="D12385">Notice for Objection Clarification 2023 (MHT-CET-2023)</lang></a><span class="blink">NEW</span>
                                        <p align="justify"><a target="_blank" href="https://admissions20.blob.core.windows.net/mhtcet2023/dtefiles/files/87.pdf?did=12381"><lang key="D12381">MHT CET 2023:  Grievances and Result Schedule</lang></a><span class="blink">NEW</span></p>
                                        <p align="justify"><a target="_blank" href="https://admissions20.blob.core.windows.net/mhtcet2023/dtefiles/files/86.pdf?did=12378"><lang key="D12378">MHT CET 2023: Important Notice regarding Examination.(Marathi)</lang></a><span class="blink">NEW</span></p>
                                        <p align="right"><a target="_blank"   href="../CMS/ListOfLinks?gid=3">More..</a></p>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>

            </tr>
        </tbody></table></center>
        <div class="buttons">
      <button class="btn"><a href="https://www.gcoea.ac.in/?page=NjE=&name=T&P%20-%20Placement%20Report"><b>GCOEA Placement Report </b></button></a><br>
          <button class="btn"><a href="loginsuccessful.php">Back To Home Page</a></button>
      </div>
  </div>
  </header>
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!-- Setup and start animation! -->
    <script>
        var typed = new Typed('#element', {
            strings: ['AMAZON','COGNIZENT', 'ACCENTURE', 'CAPEGEMINI','TCS', 'AMAZON'],
            typeSpeed: 100,
        });
    </script>
</script>
</body>
</html>