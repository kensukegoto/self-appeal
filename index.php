<?php get_header(); ?>
  <main>
    <section class="b-mv">
      <div class="b-mv__inner">
        <div class="c-copy"><p><span>こうしたい<br>ああしたい<br>を実装します</span></p></div>
        <figure class="b-mv__cloud c-cloud"></figure>
        <figure class="b-mv__man c-man"><img src="<?php echo get_template_directory_uri(); ?>/image/b-mv__man.png" alt="後藤謙介の写真"></figure>
      </div>
    </section>
    <section class="b-skill" id="skill">
      <h2 class="c-heading">
        <span>SKILL</span>
        <b>何が出来るの？</b>
      </h2>
      <div class="b-skill__inner">
        <ul class="m-skills">
          <li class="c-skill">
            <p class="c-skill__num">1</p>
            <p class="c-skill__txt">
              <b>HTML•SCSS</b>
              <span>を使いウェブサイトを作成する</span>
            </p>
          </li>
          <li class="c-skill">
            <p class="c-skill__num">2</p>
            <p class="c-skill__txt">
              <b>JavaScript</b>
              <span>を使いサイトに動きを付ける</span>
            </p>
          </li>
          <li class="c-skill">
            <p class="c-skill__num">3</p>
            <p class="c-skill__txt">
              <b>WordPress</b>
              <span>をでブログ付きのウェブサイト作成する</span>
            </p>
          </li>
          <li class="c-skill">
            <p class="c-skill__num">4</p>
            <p class="c-skill__txt">
              <b>Node.js</b>
              <span>を使い各種データベースと連携するシステムを作成する</span>
            </p>
          </li>
          <li class="c-skill">
            <p class="c-skill__num">5</p>
            <p class="c-skill__txt">
              <b>PHP</b>
              <span>を使いGoogleスプレッドシートと連携するようなアプリを作成する</span>
            </p>
          </li>
          <li class="c-skill">
            <p class="c-skill__num">6</p>
            <p class="c-skill__txt">
              <b>AWS</b>
              <span>を活用し定費用で負荷に強いサービスを作成する</span>
            </p>
          </li>
          <!-- <li class="c-skill">
            <p class="c-skill__num">7</p>
            <p class="c-skill__txt">
              <b>Linux</b>
              <span>上でWEBサイトをアップロード・公開するための環境を作成する</span>
            </p>
          </li> -->
        </ul>
        <figure class="c-gear">
          <img class="c-gear--1" src="<?php echo get_template_directory_uri(); ?>/image/c-gear--1.svg" alt="">
          <img class="c-gear--2" src="<?php echo get_template_directory_uri(); ?>/image/c-gear--2.svg" alt="">
          <img class="c-gear--3" src="<?php echo get_template_directory_uri(); ?>/image/c-gear--3.svg" alt="">
        </figure>
      </div>
    </section>
    <section class="b-profile" id="profile">
      <h2 class="c-heading">
        <span>PROFILE</span>
        <b>プロフィール</b>
      </h2>
      <div class="b-profile__inner m-profile">
        <figure class="c-profile-img"><img src="<?php echo get_template_directory_uri(); ?>/image/c-profile-img.jpg" alt=""></figure>
        <dl class="c-profile-list">
          <dt>出身</dt>
          <dd>茨城県土浦市（千葉県松戸市にも長く住んでいました）</dd>
          <dt>趣味</dt>
          <dd>音楽鑑賞（韻シストとMariah Careyが好きです）、新しい知識の習得、キックボクシング、映画、アニメ（ガンダムなら
            オリジンと鉄血のオルフェンズが好きです）</dd>
          <dt>好きな言葉</dt>
          <dd>「好きこそ物の上手なれ」</dd>
          <dd>「人事を尽くして天命を待つ」</dd>
          <dt>将来の夢</dt>
          <dd>猫がいる職場で猫に邪魔されながら仕事をすること</dd>
          <dd>プログラミングで人生を変えたいと思っている人の助けになること</dd>
          <dd>従業員それぞれが自己実現をするための会社を作ること</dd>
        </dl>
      </div>
    </section>
    <section class="b-blog" id="blog">
      <h2 class="c-heading">
        <span>BLOG</span>
        <b>最近の活動</b>
      </h2>
      <ul class="b-blog__inner m-blogs">
        <li class="c-blog">
          <figure class="c-blog__img"><img src="<?php echo get_template_directory_uri(); ?>/image/c-blog--01.jpg" alt=""></figure>
          <div class="c-blog__txt">
            <p class="c-blog__title">「Hello,GitHub」に参加しました</p>
            <time class="c-blog__date">2020.3.8</time>
          </div>
        </li>
        <li class="c-blog">
          <figure class="c-blog__img"><img src="<?php echo get_template_directory_uri(); ?>/image/c-blog--02.jpg" alt=""></figure>
          <div class="c-blog__txt">
            <p class="c-blog__title">「Hello,GitHub」に参加しました</p>
            <time class="c-blog__date">2020.3.8</time>
          </div>
        </li>
        <li class="c-blog">
          <figure class="c-blog__img"><img src="<?php echo get_template_directory_uri(); ?>/image/c-blog--03.jpg" alt=""></figure>
          <div class="c-blog__txt">
            <p class="c-blog__title">「Hello,GitHub」に参加しました</p>
            <time class="c-blog__date">2020.3.8</time>
          </div>
        </li>
      </ul>
      <div class="c-blog-more">
        <p class="c-blog-more__inner"><a href="">MORE</a></p>
      </div>
    </section>
    <section class="b-contact" id="contact">
      <h2 class="c-heading">
        <span>CONTACT</span>
        <b>お問い合わせ</b>
      </h2>
      <div class="b-contact__inner">
        <p>準備中</p>
      </div>
    </section>
  </main>
<?php get_footer(); ?>