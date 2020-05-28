<?php include "home-init.php"?>
<?php
$hashtags = new Hashtag();

if(isset($_POST["search"])) {
    $search = $hashtags->delete_symbol($_POST["search"]);
    $search = $database->escape_string($search);
    if($search === "_"){die('<h2 class="hash text-center text-danger">الرجاء ادخال هاشتاق</h2>');}

    if (!empty($search)) {
        if ($hashtags->total_number_search($search) == 0) {
            ?>

            <h2 class="hash text-center text-danger"> نتعذر هذا الهاشتاق لم يتم أضافتة لدينا بعد </h2>
        <?php } else {

            foreach ($hashtags->find_by_tag($search) as $hashtag) : ?>


                <div class="hash">
                    <h2> #<?php echo $hashtag->hashtag_name ?></h2>
                    <br>
                  <p class="lead"style="line-height: 1.6;" > <?php echo $hashtag->explains ?> </p>
                    <?php echo $hashtag->code ?>
                    <div class="social-btns"><a class="btn facebook" href="http://www.facebook.com/sharer.php?u=<?php echo  'http://'. $_SERVER['SERVER_NAME'] ."/story/?s=".$hashtag->hashtag_name;?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a class="btn twitter" href="http://twitter.com/share?url=<?php echo  'http://'. $_SERVER['SERVER_NAME'] ."/story/?s=".urlencode($hashtag->hashtag_name);?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a class="wa_btn wa_btn_m btn whats" href="whatsapp://send?text=<?php echo  'http://'. $_SERVER['SERVER_NAME'] ."/story/?s=".$hashtag->hashtag_name;?>"><i class="fa fa-whatsapp"></i></a>
                        <a class="btn google" href="https://telegram.me/share/url?url=<?php echo  'http://'. $_SERVER['SERVER_NAME'] ."/story/?s=".$hashtag->hashtag_name;?>" target="_blank"><i class="fa fa-telegram"></i></a>
                    </div>
                </div>



                <?php if (!empty($hashtag->code2)): ?>
                    <div class="hash">
                        <h2> اول تغريدة بالهاشتاق</h2>
                        <br>
                        <?php echo $hashtag->code2; ?>
                    </div>

                <?php endif;
            endforeach;
        }
    }else{
        echo '<h2 class="hash text-center text-danger">الرجاء ادخال هاشتاق</h2>';
    }
}else{
    redirect("index.php");
}
?>