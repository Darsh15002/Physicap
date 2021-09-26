<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account Page</title>

    <!-- font-awesome -->
    <link rel="stylesheet" href="styles.css">
      <script src="https://kit.fontawesome.com/2643dbaa53.js" crossorigin="anonymous"></script>

    <style>
      /*
=============== 
Fonts
===============
*/
@import url('https://fonts.googleapis.com/css?family=Open+Sans|Roboto:400,700&display=swap');

/*
=============== 
Variables
===============
*/

:root {
  /* dark shades of primary color*/
  --clr-primary-1: hsl(205, 86%, 17%);
  --clr-primary-2: hsl(205, 77%, 27%);
  --clr-primary-3: hsl(205, 72%, 37%);
  --clr-primary-4: hsl(205, 63%, 48%);
  /* primary/main color */
  --clr-primary-5: hsl(205, 78%, 60%);
  /* lighter shades of primary color */
  --clr-primary-6: hsl(205, 89%, 70%);
  --clr-primary-7: hsl(205, 90%, 76%);
  --clr-primary-8: hsl(205, 86%, 81%);
  --clr-primary-9: hsl(205, 90%, 88%);
  --clr-primary-10: hsl(205, 100%, 96%);
  /* darkest grey - used for headings */
  --clr-grey-1: hsl(209, 61%, 16%);
  --clr-grey-2: hsl(211, 39%, 23%);
  --clr-grey-3: hsl(209, 34%, 30%);
  --clr-grey-4: hsl(209, 28%, 39%);
  /* grey used for paragraphs */
  --clr-grey-5: hsl(210, 22%, 49%);
  --clr-grey-6: hsl(209, 23%, 60%);
  --clr-grey-7: hsl(211, 27%, 70%);
  --clr-grey-8: hsl(210, 31%, 80%);
  --clr-grey-9: hsl(212, 33%, 89%);
  --clr-grey-10: hsl(210, 36%, 96%);
  --clr-white: #fff;
  --clr-red-dark: hsl(360, 67%, 44%);
  --clr-red-light: hsl(360, 71%, 66%);
  --clr-green-dark: hsl(125, 67%, 44%);
  --clr-green-light: hsl(125, 71%, 66%);
  --clr-black: #222;
  --ff-primary: 'Roboto', sans-serif;
  --ff-secondary: 'Open Sans', sans-serif;
  --transition: all 0.3s linear;
  --spacing: 0.1rem;
  --radius: 0.25rem;
  --light-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  --dark-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  --max-width: 1170px;
  --fixed-width: 620px;
}
/*
=============== 
Global Styles
===============
*/


*,
::after,
::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: var(--ff-secondary);
  background: var(--clr-grey-10);
  color: var(--clr-grey-1);
  line-height: 1.5;
  font-size: 0.875rem;
  background-image: url("twe1.jpeg");
  background-size: cover;
  height: 100%;
  overflow: hidden;
}
ul {
  list-style-type: none;
}
a {
  text-decoration: none;
}
h1,
h2,
h3,
h4 {
  letter-spacing: var(--spacing);
  text-transform: capitalize;
  line-height: 1.25;
  margin-bottom: 0.75rem;
  font-family: var(--ff-primary);
}
h1 {
  font-size: 3rem;
}
h2 {
  font-size: 2rem;
}
h3 {
  font-size: 1.25rem;
}
h4 {
  font-size: 0.875rem;
}
p {
  margin-bottom: 1.25rem;
  color: var(--clr-grey-5);
}
@media screen and (min-width: 800px) {
  h1 {
    font-size: 4rem;
  }
  h2 {
    font-size: 2.5rem;
  }
  h3 {
    font-size: 1.75rem;
  }
  h4 {
    font-size: 1rem;
  }
  body {
    font-size: 1rem;
  }
  h1,
  h2,
  h3,
  h4 {
    line-height: 1;
  }
}
/*Fonts*/
.fa-wheelchair{
 
  padding: 1rem .25rem;
}

/*  global classes */

/* section */
.section {
  padding: 5rem 0;
}

.section-center {
  width: 90vw;
  margin: 0 auto;
  max-width: 1170px;
}
@media screen and (min-width: 992px) {
  .section-center {
    width: 95vw;
  }
}
main {
  min-height: 100vh;
  display: grid;
  place-items: center;
}

/*
=============== 
Sidebar
===============
*/
.sidebar-toggle {
  position: fixed;
  top: 2rem;
  left: 3rem;
  font-size: 2rem;
  background: transparent;
  border-color: transparent;
  color: var(--clr-primary-5);
  transition: var(--transition);
  cursor: pointer;
  animation: bounce 2s ease-in-out infinite;
}
.sidebar-toggle:hover {
  color: var(--clr-primary-7);
}
@keyframes bounce {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.5);
  }
  100% {
    transform: scale(1);
  }
}

