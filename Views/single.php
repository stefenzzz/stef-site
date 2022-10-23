<article>
<div class="single-article">


    
    <div class="article-title">
             <a href="/chapter/<?=$data['chapter']?>">Chapter <?=$data['chapter'].': '.$data['title']?></a>
    </div>


    <img class="single-chapter-image" src="/<?=$data['img']?>" alt="<?=$data['title']?>">

        <div class="article-body">

            <div class="article-text">
                <?=$data['text']?>
            </div>
            <div class="article-date">
             <?=date('M j, Y h:i A',strtotime($data['date']))?>
            </div>
        </div>
       
    </div>
</article>