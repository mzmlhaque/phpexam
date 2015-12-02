<?php
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
$sql="SELECT * FROM settings WHERE id=1";
$data = $dbcon->query($sql);
$row = $data->fetch(PDO::FETCH_ASSOC);
session_start();
$_SESSION['companyName']= $row['companyName'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CodersTrust- php Examination</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/5379a5938fa1ea4e1cba8034/537efd4a7b58dcd03527229e_favicon.ico">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,900,900italic,400italic,700,300italic,300' rel='stylesheet' type='text/css'>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script src="js/bootstrap.min.js"></script>
    <script src=js/main.js></script>
</head>
<body>
<section id="header">
    <div class="container-fluid">
        <div class="row" style="padding: 20px;background: #204d74;color: orange;">
                <h2 class="text-center">
                    <?php
                    echo $_SESSION['companyName'];
                    ?>
                </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav id="navbar">
                    <ul class="list-inline" style="padding: 15px;" id="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:void (0)" onclick="ajax_request('about.php')">About</a></li>
                        <li><a href="javascript:void (0)" onclick="ajax_request('contact.php')">contact</a></li>
                        <?php
                            if(isset($_SESSION['e_id'])){
                                echo ' <li><a href="logout.php">logout</a></li>';
                            }else{
                                //echo ' <li><a href="login.php">login</a></li>';
                                echo ' <li><a href="signup.php">Sign UP</a></li>';
                                echo ' <li><a href="javascript:void (0)" onclick="ajax_request(\'login.php\')">login</a></li>';
                            }
                        ?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<div id="login">
    <div class="container">
        <div class="col-sm-8">
            <h3 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dignissimos enim ipsa maiores necessitatibus non quod tempora! Culpa cumque et minus totam? Alias aliquam aliquid aspernatur aut blanditiis commodi cumque eius eligendi esse et eum eveniet exercitationem facilis fugit hic illum ipsam iste modi nulla possimus quae quas quisquam reiciendis, repellendus sequi veritatis voluptates. Accusantium blanditiis commodi dignissimos itaque praesentium! Assumenda atque consectetur dolorem, earum eligendi eos et explicabo hic magni maiores minima nostrum quam qui recusandae, ullam velit voluptates. Consectetur eaque explicabo iure nam quod? Animi cum deleniti doloribus facere fugiat fugit molestias nisi nostrum nulla optio quis, quisquam, quod repellat repellendus reprehenderit sed similique sunt suscipit tenetur unde veniam vero vitae voluptas voluptates, voluptatibus? Error inventore nam non qui repellendus sed voluptatem voluptatibus! Distinctio ducimus ea enim esse necessitatibus quidem tenetur vitae. Eaque facilis illo itaque labore numquam quasi totam voluptate. At atque, eos illum ipsa labore numquam officia omnis perspiciatis provident ratione tempora voluptatem. Accusamus adipisci asperiores atque blanditiis corporis deleniti doloremque ducimus eius et expedita harum impedit ipsam natus, necessitatibus nihil odio omnis placeat quibusdam quidem repudiandae similique soluta veritatis vitae! Aut beatae, dignissimos dolorum eligendi harum impedit minima modi neque nostrum odit porro quam veritatis.</p>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque corporis culpa dolorem fugiat perferendis quae ratione rerum voluptate! A corporis doloremque hic non placeat quaerat quis totam? Adipisci blanditiis dicta dolor ducimus, eligendi eum eveniet facere facilis fugiat ipsa ipsam laboriosam, minus modi nam neque optio pariatur sequi temporibus ut.</p>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores earum inventore minima veniam, voluptates voluptatibus. Iusto mollitia quibusdam quos.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci distinctio eveniet illo minus modi nemo officiis quis quo sunt. Amet dolore eaque exercitationem facere libero, nam officia rerum tempora voluptates?</p>
        </div>
        <div class="col-sm-4">
            <div class="news-feed">
                <div class="news-tag">
                    <h3 class="text-primary">Latest News</h3>
                </div>
                <MARQUEE direction="up" behavior="scroll" height="300px">
                    <ul class="list-unstyled">
                        <?php
                        $dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
                        $sql="SELECT * FROM settings";
                        $data = $dbcon->query($sql);
                        while($row = $data->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <li><a href=""><?php echo $row['latestNews']?></a></li>

                        <?php
                        }
                        ?>
                    </ul>
                </MARQUEE>
            </div>
        </div>
    </div>
</div>
<section id="wrapper">


</section>
<section id="footer">
    <div class="container-fluid">
        <p class="copyright text-center">&copy; All right reserved- 2015</p>
    </div>
</section>
<script>
    $(function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });

</script>
</body>
</html>