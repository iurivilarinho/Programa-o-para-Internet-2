
<body style="background-image: url(https://avatars.githubusercontent.com/u/6121978?v=4)">
<?php
$video = $_GET['video'];
?>

<div style="
    background-color: red;
    margin-left:25em;
    width: 600px;
    height: 600px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    color: white;
    font-family:Andale Mono, monospace;">

    <h1>Assista Agora</h1>

    <div style="
    background-color: gray;
    width: 500px; 
    height: 500px;  
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    margin-left: 3em;">

        <object style="
    margin: 0 auto; 
    display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;" width="425" height="350" data="http://www.youtube.com/v/<?php echo $video;?>" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/Ahg6qcgoay4" /></object>

    </div>
       
        <footer style="font-size: 10px;">Site design Iuri Vilarinho logo © 2022 Stack Exchange Inc;</footer>
        
      
</div>

</body>


