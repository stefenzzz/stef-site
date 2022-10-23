

<article>
<?php foreach($data as $d):?>

    <div class="chapter-article flex">
    <a href="/chapter/<?=$d['chapter']?>"><img class="article-chapter-image" src="<?=$d['img']?>" alt="<?=$d['title']?>"></a>

        <div class="article-body">

             <div class="article-title">
             <a href="/chapter/<?=$d['chapter']?>">Chapter <?=$d['chapter'].': '.$d['title']?></a>
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
