<?php echo $this->Html->css('home.css'); ?>
<?php echo $this->Html->script('Scrollspy.js'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><?php echo $this->Html->image('logo.png',array('class'=>'logo')); ?></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">Overview</a></li>
          <li><a href="#section3">How It Works</a></li>
          <!--<li><a href="#section4">Call Us</a></li>-->
          <li><a href="#section5">Create WebFone</a></li>
          <li><a href="#section6">Log in</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="section1">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
       <?php echo $this->Html->image('banner1.jpg',array('class'=>'carousel')); ?>
      </div>

      <div class="item">
        <?php echo $this->Html->image('banner1.jpg',array('class'=>'carousel')); ?>
      </div>
    
      <div class="item">
        <?php echo $this->Html->image('banner1.jpg',array('class'=>'carousel')); ?>
      </div>
    </div>
  </div>
</div>



<div id="section2" class="container-fluid">
  <h1><strong>OVERVIEW</strong></h1>
  <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-sx-12">
    <p class="overview text-justify">
    <br>This is a demonstration to propagate the  technology about hash calling.   The system allows you to select a Name or Names and pair them to a mobile or  phone number. Once paired, the system generates a unique URL link that you can share to your customers, friends  & families as an alternative way for them to call you direct to your SIM or land line phone using their browser without the need to remember and dial your number.  Caller must have data connection to make this call.  The Called party does not need Data connectivity.  Calls will be made direct to the SIM or landline number in this demo.  visit https://hashcall.me</br>

    <br>You can pair as many names as you to want to your number.  Each one will have its unique URL call link based on your preferred name to easily remember you.  You can manage your numbers and names so you will always be in touch with your customers, friends and families with your Name link.</br>

    </br>Our Vision is make this service globally available in every device.  We will work with all the  Telcos to make this service commercially available to consumers and enterprises.  Please watch out for our announcement. Coming to your browser soon.</p>
  </div>

  <div class="video col-lg-6 col-md-6 col-sm-12">
    <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/smBiegdsNOI"></iframe>
    </div>
  </div>

  </div>
</div>



<div id="section3" class="container-fluid">
  <h1><strong>HOW IT WORKS</strong></h1>
  <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <div class="panel text-center">
          <div class="panel-heading">
          <h1>1</h1>
          </div>
          <div class="panel-body">
          <h4>Buy WebFone Links</h4>
          <?php echo $this->Html->image('buy.png',array('class'=>'how_it_works')); ?>
          </div>
          <div class="panel-footer">
          <h2><strong>BUY</strong></h2>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <div class="panel text-center">
          <div class="panel-heading">
          <h1>2</h1>
          </div>
          <div class="panel-body">
          <h4>Paste & Post on Social Media</h4>
          <?php echo $this->Html->image('paste.png',array('class'=>'how_it_works')); ?>
          </div>
          <div class="panel-footer">
          <h2><strong>PASTE</strong></h2>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <div class="panel text-center">
          <div class="panel-heading">
          <h1>3</h1>
          </div>
          <div class="panel-body">
          <h4>Caller Opens Your WebFone Link</h4>
          <?php echo $this->Html->image('open.png',array('class'=>'how_it_works')); ?>
          </div>
          <div class="panel-footer">
          <h2><strong>OPEN</strong></h2>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <div class="panel text-center">
          <div class="panel-heading">
          <h1>4</h1>
          </div>
          <div class="panel-body">
          <h4>Caller Talks To You</h4>
          <?php echo $this->Html->image('talk.png',array('class'=>'how_it_works')); ?>
          </div>
          <div class="panel-footer">
          <h2><strong>TALK</strong></h2>
          </div>
        </div>
      </div>

  </div>


</div>


<!--<div id="section4" class="container-fluid">
  <h1><strong>CALL US</strong></h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div> -->


  <div id="section5" class="container-fluid">
    <h1><strong>CREATE WebFone</strong></h1>
    <h5>We have two types of WebFone choose one to create</h5>
    <div class="row">

    <div align="center" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <div class="panel">
        <div class="panel-heading text-center create_webfone">
        <h2>INDIVIDUALS</h2>
        </div>
        <div class="panel-body create_webfone">
          <h4>Direct - WebFoneLink Direct To Your Mobile Number</h4>
          <?php echo $this->Html->link('Create Direct',array('controller'=>'Enterprises','action'=>'packages'),array('class'=>'btn btn-success btn-lg')) ?>
        </div>
      </div>
    </div>


    <div align="center" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <div class="panel">
        <div class="panel-heading create_webfone">
          <h2>ENTERPRICES</h2>
        </div>
        <div class="panel-body create_webfone">
          <h4>Direct - WebFoneLink Direct To Your Mobile Number</h4>
          <h4>Trunk - WebFoneLink To Your Pilot Number</h4>
          <div align="center"><?php echo $this->Html->link('Create Direct',array('controller'=>'Enterprises','action'=>'packages'),array('class'=>'btn btn-success btn-lg')) ?>
            <?php echo $this->Html->link('Create Trunk',array('controller'=>'Enterprises','action'=>'packages'),array('class'=>'btn btn-success btn-lg')) ?>
        </div>
      </div>
    </div>

  </div>
</div>
</body>

</html>
