<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">




*{
    margin: 0;
    padding: 0;
    font-family: 'Rubik', sans-serif;
}

header{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(to left, #fff 85%, #c3f5ff 20%);
	color:#369;
}

.navsection
{
    width: 100%;
    height: 20vh;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-image: linear-gradient(to top, #fff 80%, #c3f5ff 20%);
}



    nav{
        width: 60%;
        display: flex;
        justify-content: space-around;
    } 

 nav a{
    text-decoration: none;
    text-transform: uppercase;
    color: #000;
    font-size: 17px;
    font-weight: 900;
}

/* nav a:first-child{
    color: #4458dc;
} 

 nav a:before{
    content: "";
    position: absolute;
    top: 70px;
    width:0%;
     height: 2px;
    border-bottom: 2px solid black ;
    transition: all 0.4s linear;
}

nav a:hover:before{
    width: 6%;
}   */



    .logo{
        width: 40%;
        color: #fff;
        background-image: linear-gradient(  #8d98e3 40%,#854fee 60%);
        padding-left: 100px;
        box-sizing: border-box;
    }

     .logo h1{
        text-transform: uppercase;
        font-size: 1.6rem;
        animation: lefttoright 2s linear infinite;
        animation-direction: alternate;
    }

    @keyframes lefttoright{
        from{padding-left: 40px;}
        to {
            padding-right: 40px;
        }
    }
	
	

main{
    height: 80vh;
    display: flex;
    justify-content: space-around;
    align-items: center;
}


.leftside{
    color: black;
    text-transform: uppercase;
}

.leftside h3{
    font-size: 30px;
    margin-bottom: 20px;
    position: relative;
}

.leftside h3:after{
    content:"" ;
    width: 200px;
    height: 3px;
    background: black;
    position: absolute;
    top: 43%;
    left: 24%;
}


.leftside h1{
margin-top: 20px;
font-size: 60px;
margin-bottom: 25px;
}

.leftside h2{
    margin-bottom: 35px;
    font-weight: 100;
    word-spacing: 4px;
}

.leftside .btn1,.btn2{
    text-decoration: none;
    font-weight: 900;
    text-align: center;
    cursor: pointer;
    text-transform: uppercase;
    display:inline-block;
    padding: 12px 25px;
    border: double 2px transparent;
    border-radius: 5px;
}


.leftside .btn1 ,.btn2 {
    margin-right: 50px;
    color: #fff;
    background-image: linear-gradient(to right,#4458dc 0%,#854fee 100%);
    box-shadow: 0 10px 30px rgba(118, 85, 225, .3);
    border: double 2px transparent;
}

/* .leftside .btn2{
  border: 2px solid #4458dc;
  color: #222;
  background-color: #fff;
  box-shadow: none;
} */

.leftside .btn1:hover{
    border: 2px solid #4458dc;
  color: #222;
  background-color: #fff;
  background-image: none;
 
}
.leftside .btn2:hover{
	border:2px solid #4458dc;
	background-image:none;
	color:#222;
}

button1{
    text-decoration: none;
    font-weight:500;
    text-align: center;
    cursor: pointer;
    text-transform: uppercase;
    display:inline-block;
    padding: 12px 22px;
    margin-left: 8px;
    margin-top: 1.1rem;
    color: #fff;
    background-image: linear-gradient(to right,#4458dc 0%,#854fee 100%);
    box-shadow: 0 10px 30px rgba(118, 85, 225, .3);
    border: double 2px transparent;
    border-radius: 5px;
    margin-bottom: 10px;
}

button1:hover{
    border: 2px solid #4458dc;
    color: #222;
    background-color: #fff;
    background-image: none;
}








</style>
</head>

<body>
</body>
</html>