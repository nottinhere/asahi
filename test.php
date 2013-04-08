<html xmlns="http://www.w3.org/1999/xhtml"
  xmlns:fb="https://www.facebook.com/2008/fbml">
  <head>
    <title>My Feed Dialog Page</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
  <body>
    <div id='fb-root'></div>
    <script src='http://connect.facebook.net/en_US/all.js'></script>
	<!--<script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script><a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank" class="fb_share_link"><img src="images/tell-your-friends/button.png" alt="Tell your friends button"></a>-->
   <!-- <p><a href="https://www.facebook.com/dialog/feed?
  app_id=458358780877780&
  link=https://developers.facebook.com/docs/reference/dialogs/&
  picture=http://fbrell.com/f8.jpg&
  name=Facebook%20Dialogs&
  caption=Reference%20Documentation&
  description=Using%20Dialogs%20to%20interact%20with%20users.&
  redirect_uri=https://mighty-lowlands-6381.herokuapp.com/"><img src="images/tell-your-friends/button.png" alt="Tell your friends button"></a></p>-->
     <p><a href="https://www.facebook.com/dialog/feed?
  app_id=129271045853&
  link=https://developers.facebook.com/docs/reference/dialogs/&
  picture=http://nottinhere.com/demo/asahi/images/right-answer/illustration-answer.png&
  name=Asahi&
  caption=Ambition&
  description=ความมุ่งมั่นคือจุดเริ่มต้นของศักยภาพที่ยิ่งใหญ่&
  redirect_uri=https://mighty-lowlands-6381.herokuapp.com/"><img src="images/tell-your-friends/button.png" alt="Tell your friends button"></a></p>
   <p id='msg'></p>

    <script> 
      FB.init({appId: "458358780877780", status: true, cookie: true});

      function postToFeed() {

        // calling the API ...
        var obj = {
          method: 'feed',
          redirect_uri: 'http://www.nottinhere.com/demo/asahi/',
          link: 'http://nottinhere.com/demo/asahi/images/right-answer/illustration-answer.png',
          picture: 'http://fbrell.com/f8.jpg',
          name: 'Asahi',
          caption: 'Ambition',
          description: 'ความมุ่งมั่นคือจุดเริ่มต้นของศักยภาพที่ยิ่งใหญ่'
        };

        function callback(response) {
          document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
        }

        FB.ui(obj, callback);
      }
    
    </script>
    
  </body>
</html>