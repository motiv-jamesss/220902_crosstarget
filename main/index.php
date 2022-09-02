<!doctype html>
<html lang="kr">

<head>
  <!-- 
  require_once 레퍼런스
  https://velog.io/@profile_exe/WEB-PHP-require-include-absolutepath 
  -->
  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/include/header.php';?>
  <title>Main</title>
</head>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/include/navigation.php';?>

<body>
  <div class="container-fluid bgLightGrey">
    <div class="container py200">
      <div class="row">
        <div class="col-7 mainBanner">
          <h3 class="colorOrange fontWeight700">Cross<span class="colorNavy opacity-50">target</span></h3>
          <h1 class="fontWeight800 colorNavy">
            전세계 어디에나 국경 없는<br>
            연결과 마케팅 자동화
          </h1>
          <h4 class="fontWeight500 colorNavy mt40">
            국경, 크리에이티브, 디바이스 제약을 뛰어넘는<br>
            광고 자동화를 통해 전세계 어디에나<br>
            광고주가 원하는 고객에게 메시지를 전달할 수 있습니다.
          </h4>
          <button type="button" class="btn btn-primary ct mt40">Learn More</button>
        </div>
        <div class="col-5 imgStack">
          <img class="shadowClose imgF" src="/asset/img/main/frame6.svg">
          <img class="shadowClose imgA" src="/asset/img/main/frame1.svg">
          <img class="shadowClose imgB" src="/asset/img/main/frame2.svg">
          <img class="shadowFar imgC" src="/asset/img/main/frame3.svg">
          <img class="shadowFar imgD" src="/asset/img/main/frame4.svg">
          <img class="shadowFar imgE" src="/asset/img/main/frame5.svg">
        </div>
      </div>
    </div>
  </div>
  <div class="container py150">
    <div class="row">
      <div class="col-12">
        <h2 class="fontWeight700 text-center">
          하나에 마리아 어머님,<br>
          밤을 그리워 버리었습니다
        </h2>
        <h5 class="fontWeight500 colorNavy mt24 text-center">
          별 나는 헤일 그리워 봅니다. 묻힌 부끄러운 소학교 이제 시와 위에도 계십니다.<br>
          한 것은 그리고 까닭입니다. 노새, 헤는 애기 나는 위에 이름을 까닭입니다.
        </h5>
      </div>
      <div class="col-12 d-flex mt24 gap40">
        <div class="flex1 bgNavy colorWhite border8 py100 text-center">
          <h3>Sample</h3>
        </div>
        <div class="flex1 bgNavy colorWhite border8 py100 text-center">
          <h3>Sample</h3>
        </div>
        <div class="flex1 bgNavy colorWhite border8 py100 text-center">
          <h3>Sample</h3>
        </div>
        <div class="flex1 bgNavy colorWhite border8 py100 text-center">
          <h3>Sample</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid py8 infiniteText">
  <span class="fontWeight300 parallelText marqueeStyle">
  </span>
  </div>
  <script>
    const pTag = document.querySelector('.parallelText');
    const parallelText = 'Crosstarget 샘플텍스트 here Crosstarget 샘플텍스트'.split('   ');

    function initTexts(element, textArray) {
      textArray.push(...textArray)
      for (let i = 0; i < textArray.length; i++) {
        element.innerText += `${textArray[i]} \u00a0`
      }
    }

    initTexts(pTag, parallelText)

    let count1 = 0;

    function marqueeText(count, element, direction) {
      if (count > element.scrollWidth / 2) {
        element.style.transform = `translateX(0)`
        count = 0
      }
      element.style.transform = `translateX(${count * direction}px)`
      return count;
    }

    function animate() {
      count1++;
      count1 = marqueeText(count1, pTag, -1);

      window.requestAnimationFrame(animate);
    }

    animate()
  </script>
  <div class="container py150">
    <div class="row">
      <div class="col-6">
        <div class="position-sticky" style="top: 10%">
          <h2 class="fontWeight700">
            하나에 마리아 어머님,<br>
            밤을 그리워 버리었습니다
          </h2>
          <h5 class="fontWeight500 colorNavy mt24">
            별 나는 헤일 그리워 봅니다. 묻힌 부끄러운 소학교 이제 시와 위에도 계십니다.<br>
            한 것은 그리고 까닭입니다. 노새, 헤는 애기 나는 위에 이름을 까닭입니다.
          </h5>
        </div>
      </div>
      <div class="col-6 d-flex flex-column gap40">
        <div class="flex1 bgNavy colorWhite border8 py150 text-center">
          <h3>Sample</h3>
        </div>
        <div class="flex1 bgNavy colorWhite border8 py150 text-center">
          <h3>Sample</h3>
        </div>
        <div class="flex1 bgNavy colorWhite border8 py150 text-center">
          <h3>Sample</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container py150 ">
    <div class="row">
      <div class="col-6">
        <h2 class="fontWeight700">
          하나에 마리아 어머님,<br>
          밤을 그리워 버리었습니다
        </h2>
        <h5 class="fontWeight500 colorNavy mt24">
          별 나는 헤일 그리워 봅니다. 묻힌 부끄러운 소학교 이제 시와 위에도 계십니다.<br>
          한 것은 그리고 까닭입니다. 노새, 헤는 애기 나는 위에 이름을 까닭입니다.
        </h5>
      </div>
      <div class="col-6 d-flex flex-column gap40">
        <div class="flex1 bgNavy colorWhite border8 py100 text-center">
          <h3>Sample</h3>
        </div>
        <div class="flex1 bgNavy colorWhite border8 py100 text-center">
          <h3>Sample</h3>
        </div>
        <div class="flex1 bgNavy colorWhite border8 py100 text-center">
          <h3>Sample</h3>
        </div>
        <div class="flex1 bgNavy colorWhite border8 py100 text-center">
          <h3>Sample</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- ////  JS  //// -->
  <script src="/js/bootstrap/bootstrap.bundle.js"></script>
</body>

</html>