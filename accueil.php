    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>Accueil</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">


        <!-- RSS : CSS -->
        <link rel="stylesheet" href="css/rss.css" type="text/css"> 

        <!-- Perso : CSS -->
        <link rel="stylesheet" href="css/perso.css" type="text/css">


        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">
    </head>
    <body  style="background-image: url('img/fond_ecran.jpg'); background-repeat: repeat; background-size: 100% ">
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: white">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://mail.google.com/mail/u/0/?tab=mm#inbox" target="_blank"><img src="img/gmail.png" style="height: 25px;"></a></li>
                        <li><a href="https://drive.google.com/drive/my-drive" target="_blank"><img src="img/drive.png" style="height: 25px;"></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- services -->
        <div class="service">
            <!-- kinepolis -->
            <div class="titre">
                <h1>Coin services</h1>
            </div>
            <div class="contenu">
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-long-arrow-right" style="color: red" aria-hidden="true"></i>
                        <a href="https://kinepolis.fr/cinemas/kinepolis-st-julien-les-metz?date=2016-05-21&theater=40&theater_name=kinepolis-st-julien-l%C3%A8s-metz#showtimes" target="_blank">Kinepolis - St Julien-lès-Metz</a>
                    </li>
                </ul>
            </div>
        </div>



        <!-- Champ de recherche Google -->
        <center style="margin-top: -3%; width: 50%; margin-left: 25%">
            <form method=GET action="http://www.google.fr/search" target="_blank">
                <table bgcolor="#FFFFFF">
                    <tr>
                        <td><a href="http://www.google.fr"><img SRC="http://www.google.com/logos/Logo_40wht.gif" border="0" ALT="Google" align="absmiddle"></img></a>
                            <INPUT TYPE=text name=q size=31 maxlength=255 value=""/>
                            <INPUT TYPE=hidden name=hl value=fr/>
                            <INPUT type=submit name=btnG VALUE="Recherche Google"/>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
        <!-- Google --> 



            <div class="container"  style="margin-top: 50px;">
                <?php include'rss.php'; ?>
            </div>
    </body>
    </html>