<!DOCTYPE html>
<html>
    <head>
        <title>Javascript Demo</title>
        <script type="text/javascript">
            function getMessage() {
                var amount = Math.round(Math.random() * 100000);
                var message = "You won $" + amount + "!\n" +
                    "To collect your winnings, send your credit card\n" +
                    "and bank details to oil-minister@phisher.com.";
                return(message);
            }
            
            function showWinnings1() {
                alert(getMessage());
            }
            
            function showWinnings2() {
                document.getElementById('show_msg').innerHTML = getMessage();
            }
            
            function display1(){
                alert("show somethin on pop up");
            }
            
            function display2(){
                document.getElementById('show_msg').innerHTML = "show something on particular element";
            }
            
            function display3(){
                document.writeln("show something on new blank page");
            }
            
            function display4(){
                console.log("show something in console area");
            }
            
            function displayArray(){
                var names = ['Andrew', 'Albert', 'Doni', 'Tya', 'Lisa', 'Apit']
                
                for(i in names){
                    console.log(names[i]);
                }
            }
            
            function someComplexFunc(valInput){
                var a, b, c = new Array();
                
                a = valInput;
                b = 12;
                
                if(a == b)
                    a = a + b;
                else
                    a = a * b;
                
                console.log(a);
                
                for(i=0; i < b; i++){
                    c[i] = a * (a-b+i);
                }
                
                console.log(c);
                
                for(i in c){
                    b += c[i];
                }
                
                document.getElementById('show_msg').innerHTML = b;
            }
            
        </script>
    </head>
    <body>
        <input type="button" value="1st Way" onclick="displayArray()" />
        <input type="button" value="2nd Way" onclick="someComplexFunc(7)" />
        <hr />
        <p id="show_msg"></p>
        <hr />
        <input type="button" value="1st Way" onclick="display1()" />
        <input type="button" value="2nd Way" onclick="display2()" />
        <input type="button" value="3rd Way" onclick="display3()" />
        <input type="button" value="4th Way" onclick="display4()" />
    </body>
</html>