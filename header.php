<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KENSUKE GOTO</title>
  <meta property="og:title" content="WEBエンジニア・後藤謙介のホームページ" />
  <meta property="og:url" content="https://www.kensukegoto.com/" />
  <meta property="og:description" content="ああしたい・こうしたいを実装します" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/image/og--kensukegoto.jpg" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/image/favicon.ico">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <script>
  var ajaxUrl = "<?php echo get_template_directory_uri(); ?>/data/word.csv";
  </script>
</head>
<body>
  <header class="b-header">
    <div class="b-header__inner">
      <h1 class="c-title">
      <b>後藤謙介</b>
      <span>情熱系WEBエンジニア</span>
      </h1>
      <nav class="m-gnavi">
        <a class="c-humburger"><span></span><span></span><span></span></a>
        <div class="m-gnavi__lists">
          <nav class="m-gnavi__lists__inner">
            <ul class="m-gnavi__lists__content">
              <li class="item"><a href="#top">トップ</a></li>
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