function deleteHandle(event) {
  //一旦フォームを止める
  event.preventDefault();
  if (confirm('ほんまに消してええんか？')) {
    //削除OKなら再開
    document.getElementById('delete-form').submit();
  } else {
    alert('キャンセルしたで！')
  }
}