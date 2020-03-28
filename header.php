<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <script>
  var ajaxUrl = "<?php echo get_template_directory_uri(); ?>/data/word.csv";
  </script>
</head>
<body>
  <header class="b-header">
    <div class="b-header__inner">
      <h1 class="c-title"><b>後藤謙介</b><span>フロントもバックもクラウドも</span>
      </h1>
      <nav class="m-gnavi">
        <a class="c-humburger"><span></span><span></span><span></span></a>
        <div class="m-gnavi__lists">
          <nav class="m-gnavi__lists__inner">
            <ul class="m-gnavi__lists__content">
              <li class="item is-active"><a href="#top">トップ</a></li>
              <li class="item" data-target="skill"><a href="#skill">何が出来るの？</a></li>
              <li class="item" data-target="profile"><a href="#profile">プロフィール</a></li>
              <li class="item" data-target="activity"><a href="#blog">最近の活動</a></li>
              <li class="item" data-target="contact"><a href="#contact">お問い合わせ</a></li>
            </ul> 
          </nav>
        </div>
      </nav>
    </div>
  </header>