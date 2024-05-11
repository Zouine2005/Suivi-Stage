<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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