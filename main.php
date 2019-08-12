<?php
  session_start();
  header("Content-type: text/html; charset=utf-8");
  //クリックジャッキング対策
  header('X-FRAME-OPTIONS: SAMEORIGIN');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="content-language" content="ja">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<script src="./main.js"></script>
<link href="./style.css" rel="stylesheet">
<link href="./style_custum.css" rel="stylesheet">
<link href='./fullcalendar/core/main.css' rel='stylesheet' />
<link href='./fullcalendar/daygrid/main.css' rel='stylesheet' />
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<script src='./fullcalendar/core/main.js'></script>
<script src='./fullcalendar/daygrid/main.js'></script>

</head>

<body>
  <!-- NAV BAR -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <div class="navbar-brand" id="logo">
        <!-- LOGO -->
      </div>
      <!-- MENU -->
      <nav class="bottom-menu">
        <ul class="navbar-nav" id="main-navbar">
          <!-- 0 HOME -->
          <li class="nav-item">
            <a class="nav-link" href="./index.html">
              <img src="asset/img/icon/home.svg" alt="home">
            </a>
          </li>
          <!-- 1 最新情報 -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="asset/img/icon/news.svg" alt="news">
            </a>
          </li>
          <!-- 2 イベント情報-->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="asset/img/icon/news.svg" alt="events">
            </a>
          </li>
          <!-- 3 ギャラリー -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="asset/img/icon/works.svg" alt="gallary">
            </a>
          </li>
          <!-- 4 過去の仕事情報-->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="asset/img/icon/works.svg" alt="works">
            </a>
          </li>
          <!-- 5 Beer Chodai office について -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="asset/img/icon/logo.svg" alt="about_us">
            </a>
          </li>
          <!-- 6 プロフィール -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="asset/img/icon/profile.svg" alt="profile">
            </a>
          </li>
          <!-- 7 業務内容 -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="asset/img/icon/works.svg" alt="works">
            </a>
          </li>
          <!-- 8 goods-->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="asset/img/icon/goods.svg" alt="goods">
            </a>
          </li>
          <!-- 9 会社概要 -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="asset/img/icon/logo.svg" alt="company">
            </a>
          </li>
          <!-- 10 問い合わせ先 -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="asset/img/icon/mail.svg" alt="contact">
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </nav>
  <div class="main_contents">
    <!-- 1 最新情報 -->
    <section>
      <h2 class="title">
        news
      </h2>
    </section>
    <!-- 2 イベント情報 -->
    <section>
      <h2 class="title">
        events
      </h2>
      <div id="calendar"></div>
    </section>
    <!-- 3 ギャラリー -->
    <section>
      <h2 class="title">
        gallery
      </h2>
      <div class="insta-card"></div>
    </section>
    <!-- 4 過去の仕事情報 -->
    <section>
      <h2 class="title">
        works
      </h2>
    </section>
    <!-- 5 Beer Chodai officeについて -->
    <section>
      <h2 class="title">
        about  Beer Chodai office 
      </h2>
      <div>
        <p class="pblock">
          主に、デザイン業務・印刷・アパレル事業イベントプロデュースなどを手掛ける個人企業 兼 ブランドです。<br>
          2019年○月○日に立ち上げたばかりの小さなオフィスです。
          設立に至るまでのあいだ、ARTを通して沢山のお客様や友人、家族から支えられてBeer Chodai office（以下”BC"）が誕生しました。

          私たちはそんなARTや人との出会い、つながりに感謝の気持と誠意ある対応をもっとも大切にしています。

          私たちが生み出す思いや作品たちによって、みなさまに笑顔とHAPPYをお届けしていくこと、それが”BC”の役目であり目的です。
        </p>
      </div>
    </section>
    <!-- 6 プロフィール -->
    <section>
      <h2 class="title">
        profile
      </h2>
      <img src="asset/img/profile.svg" alt="profile">
    </section>
    <!-- 7 業務内容 -->
    <section>
      <div>
        <h2 class="title" id="anchor">
          prices
        </h2>
      </div>
      <div>
        <p class="pblock">
          ●業務内容・料金表（税別）
          【デザイン業務】
          ・ロゴデザイン ¥50,000〜
          ・名刺デザイン ¥20,000〜
          ・フライヤー / チラシ / ポスターデザイン ¥20,000〜
          ・ニガアート（似顔絵） ¥5,000〜
        </p>
      </div>
      <div class="pblock">
        <ul>
          <li>家 / 店舗壁画</li>
          <li>看板デザイン / 制作</li>
          <li>ホームページデザイン / 制作</li>
          <li>個人年賀状</li>
          <li>オリジナルＬＩＮＥスタンプ</li>
          <li>オリジナルグッズ / 商品　などなど</li>
        </ul>
      </div>
      <div>
        <p class="pblock">
          ご予算やご要望に応じて様々なご提案やデザイン制作をいたします。
          お気軽にお問い合わせください。
        </p>
      </div>
      <div>
        <p class="pblock">
          【イベント出店業務】
          ・ニガアートブース出店
          イベントや催事などでブースを設営して、お客様の似顔絵を１コイン（¥500)でお書き致します。
          出店依頼料¥20,000〜
        </p>
      </div>
    </section>
    <!-- 8 goods -->
    <section>
      <div>
        <h2 class="title">
          goods
        </h2>
      </div>
      <div class="pblock">
        <ul>
          <li>トップス</li>
          <li>ボトムス</li>
          <li>バック</li>
          <li>マグカップ</li>
          <li>ペット用衣類</li>
          <li>缶バッジ</li>
        </ul>
      </div>
    </section>
    <!-- 9 会社概要 -->
    <section>
      <h2 class="title">
        company
      </h2>
      <div class="pblock">
        <ul>
          <li>会社名：Beer Chodai office</li>
          <li>設立：2019年8月16日</li>
          <li>代表：増永　進之介</li>
          <li>所在地：〒802-0006 福岡県北九州市小倉北区魚町２ー４ー８ー４Ｆ</li>
        </ul>
      </div>
    </section>
    <!-- 10 問い合わせ先 -->
    <section>
      <h2 class="title">
        contact
      </h2>
      <p> 全ての項目が必須です。</p>
      <form action="mail_check.php" method="post">
        <ul>
          <li><p>名前：<input type="text" name="name"></p></li>
          <li><p>メールアドレス：<input type="text" name="mail" size="50"></p></li>
          <li><p><textarea name="comment" rows="4" cols="40">コメントをどうぞ</textarea></p></li>
        </ul>
        <input type="hidden" name="token" value="<?=sha1(session_id())?>">
        <input class="button" type="submit" value="確認する">
      </form>
    </section>
  </div>
