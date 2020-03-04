let array = [
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