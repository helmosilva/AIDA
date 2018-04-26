<?php 

      require "header.php";
      require "navbar.php";
?>




    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Index page: Main Content</h1>
        <br>
        <p>This is a informational website.<br> Served as a showroom for various types of cars.</p>
      </div>
        
        <div class="row">
            <div class="span6">
                
             <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
                <div id="player">
                    <iframe id="player" type="text/html" width="500" height="350" 
                    src="https://www.youtube.com/embed/eJnWPhSQjPs?ecver=1"
                    frameborder="0"></iframe>
                </div>

                    <script>
                      // 2. This code loads the IFrame Player API code asynchronously.
                      var tag = document.createElement('script');
                
                      tag.src = "https://www.youtube.com/AIzaSyDJumjFpIbRvX-tBf5lTJ-EMeNPNNX-gKI";
                      var firstScriptTag = document.getElementsByTagName('script')[0];
                      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                
                      // 3. This function creates an <iframe> (and YouTube player)
                      //    after the API code downloads.
                      var player;
                      function onYouTubeIframeAPIReady() {
                        player = new YT.Player('player', {
                          height: '390',
                          width: '640',
                          videoId: 'M7lc1UVf-VE',
                          events: {
                            'onReady': onPlayerReady,
                            'onStateChange': onPlayerStateChange
                          }
                        });
                      }
                
                      // 4. The API will call this function when the video player is ready.
                      function onPlayerReady(event) {
                        event.target.playVideo();
                      }
                
                      // 5. The API calls this function when the player's state changes.
                      //    The function indicates that when playing a video (state=1),
                      //    the player should play for six seconds and then stop.
                      var done = false;
                      function onPlayerStateChange(event) {
                        if (event.data == YT.PlayerState.PLAYING && !done) {
                          setTimeout(stopVideo, 6000);
                          done = true;
                        }
                      }
                      function stopVideo() {
                        player.stopVideo();
                      }
                      
                      loadVideoById("bHQqvYy5KYo", 5, "large");
                      
                      loadVideoById({'videoId': 'bHQqvYy5KYo',
                      'startSeconds': 5,
                      'endSeconds': 60,
                      'suggestedQuality': 'large'});
                    </script>
            </div>
            
            
            <div class="span6">
                             <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
                <div id="player">
                    <iframe id="player" type="text/html" width="500" height="350" 
                    src="https://www.youtube.com/embed/YUpp3No5e-A?ecver=1"
                    frameborder="0"></iframe>
                </div>

                    <script>
                      // 2. This code loads the IFrame Player API code asynchronously.
                      var tag = document.createElement('script');
                
                      tag.src = "https://www.youtube.com/AIzaSyDJumjFpIbRvX-tBf5lTJ-EMeNPNNX-gKI";
                      var firstScriptTag = document.getElementsByTagName('script')[0];
                      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                
                      // 3. This function creates an <iframe> (and YouTube player)
                      //    after the API code downloads.
                      var player;
                      function onYouTubeIframeAPIReady() {
                        player = new YT.Player('player', {
                          height: '390',
                          width: '640',
                          videoId: 'M7lc1UVf-VE',
                          events: {
                            'onReady': onPlayerReady,
                            'onStateChange': onPlayerStateChange
                          }
                        });
                      }
                
                      // 4. The API will call this function when the video player is ready.
                      function onPlayerReady(event) {
                        event.target.playVideo();
                      }
                
                      // 5. The API calls this function when the player's state changes.
                      //    The function indicates that when playing a video (state=1),
                      //    the player should play for six seconds and then stop.
                      var done = false;
                      function onPlayerStateChange(event) {
                        if (event.data == YT.PlayerState.PLAYING && !done) {
                          setTimeout(stopVideo, 6000);
                          done = true;
                        }
                      }
                      function stopVideo() {
                        player.stopVideo();
                      }
                    </script>
            </div>
      <hr>

      
<?php

    require "footer.php";
?>