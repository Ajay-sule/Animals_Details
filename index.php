
<?php
$con = mysqli_connect("localhost","root","","animals");
?>

<html>
    <style>
        body {
    background-color: antiquewhite;
}

form {
    padding-left: 1em;
}
    </style>
    <body>


            <header class="jumbotron">
                     </a>
                    <h1 class="text-center display-3" id="title"> Registration Form </h1>
                
                </header>
            
                <div class="container">
                    <form id="survey-form" method="post" action="submission.php" enctype="multipart/form-data">
                        <h2 class="display-5"> Basic Info </h2>
                        <!-- TEXTB0X: FIRST NAME -->
                      
                        <div class="form-group d-flex">
                            <input class="form-control" type="text" name="animal_name"  placeholder="Name of Animal">
                        </div>

                      
                               <div class="form-group d-flex">
                                <input type="radio" name="category" value="herbivores">Herbivores
                                <input type="radio" name="category" value="omnivores">Omnivores
                                <input type="radio" name="category" value="carnivores">Carnivores
                                </div>
                                
                                
                               <div class="form-group d-flex">
                                <input type="file" name="photo[]">
                                  </div>
                                    
                               <div class="form-group d-flex">
                                <textarea name="message" placeholder="Message" class="form-control"></textarea>
                                  </div>

                                   <!-- TEXTB0X: EMAIL -->
                        <div class="form-group d-flex">
                        <select class="form-control" name="life_expectancy">
                        <option name="">Life Expectancy</option>
                            <option name="0-1_year">0-1 year</option><br>
                            <option name="1-5_year">1-5 year</option><br>
                            <option name="5-10_year">5-10 year</option><br>
                            <option name="10+year">10+year</option>
                        </select>      
                        </div>
                           
                        <!-- BUTTON: SUBMIT -->
                        <input type="submit" class="btn btn-primary mb-5" id="submit" name="submit">
                            
                        </button>
                        
                    </form>
                    </div>
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </body>

</html>