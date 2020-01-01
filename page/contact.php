<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../font-awesome/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<a class="menu" onclick="menu()"><i class="fas fa-bars"></i></a>
    <div class="menu-bar" id="menu1">
        <a href="../index.php">الرئيسية <i class="fas fa-home"></i></a>
        <a href="news.php">أخبار <i class="fas fa-newspaper"></i></a>
        <a href="articles.php">مقالات <i class="far fa-newspaper"></i></a>
        <a href="reports.php">تقارير <i class="far fa-clipboard"></i></a>
        <a href="press.php">بيانات صحفية <i class="fas fa-camera"></i></a>
        <a href="contact.php" style="color: #ff4757;">تواصل معنا <i class="fas fa-address-book"></i></a>
    </div>
    <div class="news-bar">
        <p>ستكون هنا عناوين آخر الأخبار والمقالات</p>
    </div>

    <aside>
        <h3>آخر الأخبار:</h3>
        <div class="box-news">
            <a href="">
                <img src="../image/11.jpg" alt="">
                <p>قريبًا سيدعم جيميل اقتراح أوقات جديدة للاجتماعات مع إضافة ملاحظات لدعوات التقويم</p>
            </a>
        </div>
        <div class="box-news">
            <a href="">
                <img src="../image/12.jpg" alt="">
                <p>قريبًا سيدعم جيميل اقتراح أوقات جديدة للاجتماعات مع إضافة ملاحظات لدعوات التقويم</p>
            </a>
        </div>
        <div class="box-news">
            <a href="">
                <img src="../image/13.jpg" alt="">
                <p>قريبًا سيدعم جيميل اقتراح أوقات جديدة للاجتماعات مع إضافة ملاحظات لدعوات التقويم</p>
            </a>
        </div>
        <div class="box-news">
            <a href="">
                <img src="../image/14.jpg" alt="">
                <p>قريبًا سيدعم جيميل اقتراح أوقات جديدة للاجتماعات مع إضافة ملاحظات لدعوات التقويم</p>
            </a>
        </div>
        <div class="box-news">
            <a href="">
                <img src="../image/15.jpg" alt="">
                <p>قريبًا سيدعم جيميل اقتراح أوقات جديدة للاجتماعات مع إضافة ملاحظات لدعوات التقويم</p>
            </a>
        </div>
    </aside>

    <?php require "footer.inc.php"; ?>


    <script src="../script.js"></script>
</body>
</html>