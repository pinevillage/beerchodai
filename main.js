var moves;

// ランダムな整数を返す
function random(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

// クリック時の動作
function toggle(a, b) {
    $(document.getElementsByClassName('block')[a + (b * 4)]).toggleClass("b1 b2");
    if (a < 3) { $(document.getElementsByClassName('block')[(a + 1) + (b * 4)]).toggleClass("b1 b2") }
    if (a > 0) { $(document.getElementsByClassName('block')[(a - 1) + (b * 4)]).toggleClass("b1 b2") }
    if (b < 3) { $(document.getElementsByClassName('block')[a + ((b + 1) * 4)]).toggleClass("b1 b2") }
    if (b > 0) { $(document.getElementsByClassName('block')[a + ((b - 1) * 4)]).toggleClass("b1 b2") }
  
    if (document.getElementsByClassName('b1').length == 16) {
        document.getElementById('winmodal').style.display = 'block';
    }
}

//
function set(a, b) {
    $(document.getElementsByClassName('block')[a + (b * 4)]).toggleClass("b1 b2");
    // if (a < 3) { $(document.getElementsByClassName('block')[(a + 1) + (b * 4)]).toggleClass("b1 b2") }
    // if (a > 0) { $(document.getElementsByClassName('block')[(a - 1) + (b * 4)]).toggleClass("b1 b2") }
    // if (b < 3) { $(document.getElementsByClassName('block')[a + ((b + 1) * 4)]).toggleClass("b1 b2") }
    // if (b > 0) { $(document.getElementsByClassName('block')[a + ((b - 1) * 4)]).toggleClass("b1 b2") }
}

// ゲームを始める
function newpanel() {
    var j = document.getElementsByClassName('b2').length
    for (var i = 0; i < j; i++) {
        $(document.getElementsByClassName('b2')[0]).toggleClass("b1 b2");
    }

    for (var i = 0; i < 4; i++) {
        for (var j = 0; j < 4; j++) {
          set(i, j);
        }
    }
}

//
newpanel();

// $('span.blockChar').css({
//   'color':'#000',
//   'position': 'absolute',
//   'top': Math.random()+'em',
//   'left': '0.7em',
//   'margin': '-0.5em',
//   'font-size': '30vw',
// });

// ブロック文字の配置
// $('span.blockChar').each(function() {
//   aa = Math.random() - 0.7;
//   bb = Math.random() - 0.7 ;
//   $(this).css({
//     'color':'#000',
//     'position': 'absolute',
//     'top': aa +'em',
//     'left': bb + 'em',
//     'margin': '0em',
//     'font-size': '30vw',});
// });

$(function(){
  var threshold = 200
  var topBtn = $('#scrolltop');
  topBtn.css('bottom', '-100px');
  $(window).on('scroll',function () {
    if ($(this).scrollTop() > threshold) {
      topBtn.stop().animate({'bottom' : '30px'}, 200);
    } else {
      topBtn.stop().animate({'bottom' : '-100px'}, 200);
    }
  });
  topBtn.on('click',function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
});

$(function($) {
  $('.block').css('cursor','pointer');
  $('.block').on('click',function () {
    var speed = 700;
    var href= $(this).find('a').attr('href');
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate(
      {
        // scrollTop: position
      },speed,'swing');
    return false;
  });
});


$(function() {
    const UserName = "yocotune";
    $.ajax('https://www.instagram.com/' + UserName + '/', {
        timeout : 2000,
        datatype:'html'
    }).then(function(data){
      // dataにはHTMLが入っている
      json_string = data.split("window._sharedData = ")[1];
      console.log(json_string.substr(-4000));
      json_string = json_string.split("};</script")[0] + "}";
      this.Array_data = JSON.parse(json_string);
      console.log(this.Array_data);
      let datas = this.Array_data.entry_data.ProfilePage[0]
                      .graphql.user
                      .edge_owner_to_timeline_media.edges;
            for (i in datas) {
                url = datas[i].node.display_url;
                this.html = `
                <div class="card">
                    <img src="${url}" class="card-img-top" />
                </div>
                `;
                $(".insta-card").append(this.html);
            }
            //     this.html = `
            //     <div class="card">
            // <iframe src="https://www.youtube.com/embed/J4P4ln781D0?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=J4P4ln781D0" frameborder="0" allowfullscreen></iframe>
            //     </div>
            //     `;
            //     $(".insta-card").append(this.html);
    });
});


$.ajax({
    type: 'get',
    url: 'https://dl.dropbox.com/s/feq2gaag3vxsv3z/brco-2.svg'//ここにパスを入れる（環境に合わせて変更）
  }).done(function(data) {
    var svg = $(data).find('svg');
    $('.aaa').prepend(svg);
  });