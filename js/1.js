
let person = {
    name: 'Paaku',
    age: 20
};
console.log(person);
person.age = 19;//dot notation
console.log(person);
let newPerson = Object.create(person); //creates a copy of the object passed as argument to create() method, and returns it.
person['name'] = 'Karthi';//bracket notation
console.log(person);
console.log(newPerson);