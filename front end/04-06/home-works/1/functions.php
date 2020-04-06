<?php

function saveComments() {
    if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $message = $_POST['comment'];
        $file = 'comments.txt';
        $result = array("name"=>$uid, "email"=>$email, "date"=>$date, "comment"=>$message);

        file_put_contents($file, json_encode(array($result)),FILE_APPEND);
        return $result;
    }
}
function addComment($result) {
    $file = 'comments.txt';
    $arr = file_get_contents(json_decode($file, true));
    array_push($arr, $result);
    file_put_contents($file, $arr,FILE_APPEND);
}
function showComments()
{
    $array = json_decode(file_get_contents('comments.txt'), true);
    foreach($array as $item) {
        $uid = $item['name'];
        $email = $item['email'];
        $date = $item['date'];
        $message = $item['comment'];

        // to know what's in $item
        echo ($uid) . '<br>';
        echo ($email) . '<br>';
        echo ($date) . '<br>';
        echo ($message) . '<br>';
    }
    echo "<h3>Comments</h3>
<article id='' class='comment-body'>
    <footer class='comment-meta'>
        <div class='comment-author vcard'>
            <img alt='image' src='images/man%20img.PNG'><span></span></div>
<div>$uid</div>
        <div class='comment-metadata'>
                <div>$date</div>
</a>
</div>

</footer>

<div class='comment-content'>
    <p>$message</p>
</div>";
}
//function json_split_objects($json)
//{
//    $q = FALSE;
//    $len = strlen($json);
//    for($l=$c=$i=0;$i<$len;$i++)
//    {
//        $json[$i] == '"' && ($i>0?$json[$i-1]:'') != '\\' && $q = !$q;
//        if(!$q && in_array($json[$i], array(" ", "\r", "\n", "\t"))){continue;}
//        in_array($json[$i], array('{', '[')) && !$q && $l++;
//        in_array($json[$i], array('}', ']')) && !$q && $l--;
//        (isset($objects[$c]) && $objects[$c] .= $json[$i]) || $objects[$c] = $json[$i];
//        $c += ($l == 0);
//    }
//    return $objects;
//};


