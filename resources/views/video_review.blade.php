<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" type="text/css" href="https://www.mavenup.com/public/css/video_review/video-js.min.css" >
<link rel="stylesheet" type="text/css" href="https://www.mavenup.com/public/css/video_review/videojs.record.min.css" >
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<script src="https://www.mavenup.com/public/css/video_review/video.min.js"></script>
<script src="https://www.mavenup.com/public/css/video_review/RecordRTC.js"></script>
<script src="https://www.mavenup.com/public/css/video_review/adapter.js"></script>
<script src="https://www.mavenup.com/public/css/video_review/videojs.record.min.js"></script>
<script src="https://www.mavenup.com/public/css/video_review/browser-workarounds.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://www.mavenup.com/public/css/video_review/jquery.ui.widget.js"></script>
<script src="https://www.mavenup.com/public/css/video_review/transport.js"></script>
<script src="https://www.mavenup.com/public/css/video_review/jquery.fileupload.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

<video id="myVideo" playsinline class="video-js vjs-default-skin">
  <p class="vjs-no-js">
    To view this video please enable JavaScript, or consider upgrading to a
    web browser that
    <a href="https://videojs.com/html5-video-support/" target="_blank">
      supports HTML5 video.
    </a>
  </p>
</video>

<div class="progress" style="width: 322px; margin-top: 13px;">
                      <div class="progress-bar" role="progressbar" aria-valuenow=""
                      aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        0%
                      </div>
                    </div>

<script>
var options = {
    controls: true,
    width: 320,
    height: 240,
    plugins: {
        record: {
            audio: true,
            video: true,
            maxLength: 100,
            debug: true,
            hotKeys: true
        },
    },
       controlBar: {
        recordToggle :true,

    },
 
};
//  $(function() {
//             // Initialize the jQuery File Upload widget
//             $('#fileupload').fileupload({
//                 url: '{{route("uploadvideo")}}',
//                 type: 'POST',
                
//                 done: function (e, data) {
//                     debugger;
//                     $.each(data.files, function (index, file) {
//                         var message = 'Upload complete: ' + file.name + ' (' +
//                             file.size + ' bytes)';
//                         $('<p/>').text(message).appendTo(document.body);
//                         console.log(message);
//                     });
//                 },
//                 fail: function (e, data) {
//                     console.error('upload error:', e.type, data);
//                 }
//             });

// apply some workarounds for certain browsers
applyVideoWorkaround();

var player = videojs('myVideo', options, function() {
    // print version information at startup
    var msg = 'Using video.js ' + videojs.VERSION +
        ' with videojs-record ' + videojs.getPluginVersion('record') +
        ' and recordrtc ' + RecordRTC.version;
    videojs.log(msg);
});

// error handling
player.on('deviceError', function() {
    console.log('device error:', player.deviceErrorCode);
});

player.on('error', function(element, error) {
    console.error(error);
});

// user clicked the record button and started recording
player.on('startRecord', function() {
    console.log('started recording!');
});

// user completed recording and stream is available
player.on('finishRecord', function() {
    // the blob object contains the recorded data that
    // can be downloaded by the user, stored on server etc.
    console.log('finished recording: ', player.recordedData);
  
var audioFile = player.recordedData;
  var formData = new FormData();
formData.append('file', audioFile, audioFile.name);  
$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});
    $.ajax({
        xhr: function()
  {
    var xhr = new window.XMLHttpRequest();
    //Upload progress
    xhr.upload.addEventListener("progress", function(evt){
      if (evt.lengthComputable) {
        var percentComplete = evt.loaded / evt.total;
        //Do something with upload progress
        $('.progress-bar').text(Math.floor(evt.loaded / evt.total *100) + '%');
        $('.progress-bar').css('width', Math.floor(evt.loaded / evt.total *100) + '%');
        console.log(Math.floor(evt.loaded / evt.total *100) + '%');
      }
    }, false);
    //Download progress
    xhr.addEventListener("progress", function(evt){
      if (evt.lengthComputable) {
        var percentComplete = evt.loaded / evt.total;
        //Do something with download progress
        console.log(percentComplete);
      }
    }, false);
    return xhr;
  },
      type: "post",
      url: '{{route("uploadvideo")}}',
      data : formData,
      processData: false,
contentType: false,
async: true,
      success:function(response)
      {
         if(response.success)
        {
          $('.progress-bar').text('Uploaded');
          $('.progress-bar').css('width', '100%');
      }
      },
    });
});
// function upload(blob) {
//     // this upload handler is served using webpack-dev-server for
//     // this example, see build-config/fragments/dev.js
//     var formdata = new FormData();
//      formdata.append('fname', 'test.webm');
//     formdata.append('file', blob);
    
//     // console.log('upload recording ' + blob.name + ' to ' + serverUrl);
//     // start upload
   
// }
</script>

</body>
</html>