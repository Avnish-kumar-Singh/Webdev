/*  Create a faulty calculator using javascript
This faulty calculator does following:
1.it takes two numbers as input from the user
2.it performs worong operations as folows:
+ ----> -
* ----> +
- ----> /
/ ----> ** 

It performs wrongs operations 10% of the times  

*/

let random=Math.random()
let a=prompt("Enter first number:")
let c=prompt("Enter Operation:")
let b=prompt("Enter second number:")

let obj={
    "+": "-",
    "*": "+",
    "-": "/",
    "/": "**",
}



if(random>0.1){

alert(`The result is ${eval(`${a} ${c} ${b}`)}`)

}

else{
   c=obj[c]
   alert(`The result is ${eval(`${a} ${c} ${b}`)}`)
}