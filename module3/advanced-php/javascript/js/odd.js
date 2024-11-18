function chk()
{
    var num=document.getElementById("number").value;
    if(num%2==0)
    {
     document.getElementById("demo").innerHTML="The number is even";  
    }
    else 
    {

        document.getElementById("demo").innerHTML="The number is odd";
    }
}