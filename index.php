<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ttech innovation labs</title>
</head>
<body>
    <center>
    <div class="cont">
        <form class="form" method="POST" action="insert.php">
            <p id="heading">SIGN UP STUDENT</p>
            
            <div class="field">
              <input  placeholder="id" name="id" class="input-field" type="number">
            </div>
            
            <div class="field">
              <input placeholder="name" name="name" class="input-field" type="text">
            </div>

            <div class="field">
                <input placeholder="password" name="PASSWORD" class="input-field" type="password">
              </div>

              <div class="field">
                  <input placeholder="location" name="location" class="input-field" type="text">
                </div>
             <div class="btn">
            <button type="submit"> insert user</button>
             </div>   
        </form>    
    </div>
  </center>
        <style>

          a{
            text text-decoration: none;
            color: white;
          }
            .cont{
              width: 40%;
            }
            .form {
              display: flex;
              flex-direction: column;
              gap: 10px;
              padding-left: 2em;
              padding-right: 2em;
              padding-bottom: 0.4em;
              background-color: #171717;
              border-radius: 25px;
              transition: .4s ease-in-out;
            }
          
           .form:hover {
            transform: scale(1.05);
            border: 1px solid black;
          }

          #heading {
            margin: 2em;
            color: rgb(255, 255, 255);
            font-size: 1.2em;
            text-align: center;
          }

          .field {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5em;
            border-radius: 25px;
            padding: 0.6em;
            border: none;
            outline: none;
            color: white;
            background-color: #171717;
            box-shadow: inset 2px 5px 10px rgb(5, 5, 5);
          }

          .input-icon {
            height: 1.3em;
            width: 1.3em;
            fill: white;
          }

          .input-field {
            border: none;
            outline: none;
            width: 100%;
            color: #d3d3d3;
            background: none;
          }

          .form .btn {
            justify-content: center;
            flex-direction: row;
            display: flex;
            margin-top: 2.5em;
          }

          .button1 {
            padding: 0.5em;
            padding-left: 1.1em;
            padding-right: 1.1em;
            border-radius: 5px;
            margin-right: 0.5em;
            border: none;
            outline: none;
            transition: .4s ease-in-out;
            background-color: #252525;
            color: white;
          }
            
            .button1:hover {
              color: white;
              background-color: black;
            }
            
            .button2 {
              padding: 0.5em;
              padding-left: 2.3em;
              padding-right: 2.3em;
              border-radius: 5px;
              border: none;
              outline: none;
              transition: .4s ease-in-out;
              background-color: #252525;
              color: white;
            }
              
            .button2:hover {
              color: white;
              background-color: black;
          }
          
          .button3 {
            padding: 0.5em;
            border-radius: 5px;
            border: none;
            outline: none;
            transition: .4s ease-in-out;
            background-color: #252525;
            color: white;
            margin-bottom: 3em;
          }

          .button3:hover {
            color: white;
            background-color: blue;
          }

    </style>
</body>
</html>