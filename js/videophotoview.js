function openImagePopup(element) {
    var photoId = $(element).data('image-popup');
    $('#' + photoId).fadeIn(); // 显示对应的弹出窗口
}

function closeImagePopup(popupId) {
    $('#' + popupId).fadeOut(); // 关闭对应的弹出窗口
}



// function openVideoPopup(element) {
//     var videoSrc = $(element).data('video-source');
//     var popupId = $(element).closest('.ts-gallery-img').find('.video-popup').attr('id');
//     $('#' + popupId + ' video').attr('src', videoSrc);
//     $('#' + popupId).fadeIn(); // 显示视频播放器弹出窗口
//     // $('#video-popup').fadeIn(); // 显示视频播放器弹出窗口
// }

function openVideoPopup(element) {
    var videoSrc = $(element).data('video-source');
    var popupId = $(element).data('video-id');
    $('#' + popupId + ' video').attr('src', videoSrc);
    $('#'+ popupId ).fadeIn();
}

function closeVideoPopup(popupId) {
    $('#'+popupId).fadeOut();
}

// $(document).ready(function() {
//     $('.video-thumbnail').on('click', function() {
//         $('#video-player').attr('src', videoSrc); // 设置视频播放器的源
//         $('#video-popup').fadeIn(function() {
//             // 显示视频播放器弹出窗口后自动播放视频
//             var video = document.getElementById('video-player');
//             video.play();
//         });

//         $('#video-popup').fadeIn(); // 显示视频播放器弹出窗口
//     });

//     $('.close-btn, #video-popup').on('click', function() {
//         $('#video-popup').fadeOut(); // 点击关闭按钮或弹窗外部关闭弹窗
//     });

//     $('.video-popup').on('click', function(e) {
//         e.stopPropagation(); // 防止弹窗内部点击关闭弹窗
//     });
// });

$(document).ready(function() {
    $('.close-btn, .video-popup').on('click', function() {
        var popupId = $(this).closest('.video-popup').attr('id');
        closeVideoPopup(popupId);
    });

    $('.video-thumbnail').on('click', function() {
        openVideoPopup(this);
    });

    $('.video-popup').on('click', function(e) {
        e.stopPropagation();
    });
});
