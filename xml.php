<?php

$xml = file_get_contents('https://feeds.feedburner.com/zdkorea');

$xmldom = simplexml_load_string($xml);

echo "<h1>".$xmldom->channel->title."</h1>";
echo "<h2>".$xmldom->channel->description."</h2>";

$news_group = $xmldom->channel->item;

$index = 0;
foreach($news_group AS $news) {
    echo "<h4>".$news->title."</h4>";
    echo "<h6>".$news->description."</h6>";
    echo "<h6>"."[".$news->pubDate."]"."</h6>";
    echo "<h6>"."<a href='".$news->link."'>"."기사 링크"."</a>";
    $index++;
    if ($index==5) {
        exit;
    }
}
