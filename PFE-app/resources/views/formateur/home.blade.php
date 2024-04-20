<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script defer nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
* {
  margin: 0;
  padding: 0;
  font-family: 'Poppins';
}

body {
  min-height: 100vh;
}

.menu-curved-outside {
  position: fixed;
  top: 20px;
  left: 20px;
  bottom: 20px;
  width: 70px;
  -webkit-box-sizing: initial;
          box-sizing: initial;
  border-radius: 10px;
  border-left: 5px solid #4d5bf9;
  background: #4d5bf9;
  -webkit-transition: width 0.3s;
  transition: width 0.3s;
  overflow-x: hidden;
}

.menu-curved-outside ul {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding-left: 5px;
  padding-top: 40px;
}

.menu-curved-outside ul li {
  position: relative;
  list-style: none;
  width: 100%;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
}

.menu-curved-outside ul li b:nth-child(1) {
  position: absolute;
  top: -20px;
  height: 20px;
  width: 100%;
  background: #fff;
  display: none;
}

.menu-curved-outside ul li b:nth-child(1)::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-bottom-right-radius:40px;
  background: #4d5bf9;
}

.menu-curved-outside ul li b:nth-child(2) {
  position: absolute;
  bottom: -20px;
  height: 20px;
  width: 100%;
  background: #fff;
  display: none;
}

.menu-curved-outside ul li b:nth-child(2)::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-top-right-radius: 20px;
  background: #4d5bf9;
}

.menu-curved-outside ul li a {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  text-decoration: none;
  color: #fff;
}

.menu-curved-outside ul li a .menu-curved-outside-icon {
  position: relative;
  display: block;
  min-width: 60px;
  height: 60px;
  line-height: 70px;
  text-align: center;
}

.menu-curved-outside ul li a .menu-curved-outside-icon ion-icon {
  font-size: 1.5em;
}

.menu-curved-outside ul li a .menu-curved-outside-title {
  position: relative;
  display: block;
  padding-left: 10px;
  height: 60px;
  line-height: 60px;
  white-space: normal;
}

.menu-curved-outside ul .active {
  background: #fff;
}

.menu-curved-outside ul .active a {
  color: #333;
}

.menu-curved-outside ul .active b:nth-child(1), .menu-curved-outside ul .active b:nth-child(2) {
  display: block;
}

.menu-curved-outside.active {
  width: 300px;
}

.menu-curved-outside-toggle {
  position: fixed;
  top: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  background: #4d5bf9;
  border-radius: 10px;
  cursor: pointer;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.menu-curved-outside-toggle ion-icon {
  position: absolute;
  color: #fff;
  font-size: 34px;
  display: none;
}

.menu-curved-outside-toggle .menu-curved-outside-toggle-open {
  display: block;
}

.menu-curved-outside-toggle .menu-curved-outside-toggle-close {
  display: none;
}

.menu-curved-outside-toggle.active {
  background: #ff4d89;
}

.menu-curved-outside-toggle.active .menu-curved-outside-toggle-open {
  display: none;
}

.menu-curved-outside-toggle.active .menu-curved-outside-toggle-close {
  display: block;
}
/*# sourceMappingURL=style.css.map */
    </style>
</head>
<body>
    
    <div class="menu-curved-outside">
        <ul>
            <li class="menu-curver-outside-list active">
                <b></b>
                <b></b>
                <a href="">
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
            <li class="menu-curver-outside-list">
                <b></b>
                <b></b>
                <a href="#">
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
</body>
</html>