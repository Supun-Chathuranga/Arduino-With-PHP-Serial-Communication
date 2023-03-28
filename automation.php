<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Automation</title>
    <link rel="styleshhet" type="text/css" href="bootstrap-5.3.0-alpha1-dist/css/boostrap.min.css">
    <script src="jquery-3.6.4.min.js"></script>
</head>
<body>
    <center>
        <form action="" method="post">
            <div class="container">
                <div class="row">
                    <h1>Automation</h1>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-5">
                            <div class="input-group">
                                <span class="input-group-text">Select Port</span>
                                <select id="portnum" class="form-select form-control-sm" aria-label="Default select example">
                                <?php 

                                for($x=1; $x<=20; $x++){
                                    echo '<option value="'.'COM'.$x.' ">'.'COM'.$x.'</option>';
                                }



                                ?>

                                </select>
                            </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-5">
                            <input type="button" value="ON" class="btn btn-success" id="btnON">
                            <input type="button" value="OFF" class="btn btn-danger" id="btnOFF">

                        </div>

                    </div>
                
                </div>
            
            </div>
        
        </form>
    
    </center>
</body>
</html>
<script>
$(document).ready(function(){
    var portid="";

    $("#portnum").change(function(){
        portid=$("#portnum").val();
        alert(portid);
    });
    $("#btnON").click(function(){
        $.ajax({
            type:"POST",
            url:"data.php",
            data:({port:portid, Selector:'1'}),
            success:function(data1){
                alert(data1);
            }
        })
    });

    $("#btnOFF").click(function(){
        $.ajax({
            type:"POST",
            url:"data.php",
            data:({port:portid, Selector:'2'}),
            success:function(data1){
                alert(data1);
            }
        })
    });

});






</script>