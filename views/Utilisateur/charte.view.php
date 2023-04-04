<div class="entetePage <?= $css  ?>">


    <h1>Charte du poseur</h1>

    <h2>Les détails d'une pose réussie ! <br>(Liste non exhaustive et non classée/triée ! )</h2>
    <br><br>


    <div class="charteContent">
        <?=$nbPages?>
        <!-- <pre>
        <?php echo ("test numpage => ".$numPage) ?>
        <?php $page=(int)$numPage ?>
        
        <?php print_r($charteContent[$page]) ?>
        </pre> -->


        <h3><?= $charteContent[$page]['titre_chapitre1'] ?></h3>
        <div class="content content1">
            <?php if( $charteContent[$page]['img1']) :?>
            <img src="<?= URL ?>/public/assets/images/<?= $charteContent[$page]['img1'] ?>">
            <?php endif ?>
            <p><?= $charteContent[$page]['contenu1'] ?></p>
        </div>



        <?php if ($charteContent[$page]['titre_chapitre2']) : ?>
        <div class="separateur"></div>
        <h3><?= $charteContent[$page]['titre_chapitre2'] ?></h3>
        <div class="content content2">
            <p><?= $charteContent[$page]['contenu2'] ?></p>
            <?php if( $charteContent[$page]['img2']) :?>
            <img src="<?= URL ?>/public/assets/images/<?= $charteContent[$page]['img2'] ?>">
            <?php endif ?>
        </div>
        <?php endif ?>
        <br>

    </div>
    <div class="checkbox">
        <input type="checkbox" id="checkbox">
        <p>"J'ai lu et compris."</p></input>
    </div>

    <div class="nextPage disable" id="nextPage">

    <?php  if (($page + 1) < $nbPages) : ?>
        <a href="<?= URL ?>compte/charte/<?=$page + 1?>">Page suivante</a>
        
    <?php else : ?>
        <a href="<?= URL ?>compte/validationCharte">Je comprends et <br>
        valide l'importance de ces points.</a>

    <?php endif ?>
    
    </div>
</div>