
    
    <div class="menu-curved-outside">
        <ul>
            <li class="menu-curver-outside-list active">
                <b></b>
                <b></b>
                <a href="{{route('formateur.home')}}">
                    <span class="menu-curved-outside-icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="menu-curved-outside-title">Home</span>
                </a>
            </li>
            <li class="menu-curver-outside-list">
                <b></b>
                <b></b>
                <a href="#">
                    <span class="menu-curved-outside-icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="menu-curved-outside-title">Profile</span>
                </a>
            </li>
<!-- Ajoutez un attribut id pour cibler cette partie du HTML -->
         <li class="menu-curver-outside-list" >
           <b></b>
           <b></b>
           <a href="{{route('formateur.formulaire')}}">
               <span class="menu-curved-outside-icon">
                   <ion-icon name="mail-outline"></ion-icon>
               </span>
               <span class="menu-curved-outside-title">Messages</span>
           </a>
         </li>



            <li class="menu-curver-outside-list">
                <b></b>
                <b></b>
                <a href="#">
                    <span class="menu-curved-outside-icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="menu-curved-outside-title">Settings</span>
                </a>
            </li>
            <li class="menu-curver-outside-list">
                <b></b>
                <b></b>
                <a href="#">
                    <span class="menu-curved-outside-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                            <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1z"/>
                          </svg>
                    </span>
                    <span class="menu-curved-outside-title">Help</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="menu-curved-outside-toggle">
        <ion-icon name="menu-outline" class="menu-curved-outside-toggle-open"></ion-icon>
        <ion-icon name="close-outline" class="menu-curved-outside-toggle-close"></ion-icon>
    </div>
<script>

//Dyl sidebar o action dyl menu
let menuToggle = document.querySelector('.menu-curved-outside-toggle');
let menu = document.querySelector('.menu-curved-outside');

menuToggle.onclick = function(){
    menuToggle.classList.toggle('active');
    menu.classList.toggle('active');
}


let list = document.querySelectorAll('.menu-curver-outside-list');

for(let i = 0; i < list.length; i++){
    list[i].onclick = function(){
        let j = 0;

        while (j < list.length){
            list[j++].className = 'menu-curver-outside-list';
        }

        list[i].className = 'menu-curver-outside-list active';
    }
}
</script>