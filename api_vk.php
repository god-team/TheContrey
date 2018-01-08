<head>
	<meta charset="utf-8">
</head>
<?
$param = [
	'topic_id' => '35914820',
	'group_id' => '53702061',
	'access_token' => 'c248fab6ce7d09f872c2e3d7da27af3e7aabf587c26dbb99b53bf1d9ad5fb6e85bc8a763f1df567429997',
	'extended' => '1',
	'count' => '15',
	'offset' => '1',
];
$url = "https://api.vk.com/method/board.getComments?" . http_build_query($param);
$response = file_get_contents($url);

$array = json_decode($response, true);
echo "<pre>";
var_dump($array);
echo "</pre>";
					/* for ($i=0; $i < 7; $i++) { 
						$text = $array["response"]["comments"][$i]["text"];
						$first_name = $array["response"]["profiles"][$i]["first_name"];
						$last_name = $array["response"]["profiles"][$i]["last_name"];
						$photo = $array["response"]["profiles"][$i]["photo_medium_rec"];
						echo '
						<li class="cd-testimonials-item">
						<p>'.$text.'</p>
						<div class="cd-author">
						<img src="'.$photo.'" alt="Author image">
						<ul class="cd-author-info">
						<li>'.$first_name.' '.$last_name.'</li>
						</ul>
						</div>
						</li>';
					} */
					?>