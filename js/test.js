var x = "abce efg";
console.log(x);
var y = x.split(" ");
console.log(y);
console.log(y[1]);
console.log((128).toString(16));

var pi = Math.PI;
console.log(pi);
console.log(Math.pow(8,2));
console.log((Math.random() * 100).toFixed(0));

var d = new Date();
console.log(d.getDate() + " " + (Number(d.getMonth()) + 1) + " " + d.getYear());
console.log(d);
console.log(Number(d));
console.log(d.getDay());

var x = ["Bulldog", "Beagle", "Labrador"]; 
var y = new Array("Bulldog", "Beagle", "Labrador"); 

for(i of x)
    console.log(i);

console.log(x.join(" "));

console.log(x.push("German Shepard")); 
console.log(x.shift());
x.splice(0, 3, "Pug", "Boxer");
console.log(x.concat(y));
console.log(x.slice(0,2));

var x = [1,3,5,2,4,7,8,3,8,0,22,1,55,3,5,3];
console.log(x)
console.log(x.sort());
console.log(x.reverse());
console.log(x.sort(function(a, b){return 0.5 - Math.random()}));
