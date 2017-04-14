<!-- Initial Areas of Study Cards-->
<div class="align-center AoSheader"><h3>Explore Areas of Study</h3></div>
<?php
$qResult = db_query('SELECT name FROM taxonomy_term_data');
$AoSrecord = $qResult->fetchCol();
?> <div class="row"> <?php
    foreach ($AoSrecord as $AoS){
        $AoSparse = explode(' ', $AoS);
        ?>
        <div class="col m3 AoScards">
            <div class="z-depth-5 card-panel Col<?php print ltrim($AoSparse[1], '#');?>">
                <div class="valign-wrapper iconCircleMain" style="background-color:<?php print $AoSparse[1];?>;">
                    <div class="valign AoSinitials"><?php print $AoSparse[0]; ?></div>
                </div>
                <div class="AoStitle">
                    <h5>Title</h5>
                </div>
                <div class="AoSdescrip">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus congue dui nec efficitur. Morbi sed diam sit amet magna.
                    </p>
                </div>
            </div>
        </div> <?php
    }
    ?>
</div>
<?php
/*AoS Cards Main Page*/
.iconCircleMain {
width: 80px;
height: 80px;
border-radius: 50%;
position: relative;
top: -60px;
right: -35%;
}

.col.m3.AoScards {
margin-bottom: 30px;
text-align: center;
}

.align-center {
text-align: center;
}

.align-center.AoSheader {
margin-bottom: 5%;
}

.z-depth-5.card-panel.ColB3282D:hover{
background-color: #B3282D;
}
.z-depth-5.card-panel.Col604B3C:hover{
background-color: #604B3C;
}
.z-depth-5.card-panel.ColF04B24:hover{
background-color: #F04B24;
}
.z-depth-5.card-panel.Col62A744:hover{
background-color: #62A744;
}
.z-depth-5.card-panel.Col002E6D:hover{
background-color: #002E6D;
}
.z-depth-5.card-panel.Col6A86B8:hover{
background-color: #6A86B8;
}
.z-depth-5.card-panel.Col00AFAA:hover{
background-color: #00AFAA;
}
.z-depth-5.card-panel.Col61116A:hover{
background-color: #61116A;
}
.z-depth-5.card-panel.ColFFCE00:hover{
background-color: #FFCE00;
}
.z-depth-5.card-panel.ColFF9012:hover{
background-color: #FF9012;
}

?>

