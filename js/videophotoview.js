function openImagePopup() {
    $('#image-popup').fadeIn(); // 显示图片弹出窗口
}

function closeImagePopup() {
    $('#image-popup').fadeOut(); // 关闭图片弹出窗口
}

function openVideoPopup() {
    $('#video-popup').fadeIn(); // 显示视频播放器弹出窗口
}

function closeVideoPopup() {
    $('#video-popup').fadeOut(); // 关闭视频播放器弹出窗口
}

$(document).ready(function() {
    $('.video-thumbnail').on('click', function() {
        // var videoSrc = 'http://localhost:8080/assets/HUIZHOUvideo/徽商/中国商人之无梦徽州_标清.mp4'; // 更换为你的视频路径
        $('#video-player').attr('src', videoSrc); // 设置视频播放器的源

        $('#video-popup').fadeIn(function() {
            // 显示视频播放器弹出窗口后自动播放视频
            var video = document.getElementById('video-player');
            video.play();
        });

        $('#video-popup').fadeIn(); // 显示视频播放器弹出窗口
    });

    $('.close-btn, #video-popup').on('click', function() {
        $('#video-popup').fadeOut(); // 点击关闭按钮或弹窗外部关闭弹窗
    });

    $('.video-popup').on('click', function(e) {
        e.stopPropagation(); // 防止弹窗内部点击关闭弹窗
    });
});
