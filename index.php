<?php
include './feats/projects.php';
include './feats/skills.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <div > 
    <div data-aos="fade-down" data-aos-duration="1000" class="w-100 d-flex justify-content-center border-bottom p-3">
        <H1 class="text-white">BEM-VINDO :)</H1>
    </div>
    <div class="d-lg-flex justify-content-center w-100 h-100 px-5 mt-5 ">
    <div class="d-flex justify-content-center ">
    <img 
    id="profile"
    class="w-100 img-fluid" 
    data-aos="zoom-in"
    data-aos-duration="1500"
    src="public/profile.png" alt="">
    </div>
    
    <div class=" text-white " id="presentation">
    <h1 id="name" data-aos="zoom-in-up"
    data-aos-duration="1500" class="mt-5" >ARTUR VINICIUS</h1>
        <p
         data-aos="zoom-in"
         data-aos-duration="1000" 
         class="w-100 mx-auto mt-5" 
         style="max-width: 1000px;"
        >Seja bem vindo ao meu portifólio! sou um desenvolvedor web especializado em React js, sou autodidata e procuro sempre evoluir, espero algum dia me tornar uma referência na área. </p>
        <a class="btn btn-primary mt-5" href="public/Currículo.pdf" download="Currículo"
        data-aos="fade-right"
        data-aos-duration="1000" 
         >Download currículo</a>
    </div>
    </div>

<div id="section_title" class="m-5 pt-5" >
<h1 data-aos="fade-right" data-aos-duration="1000" class="text-white">HABILIDADES:</h1>
<div id="separator"></div>    
</div>

<div id="skills" data-aos="zoom-in"
     data-aos-duration="2000">
<?php foreach($skills as $skill): ?>
    
    <div id="skill" >
     <p id="skill_name"><?= $skill["name"] ?></p>
     <img 
     
     id="skill_img" src="<?=$skill["img"] ?>" alt="">
    </div>
<?php endforeach; ?>    
</div>

<div id="section_title" class="m-5 pt-5"
data-aos="fade-right"
data-aos-duration="2000">
>
<h1 class="text-white">PROJETOS:</h1>
<div id="separator"></div>    
</div>

<div  class="d-flex flex-wrap justify-content-center">
<?php foreach($projects as $project)  : ?>
<div data-aos="zoom-in"
     data-aos-duration="2000">
    
    <div id="infoStyle" >
        <h3 class="text-white" ><?= $project["name"] ?></h3>
        <p class="text-white text-center" ><?=$project["description"]?></p>
        <div>
         <a class="btn btn-primary m-2" role="button" href="<?= $project["link"] ?>" target="_blank">Deploy</a>
        <a class="btn btn-primary m-2" role="button" href="<?= $project["code"] ?>"target="_blank">Código</a>   
        </div>
        
    </div> 
    <div >
        <img style="max-width:600px; width:100%;" src="<?=$project['image']?>">
    </div>    
</div>
<?php endforeach; ?>
</div>
<div id="section_title" class="m-5 pt-5" data-aos="fade-right"
     data-aos-duration="2000">>
<h1 class="text-white">CONTATO:</h1>
<div id="separator"></div>    
</div>
<div class="mb-5" id="contaceiner">
        <a data-aos="zoom-out" data-aos-duration="2000"
         id="contact" target="_blank" href="mailto:arthurvinicius@gmail.com">
        <img style="width: 50px;" src="public/email.png" alt="">
        <p>arthurvinicius907@gmail.com</p>
        </a>
        <a data-aos="zoom-out" data-aos-duration="2000"
         id="contact" target="_blank" href="https://wa.me/5584996430239">
        <img style="width: 50px;" src="public/whatsapp.png" alt="">
        <p >(84)99643-0239</p>
        </a>
        <a  data-aos="zoom-out" data-aos-duration="2000"
        id="contact" target="_blank" href="https://www.linkedin.com/in/artur-barbalho-08abb1219/">
        <img style="width: 50px;" src="public/linkedin.png" alt="">
        <p >Artur Barbalho</p>
        </a>
</div>
</div>
    <script>
    window.addEventListener("load",()=>{AOS.init()})
    
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</html>