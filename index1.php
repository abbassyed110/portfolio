<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Portfolio</title>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<style>
body{
    margin:0;
    font-family:Arial, Helvetica, sans-serif;
    background:#f4f4f4;
}

header{
    background:#333;
    color:white;
    text-align:center;
    padding:20px;
}

nav{
    background:#555;
    text-align:center;
}

nav a{
    color:white;
    padding:14px 20px;
    display:inline-block;
    text-decoration:none;
}

nav a:hover{
    background:#222;
}

section{
    padding:40px;
}

.container{
    max-width:1000px;
    margin:auto;
}

.projects{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.project-card{
    background:white;
    padding:20px;
    border-radius:8px;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
    flex:1;
}

form input, form textarea{
    width:100%;
    padding:10px;
    margin:10px 0;
}

button{
    background:#333;
    color:white;
    padding:10px 20px;
    border:none;
    cursor:pointer;
}

button:hover{
    background:#111;
}

footer{
    background:#333;
    color:white;
    text-align:center;
    padding:15px;
}
</style>

</head>

<body>

<header>
<h1>My Portfolio</h1>
<p>B.Tech CSE Student | Web Developer</p>
</header>

<nav>
<a href="#about">About</a>
<a href="#projects">Projects</a>
<a href="#contact">Contact</a>
</nav>

<section id="about">
<div class="container">
<h2>About Me</h2>
<p>Hello! Myself ABBAS SAYED. I am a Computer Science student learning Web Development. I enjoy building websites using HTML, CSS, JavaScript, PHP and MySQL.</p>
</div>
</section>

<form action="submit.php" method="POST">
  <input type="text" name="name" placeholder="Your Name" required>
  <input type="email" name="email" placeholder="Your Email" required>
  <textarea name="message" placeholder="Your Message" required></textarea>
  <button type="submit" name="submit">Send Message</button>
</form>

<section id="projects">
<div class="container">
<h2>My Projects</h2>

<div class="projects">

<a href="https://github.com/abbassyed110/portfolio" target="_blank" rel="noopener noreferrer" class="project-card">
  <h3>Portfolio Website</h3>
  <p>A personal portfolio built using HTML, CSS and JavaScript.</p>
</a>

<div class="project-card">
<h3>Student Registration</h3>
<p>A form project using PHP and MySQL.</p>
</div>

<div class="project-card">
<h3>To Do List</h3>
<p>A simple JavaScript task manager.</p>
</div>

</div>
</div>
</section>

<section id="contact">
<div class="container">
<h2>Contact Me</h2>

<form id="contactForm">

<input type="text" id="name" placeholder="Your Name" required>

<input type="email" id="email" placeholder="Your Email" required>

<textarea id="message" placeholder="Your Message" required></textarea>

<button type="submit">Send Message</button>

</form>

<p id="formMsg"></p>

</div>
</section>

<footer>
<p>© 2026 My Portfolio</p>
</footer>

<script>

document.getElementById("contactForm").addEventListener("submit", function(e){

e.preventDefault();

let name=document.getElementById("name").value;
let email=document.getElementById("email").value;
let message=document.getElementById("message").value;

if(name=="" || email=="" || message==""){
document.getElementById("formMsg").innerHTML="Please fill all fields";
document.getElementById("formMsg").style.color="red";
return;
}

document.getElementById("formMsg").innerHTML="Message sent successfully!";
document.getElementById("formMsg").style.color="green";

});

</script>

</body>
</html>