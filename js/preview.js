function MoveCheck() {
    var res = confirm("本当に削除しますか？");
    if (res == true) {
        window.location.href = "delete.php";
    } else {
        alert("削除を取り消しました。");
    }
}