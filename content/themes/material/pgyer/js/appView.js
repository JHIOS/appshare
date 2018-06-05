function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}
function install() {


//     if (aType == 'ios') {
//         if (!isMobileRequest) {
//             alert(askBrowserAlert);
//             return;
//         }
//     }
//
//     if (aType == 'ios' && browseType == 'android') {
//         alert(forIosAlert);
//         return;
//     } else if (aType == 'android' && browseType == 'ios') {
// //        alert(forAndroidAlert);
// //        return;
//     }
//
// //    if ( isWechatRequest && aType == 'android') {
//     if ( isWechatRequest) {
//         alert(reminderWechatContent);
//         return;
//     }
//
//     if (isQQRequest && aType == 'android') {
//         alert(reminderQQContent);
//         return ;
//     }
//
//     if (isUCRequest && !isIOS) {
//         alert(reminderUCContent);
//         return ;
//     }

    $.get("includes/download.php?sskey="+aKey+"&type=open",function(data,status){

    });


    //
    url = plisturl;
    window.location.href = url;
}

function install_loading() {



//     if (aType == 'ios') {
//         if (!isMobileRequest) {
//             alert(askBrowserAlert);
//             return;
//         }
//     }
//
//     if (aType == 'ios' && browseType == 'android') {
//         alert(forIosAlert);
//         return;
//     } else if (aType == 'android' && browseType == 'ios') {
// //        alert(forAndroidAlert);
// //        return;
//     }

//    if ( isWechatRequest && aType == 'android') {
    if ( isWechatRequest) {
        alert(reminderWechatContent);
        return;
    }

    // if ( isWeiboRequest) {
    //     alert(reminderWeiboContent);
    //     return;
    // }
    //
    // if (isQQRequest && aType == 'android') {
    //     alert(reminderQQContent);
    //     return ;
    // }
    //
    // if (isUCRequest && !isIOS) {
    //     alert(reminderUCContent);
    //     return ;
    // }

    if(aType == 'ios'){
        $("#down_load").hide();
        $(".loading").css("display","inline-block");
        setTimeout('check()',5000);
    }


    $.get("includes/download.php?sskey="+aKey+"&type=open",function(data,status){

    });


    //
    url = plisturl;
    window.location.href = url;
}
 function check() {
    $(".loading").hide();
    $("#showtext").show();
 }

