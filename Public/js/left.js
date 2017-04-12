$(function(){
    showsubmenu(0);
});

function showsubmenu(sid) {
    whichEl = eval("submenu" + sid);
    if (whichEl.style.display == "none") {
        eval("submenu" + sid + ".style.display=\"\";");
    } else {
        eval("submenu" + sid + ".style.display=\"none\";");
    }
}

function closed() {
    var a = confirm("确定要关闭页面吗?");
    if (a) {
        window.top.close();
    }
}
