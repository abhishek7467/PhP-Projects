<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
<script>



    function MySuggestions(str){
        if(str.length==0){
            document.getElementById('Text_hint').innerHTML="";
            return;
        }
        else{
            var xmlHttP = new XMLHttpRequest();
            
            xmlHttP.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    document.getElementById('Text_hint').innerHTML=this.responseText;
                    // document.getElementById('c_Text_hint').innerHTML=count(this.responseText);
                }
            };
            xmlHttP.open("GET","my_text.php?c="+str,true);
            xmlHttP.send();

        }
    }
</script>


<style>
h1 {
  font-size: 36px;
  font-weight: bold;
  text-align: center;
  color: #333;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-top: 20px;
  margin-bottom: 20px;
  background-color: rgb(191,168,120);
}
input[type="text"] {
  padding: 10px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background-color: #f8f8f8;
  color: #333;
  font-size: 16px;
  outline: none;
}

input[type="text"]:focus {
  border-color: #66afe9;
  box-shadow: 0 0 5px #66afe9;
}
form {
  padding: 20px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background-color: #f8f8f8;
  color: #333;
  font-size: 16px;
}

.result-set {
  padding: 20px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background-color: #f8f8f8;
  color: #333;
  font-size: 16px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
}

.result-set:hover {
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
  text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);
}

.result-set button {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #66afe9;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

.result-set button:hover {
  background-color: #4c8fdd;
}

#text {
  font-family: 'FancyFont', sans-serif;
}

    </style>

</head>
  <body>
    <h1>This is My Text Suggestion Application.. </h1>
    <form>
      
    <label for="text" class="col-form-label " id="text">Enter first character of the Name :</label>
    <input type="text" name="my_text" onkeyup="MySuggestions(this.value)" >
    <!-- <input class="form-control" type="text" value="Readonly input character of Your Name here..." onkeyup="MySuggestions(this.value) aria-label="readonly input example" readonly> -->

  </form>
    


    <div class="result-set">
        <!-- <p>Suggestions: <span id="c_Text_hint"></span></p> -->
        <h6>Matching Suggestions with your character</h6>
      <p id="Text_hint"></p>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>