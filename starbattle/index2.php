<?
$google_play_referer = "";
$appstore_referer = "";

//if campain is set
if(isset($_REQUEST['c'])) {
	$google_play_referer = "&referrer=" . $_REQUEST['c'];
	//$appstore_referer;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Star battle: Inception</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style type="text/css">
        @font-face {
            font-family: 'FoundryMonolineOT3Bold';
            src: url('fonts/foundrymonolineot3-bold-webfont.eot');
            src: url('fonts/foundrymonolineot3-bold-webfont.eot?#iefix') format('embedded-opentype'),
            url('fonts/foundrymonolineot3-bold-webfont.woff2') format('woff2'),
            url('fonts/foundrymonolineot3-bold-webfont.woff') format('woff'),
            url('fonts/foundrymonolineot3-bold-webfont.ttf') format('truetype'),
            url('fonts/foundrymonolineot3-bold-webfont.svg#FoundryMonolineOT3Bold') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'UnicodSansCondensedLight';
            src: url('fonts/UnicodSansCondensedLight.eot');
            src: url('fonts/UnicodSansCondensedLight.eot?#iefix') format('embedded-opentype'),
            url('fonts/UnicodSansCondensedLight.woff2') format('woff2'),
            url('fonts/UnicodSansCondensedLight.woff') format('woff'),
            url('fonts/UnicodSansCondensedLight.ttf') format('truetype'),
            url('fonts/UnicodSansCondensedLight.svg#UnicodSansCondensedLight') format('svg');
            font-weight: normal;
            font-style: normal;
        }
    </style>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen, projection">
</head>
<body>

<div class="main">
    <div id="header" class="header">
        <div class="container">
            <div class="logo"><a href="#"></a></div>
        </div>
    </div>
    <!--
    <div id="main_title" class="main_title">
        <div class="container">
            <h1 class="font_big">Star battle</h1>
            <div class="clearfix"></div>
        </div>
    </div> -->
    <div id="main_video" class="main_video">
        <div class="container">
            <div class="p4f_label"></div>
            <div class="videoYoutube">

                <iframe src="https://www.youtube.com/embed/KBRLare__sk?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div id="main_market" class="main_market">
        <div class="container">
            <ul class="market_links">
                <li>
                    <a href="https://itunes.apple.com/us/app/star-battle-inception/id974606162?l=ru&ls=1&mt=8" target="_blank">
                        <img class="ico_appstore" src="source/img/app-store.png" alt="app-store">
                    </a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.ilogoseu.starbattle<?=$google_play_referer?>" target="_blank">
                        <img class="ico_google_play"src="source/img/google-play.png" alt="google-play">
                    </a>
                </li>
            </ul>
            <div class="best_banner">
                <img class="best_banner_img" src="source/img/best-online-game.png" alt="best-online-game">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div id="main_about" class="main_about">
        <div class="container">
            <p>Star Battle is a multiplayer action strategy game. Defend your base against Gallarians and other Commanders.
                Complete missions and quests to gain advantage. Fight enemy players with your clan and participate in tournaments and clan wars.</p>
            <h1 class="about_title">FEATURES:</h1>
            <ul>
                <li>&bull; Win Tournaments and become the ultimate Leader</il>
                <li>&bull; Create Clans with your friends and other players</il>
                <li>&bull; Epic real-time action Combat in 3D</il>
                <li>&bull; Lead your Army and defeat other players in massive Battles</il>
                <li>&bull; Build your Base and protect it from enemies</il>
                <li>&bull; Find Ancient Relics and summon mighty Heroes</il>
                <li>&bull; Research new Technologies and unlock devastating Units</il>
                <li>&bull; Chat in real-time with other players and your clan members</il>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div id="footer" class="footer">
    <div class="container">

            <ul class="social_btns">
                <li class="btn_facebook"><a href="https://www.facebook.com/StarBattleGame" target="_blank"></a></li>
            </ul>

    </div>
</div>
</body>
</html>