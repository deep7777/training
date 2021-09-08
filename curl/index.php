<?php
include("../dashboard.php");
$api_key = '14b67f0e9483496793128a073dc6c185';
$ch = curl_init('https://newsapi.org/v2/top-headlines?country=us&apiKey='.$api_key);
 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$news = json_decode($data); // json decode to iterate the values
$articles = $news->articles;
curl_close($ch);
?>
<main class="page-content">
<div class="container alert alert-primary">
    <!----Row -->
    <div class="row">
        <!---- Users List -->
        <div class="col-12" style="background-color:yellow;border: 1px solid red;">
            <?php foreach ($articles as $article)  { ?>
            	<div class="row">
	                <div class="row">
	                    <div class="col" style="cursor:pointer;"><a target="_blank" href="<?php echo $article->url;?>"><b><?php echo $article->title; ?></b></a></div>
	                </div>
	                <div class="row">
	                    <div class="col" style="border-bottom: 1px solid skyblue;"><?php echo $article->content; ?></div>
	                </div>
            	</div>
            <?php } ?>
        </div>
    </div>
</div>
</main>
</body>
</html>