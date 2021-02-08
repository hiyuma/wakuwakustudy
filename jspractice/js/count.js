var count = 10;

function countDown() {
  console.log('count');
  if (count !== 0) {
    document.getElementById('count').innerHTML = count + " 秒";
    count--;
  } else {
    document.getElementById('count').innerHTML = count + " 秒";
    clearTimeout();
    alert("0秒になりました。OKを押してください。");
    count = 10;
  }
}