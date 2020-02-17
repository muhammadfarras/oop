<?php
    $bahasan = "Magic Method - set";
?>
<!DOCTYPE html>
<html>
<head>
	<meta Charset="utf-8">
	<title>Class and Object</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../mystyle.css">
    
    <script>
        window.addEventListener ("load",function (){   
           var olLis = document.getElementsByTagName ("ol")[0];
           var fieldNode = document.getElementsByTagName ("fieldset");
           var backTop = document.getElementById ("header");
           
           
           backTop.addEventListener ("click",function () {
            window.location.assign ("#");
           });
           
           
           for (var i = 0 ; i < fieldNode.length ; i++){
            var newLi = document.createElement ("li");
            var newText = document.createTextNode (fieldNode[i].getAttribute("id"));
            var aNode = document.createElement ("a");
            aNode.appendChild (newText);
            newLi.appendChild (aNode);
            aNode.setAttribute ("href","#"+fieldNode[i].getAttribute("id"));    
            olLis.appendChild (newLi);
           }         
        });
    </script>
</head>
<body>
<div class="header" id="header">Home</div>
	
	<!-- Code HTML -->
    <div class="container">
        <div class="item">
            <h3><?php  echo $bahasan ?></h3>
            <a href="index.php">Back</a><br>
            <ol id="here-home"> 
                
            </ol>
				
				<fieldset id="set">
					<legend>Magic method set</legend>
                    <p>Magic method set akan dijalankan pada kondisi <em class="strong">mengisi sebuah nilai kedalam property yang mana
                    property tersebut tidak eksis didalam sebuah class</em>. PHP pada dasarnya mengizin kita membuat property baru didalam sebuah
                    class melalui object.</p>
                    
                    
                    <div>
                        <?php
                            class Produk {
                                private $harga , $merek;
                            }
                            
                            $mesinCuci = new Produk ();
                            $mesinCuci->dayaPutar = 4000;
                            
                            echo "<pre>";
                            print_r ($mesinCuci);
                            echo "</pre>";
                            
                            class Mobil {
                                private $harga , $merek;
                                
                                public function __set ($name,$value){
                                    echo "<h3>Poperty $name tidak ada , maka tidak bisa diisi dengan $value</h3>";
                                }
                            }
                            
                            $miniBus = new Mobil ();
                            $miniBus->dayaPutar = 4000;
                            
                            echo "<pre>";
                            print_r ($miniBus);
                            echo "</pre>";
                        ?>
                        <legend>True</legend>
                        <embed src="../script/magic-method-set.pdf" width=600px height="250">
                    </div>
                    <div class="kesimpulan">
                        penggunaan paling tepat magic method ini adalah untuk mencegah seseorang untuk menginput nilai baru
                        kedalam sebuah class.
                    </div>
                </fieldset>
        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>


