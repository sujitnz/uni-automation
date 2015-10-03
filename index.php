<!DOCTYPE html>
<html>
<body>
<h1 style = "text-align:center">     Select  </h1>
<Body background="3.jpg">
<p style = "text-align:center"><button onclick="myFunction()">New Student</button> </p>
<p style = "text-align:center"><button onclick="myFunction1()">Show Student List</button></p>
<p style = "text-align:center"><button onclick="myFunction2()">Delete Student</button></p>
<p style = "text-align:center"><button onclick="myFunction3()">Search Student</button></p>
<p style = "text-align:center"><button onclick="myFunction4()">Course Add</button></p>
<p style = "text-align:center"><button onclick="myFunction5()">Advance student search</button></p>
<p style = "text-align:center"><button onclick="myFunction6()">Advance course search</button></p>
<script>
function myFunction() {
   var myWindow = window.open("add.html",'_self');
}
function myFunction1() {
    window.open("sujit.php", '_self');
}
function myFunction2() {
    window.open("deletephp.php", "_self");
}

function myFunction3() {
    window.open("index1.php", "_self");
}
function myFunction4() {
   var myWindow = window.open("cadd.html",'_self');
}

function myFunction5() {
   var myWindow = window.open("s.html",'_self');
}
function myFunction6() {
   var myWindow = window.open("ss.html",'_self');
}

</script>

</body>
</html>
