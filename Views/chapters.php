

<article>
<?php foreach($data as $d):?>

    <div class="chapter-article grid">
    <a href="/chapter/<?=$d['chapter']?>"><img class="article-chapter-image" src="<?=$d['img']?>" alt="<?=$d['title']?>"></a>

        <div class="article-body grid">

             <div class="article-title">
             <a href="/chapter/<?=$d['chapter']?>">Chapter <?=$d['chapter'].': '.$d['title']?></a>

                <div class="article-text">
                    <?=substr($d['text'],0,250)?><a href="/chapter/<?=$d['chapter']?>" class="read-more">...read more</a>
                    </div>
             </div>

           
                
                <div class="article-date">
                    <?=date('M j, Y h:i A',strtotime($d['date']))?>
                </div>
            
        </div>
       
    </div>
   
<?php endforeach;?>   
   
<article>
