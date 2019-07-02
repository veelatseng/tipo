<!doctype html>
<html lang="zh-Hant" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>經濟部智慧財產局</title>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  <!-- slick css-->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css" />
  <!-- hyUI css -->
  <link rel="stylesheet" href="css/hyui.css">
  <!-- ico -->
  <link rel="icon" type="image/ico" href="images/favicon.ico">
</head>

<body>
  <!-- 直接跳主內容區 -->
  <a class="goCenter" href="#center" tabindex="1">按Enter到主內容區</a>
  <!-- wrapper Start -->
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/header.html'); ?>
    <!-- header End -->
    <!-- main Start -->
    <div id="center" class="main innerpage">
      <!-- 內頁新增一個classname-->
      <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
      <div class="container">
        <!-- breadcrumb路徑 -->
        <?php require_once('include/breadcrumb.html'); ?>
        <!-- h2節點 -->
        <h2 class="title">國際專利分類查詢 sp6 pc國際專利分類查詢</h2>
        <!-- function功能區塊 -->
        <?php require_once('include/function.html'); ?>
        <!-- patent Start -->
        <section class="patent">
          <!-- patnet_search -->
          <?php require_once('include/patent_search.html'); ?>
          <div class="total">共<em>308</em>筆資料</div>
          <div class="mode">瀏覽方式：<a href="" class="active">完整</a><a href="patent_4.php">分層</a></div>
          <table class="patent_table">
            <tr>
              <th scope="row"><a href="patent_2.php">A</a></th>
              <td>人類生活需要</td>
            </tr>
            <tr>
              <th scope="row"><a href="">B</a></th>
              <td>作業、運輸</td>
            </tr>
            <tr>
              <th scope="row"><a href="">C</a></th>
              <td>化學；冶金；組合化學</td>
            </tr>
            <tr>
              <th scope="row"><a href="">D</a></th>
              <td>紡織；造紙</td>
            </tr>
            <tr>
              <th scope="row"><a href="">E</a></th>
              <td>固定建築物</td>
            </tr>
            <tr>
              <th scope="row"><a href="">F</a></th>
              <td>機械工程；照明；供熱；武器；爆破</td>
            </tr>
            <tr>
              <th scope="row"><a href="">G</a></th>
              <td>物理</td>
            </tr>
            <tr>
              <th scope="row"><a href="">H</a></th>
              <td>電學</td>
            </tr>
          </table>
          <ul class="info">
            <li>發佈日期 : 2018-03-20</li>
            <li>發佈單位 : 移民事務組‧移民輔導科</li>
            <li>資料更新日期 : 2018-03-20</li>
            <li>瀏覽人次 : 123456</li>
          </ul>
        </section>
        <!-- patent End -->
        <!-- satisfaction 滿意度調查 -->
        <?php require_once('include/satisfaction.html'); ?>
      </div>
    </div>
    <!-- 訂閱電子報 -->
    <?php require_once('include/subscribe.html'); ?>
    <!-- fatfooter Start -->
    <?php require_once('include/fatfooter.html'); ?>
    <!-- fatfooter End -->
    <!-- footer Start-->
    <?php require_once('include/footer.html'); ?>
    <!-- footer End -->
  </div>
  <a href="javascript:;" class="scrollToTop">回頁首</a>
  <!-- JQ -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- plugin js -->
  <script src="vendor/jquery.easing.min.js"></script>
  <script src="vendor/slick/slick.min.js "></script>
  <script src="vendor/slick/slick-lightbox.js "></script>
  <script src="vendor/lazyload/lazyload.min.js"></script>
  <!-- nicescroll -->
  <script src="vendor/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- hyUI -->
  <script src="js/hyui.js"></script>
  <!-- 客製js -->
  <script src="js/customize.js"></script>
</body>
</html>