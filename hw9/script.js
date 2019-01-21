let a = 11;

if (a > 10) {
  console.log("This number is more than 10");
} else {
  console.log("This number is less than 10");
}

let lang = "ru",
    arrRu = ["Октябрь", "Ноябрь", "Декабрь","Январь", "Февраль", "Март","Апрель", "Май", "Июнь","Июль", "Август", "Сентябрь"],
    arrEn = ["October", "November", "December","January", "February", "March","April", "May", "June","July", "August", "September"];

switch (lang) {
  case "ru":
    console.log(arrRu);
    break;
  case "en":
    console.log(arrEn);
    break;
  default:
    console.log("Error");
}

let arr = [2, 1, 0, 4, 6, 7, 13, 222, 5, 2.2], i;

for (i = 0; i < arr.length; i++) { 
  if ((arr[i] > 1) && !(arr[i] & 1)) {
    console.log(arr[i]);
  }
}

let j = 1;

while (j <= 15) {
  console.log(j);
  j++;
}

let b, c;

var calc = function(b, c) {
  console.log("Addition " + (b + c));
  console.log("Subtraction " + (b - c));
  console.log("Multiplication " + b * c);
  console.log("Division " + b / c);
};
