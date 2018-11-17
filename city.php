
<!DOCTYPE HTML>


2.<html>


3.        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">


4.        <head>


5.                <title> Country, State, City selector </title>


6.                <link rel="stylesheet" type="text/css" href="style.css">


7.                <script src="jquery.js"></script>


8.                <script src="country.js"></script>


9.        </head>


10.        <body>


11.                <div class="selector">


12.                        Options:<br /><br />


13.                        1) Type name and list of matches will appear<br />


14.                        2) Double click empty field and list of all possible matches will appear<br />


15.                        3) Single click empty field to make the list disappear again<br />


16.                        4) Use Arrow keys to navigate through list<br /><br />


17.                        Todo list:<br /><br />


18.                        <div class="country">


19.                                <label>Please enter your country:</label><br />


20.                                <input type="text" name="country" id="country" maxlength="52" autocomplete="off" />


21.                                <div class="dataFloat" id="dataCountry"></div>


22.                                <a href="#" id="delCountry" onclick="delCountry();">Remove</a>


23.                        </div>


24.                        <br /><br />


25.                        <div class="state">


26.                                <label>Please enter your state:</label><br />


27.                                <input type="text" name="state" id="state" maxlength="52" autocomplete="off" />


28.                                <div class="dataFloat" id="dataState"></div>


29.                                <a href="#" id="delState" onclick="delState();">Remove</a>


30.                        </div>


31.                        <br /><br />


32.                        <div class="city">


33.                                <label>Please enter your city:</label><br />


34.                                <input type="text" name="city" id="city" maxlength="52" autocomplete="off" />


35.                                <div class="dataFloat" id="dataCity"></div>


36.                                <a href="#" id="delCity" onclick="delCity();">Remove</a>


37.                        </div>


38.                        <div class="showData"></div>


39.                </div>


40.        </body>
</html>

