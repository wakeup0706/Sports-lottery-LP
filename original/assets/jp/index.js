// document.addEventListener('scroll', function() {
//     var header = document.querySelector('.menu_wrapper');
//     var main = document.getElementById('main');
//     var mainBottom = main.getBoundingClientRect().bottom;

//     if (mainBottom < 0) {
//         header.style.display = 'block';
//     } else {
//         header.style.display = 'none';
//     }
// });


$(function() {

    $(window).scroll(function (){
        $(".js-markerScrollAnimation").each(function(){
          var position = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > position - windowHeight){
            $(this).addClass('is-active');
          }
        });
      });

      /* fadeup */
      function fadeAnime(){
        $('.fadeUpTrigger').each(function(){
          var elemPos = $(this).offset().top-50;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll >= elemPos - windowHeight){
          $(this).addClass('fadeUp');
          }else{
          $(this).removeClass('fadeUp');
          }
          });

      /* fadeup(右) */
      $('.fadeRightTrigger').each(function(){ 
        var elemPos = $(this).offset().top-20;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeRight');
        }else{
        $(this).removeClass('fadeRight');
        }
        });

        /* fadeup(左) */
        $('.fadeLeftTrigger').each(function(){
          var elemPos = $(this).offset().top-20;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll >= elemPos - windowHeight){
          $(this).addClass('fadeLeft');
          }else{
          $(this).removeClass('fadeLeft');
          }
          });

        }

      $(window).scroll(function (){
        fadeAnime();
      });

    /* ページ内スクロール */
    $('a[href^="#"]').on('click', function(){
      var headerHeight = $('header').outerHeight();
      var target = $(this.hash);
      var targetY, hash;
  
      if (target.length) {
          targetY = target.offset().top - headerHeight;
          hash = this.hash;
      } else {
          targetY = 0;
          hash = window.location.pathname;
      }
  
      $('html, body').animate({scrollTop: targetY}, 400, 'swing');
      window.history.pushState(null, null, hash);
      return false;
  });


    /* [ Accordion ] */
	$('.box-accordion').on('click', function(event){
		$(this).toggleClass('hide');
		$(this).children('.inner').slideToggle(400);
	});
	

    // let box = $('.FtBtn'),
    //     boxHeight = box.innerHeight(),
    //     boxWrapper = $('.about'),
    //     boxWrapperHeight = boxWrapper.innerHeight(),
    //     boxWrapperTop = boxWrapper.offset().top,
    //     boxWrapperBottom = boxWrapperTop + boxWrapperHeight,
    //     marginTop = 20;
    
    // $(window).on('scroll', function() {
    //     let value = $(this).scrollTop();
    //     if ( value > boxWrapperBottom - boxHeight - marginTop) {
    //         box.css({
		// 		'bottom': marginTop,
		// 		'top' : 'auto'
    //         });
    //     } else if ( value > boxWrapperTop - marginTop) {
    //         box.css({
    //             'bottom': marginTop,
		// 		'top' : 'auto'
    //         });
    //     } else {
    //         box.css({
		// 		'top' : '10px',
		// 		'bottom' : 'auto'
    //         });
    //     }
    // });
});


var slideWrapper = $(".slide_video");

// POST commands to YouTube or Vimeo API
function postMessageToPlayer(player, command) {
  if (player == null || command == null) return;
  player.contentWindow.postMessage(JSON.stringify(command), "*");
}

// Play or pause video based on control
function playPauseVideo(slick, control) {
  var player = slick.find(".slick-current video").get(0);
  
  if (player) {
    player.onended = function () {
      $('.slide_video').slick("slickNext");
    };
    if (control === "play") {
      player.style.display = 'block'; // Show video
      player.play();
    } else {
      player.pause();
    }
  }
}


var slideWrapper = $(".slide_video");

// POST commands to YouTube or Vimeo API
function postMessageToPlayer(player, command) {
  if (player == null || command == null) return;
  player.contentWindow.postMessage(JSON.stringify(command), "*");
}

// Play or pause video based on control
function playPauseVideo(slick, control) {
  var player = slick.find(".slick-current video").get(0);
  
  if (player) {
    player.onended = function () {
      $('.slide_video').slick("slickNext");
    };
    if (control === "play") {
      player.style.display = 'block'; // Show video
      player.play();
    } else {
      player.pause();
    }
  }
}

var slideWrapper = $(".slide_video");

// POST commands to YouTube or Vimeo API
function postMessageToPlayer(player, command) {
  if (player == null || command == null) return;
  player.contentWindow.postMessage(JSON.stringify(command), "*");
}

// Play or pause video based on control
function playPauseVideo(slick, control) {
  var player = slick.find(".slick-current video").get(0);
  
  if (player) {
    player.onended = function () {
      $('.slide_video').slick("slickNext");
    };
    if (control === "play") {
      player.style.display = 'block'; // Show video
      player.play();
    } else {
      player.pause();
    }
  }
}



