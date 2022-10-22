

<article>
<?php foreach($data as $d):?>

    <div class="chapter-article flex">
    <img class="article-chapter-image" src="<?=$d['img']?>" alt="<?=$d['title']?>">

        <div class="article-body">

             <div class="article-title">
                 <?=$d['title']?>
             </div>

            <div class="article-text">
                <?=$d['text']?>
            </div>
            <div class="article-date">
                <?=$d['date']?>
            </div>
        </div>
       
    </div>
   
<?php endforeach;?>   
   
<article>
