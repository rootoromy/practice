jQuery(".openbtn1").click(function () {//ボタンがクリックされたら
  jQuery(this).toggleClass('active');//ボタン自身に activeクラスを付与し
  jQuery("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

jQuery("#g-nav").click(function () {//ナビゲーションのリンクがクリックされたら
    jQuery(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
    jQuery("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});