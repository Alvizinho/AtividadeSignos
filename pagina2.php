<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <?php
        $data = date_parse($_GET["data"]);
        
        switch($data["month"]){
            case 1:
                if($data["day"] >=20){
                    //Aquário
                    echo "Seu signo é Aquário";
                    echo "<img height='200px' width='200px'align='left' src='img\aquario.jpg'>";   
                }else{
                    //Capricórnio
                    echo "Seu signo é Capricórnio";
                    echo "<img height='200px' width='200px'align='left' src='img\capricornio.jpg'>";
                }
                break;    
            case 2:
                if($data["day"] >=19){
                    //Peixes
                    echo "Seu signo é Peixes";
                    echo "<img height='200px' width='200px'align='left' src='img\peixes.jpg'>";
                }else{
                    //Aquário
                    echo "Seu signo é Aquário";
                    echo "<img height='200px' width='200px'align='left' src='img\aquario.jpg'>";
                }
                break;    
            case 3:
                if($data["day"] >=21){
                    //Áries
                        echo "Seu signo é Áries";
                        echo "<img height='200px' width='200px'align='left' src='img\aries.jpg'>";
                }else{
                    //Peixes
                        echo "Seu signo é Peixes";
                        echo "<img height='200px' width='200px'align='left' src='img\peixes.jpg'>";
                }
                break;        
            case 4:
                if($data["day"] >=20){
                    //Touro
                    echo "Seu signo é Touro";
                    echo "<img height='200px' width='200px'align='left' src='img\Touro.jpg'>";
                }else{
                    //Áries
                    echo "Seu signo é Áries";
                    echo "<img height='200px' width='200px'align='left' src='img\aries.jpg'>";
                }
                break;
            case 5:
                if($data["day"] >=21){
                    //Gêmeos
                    echo "Seu signo é Gêmeos";
                    echo "<img height='200px' width='200px'align='left' src='img\gemeos.jpg'>";
                }else{
                    //Touro
                    echo "Seu signo é Touro";
                    echo "<img height='200px' width='200px'align='left' src='img\Touro.jpg'>";
                }
                break; 
            case 6:
                if($data["day"] >=21){
                    //Câncer
                    echo "Seu signo é Cancêr";
                    echo "<img height='200px' width='200px'align='left' src='img\cancer.jpg'>";
                }else{
                    //Gêmeos
                    echo "Seu signo é Gêmeos";
                    echo "<img height='200px' width='200px'align='left' src='img\gemeos.jpg'>";
                }
                break;
            case 7:
                if($data["day"] >=23){
                    //Leão
                    echo "Seu signo é Leão";
                    echo "<img height='200px' width='200px'align='left' src='img\leao.jpg'>";
                }else{
                    //Cancêr
                    echo "Seu signo é Cancêr";
                    echo "<img height='200px' width='200px'align='left' src='img\cancer.jpg'>";
                }
                break;
            case 8:
                if($data["day"] >=23){
                    //Virgem 
                    echo "Seu signo é Virgem";
                    echo "<img height='200px' width='200px'align='left' src='img\Virgem.jpg'>";
                }else{
                    //Leão
                    echo "Seu signo é Leão";
                    echo "<img height='200px' width='200px'align='left' src='img\leao.jpg'>";
                }
                break;
            case 9:
                if($data["day"] >=23){
                    //Libra
                    echo "Seu signo é Libra";
                    echo "<img height='200px' width='200px'align='left' src='img\libra.jpg'>";
                }else{
                    //Virgem
                    echo "Seu signo é Virgem";
                    echo "<img height='200px' width='200px'align='left' src='img\Virgem.jpg'>";
                }
                break; 
            case 10:
                if($data["day"] >=23){
                    //Escorpião
                    echo "Seu signo é Escorpião";
                    echo "<img height='200px' width='200px'align='left' src='img\Escorpiao.jpg'>";
                }else{
                    //Libra
                    echo "Seu signo é Libra";
                    echo "<img height='200px' width='200px'align='left' src='img\libra.jpg'>";
                }
                break;
            case 11:
                if($data["day"] >=22){
                    //Sagitário
                    echo "Seu signo é Sagitário";
                    echo "<img height='200px' width='200px'align='left' src='img\sagitario.jpg'>";
                }else{
                    //Escorpião
                    echo "Seu signo é Escorpião";
                    echo "<img height='200px' width='200px'align='left' src='img\Escorpiao.jpg'>";
                }
                break; 
            case 12:
                if($data["day"] >=22){
                    //Capricórnio
                    echo "Seu signo é Capricórnio";
                    echo "<img height='200px' width='200px'align='left' src='img\capricornio.jpg'>";
                }else{
                    //Sagitário
                    echo "Seu signo é Sagitário ";
                    echo "<img height='200px' width='200px'align='left' src='img\sagitario.jpg'>";
                }break;


            default:
                echo "<p>Mês " .$data["month"]. " incorreto!</p>";               
               
                        
        }
       

    ?>

</body>
</html>