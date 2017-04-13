function selectAll() {
    var arrObj = document.all;
    for (var i = 0; i < arrObj.length; i++) {
        if (typeof  arrObj[i].type != "undefined" && arrObj[i].type == 'checkbox') arrObj[i].checked = true;
    }
}

function unSelectAll() {
    var arrObj = document.all;
    for (var i = 0; i < arrObj.length; i++) {
        if (typeof  arrObj[i].type != "undefined" && arrObj[i].type == 'checkbox') arrObj[i].checked = false;
    }
}

function orderlist() {
    // window.open("../orderlist.htm","new","width=300,height=400");
    window.open("../orderlist.htm", null, "height=400,width=300,status=yes,toolbar=no,menubar=no,location=no");
}
