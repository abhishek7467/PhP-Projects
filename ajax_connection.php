<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Name Suggestion App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script>
        function ShowLenght(str){
        if(str.length==0){
            document.getElementById('My_text_hint').innerHTML=" ";
            return ;
        }

       else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200){
                document.getElementById('My_text_hint').innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET","my_text.php?c="+str,true);
        xmlhttp.send();
    }
        }
    </script>

</head>
  <body>
    <h1>This is My Name Suggestion Type of Application..</h1>
    
    <p>Start Typing and get the Suggestions</p>
    <form  >

First Name : <input type="text" name="name" onkeyup="ShowLenght(this.value)" >
    </form>
    
    <p>Your Suggestions are : </p>

    <p><span id="My_text_hint"></span></p>
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>