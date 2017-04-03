
<?php

result_type=recent
    count=3
https://api.twitter.com/1.1/search/tweets.json?q=@accdistrict&result_type=recent&count=3
?>




https://www.instagram.com/oauth/authorize/?client_id=3cf8e05478e94b99a17d6b91d924145a&redirect_uri=http%3A%2F%2Faustincc.edu&response_type=token

#access_token=448051566.3cf8e05.f42eb9e13dd542ddb620e0f6014ff340

$str = https://api.instagram.com/v1/users/self/media/recent/?count=4&access_token=448051566.3cf8e05.f42eb9e13dd542ddb620e0f6014ff340

$re = '/standard\_resolution\"\:\ \{\"url\"\:\ \"(.*)\"\,/U';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);