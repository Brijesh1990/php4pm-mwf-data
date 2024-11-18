//  create a function for clear the result value 
function clr()
{
    document.getElementById("result").value="";
}
// create a function for input values in result by users
function getValue(val)
{
   document.getElementById("result").value+=val; 
}
// create a function for get power or square 
function sq()
{
    var num=document.getElementById("result").value;
    var result=Math.pow(num,2);
    document.getElementById("result").value=result;
}