// Original Social Band //
<div class="row socialBand">
    <div class="container">
        <div class="col m4 youtube">
            <?php
            // YouTube cURL
            $curlA = curl_init();
            curl_setopt_array($curlA, array(
                CURLOPT_URL => "https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails&maxResults=1&playlistId=UUqT9FS6CIixV41E_CHy1C6w&key=AIzaSyAyeNp9KafBPudMCs7gF3KJudbsy5bF7Ko",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
                    "accept-encoding: gzip, deflate, sdch, br",
                    "accept-language: en-US,en;q=0.8",
                    "cache-control: no-cache",
                    "postman-token: 7dac1030-864f-00ee-193d-2b94ce8f99d1",
                    "upgrade-insecure-requests: 1",
                    "user-agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36",
                    "x-chrome-uma-enabled: 1",
                    "x-client-data: CKW1yQEIhLbJAQiitskBCMS2yQEI+5zKAQipncoB"
                ),
            ));
            $responseA = curl_exec($curlA);
            $errA = curl_error($curlA);
            curl_close($curlA);
            if ($errA) {
                echo "cURL Error #:" . $errA;
            } else {
                $reA = '/videoId\"\:\ \"(.*)\"\,/';
                preg_match_all($reA, $responseA, $videoId, PREG_SET_ORDER, 0);
                $vidID = $videoId[0][1];
            }
            ?>
            <div class="col m12">
                <h6 class="right-align">FOLLOW US ON YOUTUBE</h6>
            </div>
            <div class="col m12">
                <div id="player"></div>
            </div>
        </div>
        <div class="col m4 instagram">
            <div class="col m12">
                <h6 class="right-align">FOLLOW US ON INSTAGRAM</h6>
            </div>
            <div class="col m12">
                <?php
                // Instagram cURL
                $curlB = curl_init();
                curl_setopt_array($curlB, array(
                    CURLOPT_URL => "https://api.instagram.com/v1/users/self/media/recent/?count=4&access_token=448051566.3cf8e05.f42eb9e13dd542ddb620e0f6014ff340",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
                        "accept-encoding: gzip, deflate, sdch, br",
                        "accept-language: en-US,en;q=0.8",
                        "cache-control: no-cache",
                        "cookie: mid=WG6VpQAEAAFx2K9IYOSsGyHG7X-x; fbm_124024574287414=base_domain=.instagram.com; _js_datr=wXXeWHjG-_sNHlJnME2vYiPC; _js_reg_ext_ref=http%3A%2F%2Fhelp.instagram.com; _js_reg_fb_ref=https%3A%2F%2Fwww.facebook.com%2Fhelp%2Finstagram%2F513918941996087; _js_reg_fb_gate=https%3A%2F%2Fwww.facebook.com%2Fhelp%2Finstagram%2F513918941996087; wd=1280x918; fbsr_124024574287414=zcBpaeHID_Vxqmo0qbyPv8ydmZ5gVHJ3KOez7fE_09o.eyJhbGdvcml0aG0iOiJITUFDLVNIQTI1NiIsImNvZGUiOiJBUUJzQnh3RUpKWlNCMkpINFZwb1J1QmFFeWdHM3E0aDY5U25sdUdiSlhFV1ljN2x5d296bmxOS2xudm5fVHJITnFVMzctOE9Bdk9tX2NLS2V2cWNzZFN1dEJzQXQ4R2FZRVNESGxhWW9QWGU2UnZFa3BHdDZlX3pHTjQ0U0M3enRxVld3Q3JxRzhrZUxFYlh4OXJlaC0tbm5odUxYOHI5RHpVMmM5V1NVZnBtcE9ubjl2alhNQ3hGUFcxNnBzNFd3SmZ5ME9GQ0E4aUw3eThfQXJ1elJyalVJWjJleUZsenN1cWdCYjBzM3RZZm9oeVJOZlFQaC14SnNSS1AxemM2QkxhbXRkamJfUU9KZzU5LTE0RGg5b21ybWZaeVNKcVdyX1UtRkZwcUZUdFl2eWlRTE9tWGNzQ2FLeDN0UkJRNFJ0ODhYWld4bk44cnBYeVNpbi1pMjhDTCIsImlzc3VlZF9hdCI6MTQ5MDk3NzAzMywidXNlcl9pZCI6IjEwMjY2ODMzODAifQ; s_network=\"\"; rur=ASH; csrftoken=o4pGg25PCdyrKeLPDnhqPTmGABA9zKrN",
                        "postman-token: e105fd18-d5d0-38f7-c6b1-932afa5cf487",
                        "upgrade-insecure-requests: 1",
                        "user-agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36"
                    ),
                ));
                $responseB = curl_exec($curlB);
                $errB = curl_error($curlB);
                curl_close($curlB);
                if ($errB) {
                    echo "cURL Error #:" . $errB;
                } else {
                $reB1 = '/(?:\"standard\_resolution\"\:\ \{\"url\"\:\ \")(.*)(?:\"\,)/U';
                $reB2 = '/(?:\"standard\_resolution\"\:\ \{\"\w*\"\:\ ...\,\ \"url\"\:\ \")(.*)(?:\"\,)/U';
                $reB3 = '/(?:\"standard_resolution\"\:\ \{\"\w*\"\:\ \d*\, \"\w*\"\:\ \d*\,\ \"url\"\:\ \")(.*)(?:\")/U';
                preg_match_all($reB1, $responseB, $urls1, PREG_SET_ORDER, 0);
                preg_match_all($reB2, $responseB, $urls2, PREG_SET_ORDER, 0);
                preg_match_all($reB3, $responseB, $urls3, PREG_SET_ORDER, 0);
                ?>
                <div class="row Insta">
                    <?php
                    $imgCount = 1;
                    if (count($urls1 === 4)){
                        foreach ($urls1 as $urlDisplay){
                            if ($imgCount === 3){
                                print '</div><div class="row Insta">';
                            }
                            print '<div class="col m6 instaImage"><img class="materialboxed responsive-img" src="';
                            print $urlDisplay[1];
                            print '"></div>';
                            if ($imgCount === 4){
                                print '</div>';
                            }
                            $imgCount++;
                        }
                    }
                    if (count($urls2 === 4)){
                        foreach ($urls2 as $urlDisplay){
                            if ($imgCount === 3){
                                print '</div><div class="row Insta">';
                            }
                            print '<div class="col m6 instaImage"><img class="materialboxed responsive-img" src="';
                            print $urlDisplay[1];
                            print '"></div>';
                            if ($imgCount === 4){
                                print '</div>';
                            }
                            $imgCount++;
                        }
                    }
                    if (count($urls3 === 4)){
                        foreach ($urls3 as $urlDisplay){
                            if ($imgCount === 3){
                                print '</div><div class="row Insta">';
                            }
                            print '<div class="col m6 instaImage"><img class="materialboxed responsive-img" src="';
                            print $urlDisplay[1];
                            print '"></div>';
                            if ($imgCount === 4){
                                print '</div>';
                            }
                            $imgCount++;
                        }
                    }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col m4 twitter">
            <div class="col m12">
                <h6 class="right-align">FOLLOW US ON TWITTER</h6>
            </div>
            <div class="col m12">
                <?php
                $token = '19037373-BzfsGB6g25Zj5wZrQ5yYfBFV1tgPjh2IdLjbjCjiv';
                $token_secret = '45I5EMHoXwCx9nyH8HqPcXX1COaBHPQWRSRgE0HGGcVL0';
                $consumer_key = 'MYewU6yKLm69fOSmzLg0PIjv4';
                $consumer_secret = 'wvFJ2urJy41nH3BcAxlLh1aYkufPaCfFoeUcEwHUoUuNwawJIz';
                $host = 'api.twitter.com';
                $method = 'GET';
                $path = '/1.1/search/tweets.json';
                $query = array(
                    'q' => 'accdistrict',
                    'count' => '2',
                    'result_type' => 'recent'
                );
                $oauth = array(
                    'oauth_consumer_key' => $consumer_key,
                    'oauth_token' => $token,
                    'oauth_nonce' => (string)mt_rand(),
                    'oauth_timestamp' => time(),
                    'oauth_signature_method' => 'HMAC-SHA1',
                    'oauth_version' => '1.0'
                );
                $oauth = array_map("rawurlencode", $oauth);
                $query = array_map("rawurlencode", $query);
                $arr = array_merge($oauth, $query);
                asort($arr);
                ksort($arr);
                $querystring = urldecode(http_build_query($arr, '', '&'));
                $url = "https://$host$path";
                $base_string = $method."&".rawurlencode($url)."&".rawurlencode($querystring);
                $key = rawurlencode($consumer_secret)."&".rawurlencode($token_secret);
                $signature = rawurlencode(base64_encode(hash_hmac('sha1', $base_string, $key, true)));
                $url .= "?".http_build_query($query);
                $url=str_replace("&amp;","&",$url);
                $oauth['oauth_signature'] = $signature;
                ksort($oauth);
                function add_quotes($str) { return '"'.$str.'"'; }
                $oauth = array_map("add_quotes", $oauth);
                $auth = "OAuth " . urldecode(http_build_query($oauth, '', ', '));
                $options = array( CURLOPT_HTTPHEADER => array("Authorization: $auth"),
                    CURLOPT_HEADER => false,
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_SSL_VERIFYPEER => false);
                $feed = curl_init();
                curl_setopt_array($feed, $options);
                $json = curl_exec($feed);
                curl_close($feed);
                $twitter_data = json_decode($json);
                foreach ($twitter_data->statuses as $twit) {
                    if ($twit->entities->media[0]->media_url) { ?>
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="<?php print $twit->entities->media[0]->media_url;?>">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <a href="<?php if (isset($twit->entities->urls[0]->url)) { print 'URL';} ?>"><p><?php print $twit->text; ?></p></a>
                                </div>
                            </div>
                        </div>
                    <?php }
                    elseif ($twit->text) { ?>
                        <div class="card-panel">
                                    <span class="blue-text">
                                        <a href="<?php if (isset($twit->entities->urls[0]->url)) { print 'URL';} ?>"><?php print $twit->text; ?></a>
                                    </span>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script>
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: 'auto',
            width: '100%',
            videoId: '<?php echo $vidID ?>',
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerReady(event) {
        event.target.playVideo();
    }
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 6000);
            done = true;
        }
    }
    function stopVideo() {
        player.stopVideo();
    }
