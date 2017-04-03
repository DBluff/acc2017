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

    $instaIntro = '<img class="materialboxed masonImg" src="';
    $instaImage = array();
    $instaEnding = '">';
    if (count($urls1 === 4)){
        foreach ($urls1 as $urlDisplay){
            $instaImage[] = $urlDisplay[1];
        }
    }
    if (count($urls2 === 4)){
        foreach ($urls2 as $urlDisplay){
            $instaImage[] = $urlDisplay[1];
        }
    }
    if (count($urls3 === 4)){
        foreach ($urls3 as $urlDisplay){
            $instaImage[] = $urlDisplay[1];
        }
    }
}
//Twitter cURL
$token = '19037373-BzfsGB6g25Zj5wZrQ5yYfBFV1tgPjh2IdLjbjCjiv';
$token_secret = '45I5EMHoXwCx9nyH8HqPcXX1COaBHPQWRSRgE0HGGcVL0';
$consumer_key = 'MYewU6yKLm69fOSmzLg0PIjv4';
$consumer_secret = 'wvFJ2urJy41nH3BcAxlLh1aYkufPaCfFoeUcEwHUoUuNwawJIz';
$host = 'api.twitter.com';
$method = 'GET';
$path = '/1.1/search/tweets.json';
$query = array(
    'q' => 'accdistrict',
    'count' => '1',
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
?>

<div class="row socialMasonry">
    <div class="col m1 mason"></div>
    <div class="col m4 mason" id="fullHeight1">
        <div id="player"></div>
        <div class="smIconsAbs"><i class="fa fa-youtube"></i></div>
    </div>
    <div class="col m4 mason">
        <div class="col m12 mason">
            <div class="col m6 mason" id="fullHeight2">
                <?php print $instaIntro . $instaImage[0] . $instaEnding ?>
                <div class="smIconsAbs"><i class="fa fa-instagram"></i></div>
            </div>
            <div class="col m6 mason" id="fullHeight3">
                <?php print $instaIntro . $instaImage[1] . $instaEnding ?>
                <div class="smIconsAbs"><i class="fa fa-instagram"></i></div>
            </div>
            <div class="col m12 valign-wrapper blue mason" id="halfHeight1">
                <?php foreach ($twitter_data->statuses as $twit) {
                if ($twit->text) {
                    print '<div class="valign twitterHome white-text">' . $twit->text . '</div>';
                }
                } ?>
                <div class="smIconsAbs"><i class="fa fa-twitter"></i></div>
            </div>
        </div>
    </div>
    <div class="col m2 mason">
        <div class="col m12 mason" id="fullHeight4">
            <?php print $instaIntro . $instaImage[2] . $instaEnding ?>
            <div class="smIconsAbs"><i class="fa fa-instagram"></i></div>
        </div>
        <div class="col m12 mason" id="fullHeight5">
            <?php print $instaIntro . $instaImage[3] . $instaEnding ?>
            <div class="smIconsAbs"><i class="fa fa-instagram"></i></div>
        </div>
    </div>
    <div class="col m1 mason"></div>
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
            },
            playerVars: {
                autoplay: 0
            }
        });
    }
    function onPlayerReady(event) {
        event.target.playVideo();
    }
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 5);
            done = true;
        }
    }
    function stopVideo() {
        player.stopVideo();
    }
</script>