1.  let array = ['a','b','c'];
    console.log(array);
-------------------------------------------
2.  let array = ['a','b','c'];
    console.log(array);
    console.log(array[0]);
    console.log(array[1]);
    console.log(array[2]);
-------------------------------------------
3.  let array = [`a`, `b`, `c`, `d`];
    console.log(array);
    console.log(`${array[0]} + ${array[1]}`);
    console.log(`${array[2]} + ${array[3]}`);
-------------------------------------------
4.  let array = [`2`, `5`, `3`, `9`];
    let multiplication = array[0] * array[1];
    let multiplication1 = array[2] * array[3];
    let result = multiplication + multiplication1;
    console.log(array);
    console.log(`${array[0]} * ${array[1]} = ${multiplication}`);
    console.log(`${array[2]} * ${array[3]} = ${multiplication1}`);
    console.log(`resultatas = ${result}`)

-------------------------------------------
5.  let array = [
    {a: "1", 
     b: "2", 
     c: "3",}
    ];
    console.log(array)
    console.log(`(${array[0].c})`);
    console.log(array[0].c)

-------------------------------------------
6.  let month_names = ["January", "February",     "March", 
    "April", "May", "June", "July", "August", "September", 
    "October", "November", "December"];

    let day_names = ["Sunday","Monday", "Tuesday", "Wednesday", 
    "Thursday", "Friday", "Saturday"];
    let myDate = new Date();
    myDate.setDate(myDate.getDate());
    let curr_date = myDate.getDate();
    let curr_month = myDate.getMonth();
    let curr_day  = myDate.getDay();
    document.write(day_names[curr_day] + "," + month_names[curr_month] + " " +curr_date);
-------------------------------------------
7.  let array = [[1, 2, 3], [4, 5, 6], [7,8,9]];
    console.log(array[1][0]);
-------------------------------------------
8.  let array = {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'};
    console.log(array.js[0]);
-------------------------------------------
9.  let array = {
    lt: ['Pirmadienis', 'Antradienis','Trečiadienis','Ketvirtadienis', 'Penktadienis', 'Šestadienis', 'Sekmadienis'],
    en: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
    };
    console.log(`LT = ${array.lt[0]}`);
    console.log(`EN = ${array.en[2]}`);
-------------------------------------------
10. let arr = [1, 2, 3];
    let arr1 = [4, 5, 6];
    
    let merge = arr.concat(arr1);
    console.log(arr);
    console.log(arr1);
    console.log(merge);
-------------------------------------------
11. let arr = [1, 2, 3];
    
    console.log(arr);
    console.log(arr.reverse());
-------------------------------------------
12. let arr = [1, 2, 3];
    arr.push(4, 5, 6);
    arr.unshift(-1, -2, -3);
    console.log(arr);
-------------------------------------------
13. let arr = ['html', 'css', 'js'];

    console.log(arr);
    console.log(arr[0]);
    console.log(arr[2]);
-------------------------------------------
14. let arr = [3,4,1,2,7];

    console.log(arr);
    console.log(arr.sort());
-------------------------------------------
15. let arr = [1,2,3,4,5];
    arr.pop();
    arr.pop();
    console.log(arr);
-------------------------------------------
16. let arr = [1,2,3,4,5];
    arr.splice(1, 2);
    console.log(arr);
-------------------------------------------
17. let i = 1;

    while(i <= 100){
        console.log(i);
        i++;
    }
-------------------------------------------
18. let i = 11;

    while(i <= 33){
        console.log(i);
        i++;
    }
-------------------------------------------
19.for (let i = 0; i <= 100; i++){
  if (i % 2 == 1);
  else console.log(i);
}
-------------------------------------------
20.let i = 1;

    while(i <= 100){
        console.log(i);
        i++;
    }
-------------------------------------------
21. let array = [1, 2, 3, 4, 5];

    console.log(array);
    document.write(array);
-------------------------------------------
22. let array = [1, 2, 3, 4, 5];

    console.log(array.reduce((a, b) => a + b, 0));
-------------------------------------------
23. let array = [
        {
        green: "Žalia",
        red: "Raudona",
        blue: "Mėlina"
        }
    ];

    array.forEach(res => {
        Object.entries(res).forEach(([key, value]) => {document.write(key + " : " + value + "<br>");
        })
    })
-------------------------------------------
24. let array = [
        {
        Mantas: 200,
        Paulius: 300,
        Mindaugas: 300
        }
    ];

    array.forEach(res => {
        Object.entries(res).forEach(([key, value]) => {document.write(key + " : " + value + "<br>");
        })
    })
-------------------------------------------