.sidebar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: .5rem 0 .5rem 1.5rem;
}

.sidebar-header a{
  justify-self: left;
  display: block;
  padding-bottom: 2rem 1.5rem;
}
.sidebar-header a {
  font-size: 3rem;
  margin: 0 0.5rem;
  color: var(--clr-primary-5);
  transition: var(--transition);
}
.sidebar-header a:hover {
  color: var(--clr-primary-1);
}
.close-btn {
  font-size: 1.75rem;
  background: transparent;
  border-color: transparent;
  color: var(--clr-primary-5);
  transition: var(--transition);
  cursor: pointer;
  color: var(--clr-red-dark);
}
.close-btn:hover {
  color: var(--clr-red-light);
  transform: rotate(360deg);
}
.logo {
  justify-self: center;
  height: 40px;
}
.fa-user-circle{
  margin-left: 0.65rem;
  margin-right: 0.95rem;
}
.fa-notes-medical{
  margin-left: 0.65rem;
  margin-right: 0.95rem;
}
.fa-calendar-check{
  margin-left: 0.65rem;
  margin-right: 0.95rem;
}
.fa-phone-square{
  margin-left: 0.65rem;
  margin-right: 0.95rem;
}
.fa-pills{
  margin-left: 0.65rem;
  margin-right: 0.95rem;
}

.links a {
  display: block;
  font-size: 1.5rem;
  text-transform: capitalize;
  padding: 1.25rem;
  color: var(--clr-grey-5);
  transition: var(--transition);
}
.links a:hover {
  background: var(--clr-primary-8);
  color: var(--clr-primary-5);
  padding-left: 1.75rem;
}
.fa-users-cog{
  margin-left: 0.65rem;
  margin-right: 0.95rem;
}
.nav_settings {
  display: grid;
  grid-template-columns: max-content max-content;
  align-items: center;
  column-gap: 0.1rem;
  padding: .5rem 0 .5rem .5rem;
}
.nav_link {
  margin-right: 1px;
  display: grid;
  grid-template-columns: max-content max-content;
  align-items: center;
  column-gap: 1rem;
  padding: .5rem 0 .5rem 1.5rem;
}

.Bottom {
  justify-self: left;
  display: block;
  padding-bottom: 2rem 1.5rem;
}
.Bottom a {
  font-size: 1.5rem;
  margin: 0 0.5rem;
  color: var(--clr-primary-5);
  transition: var(--transition);
}
.Bottom a:hover {
  color: var(--clr-primary-1);
}
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: var(--clr-white);
  display: grid;
  grid-template-rows: auto 1fr auto;
  row-gap: 1rem;
  box-shadow: var(--clr-red-dark);
  transition: var(--transition);
  transform: translate(-100%);
}
.show-sidebar {
  transform: translate(0);
}
@media screen and (min-width: 676px) {
  .sidebar {
    width: 400px;
  }
}
.abcd{
  background-image: url('twe1.jpeg');
}
</style>
  </head>
  <body>
    <button class="sidebar-toggle">
      <i class="fas fa-bars"></i>
    </button>
    <aside class="sidebar">
      <div class="sidebar-header">
        <a href="index.html"><i class="fas fa-wheelchair"></i>Physicap</a>
        <button class="close-btn">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <!-- links -->
      <ul class="links">
        <li>
          <a href="profile.php"class="nav_link"><i class="fas fa-user-circle"></i>Profile</a>
        </li>
        <li>
          <a href="#"class="nav_link"><i class="fas fa-notes-medical"></i>History</a>
        </li>
        <li>
          <a href="appointment.php"class="nav_link"><i class="fas fa-calendar-check"></i>Appointments</a>
        </li>
        <li>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSd_aJqaUYnZRjMjJNICyUgQnhdwo3miEZPTq_3WKAkscJTwQg/viewform?usp=sf_link"class="nav_link"><i class="fas fa-briefcase"></i>&nbsp;&nbsp;Job Opportunities for PWD's</a>
        </li>
        <li>
          <a href="https://pharmeasy.in/"class="nav_link"><i class="fas fa-pills"></i></i>Medicine</a>
        </li>
      </ul>
      <!-- social media -->
      <ul class="Bottom">
        <li>
          <a href="profile_setting.php" class="nav_settings"> <i class="fas fa-users-cog"></i><span class="nav_set">Settings</span></a>
        </li>
        </ul>
    </aside>

    <!-- javascript -->
    <script>
      const toggleBtn =document.querySelector('.sidebar-toggle');
const closeBtn =document.querySelector('.close-btn');
const sidebar =document.querySelector('.sidebar');

toggleBtn.addEventListener('click', function(){

    sidebar.classList.toggle('show-sidebar');
});

closeBtn.addEventListener('click', function(){
    sidebar.classList.remove('show-sidebar');
});
    </script>
  </body>
</html>
