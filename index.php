<?php
/**
 * Created by PhpStorm.
 * User: Sangnv00452
 * Date: 3/17/14
 * Time: 9:53 AM
 */
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
//session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="libs/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="src/style.css">
    <script src="libs/js/jquery.js"></script>
    <!-- <link rel="stylesheet" href="libs/css/bootstrap.min.css" /> -->
    <!-- <link rel="stylesheet" href="src/css/main.css"> -->
    <!-- <link rel="stylesheet" href="src/webfontkit/customfont.css"> -->
   <!--  // <script src="libs/js/jquery-1.10.2.js"></script>
    // <script src="libs/js/bootstrap.min.js"></script>
    // <script src="libs/js/jquery.form.min.js"></script>
    // <script src="libs/js/jquery-migrate-1.2.1.js"></script> -->
    <script id="facebook-jssdk" async="" src="//connect.facebook.net/en_US/all.js#xfbml=1&appId=269918776508696"></script>
</head>

<body>
<!-- Load the Facebook JavaScript SDK -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId : '269918776508696', // App ID
            // channelUrl : 'https://kooky-crag-7236.herokuapp.com/channel.html',
            status : true, // check login status
            cookie : true, // enable cookies to allow the server to access
            xfbml : true // parse XFBML
        });
        FB.Canvas.setSize({
            width : 810,
            height : 800
        });
        FB.Canvas.setAutoGrow();
//        FB.Canvas.setSize({height:1200});
//        setTimeout(function(){
//
//            FB.Canvas.setAutoGrow(true);
//            console.log("a");
//        }, 500);

        FB.Event.subscribe('edge.create', function(response) {
            //top.location.href = pageLink;
//            $.ajax({
//                url:"server/action-router.php",
//                type : "POST",
//                data : {
//                    action : "user like app",
//                    page_id : pageId,
//                    user_id : userId
//                },success : function(response){
//                    top.location.href = pageLink;
//                }
//            });
        });
        FB.Event.subscribe('edge.remove', function(response){
//            alert("remove like");
//            alert("remove like");
//            console.log("remove like");
//            console.log("pageId");
//            console.log("userId");
//            $.ajax({
//                url:"server/action-router.php",
//                type : "POST",
//                data : {
//                    action : "user unlike",
//                    page_id : pageId,
//                    user_id : userId
//                },success :function(){
//                    top.location.href = pageLink;
//                }
//            });
        });
        FB.getLoginStatus(function(response) {
            // User authorized
            if (response.authResponse) {
                var accessToken = response.authResponse.accessToken;
            } else {
                // logic to facebook
                FB.login(function(response) {
                    if (response.authResponse) {

                    } else {

                    }
                }, {
                    'scope' : 'publish_stream'
                })
            }
        });
    };

    // Load the SDK Asynchronously
    ( function(d) {
        var js, id = 'facebook-jssdk';
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement('script');
        js.id = id;
        js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=269918776508696";
        d.getElementsByTagName('head')[0].appendChild(js);
    }(document));
</script>
<div id='main'  style="width: 810px;">
    <div style="position: relative;">
    <?php
    require_once ('libs/fb-php-sdk/facebook.php');

    // require_once("ActionHandler.php");
    // $handle = new ActionHandler();
   
    $app_id = 269918776508696;
    $app_secret = '99a9bc8d2d42d04cb4d578665430f0c4';
    $config = array('appId' => $app_id, 'secret' => $app_secret);
    $facebook = new Facebook($config);
    $user_id = $facebook -> getUser();

    $signed_request = $facebook -> getSignedRequest();
    $like_status = $signed_request["page"]["liked"] ? 1 : 0;
    $country = $signed_request["user"]["country"];
    $page_id = $signed_request["page"]["id"];
    $page_json = json_decode(file_get_contents("https://graph.facebook.com/$page_id"),true);
    $page_link = $page_json["link"]."/app_".$app_id;
    $page_link_json = json_encode($page_link);
//
//    echo "<script type='text/javascript'>pageLink = $page_link_json</script>";
//    echo "<script type='text/javascript'>userId = $user_id</script>";
//    echo "<script type='text/javascript'>pageId = $page_id</script>";
    $redirect_uri = $page_link_json;

    if (!$user_id) {
        $login_url = $facebook -> getLoginUrl(array('scope' => 'email, publish_stream, user_birthday,user_videos,user_photos', 'redirect_uri' => $page_link));
        echo "<script type='text/javascript'>window.top.location.href = '$login_url';</script>";
    }else{
        if (!$signed_request["page"]["liked"]) {
            // echo '<img src="images/likeus.jpg">';
            echo "<h1>Like Us ĐÊ</h1>";
        }else {
            // $handle -> userEnter($user_id);
            include 'content.php';
            //echo "<script type='text/javascript'>window.location.href = 'shared/select-country.php?country=$country&lang=$country&fbid=$user_id&fbcountry=$country&fbpageid=$page_id&fbpagelink=$page_link';</script>";
        }
    }
    ?>
        <!-- <div class="app-footer">
            <img src="images/footer.png">
        </div> -->
    </div>

</div>
</body>
</html>
