<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>JMR</title>
  <meta name="description" content="Portfolio">
  <meta name="author" content="Roco, John Mark S.">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
  <!--link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"-->
  <link rel='shortcut icon' href='assets/img/favicon.ico' type='image/x-icon'/ >
</head>

<style>
</style>

<body data-spy="scroll" data-target="#my-navbar" data-offset="50">
<?php include('_navigation.php') ?>
      <div class="jumbotron">
        <div class="container text-center">
          <marquee><!--h2 class="welcome">Welcome!</h2-->
            <img src="assets/img/mario.png" alt="..." width="50" height="50" class="img-circle welcome"/>
            <?php if(isset($_GET['msg'])){
            echo $_GET['msg'];} ?>
          </marquee>
        </div>
      </div>

  <div class="container text-center">
    <section>
      <div class="page-header" id="whoiam">
        <h1>Who I am?<br><small>Who I am as an Information Technology student.</small></h1>
      </div>
      <div class="row">
      <a href="#" onmouseover="SwapBack()" onmouseout="SwapOut()">
      <img id="dpimg" name="dpimg" src="assets/img/dp_img.jpg" alt="..." width="140" height="140" class="img-circle"/>
      </a>
        <div class="col-sm-12">
          <p>Hi! I am <b>John Mark Roco</b> the creator of this site<br>
          currently studying at <b>Polytechnic University of the Philippines Quezon City Branch</b><br> 
          taking my Bachelor of Science in Information Technology. I find this course interesting especially<br>
          in computer programming because creating online and offline applications are difficult you really need to do<br>
          alot of research, debugging, and testing to build an application. I am still a newbie in this field<br>
          I dont have yet any expertise but I am dreaming to become a Programmer or Developer<br>
          someday and I'm hoping to find a good company where<br>
          I can improve and develop my skills.</p>
        </div>  
      </div>
    </section>
  </div>
  <div class="container text-center">
    <section>
      <div class="page-header" id="education">
        <h1>Education<br><small>Where I educated my self.</small></h1>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-body">
            <a href="http://pup.edu.ph" id="pup"><img src="assets/img/pup_img.png" alt="..." width="180" height="180" class="img-circle"></a>
            </div>
            <div class="panel-footer">
            <p>Polytechnic University of the Philippines Quezon City Branch</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-body">
            <img src="assets/img/blank.svg" alt="..." width="180" height="180" class="img-circle">
            </div>
            <div class="panel-footer">
            <p>Commonwealth High School<br> Quezon City</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-body">
            <img src="assets/img/blank.svg" alt="..." width="180" height="180" class="img-circle">
            </div>
            <div class="panel-footer">
            <p>Commonwealth Elementary School<br> Quezon City</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <section>
      <div class="page-header text-center" id="skills">
        <h1>Skills<br><small>My skills as a beginner.</small></h1>
      </div>
      <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8">
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-danger active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
              <p>JAVA Servlet(JSTL)</p>
              <span class="sr-only">35% Complete</span>
              </div>
            </div>
            <!--div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
              <p>Android Java</p>
              <span class="sr-only">45% Complete</span>
              </div>
            </div-->
            <div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
              <p>PHP</p>
              <span class="sr-only">45% Complete</span>
              </div>
            </div>
            <!--div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-info active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
              <p>C#.Net</p>
              <span class="sr-only">35% Complete</span>
              </div>
            </div-->
            <!--div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-warning active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
              <p>C</h3>
              <span class="sr-only">20% Complete</span>
              </div>
            </div-->
            <!--div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-warning active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
              <p>Python</p>
              <span class="sr-only">35% Complete</span>
              </div>
            </div-->
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-danger active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
              <p>Javascript</p>
              <span class="sr-only">25% Complete</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-info active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
              <p>Css</p>
              <span class="sr-only">30% Complete</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
              <p>Html</p>
              <span class="sr-only">55% Complete</span>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
          </div>
      </div>
    </section>
  </div>
  <div class="container text-center">
    <section>
      <div class="page-header" id="quote">
        <h1>Quotes<br><small>Some of my favorite quotes.</small></h1>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <blockquote>
            <p><em>"What I cannot build, I do not understand."</em></p>
            <footer>Richard Feynman</footer>
          </blockquote>
        </div><div class="col-lg-4">
          <blockquote>
            <p><em>"First, solve the problem. Then, write the code."</em></p>
            <footer>John Johnson</footer>
          </blockquote>
        </div><div class="col-lg-4">
          <blockquote>
            <p><em>"You're still a newbie because you choose to become a newbie."</em></p>
            <footer>-unknown</footer>
          </blockquote>
        </div>
      </div>
    </section>
  </div>
  <div class="container text-center">
    <section>
      <div class="page-header" id="resume">
        <h1>Resume<br><small>My detailed resume.</small></h1>
      </div>
      <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
          <a href="#!" id="download" title="Resume" class="btn btn-warning" role="button">Download Resume</a>
          <p><em>Download it here.</em></p>
        </div>
        <div class="col-lg-4">
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <section>
      <div class="page-header text-center" id="contact">
        <h1>Contact Me<br><small>Contact me for more.</small></h1>
        
      </div>
      <div class="row">
        <div class="col-lg-4">
          <h5><i>Send Message or Contact me below.</i></h5>
          <address>
          <strong>National Capital Region, Philippines</strong><br>
          137, Happyland St.<br>
          Carmencita Ext.
          Do&ntilde;a Carmen Subd.<br>
          Barangay Commonwealth<br>
          Quezon, City Metro Manila<br>
          <span class="glyphicon glyphicon-earphone"></span> (63+)9464652197
          </address>
          <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" 
              src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJP97XsXC6lzMRX-JTGrdiSb8&key=AIzaSyByPnaWFkH6GH8p8SMkcYsj4jOykuAEmnQ" 
              allowfullscreen>
          </iframe>
          </div>
        </div>
        <div class="col-lg-8">
          
          <ul id="tabs" class="nav nav-tabs tab-right" data-tabs="tabs">
                  <li  class="active"><a href="#EMAIL" data-toggle="tab">Email</a></li><!-- remove data-toggle="tab" to disable -->
                  <li><a href="#SMS" data-toggle="tab">Sms</a></li>
              </ul>
        <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active" id="EMAIL">
                  <h1><small>Email me!</small></h1>
                   <form action="contact_email.php" method="POST" class="form-horizontal">
            <fieldset>
            <div class="form-group">
              <label class="col-lg-2 control-label">Company</label>
              <div class="col-lg-10">
              <input type="text" id="company" name="company" maxlength="30" class="form-control" placeholder="Company Name" required/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
              <input type="email" id="email" name="email" maxlength="30" class="form-control" placeholder="youremail@example.com" required/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Your Website</label>
              <div class="col-lg-10">
              <input type="text" id="webiste" name="website" maxlength="30" class="form-control" placeholder="https://yourwebsite.com" required/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Message</label>
              <div class="col-lg-10">
              <textarea id="message" name="message" maxlength="100" class="form-control" cols="20" rows="10" placeholder="Enter your message here and other details for only 100 characters."></textarea>
              </div>
            </div>
            <div class="form-group">
               <div class="col-lg-10 col-lg-offset-2">
               <div id="captcha-1"></div>
               </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
              <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit"/>
              <input type="reset" class="btn btn-default" value="Clear"/>
              </div>
            </div>
            </fieldset>
            <div class="col-lg-10 col-lg-offset-2">
              <em>Note: Do not flood my email thanks!</em>
            </div>
          </form>
                </div>
                <div class="tab-pane" id="SMS">
                    <h1><small>Text me!</small></h1>
                   <form action="contact_sms.php" method="POST" class="form-horizontal">
            <fieldset>
            <div class="form-group">
              <label class="col-lg-2 control-label">Company</label>
              <div class="col-lg-10">
              <input type="text" id="company" name="company" maxlength="30" class="form-control" placeholder="Company Name" required/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
              <input type="email" id="email" maxlength="30" name="email" class="form-control" placeholder="youremail@example.com" required/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Message</label>
              <div class="col-lg-10">
              <textarea id="message" name="message" maxlength="50" class="form-control" cols="20" rows="10" placeholder="Enter your message here and other details for only 50 characters."></textarea>
              </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <div id="captcha-2"></div>
                </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
              <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit"/>
              <input type="reset" class="btn btn-default" value="Clear"/>
              </div>
            </div>            
            </fieldset>
            <div class="col-lg-10 col-lg-offset-2">
              <em>Note: I have only 10 text perday so please don't overuse it! Special thanks itexmo.com.</em>
            </div>
          </form>
                </div>
            </div>
        </div>
      </div>
    </section>
  </div>
  <?php include('_footer.php') ?>
  <script src="https://www.google.com/recaptcha/api.js?onload=googleCaptcha&render=explicit" async defer></script>
  <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/custom.js"></script>
  <script type="text/javascript" src="assets/js/flipping.js"></script>
  <script type="text/javascript" src="assets/js/googlecaptcha.js"></script>
</body> 
</html>