<article>
<div class="single-article">


    
    <div class="article-title">
             <a href="/chapter/<?=$data['chapter']?>">Chapter <?=$data['chapter'].': '.$data['title']?></a>
    </div>


    <a href="/chapter/<?=$data['chapter']?>"><img class="single-chapter-image" src="/<?=$data['img']?>" alt="<?=$data['title']?>"></a>

        <div class="article-body">

            <div class="article-text">
                <?=$data['text']?>
            </div>
            <div class="article-date">
                <?=$data['date']?>
            </div>
        </div>
       
    </div>
</article>