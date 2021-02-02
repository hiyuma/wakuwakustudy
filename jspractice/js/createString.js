
const S = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789" // 62文字
let p = Array(S.length).fill(0)

// 100個づつ乱数を取り出し集計する処理を6200回繰り返す(620000回行う)
$('.creatString a').on('click', function ()
  for (let i = 0; i < 100 * S.length; ++i) {
  const arr = crypto.randomFillSync(new Uint8Array(100))
  for (let j = 0; j < arr.length; ++j) {
    p[arr[j] % S.length]++;
  }
}

document.getElementById('String').innerHTML = p;
 // => 均等にばらければ全部が10000前後になるはずだが、あきらかに0-7番目の要素のカウントが大きいことが分かる。