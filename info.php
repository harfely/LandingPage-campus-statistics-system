<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <?php
        //inisialisai curl untuk digunakan
        $curl = curl_init();
        //set URL
        curl_setopt($curl, CURLOPT_URL, "https://data.covid19.go.id/public/api/prov.json");
        //kembalikan nilai menjadi string
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //eksekusi curl dan masukan data ke dalam variabel output
        $output = curl_exec($curl);

        curl_close($curl);

        //simpan output ke dalam variabel data
        $data = json_decode($output, true);
    
    ?>
    <div class="container mt-4">
        <nav class="navbar navbar-light bg-light mb-4">
            <span class="navbar-brand mb-0 h1"> Grafik Corona</span>
        </nav>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- diagram batang akan kita tampilkan disini, untuk detail kodigannya ada di bagian bawah -->
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
    //mebuat chart
    var myChart2 = new Chart(
        //masukan chart ke element canvas dengan id myChart2
        document.getElementById('myChart2'), {
            //tipe chart yg digunakan adalah bar chart
            type: 'bar',
            data: {
                //data labels akan diganti dengan data api pada script berikutnya
                labels: [
                    <?php
                            //melakukan perulangan data provinsi
                            //data provinsi digunakan sebagai label
                            foreach($data['list_data'] as $provinsi){
                                echo '"'.$provinsi['key'].'",';
                            }

                        ?>
                ],
                datasets: [{
                    label: 'Jumlah Sebaran Corona Per-Provinsi',
                    //data akan diganti dengan data api pada script berikutnya
                    data: [
                        <?php
                                //melakukan looping data jumlah kasus tiap provinsinya
                                //data kasus digunakan sebagai bar atau batang nantinya
                                foreach($data['list_data'] as $kasus){
                                    echo '"'.$kasus['jumlah_kasus'].'",';
                                }
                            ?>
                    ],
                    //semua bar akan diwarnai dengan warna merah
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                    ],
                    hoverOffset: 4
                }]
            }
        }
    );
    </script>
</body>

</html>