</script>

<!--AoS Band 2 column card-->
<!--home aos-->
<!--home aos-->
<div class="row row-band homeAoS grey lighten-3 noSideMargin">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4 class="band-title-alt">Areas of Study & Programs</h4>
                    <div class="dividerDiagGrey"></div>
                </div>
            </div>
            <!--  <div class="row">
                  <div class="col s12"><p class="flow-text">Explore the possibilities of an ACC education with <strong>100+ programs</strong> in 10 areas of study and more, geared for transfer and career training.</p>
                      <div class="col s11 AoSearch">
                          <input type="text" id="autocomplete-input" placeholder="Search Areas of Study and Programs" name="search" class="autocomplete" onkeyup="buttonUp();" required>
                      </div>
                          <div class="col s1 AoSearch">
                              <a class="waves-effect waves-light btn-large">
                                  <i class="material-icons large">search</i>
                              </a>
                          </div>
                  </div>-->
            <form class="col s12">
                <div class="row">
                    <div class="col s12 m6">
                        <p class="flow-text">Explore the possibilities of an ACC education with 100+ programs in 10
                            areas of study and more, geared for transfer and career training.</p>
                    </div>
                    <div class="input-field col s12 m6">
                        <input type="text" id="autocomplete-input" placeholder="Search Areas of Study and Programs"
                               name="search" class="autocomplete" onkeyup="buttonUp();" required><span>  <a
                                    class="waves-effect waves-light btn-large">
                                    <i class="material-icons large">search</i>
                                </a></span>
                        <label for="first_name">Find your program.</label>
                    </div>
                </div>
        </div>
        <div class="row">
            <!--  <a id="searchIconGrid" class="waves-effect waves-light btn-large lightgreen"><i
                            class="material-icons">apps</i></a>
                <a id="searchIconList" class="waves-effect waves-light btn-large"><i class="material-icons">list</i></a>
            </div>-->
            <?php $qResult = db_query('SELECT name FROM taxonomy_term_data WHERE vid=2');
            $AoSrecord = $qResult->fetchCol();
            ?>
            <div class="container">
                <div class="row noSideMargin" id="AoSgrid">
                    <div class="row AoShome noSideMargin">
                        <div class="col m6 AoScards">
                            <div class="valign-wrapper z-depth-3 card-panel rectangle"
                                 style="background-color: #37474F">
                                <div class="valign AoSinitialsHome">
                                    <h4 class="aos-card"><a href="/academics/">All Academic Choices</a></h4>
                                </div>
                            </div>
                        </div>
                        <?php
                        $AoSCount = 1;
                        $strain = '/(?<=full\:)(.*)(?=\-\-)/U';
                        foreach ($AoSrecord as $AoS){
                        preg_match($strain, $AoS, $AoSHead, PREG_OFFSET_CAPTURE, 0);
                        $imgIdent = str_pad(mt_rand(1, 15), 3, 0, STR_PAD_LEFT);
                        if ($AoSCount === 3 || $AoSCount === 7){ ?>
                    </div>
                    <div class="row AoShome"> <?php }
                        $AoSparse = explode(' ', $AoS); ?>
                        <div class="col m3 AoScards">
                            <div class="valign-wrapper z-depth-3 card-panel square"
                                 style="background-image:url('/sites/default/files/sq-student-<?php print $imgIdent ?>.jpg');">
                                <div class="valign AoSinitialsHome">
                                    <h5 class="aos-card white-text"><?php print $AoSHead[0][0]; ?></h5>
                                </div>
                            </div>
                        </div>
                        <?php
                        $AoSCount++;
                        } ?>
                    </div>
                </div>
                <div class="row" id="AoSlist" style="display:none;">
                    <div class="AoSlist">
                        <ul class="collection">
                            <?php foreach ($AoSrecord as $AoS) {
                                $AoSparse = explode(' ', $AoS);
                                ?>
                                <li class="collection-item"
                                    style="text-align: center; background-color: <?php print str_replace('Primary', '', $AoSparse[1]); ?>">
                                    <h4><?php print $AoSparse[0]; ?></h4></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>