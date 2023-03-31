var xhr = new XMLHttpRequest();
  xhr.open('get', 'https://v1.hitokoto.cn');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      var data = JSON.parse(xhr.responseText);
      var hitokoto = document.getElementById('hitokoto');
      hitokoto.innerText = data.hitokoto;
      var h = new Array()
      h[0] = data.hitokoto;
      new Typed('.typed-element', {
        strings: [h[0], "Welcome to Oierbbs!", "Start coding now!", "An AC a day keeps WA away.", "#include <bits/stdc++.h>", "It is more than coding."],
      typeSpeed: 50,
      backSpeed: 5,
      startDelay: 500,
      backDelay: 2000,
      loop: true,
      showCursor: true,
      cursorChar: '|',
      autoInsertCss: true,
      contentType: 'null'
      }); 
    }
  }
  xhr.send();

