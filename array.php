<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>

<script>
    // Array dengan indeks nama dan umur
    var data = [
        { "nama": "John", "umur": 25 },
        { "nama": "Jane", "umur": 30 },
        { "nama": "Alice", "umur": 28 },
        { "nama": "Bob", "umur": 35 },
        { "nama": "Emily", "umur": 27 },
        { "nama": "Michael", "umur": 32 },
        { "nama": "Sara", "umur": 29 },
        { "nama": "David", "umur": 26 },
        { "nama": "Sophia", "umur": 31 },
        { "nama": "Daniel", "umur": 33 },
        { "nama": "Olivia", "umur": 34 },
        { "nama": "William", "umur": 36 },
        { "nama": "Emma", "umur": 28 },
        { "nama": "James", "umur": 29 },
        { "nama": "Ava", "umur": 30 }
    ];

    // Konversi array ke JSON
    var jsonData = JSON.stringify(data);

    // Tampilkan JSON
    console.log(jsonData);
</script>

</body>
</html>