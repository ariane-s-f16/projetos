<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 
 

.container
{
width: 100vw;
height: 100vh;
background:rgb(62, 66, 71);
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;

}
.singup {
  color: rgb(4, 145, 62);
  text-transform: uppercase;
  letter-spacing: 12px;
  display: block;
  font-weight: bold;
  font-size: x-large;
  margin-top: 1.5em;
  Font-family: impact;
}

.card {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 650px;
  width: 500px;
  flex-direction: column;
  gap: 35px;
  border-radius: 15px;
  background: #e3e3e3;
  border-radius: 8px;
  margin-right: 40px;
}

.inputBox,
.inputBox1 {
  position: relative;
  width: 300px;
}

.inputBox input,
.inputBox1 input {
  width: 100%;
  padding: 20px;
  outline: none;
  border: none;
  color: #000;
  font-size: 1em;
  background: transparent;
  border-left: 2px solid #000;
  border-bottom: 2px solid #000;
  transition: 0.1s;
  border-bottom-left-radius: 8px;
}

.inputBox span,
.inputBox1 span {
  margin-top: 5px;
  position: absolute;
  left: 0;
  transform: translateY(-4px);
  margin-left: 10px;
  padding: 10px;
  pointer-events: none;
  font-size: 12px;
  color: #000;
  text-transform: uppercase;
  transition: 0.5s;
  letter-spacing: 3px;
  border-radius: 8px;
  
}

.inputBox input:valid~span,
.inputBox input:focus~span {
  transform: translateX(113px) translateY(-15px);
  font-size: 0.8em;
  padding: 5px 10px;
  background: #000;
  letter-spacing: 0.2em;
  color: #fff;
  border: 2px;
}

.inputBox1 input:valid~span,
.inputBox1 input:focus~span {
  transform: translateX(156px) translateY(-15px);
  font-size: 0.8em;
  padding: 5px 10px;
  background: #000;
  letter-spacing: 0.2em;
  color: #fff;
  border: 2px;
}

.inputBox input:valid,
.inputBox input:focus,
.inputBox1 input:valid,
.inputBox1 input:focus {
  border: 2px solid #000;
  border-radius: 8px;
}

.enter {
    
  height: 45px;
  width: 100px;
  border-radius: 5px;
  border: 2px solid #000;
  cursor: pointer;
  background-color: transparent;
  transition: 0.5s;
  text-transform: uppercase;
  font-size: 10px;
  letter-spacing: 2px;
  margin-bottom: 4em;
}

.enter:hover {
  background-color: rgb(4, 145, 62);
  color: white;
}
.span {
  text-decoration: none;
  color:rgb(51, 50, 50);
}

.span a {
  color: rgb(4, 145, 62);
}

    </style>
</head>
<body>

<div class="container">
        <div class="card">
            <a class="singup">Login</a>
            <div class="inputBox1">
                <input type="text" required="required">
                <span class="user">Email</span>
            </div>

            <div class="inputBox">
                <input type="text" required="required">
                <span>User</span>
            </div>

            <div class="inputBox">
                <input type="password" required="required">
                <span>Senha</span>
            </div>

            <button class="enter">Enter</button>
            <span class="span">Não tem uma conta? <a href="#">Cadastre-se</a></span>

        </div>
    </div>
   
    
</body>
</html>