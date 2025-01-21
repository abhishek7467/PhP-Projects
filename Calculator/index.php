
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator In PhP</title>

    <!-- For styling -->
    <style>
        table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
        }

        input[type="button"] {
            width: 100%;
            padding: 20px 40px;
            background-color: green;
            color: white;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
        }

        input[type="text"] {
            padding: 20px 30px;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            border: 2px solid black;
        }
    </style>

    <script>
        function dis(val){
            document.getElementById('result').value+=val;
        }
        function clr(){
            document.getElementById('result').value="";
        }

    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->

    <!-- Create table -->
    <table id="calcu" class="mt-5">
        <tr>
            <td colspan="3">
                <input type="text" id="result">
            </td>
            <td><input type="button" value="c" onclick="clr()"></td>
        </tr>

        <tr>
            <td><input type="button" name = "one" value="1" onclick="dis('1')"></td>
            <td><input type="button" name = "two" value="2" onclick="dis('2')"></td>
            <td><input type="button" name = "three" value="3" onclick="dis('3')"></td>
            <td><input type="button" name = "division" value="/" onclick="dis('/')"></td>
        </tr>
        <tr>
            <td><input type="button" name = "four" value="4" onclick="dis('4')"></td>
            <td><input type="button" name = "five" value="5" onclick="dis('5')"></td>
            <td><input type="button" name = "six" value="6" onclick="dis('6')"></td>
            <td><input type="button" name = "multiply" value="*" onclick="dis('*')"></td>
        </tr>
        <tr>
            <td><input type="button" name = "seven" value="7" onclick="dis('7')"></td>
            <td><input type="button" name = "eight" value="8" onclick="dis('8')"></td>
            <td><input type="button" name = "nine" value="9" onclick="dis('9')"></td>
            <td><input type="button" name = "minus" value="-" onclick="dis('-')"></td>
        </tr>
        <tr>
            <td><input type="button" name = "zero" value="0" onclick="dis('0')"></td>
            <td><input type="button" name = "point" value="." onclick="dis('.')"></td>
            <td><input type="button" name = "equal" value="="  onclick="document.getElementById('result').value=eval(document.getElementById('result').value)" ></td>
            <td><input type="button" name = "plus" value="+" onclick="dis('+')"></td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>