
<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>سالفة هاشتاق</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css-loader/dist/css-loader.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/loading-spinner.js"></script>

</head>
<body style="background-color: #f5f5f5">


<nav class="navbar navbar-expand-lg navbar-white bg-info ">
    <a class="navbar-brand text-white" href="index.php"><i class="fa fa-hashtag"> سالفة هاشتاق</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="color: white"><i class="fa fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item">
                <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#about-us">عن الموقع</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="admin">تسجيل دخول</a>
            </li>
        </ul>

    </div>
</nav>
<script>
    $(document).ready(function(){

        $('#btngo').click(function () {

            $('#show-result').hide();
            $('#show-result').fadeIn();

        });
            $('#search-form').submit(function (evt) {
                evt.preventDefault();
                var postData = $(this).serialize();
                var url = $(this).attr('action');
                $.post(url, postData, function(data) {
                   $('#show-result').html(data);

                 });
                $('#show-result').fadeIn();
                $('#search').val("");

            });

    }); // doc end here
</script>
<div class="center">
    <h2>وش سالفة الهاشتاق؟</h2>
    <form action="search.php" method="post" id="search-form">
        <input type="text" class="" placeholder="بحث.." name="search" id="search">
        <button type="submit" id="btngo"><i class="fa fa-search"></i></button>
    </form>
</div>
<div id="show-result" class="p-1">
<?php if(isset($_GET['s'])) :
    $search = $_GET['s'];
    if($search) :
    include "home-init.php";
    $hashtags = new Hashtag();

foreach ($hashtags->find_by_tag($search) as $hashtag) :
    ?>

    <div class="hash" id="hash">
        <script async src="https://static.addtoany.com/menu/page.js"></script>
        <h2> #<?php echo $hashtag->hashtag_name ?></h2>
        <br>
        <?php echo $hashtag->explains ?>
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
    <?php endif; ?>


    <?php endforeach; endif;?>
    <?php endif;  ?>
</div>


<div id="about-us" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-white">عن الموقع</h4>
            </div>
            <div class="modal-body" style="font-size: 16px;">
                <p class="text-justify">
                من خلال هذا الموقع تستطيع معرفة قصة الهاشتاق الترند بكل سهولة, قم فقط بالبحث بستخدام عنوان الهاشتاق و ستجد الملخص عن الهاشستاق و ستجد أيضاَ بعض التغريدات الناشره لهذا الهاشتاق.
                </p>
            </div>
        </div>

    </div>
</div>

</body>
</html>