function memo_func() {
  const memo = document.getElementById("memo");
  const btn = document.getElementById("btn_memo");
  //メモの表示切り替え
  if (memo.style.display == "block") {
    // noneで非表示
    memo.style.display = "none";
  } else {
    // blockで表示
    memo.style.display = "block";
  }

  //ボタンのテキスト変更
  if (btn.textContent == "表示") {
    btn.textContent = "非表示";
  } else {
    btn.textContent = "表示";
  }
}
