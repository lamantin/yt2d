<?php

$FB_PERSISTENT_KEY ="";

$search_film_in_youtube   ='search term ';
$output = shell_exec("python3 y2td_search.py {$search_film_in_youtube}");

$json = json_decode($output,true);

$arr = $json['result'];

//get one film link

$link = $arr[array_rand($arr)];
var_dump($link['title']);
$link = $link['link'];
var_dump($link);
echo shell_exec("python yt2d.py {$link} ");





$fb_stream_feed = "ffmpeg -re -i ./video.mp4 -ar 44100 -b:a 128k -pix_fmt yuv420p -profile:v baseline -s 1280x720 -bufsize 6000k -vb 400k -maxrate 1500k -deinterlace -vcodec libx264 -preset veryfast -g 30 -r 30 -f flv \"rtmps://live-api-s.facebook.com:443/rtmp/{$FB_PERSISTENT_KEY}\"";



//go to live
shell_exec($fb_stream_feed);
