var myVar;
function mainFunction()
{
    myVar=setTimeout("display()",1500);
}
function display()
{
    document.getElementById("loader").style="display:none";
    document.getElementById("main").style="display:block";
    
}