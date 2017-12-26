<style>
.image {
    position: absolute;
    top: 60%;
    left: 11%;
    width: 100px;
    height: 100px;
    margin:-60px 0 0 -60px;
    border-radius: 75%;
    -webkit-animation:spin 15s linear infinite;
     -moz-animation:spin 15s linear infinite;
    animation:spin 15s linear infinite;
}
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }
</style>

<img class="image" src="{{ asset('images/logo.jpg') }}" width="90" height="60">
