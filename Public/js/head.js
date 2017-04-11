function showTime() {
    myTime = new Date();
    var monthArray = new Array("1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月");
    var dayArray = new Array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六");

    year = myTime.getFullYear();
    date = myTime.getDate();
    hours = myTime.getHours();
    minutes = myTime.getMinutes();
    seconds = myTime.getSeconds();

    if (hours == 0) {
        hours = 12;
    }

    if (minutes <= 9) {
        minutes = "0" + minutes;
    }

    if (seconds <= 9) {
        seconds = "0" + seconds;
    }

    theTime = "今天是：" + year + "年 " + monthArray[myTime.getMonth()] + date + "日 " + dayArray[myTime.getDay()] + " 当前时间 " + hours + ":" + minutes + ":" + seconds;

    dt.innerHTML = theTime;
    setTimeout("showTime()", 1000);
    //window.clearTimeout(5000):

}
