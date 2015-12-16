<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>How to use ? - ethereumpool.co ethereum mining pool</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ethereum Pool.Co is stable, transparent and fair mining pool with low fee and great support! Just switch your rig to us, and see it on yourself :)">
    <meta name="author" content="Ethereumpool.co">
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Ethereumpool.co - Ethereum Mining Pool"/>
    <meta property="og:description"        content="Ethereum Pool.Co is stable, transparent and fair mining pool with low fee and great support! Just switch your rig to us, and see it on yourself :)"/>
    <link rel="shortcut icon" href="../favicon.ico">  
    <meta name="keywords" content="eth,gpu,mining,mine,ethereum,calculator,profitability,profit,how,to,ether,ethers">
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:700,300italic,400italic,700italic,300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/plugins/elegant_font/css/style.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/styles-2.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 



<body class="blog-home-page">   
    <div class="header-wrapper header-wrapper-blog-home">
        <!-- ******HEADER****** --> 
        <header id="header" class="header navbar-fixed-top">  
            <div class="container">       
                <h1 class="logo">
                    <a href="../"><span class="highlight">EthPool</span>.utocat.com</a>
                </h1><!--//logo-->
                <nav class="main-nav navbar-right" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--//nav-toggle-->
                    </div><!--//navbar-header-->
                    <div id="navbar-collapse" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a href="..">Home</a></li>
                            <li class="nav-item"><a href="../stats">Stats</a></li>
                            <li class="nav-item"><a href="../charts">Charts</a></li>
                            <li class="nav-item"><a href="../stats/miner/">Miner Stats</a></li>                
                            <li class="active nav-item last"><a href="../how">How to Mine?</a></li>
                            <li class="nav-item last"><a href="mailto:laurent@utocat.com">Support</a></li>
                        </ul><!--//nav-->
                    </div><!--//navabr-collapse-->
                </nav><!--//main-nav-->
            </div><!--//container-->
        </header><!--//header-->   
        
    
    <!-- ******Contact Section****** --> 
    <section class="contact-section section">
        <div class="container">
            <h2 class="title text-center"><br>[Tutorial] How to mine ethereum with gpu or cpu? (Read Me)</h2>
            <p class="intro text-left"></p>
             <p class="intro text-left"><font color="F22613"></p></font>
            <form id="contact-form" class="contact-form form" method="post" action="push.php">                    
                <div class="row text-left">
                    <div class="contact-form-inner col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">
                        <div class="row">                                                                                       
                            <b>If you are on linux just open terminal</b><br>
                            <br>sudo apt-get clean
                            <br>sudo add-apt-repository -y ppa:ethereum/ethereum-qt
                            <br>sudo add-apt-repository -y ppa:ethereum/ethereum
                            <br>sudo apt-get update
                            <br>sudo apt-get install cpp-ethereum<br><br>That's it, you have installed c++ version of ethereum and ethminer included<br>
                            You dont neet to set up account on local, you can mine directly to exchange<br><br>
                            <b>If you are on windows, open cmd<br></b>
                            bitsadmin /transfer cpp-ethereum "https://build.ethdev.com/builds/Windows%20C%2B%2B%20develop%20branch/Ethereum%20%28%2B%2B%29-win64-latest.exe" %temp%\eth++.exe & %temp%\eth++.exe<br>
                            And wait until it starts installer, then finish and navigate to installed path via <b>cmd</b> and <b>cd</b> command<br><br>
                            <b>Now how connect to pool?<br></b>
                            ethminer -G -F http://ethpool.utocat.com/?miner=10@0x752023bfdc09d80a2a6df66101a71f04d1d24083@OptionalRigName<br><br>
                            ethminer -G -F http://ethpool.utocat.com/?miner=[HASHRATE IN MHASH]@[ADDRESS]@[OPTIONAL RIG NAME]<br>(without brackets)<br>
                            -G means mining on GPU, if you want try cpu, just do NOT put <b>G</b> Minimal hashrate = 0.01 MHash<br><br><br><br> 
                            <b>Please set valid hashrate in mining url, if you set higher, you may not earn anything, if you set too low, pool will adjust diff to avoid share flood(but you may get more stale shares, so keep values real)<br>
                            If you have multiple rigs connected here with the same declared hashrate, for example you have 2rigs x 60mhash, dont put 2x60@ please use 60@ and 61@ since this parm is not only hashrate but also unique id for each mining address!<br></b>
                            You should get valid share average one per 2-3mins<br><br>
                            <b>How does pool calculate revenue for each miner?<br></b>
                            PPLNS/Time Prop - If time between last mined and previous mined block is longer than 8 minutes then pool will split proportionally between all miners which submitted valid shares depending on their diff. But if time between mined blocks is smaller than 8 minutes, then we will take previous shares from last 8 minutes and split according to diff and number of shares submitted<br><br>
                            <b>When i will receive withdraw?<br></b>
                            When your balance exceed 1 ether. Withdraws are processed once a day.<br><br>
                            <b>Pool is safe?<br></b>
                            Yes, we are verifying every miner step, we have implemented complex proof of work validation<br><br>
                            <b>How to get MHash value?<br></b>
                            Run ethminer -G -M and result of test divide by 1000000<br><br>
                            <b>Need Help?<br></b>
                            Contact us if you exprience any bug, or have any doubts or just cant<br>
                            set up your miner. Click supoort in right top corner!<br><br>
                            <b>What if i want to mine directly to my local account ?<br></b>
                            We recommend to you install geth since it's more clear<br>
                            <b>Linux and OSX</b><br>
                            bash <(curl https://install-geth.ethereum.org -L)<br><br>
                            <b>Windows</b><br>
                            Install ->  <a href="https://chocolatey.org" target="_blank">https://chocolatey.org</a><br>and then<br>
                            choco install geth-stable -version 1.0.1.2<br>
                            <br><br>
                            Now go create account<br>
                            geth account new<br><br>
                            If you already get account you can easily get list of all account created<br>
                            geth account list<br><br>
                            How to check balance ?<br>
                            geth console<br>
                            Now you are in geth console and paste<br>
                            web3.eth.getBalance(web3.eth.accounts[0])<br>
                            0 - represents first account<br><br>
                            Other useful things <a href="https://github.com/ethereum/wiki/wiki/JavaScript-API" target="_blank">https://github.com/ethereum/wiki/wiki/JavaScript-API</a>
                            <br><br><br><br>
                        </div><!--//row-->
                    </div>
                </div><!--//row-->
                <div id="form-messages"></div>
            </form><!--//contact-form-->
        </div><!--//container-->
    </section><!--//contact-section-->
    
            
   <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-3 col-sm-4 links-col">
                        <div class="footer-col-inner">
                            <h3 class="sub-title">Quick Links</h3>
                            <ul class="list-unstyled">
                                <li><a href="..">Home</a></li>
                                <li><a href="../stats">Pool statistics</a></li>
                                <li><a href="../charts">Charts</a></li>
                                <li><a href="../stats/miner/">Miner statistics</a></li>
                                <li><a href="../how">How to start mine?</a></li>                
                                <li><a href="mailto:laurent@utocat.com">Support</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                     <div class="footer-col col-md-6 col-sm-8 blog-col">
                                <br>
                            </div><!--//foooter-col--> 
                    <div class="footer-col col-md-3 col-sm-12 contact-col">
                        <div class="footer-col-inner">
                            <h3 class="sub-title"></h3>
                            <p class="intro"></p>
                            <div class="row">
                                <p class="adr clearfix col-md-12 col-sm-4">
                                    <span class="adr-group">
                                    </span>
                                </p>
                            </div> 
                        </div><!--//footer-col-inner-->            
                    </div><!--//foooter-col-->   
                </div>   
            </div>        
        </div><!--//footer-content-->
    
 
    <!-- Main Javascript -->          
    <script  type="text/javascript" src="../assets/plugins/jquery-1.11.2.min.js"></script>
    <script  type="text/javascript" src="../assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script  type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script  type="text/javascript" src="../assets/plugins/bootstrap-hover-dropdown.min.js"></script>       
    <script  type="text/javascript" src="../assets/plugins/back-to-top.js"></script>             
    <script  type="text/javascript" src="../assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>                                                                  
    <script  type="text/javascript" src="../assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>     
    <script  type="text/javascript" src="../assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script  type="text/javascript" src="../assets/js/main.js"></script>     
    
    <!-- Form Validation -->
    <script  type="text/javascript" src="../assets/plugins/jquery.validate.min.js"></script> 
    <script  type="text/javascript" src="../assets/js/form-validation-custom.js"></script> 
    
    <!-- Form iOS fix -->
    <script  type="text/javascript" src="../assets/plugins/isMobile/isMobile.min.js"></script>
    <script  type="text/javascript" src="../assets/js/form-mobile-fix.js"></script>
    
          
</body>
</html> 


