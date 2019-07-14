//  loadingのdivを取得
var loading = document.getElementById('loading');
// contentsのdivを取得
var contents = document.getElementById('contents');

// 読み込みが完了したら
window.addEventListener('load', function () {
  // loadingのdivを非表示に
  loading.style.display = 'none';
  // contentsのdivを表示
  contents.classList.remove('hidden');
});