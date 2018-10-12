<?php
 include ('config.php');
$lecture2 = $connexion-> prepare("SELECT * FROM arta_sql WHERE country_code like('N%')");
$lecture2->execute();

?>
</body>
</html>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
     body
        {
            background-color: #DDD;
            padding-top: 10px;
        }
        [class*="col-"]
        {
            margin-bottom: 20px;
        }
        img
        {
            width: 100%;
        }
        .well
        {
            background-color: #CCC;
            padding: 20px;
        }
        a:active, a:focus
        {
            outline: none;
        }
        [class*="nav navbar-nav"]
        {
            margin-left: 35px;
        }
        [class*="panel panel-primary"]
        {
            margin-top: 5%;
        }
    </style>
</head>
<body>
<div class="container">
    <?php include("menu.php"); ?>
    <div class="row">
        <section class="col-sm-12">
            <div class="panel panel-primary">
                <table class="table table-striped table-condensed">
                    <div class="panel-heading">
                        <h3 class="panel-title">Affichage tous les Etats qui commencent par N</h3>
                    </div>
                    <thead>
                    <tr>
                     
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Genre</th>
                        <th>Country_Code</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                  while ($affichage = $lecture2->fetch())
                    {
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($affichage['first_name']);?></td>
                            <td><?php echo htmlspecialchars($affichage['last_name']);?></td>
                            <td><?php echo htmlspecialchars($affichage['email']);?></td>
                            <td><?php echo htmlspecialchars($affichage['gender']);?></td>
                             <td><?php echo htmlspecialchars($affichage['country_code']);?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