var slideWrapper = $(".slide_video");

// POST commands to YouTube or Vimeo API
function postMessageToPlayer(player, command) {
  if (player == null || command == null) return;
  player.contentWindow.postMessage(JSON.stringify(command), "*");
}

// Play or pause video based on control
function playPauseVideo(slick, control) {
  var player = slick.find(".slick-current video").get(0);
  
  if (player) {
    player.onended = function () {
      $('.slide_video').slick("slickNext");
    };
    if (control === "play") {
      player.style.display = 'block'; // Show video
      player.play();
    } else {
      player.pause();
    }
  }
}

var slideWrapper = $(".slide_video");

// POST commands to YouTube or Vimeo API
function postMessageToPlayer(player, command) {
  if (player == null || command == null) return;
  player.contentWindow.postMessage(JSON.stringify(command), "*");
}

// Play or pause video based on control
function playPauseVideo(slick, control) {
  var player = slick.find(".slick-current video").get(0);
  
  if (player) {
    player.onended = function () {
      $('.slide_video').slick("slickNext");
    };
    if (control === "play") {
      player.style.display = 'block'; // Show video
      player.play();
    } else {
      player.pause();
    }
  }
}

// $(function () {
//   slideWrapper.on("init", function (event, slick) {
//     slick = $(slick.$slider);
    
//     // 初期状態で最初のドットには `slick-active` クラスを付与しない
//     $('.slick-dots li').removeClass('slick-active');
    
//     // 初期状態で最初のスライドの動画は表示し、再生しない
//     var firstSlide = slick.find(".slick-slide").first();
//     var firstVideo = firstSlide.find("video").get(0);
//     if (firstVideo) {
//       firstVideo.style.display = 'block'; // 動画を表示
//       firstVideo.pause(); // 動画を再生しない
//     }
//   });
  
//   slideWrapper.on("beforeChange", function (event, slick, currentSlide, nextSlide) {
//     slick = $(slick.$slider);
//     // スライド変更前に、現在のスライドの動画を一時停止
//     playPauseVideo(slick, "pause");
    
//     // 現在のドットから `slick-active` クラスを削除
//     $('.slick-dots li').removeClass('slick-active');
//   });
  
//   slideWrapper.on("afterChange", function (event, slick, currentSlide) {
//     slick = $(slick.$slider);
//     // スライド変更後に、新しいスライドの動画を再生
//     playPauseVideo(slick, "play");
    
//     // 現在のスライドに対応するドットに `slick-active` クラスを付与
//     $('.slick-dots li').eq(currentSlide).addClass('slick-active');
//   });

//   slideWrapper.on("click", ".slick-dots li", function () {
//     var index = $(this).index();
//     var slick = $(slideWrapper);
    
//     // ドットがクリックされた時に、対応するスライドに移動
//     slick.slick('slickGoTo', index);
    
//     // ドットがクリックされた時に、そのスライドの動画を再生
//     var targetSlide = slick.find(".slick-slide").eq(index);
//     var targetVideo = targetSlide.find("video").get(0);
    
//     if (targetVideo) {
//       targetVideo.style.display = 'block'; // 動画を表示
//       targetVideo.play();
//     }
    
//     // ドットの `slick-active` クラスを付与
//     $('.slick-dots li').removeClass('slick-active');
//     $(this).addClass('slick-active');
//   });

//   slideWrapper.slick({
//     fade: true,
//     cssEase: 'linear',
//     autoplaySpeed: 90000000,
//     autoplay: true,
//     arrows: false,
//     dots: true,
//   });
// });


// #top_menu 内のすべての <a> タグを取得する
const menuLinks = document.querySelectorAll('#top_menu a');

menuLinks.forEach(link => {
    let href = link.getAttribute('href');
    if (href && href.includes('https://kuji-cloud.com')) {
        href = href.replace('https://kuji-cloud.com', ''); // 特定の文字列を空に置換する
        link.setAttribute('href', href);
    }

    if (link.textContent.trim() === 'くじクラウドとは') {
        link.textContent = '利用イメージ'; // テキストを変更する
        link.setAttribute('href', '#use'); // href を変更する
    }
    if (link.textContent.trim() === '実績・事例') {
        link.textContent = '導入事例';
        link.setAttribute('href', '#case-ancor');
    }
    if (link.textContent.trim() === '機能') {
        link.textContent = 'オプション';
        link.setAttribute('href', '#option');
    }
});

document.addEventListener('wpcf7submit', function(event) {
    var responseOutput = event.target.querySelector('.wpcf7-response-output');

    if (responseOutput) {
        // レスポンスメッセージが表示されるときにアニメーションでポップアップを表示
        responseOutput.classList.add('show');
        
        // 3秒後にポップアップを非表示にする
        setTimeout(function() {
            responseOutput.classList.remove('show');
        }, 3000); // 3秒後に非表示
    }
}, false);