</body>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: ['dayGrid', 'timeGrid', 'list'],
      header: {
        left: 'today month,basicWeek',
        center: 'title',
        right: 'prev next'
      },
      editable: true, // イベントを編集
      allDaySlot: false, // 終日表示の枠を表示
      eventDurationEditable: false, // イベント期間をドラッグしで変更
      slotEventOverlap: false, // イベントを重ねて表示
      selectable: true,
      selectHelper: true,
      firstDay: 1, // パラメータが１だと月曜日から表示
      droppable: true,// イベントをドラッグできるか
      select: function (start, end, allDay) {
        //日の枠内を選択したときの処理
      },
      dayClick: function (date, jsEvent, view) {
        //日付をクリックしたときの処理
        alert('Clicked on: ' + date.format());
      },
      eventClick: function (calEvent, jsEvent, view) {
        //イベントをクリックしたときの処理
        alert('Clicked on: ' + calEvent);
        console.log(calEvent);
        console.log(jsEvent);
        console.log(view);
      },
      eventDrop: function (item, delta, revertFunc, jsEvent, ui, view) {
        //ドロップした情報
        alert('Clicked on: ' + item.title);
        //ドロップしたことを元に戻したいとき
        revertFunc();
      },
      events: [
        {
          title: 'イベント',
          start: '2019-03-23'
        }
      ]
    });
    calendar.render();
  });
</script>

</html>