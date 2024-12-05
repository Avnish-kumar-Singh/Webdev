console.log("Heyyy This me Avnish Singh")
var a=7;
a=a+2;
var b=9;
var c="Avnish";
console.log(a+b+9);
console.log(typeof a, typeof b, typeof c );

const a1=7;
//a1=a1+5;   Here we cannot use this because it is constant so it can't be changed..
console.log(a1);

let d=10;
d=d+5;
console.log(d)

{
    let a=20;  // let is blocked scoped but var is globally scoped
    a=a+10;
    console.log(a)

    let d=14;
    console.log(d)
}

let x="Avnish";
let y=22;
let z=4.88;
const p=true;
let q=undefined;
let r=null;
console.log(x,y,z,p,q,r);
console.log(typeof x,typeof y,typeof z,typeof p,typeof q,typeof r);

//objects in javasripts is combination of key and value
let o={
    name:"Harry",
    "job role": 4500,
    "Is good":"true"
} 
console.log(o);
o.salary="30000"
console.log(o);