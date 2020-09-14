
function onSuccess(googleUser) {

       var name = googleUser.getBasicProfile().getName();
       var email = googleUser.getBasicProfile().getEmail();
       var image = googleUser.getBasicProfile().getImageUrl();
       var google_id = googleUser.getBasicProfile().getId();


       // localStorage.setItem("google_id", google_id);

       // alert(image);

       // The ID token you need to pass to your backend:
       // var id_token = googleUser.getAuthResponse().id_token;

      // @auth
      //   <a href="{{ url('/home') }}">Home</a> 
      // @endauth 

}
    
function onFailure(error) {
      console.log(error);
}


function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 250,
        'height': 40,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
}

