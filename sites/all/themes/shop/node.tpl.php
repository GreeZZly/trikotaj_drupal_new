<?if($teaser):?>
<h2><a href="/node/<?print $node->nid?>"><?print $node->title;?></a></h2>
<p style="font-size: 18px;"><?print $node->body['und']['0']['summary'];?></p>
<?else:?>
<h2><?print $node->title;?></h2>
<p style="font-size: 18px;"><?print $node->body['und']['0']['value'];?></p>
<?endif;?>
